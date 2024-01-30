<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\View\View;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index', [
            'posts' => Post::latest()->paginate(5)
        ]);
    }

    public function show(Post $post): View
    {
        return view('posts.show', [
            'post' => $post
        ]);
    }
}
