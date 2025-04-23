<?php

namespace App\Http\Controllers\Category;

use App\Models\Category;
use App\Models\Faq_category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    public function index()
    {
        // Pass the user data to the view
        return view('blog_post.category.viewCategory', [
            'categories' => Category::all(),
        ]);
    } 

    public function store(Request $request)
    {
    //   dd($request->all());
        $validate = $request->validate([
            'name'   => 'required|string|max:255',
            'image'   => 'nullable|image|mimes:jpg,jpeg,png,webp|max:1048',
          
        ]);

       
        if($request->file('image')){
            $validate['image'] = $request->file('image')->store('category-image', 'public');
        }

      Category::create($validate);

      return redirect()->route('category.index')->with('success', 'Category berhasil dibuat!');

    }

    public function edit($id)
    {
        $category = Category::findOrFail($id); 

        return view('blog_post.category.editCategory', compact('category')); 
    }

    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);

        $validated = $request->validate([
            'name'   => 'required|string|max:255',
            'image'   => 'nullable|image|mimes:jpg,jpeg,png,webp|max:1048',
        ]);

        if ($request->file('image')) {
            $validated['image'] = $request->file('image')->store('category-image', 'public');
        }

        $category->update($validated);

        return redirect()->route('category.index', $category->id)->with('success', 'Category berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
    
        // Cek apakah gambar ada dan hapus dari storage
        if ($category->image && Storage::disk('public')->exists($category->image)) {
            Storage::disk('public')->delete($category->image);
        }
    
        $category->delete();
    
        return redirect()->back()->with('success', 'Category berhasil dihapus.');
    }

}
