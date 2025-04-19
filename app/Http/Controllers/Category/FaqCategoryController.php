<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Models\Faq_category;
use Illuminate\Http\Request;

class FaqCategoryController extends Controller
{
    public function index()
    {
        // Pass the user data to the view
        return view('blog_post.post.viewCategory', [
            'categories' => Faq_category::all(),
        ]);
} 
}
