<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    function index() {
        return view('posts', [
            'title' => 'blog',
            'posts' => Blog::all(),
        ]);
    }

    function show($slug) {
        return view(
            'detail_post',
            [
                'post' => Blog::find($slug)
            ]
        );
    }
}
