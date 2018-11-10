<?php

namespace volteara\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
        return view('title');
    }
    public function devlog() {
        $tasks = [
        '√ Create basic layout',
        '√ Create User panel',
        'Create post management between user auth and guest'
    ];
    
    return view('d', [
        'tasks' => $tasks
    ]);
    }
}
