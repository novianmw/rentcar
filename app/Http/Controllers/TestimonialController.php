<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class TestimonialController extends Controller
{
    public function index() 
    {
        return view('testimonial', [
            'title' => 'All posts',
            'posts' => Post::with(['author','category'])->latest()->get() // eager loading(with) untuk query database lebih ringan
        ]);
    }
    // public function show(Post $post) // disebut binding
    // {
    //     return view('post', [
    //         "title" => "single post",
    //         "post" => $post
    //     ]);
    // }
}
