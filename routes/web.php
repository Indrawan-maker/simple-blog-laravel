<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;

Route::get('/', function () {
    return view('welcome', ['title' => 'Homepage']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About us']);
});

Route::get('/berita', [PostController::class, 'ambilBerita']);

Route::get('/berita/{slug}', [PostController::class, 'detailBerita']);

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
