<?php

use App\Http\Controllers\AuthController;
use App\Models\Kategori;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome', ['title' => 'Homepage']);
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



Route::get('/about', function () {
    return view('about', ['title' => 'About us']);
});

Route::get('/berita', function (){
    $posts = Post::searchFilter(request(['search', 'kategori', 'author']))->latest()->get();
        return view('berita', [
            'title' => 'Blog',
            'secondposts' => $posts->take(4),
            'mainposts' => $posts->skip(4)->take(3)
        ]);
});

Route::get('/berita/{post:slug}', function(Post $post) {
    return view('detailberita', [
        'title' => 'Single Post',
        'post' => $post
    ]);
});

Route::get('/authors/{user:username}', function(User $user) {
    return view('berita', [
        'title' => count($user->posts) . ' Berita by ' . $user->name,
        'mainposts' => $user->posts()->latest()->paginate(6),
        'secondposts' => collect()
    ]);
});

Route::get('/kategori/{kategori:slug}', function(Kategori $kategori) {
    return view('berita', [
        'title' => count($kategori->posts) . ' Kategori berita dari ' . $kategori->name,
        'mainposts' => $kategori->posts()->latest()->paginate(6),
        'secondposts' => collect()
    ]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});