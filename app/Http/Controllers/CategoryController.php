<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        return view('categories', [
            'title' => 'Post Categories',
            'categories' => Category::select()->get()
        ]);
    }

    public function show(Category $category)
    {
        return view('testimonial', [
            'title' => "Post by Category : $category->name",
            'posts' => $category->posts->load('author', 'category'),
        ]);
    }
}
