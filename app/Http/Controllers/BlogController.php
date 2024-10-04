<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    function index() {
        return view('posts', [
            'title' => 'blog',
            'posts' => Blog::all(),
        ]);
    }

    function show(Blog $post) {
        return view(
            'detail_post',
            [
                'post' => $post,
            ]
        );
    }
}
