<?php

namespace volteara\Http\Controllers;

use Illuminate\Http\Request;
use volteara\IPost;

class IPostController extends Controller
{
    public function index()
    {
        $posts = IPost::all();
                
        return view('posts.index', compact('posts'));
    }
}
