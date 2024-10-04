<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    function index() {
        return view('author', [
            'title'=>'author',
            'authors'=>User::all()
        ]);
    }

    function show(User $user) {
        return view('detail_author', 
        [
            'author'=>$user->name,
            'posts'=> $user->posts
        ]
    );
    }
}
