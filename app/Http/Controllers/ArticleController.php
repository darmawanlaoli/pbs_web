<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

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
}
