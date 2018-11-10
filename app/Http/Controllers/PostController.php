<?php

namespace volteara\Http\Controllers;

use Illuminate\Http\Request;
use volteara\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
                
        return view('posts.index', compact('posts'));
    }
}
