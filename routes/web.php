<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about', ['name' => 'Muhammad Indrawan Ismail']);
});
Route::get('/blog', function () {
    return view('blog', ['judul' => 'Larangan nyontek'], ['isi' => 'jangan diperlaam mahasiswa tidak bisa mengerjakn kasi cepat aja']);
});
Route::get('/contact', function () {
    return view('contact');
});