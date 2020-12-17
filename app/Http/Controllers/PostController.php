<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::publicado()->latest('id')->paginate(8);

        return view('posts.index', compact('posts'));
    }

    public function show(Post $post)
    {
        $similares = Post::publicado()
            ->where('category_id', $post->category_id)
            ->NoEste($post->id)
            ->latest('id')
            ->take(4)
            ->get();

        return view('posts.show', compact('post', 'similares'));
    }
}