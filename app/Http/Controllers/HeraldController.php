<?php

namespace volteara\Http\Controllers;

use volteara\Herald;

class HeraldController extends Controller
{
    public function index()
    {
        $heralds = Herald::all();

        return view('heralds.index', compact('heralds'));
    }

    public function show(Herald $herald)
    {
        //return compact('herald');
        return view('heralds.show', compact('herald'));
    }
}
