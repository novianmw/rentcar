<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthorController extends Controller
{
    public function index()
    {
        return view('authors', [
            'title' => 'Authors',
            'authors' => User::all() // nama semua author
        ]);
    }

    public function show(User $author)
    {
        return view('testimonial', [
            'title' => "Post by Author : $author->firstName",
            'posts' => $author->posts->load('category', 'author'),
        ]);
    }
}
