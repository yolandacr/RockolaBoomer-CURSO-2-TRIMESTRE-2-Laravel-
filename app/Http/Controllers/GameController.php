<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{
    public function level(){
        return view('screens/modo');
    }

    public function categoria(){
        return view('screens/categoria');
    }
}
