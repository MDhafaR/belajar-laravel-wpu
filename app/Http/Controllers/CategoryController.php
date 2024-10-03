<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    function index() {
        return view('categories',[
            'title'=>'categories',
            'categories'=>category::all()
        ]);
    }
    function show(category $category) {
        return view('category', [
            'title' => $category->name,
            'posts' => $category->posts,
        ]);
    }
}
