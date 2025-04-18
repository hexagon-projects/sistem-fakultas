<?php

namespace App\Http\Controllers\Post;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function store(Request $request)
    {
       
        $request->validate([
            'title'   => 'required|string|max:255',
            'resume'  => 'required',
            'content' => 'required',
            'publish' => 'required|string',
            'tanggal' => 'required|date',
            'image'   => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'yt'      => 'nullable|string',
            'id_category' => 'required',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('uploads/posts', 'public');
        }

        Post::create([
            'title'      => $request->title,
            'resume'     => $request->resume,
            'content'    => $request->content,
            'publish'    => 'yes',
            'created_at' => $request->tanggal,
            'image'      => $imagePath,
            'yt'         => $request->yt,
            'id_category' => $request->id_category, // default category, atau sesuaikan
        ]);

        return redirect()->back()->with('success', 'Post berhasil dibuat!');
    }
}
