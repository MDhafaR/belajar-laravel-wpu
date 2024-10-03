<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Models\Blog;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        'title' => 'home'
    ]);
});
Route::get('/about', function () {
    return view('about', [
        'nama' => 'Muhammad Dhafa Ramadhani',
        'email' => 'dhafa@gmail.com',
        'title' => 'about'
    ]);
});
Route::get('/blog', [BlogController::class, 'index']);

Route::get('/post/{post:slug}',  [BlogController::class, 'show']);

Route::get('/category/{category:slug}',  [CategoryController::class, 'show']);

Route::get('/categories',  [CategoryController::class, 'index']);