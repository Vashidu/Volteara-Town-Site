<?php

namespace volteara\Http\Controllers;

use Illuminate\Http\Request;
use volteara\Herald;

class HeraldController extends Controller
{
    public function index()
    {
        $heralds = Herald::all();
                
        return view('heralds.index', compact('heralds'));
    }
}
