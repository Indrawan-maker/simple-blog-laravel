<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog', function () {
    return view('blog', ['judul' => 'Larangan nyontek'], ['isi' => 'jangan diperlaam mahasiswa tidak bisa mengerjakn kasi cepat aja']);
});
