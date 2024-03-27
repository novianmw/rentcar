<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Faq;


class FaqController extends Controller
{

    public function index()
    {
        return view('faq', [
            'title' => 'FAQ | Broom.id',
            'categories' => Category::select()->get(),
            'faqs' => Faq::limit(3)->faqSearch(request(['search']))->get() 
        ]);
    }
    
    public function show(Category $category)
    {
        return view('faq', [
            'title' => 'FAQ | Broom.id',
            'categories' => Category::select()->get(),
            'faqs' => $category->faqs
        ]);
    }
}
