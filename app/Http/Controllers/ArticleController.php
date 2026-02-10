<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Mews\Purifier\Facades\Purifier;

class ArticleController extends Controller
{
    public function index()
    {
        $title = 'Articles';
        $articles = Article::all();
        return view('admin.article.index', compact('title', 'articles'));
    }

    public function create()
    {
        $title = 'Create New Article';
        return view('admin.article.create', compact('title'));
    }

    public function store(Request $request) {
        $request->validate([
            'title' => 'required|max:255',
            'excerpt' => 'required|max:255',
            'content' => 'required',
            'image' => 'required|image|mimes:webp,jpg,png,jpeg|max:2048'
        ]);

        $imagePath = $request->file('image')->store('articles', 'public');

        Article::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'excerpt' => $request->excerpt,
            'content' => $request->content,
            'meta_keywords' => $request->meta_keywords,
            'image' => $imagePath,
            'user_id' => auth()->id()
        ]);

        return redirect()->route('admin.articles')->with('success', 'Artikel berhasil diterbitkan!');
    }

    public function edit(Article $article)
    {
        $title = 'Edit Article';

        return view('admin.article.edit', compact('title', 'article'));
    }

    public function update(Request $request, Article $article)
    {
        $request->validate([
            'title'         => 'required|string|max:255',
            'excerpt'       => 'nullable|string|max:500',
            'content'       => 'required|string',
            'image'         => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'meta_keywords' => 'nullable|string|max:255',
        ]);

        // Update slug jika title berubah
        if ($article->title !== $request->title) {
            $slug = Str::slug($request->title);

            if (Article::where('slug', $slug)->where('id', '!=', $article->id)->exists()) {
                $slug .= '-' . time();
            }
        } else {
            $slug = $article->slug;
        }

        $content = Purifier::clean($request->content);

        $imagePath = $article->image;

        if ($request->hasFile('image')) {
            // Hapus image lama
            if ($article->image && Storage::disk('public')->exists($article->image)) {
                Storage::disk('public')->delete($article->image);
            }

            $imagePath = $request->file('image')
                ->store('articles', 'public');
        }

        $article->update([
            'title'         => $request->title,
            'slug'          => $slug,
            'excerpt'       => $request->excerpt,
            'content'       => $content,
            'image'         => $imagePath,
            'meta_keywords' => $request->meta_keywords,
            // user_id biasanya tidak diubah saat edit
        ]);

        return redirect()->route('admin.articles')
            ->with('success', 'Article updated successfully');
    }
}
