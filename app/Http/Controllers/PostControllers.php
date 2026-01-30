<?php 

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function ambilBerita()
    {
        $posts = Post::all();

        return view('berita', [
            'title' => 'Blog',
            'mainposts' => $posts->take(3),
            'secondposts' => $posts->skip(3)
        ]);
    }
    
    public function detailBerita($slug) 
    {
    $post = Post::find($slug);
    return view('detailberita', [
        'title' => 'Single Post',
        'post' => $post
    ]);
    }
}