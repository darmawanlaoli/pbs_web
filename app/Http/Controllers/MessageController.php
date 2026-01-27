<?php

namespace App\Http\Controllers;

use App\Models\Message;

class MessageController extends Controller
{
    public function index()
    {
        $messages = Message::orderBy('id', 'desc')->get();
        return view('admin.message.index', compact('messages'));
    }

    public function create()
    {
        return view('admin.image_gallery.create');
    }

    public function store()
    {
        // Validation
        $validatedData = request()->validate([
            'unit' => 'required|string|max:255',
            'description' => 'required|string',
            'link' => 'required|url',
            'album' => 'required|string|max:255',
            'date' => 'required|date',
        ]);

        // Create new gallery entry
        Gallery::create($validatedData);

        return redirect()->route('admin.image')->with('success', 'Image added to gallery successfully.');
    }

    public function destroy(Gallery $gallery)
    {
        $gallery->delete();
        return redirect()->route('admin.image')->with('success', 'Image removed from gallery successfully.');
    }
}
