<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Post;

Route::get('/', function () {
    return view('welcome', ['title' => 'Homepage']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About us']);
});

Route::get('/posts', function () {
    $posts = Post::all();
    return view('posts', 
    ['title' => 'Blog',
    'mainposts' => collect($posts)->take(3),
    'secondposts' => collect($posts)->skip(3)
    ]);
});

Route::get('/posts/{id}', function($id){

    $post = Post::find($id);

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
