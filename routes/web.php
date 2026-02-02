<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', ['title' => 'Homepage']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About us']);
});


Route::get('/berita', function (){
    $posts = Post::all();

        return view('berita', [
            'title' => 'Blog',
            'mainposts' => $posts->take(3),
            'secondposts' => $posts->skip(3)
        ]);
});

Route::get('/berita/{post:slug}', function(Post $post) {

    return view('detailberita', [
        'title' => 'Single Post',
        'post' => $post
    ]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
