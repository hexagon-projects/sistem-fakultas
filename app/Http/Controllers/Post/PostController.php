<?php

namespace App\Http\Controllers\Post;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function store(Request $request)
    {
    //   dd($request->all());
        $validate = $request->validate([
            'title'   => 'required|string|max:255',
            'resume'  => 'required',
            'content' => 'required',
            // 'publish' => 'required|string',
            'created_at' => 'required|date',
            'image'   => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'yt'      => 'nullable|string',
            'id_category' => 'required',
        ]);
        $validate['publish'] = $request->input('publish', 'yes');

       
        if($request->file('image')){
            $validate['image'] = $request->file('image')->store('post-image', 'public');
        }

      Post::create($validate);

        return redirect()->back()->with('success', 'Post berhasil dibuat!');
    }
}
