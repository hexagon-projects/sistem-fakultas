<?php

namespace App\Http\Controllers\Post;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{

    public function index()
    {
  

        // Pass the user data to the view
        return view('blog_post.post.viewPost', [
            'posts' => Post::with('category')->get()
            
        ]);
}
    public function store(Request $request)
    {
    //   dd($request->all());
        $validate = $request->validate([
            'title'   => 'required|string|max:255',
            'resume'  => 'required',
            'content' => 'required',
            'publish' => 'required|date',
            'status' => 'required|string',
            'image'   => 'nullable|image|mimes:jpg,jpeg,png,webp|max:1048',
            'yt'      => 'nullable|string',
            'id_category' => 'required',
        ]);

       
        if($request->file('image')){
            $validate['image'] = $request->file('image')->store('post-image', 'public');
        }

      Post::create($validate);

      return redirect()->route('posts.index')->with('success', 'Post berhasil dibuat!');

    }

    public function edit($id)
    {
        $post = Post::findOrFail($id); 

        return view('blog_post.post.editPost', compact('post')); 
    }

    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);

        $validated = $request->validate([
            'title'   => 'required|string|max:255',
            'resume'  => 'required',
            'content' => 'required',
            'publish' => 'required|date',
            'status' => 'required|string',
            'image'   => 'nullable|image|mimes:jpg,jpeg,png,webp|max:1048',
            'yt'      => 'nullable|string',
            'id_category' => 'required',
        ]);

        if ($request->file('image')) {
            $validated['image'] = $request->file('image')->store('post-image', 'public');
        }

        $post->update($validated);

        return redirect()->route('posts.index', $post->id)->with('success', 'Post berhasil diperbarui!');
    }
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
    
        // Cek apakah gambar ada dan hapus dari storage
        if ($post->image && Storage::disk('public')->exists($post->image)) {
            Storage::disk('public')->delete($post->image);
        }
    
        $post->delete();
    
        return redirect()->back()->with('success', 'Post berhasil dihapus.');
    }
}
