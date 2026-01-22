<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', ['title' => 'Homepage']);
});

Route::get('/about', function () {
    return view('blog', ['title' => 'About us']);
});

Route::get('/blog', function () {
    return view('about', ['title' => 'Blog']);
});


Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
