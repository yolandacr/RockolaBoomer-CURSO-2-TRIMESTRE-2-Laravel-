<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GameController extends Controller
{
    public function level(){
        return view('screens/modo');
    }

    public function categoria(){
        return view('screens/categoria');
    }

    public function facil(){
        return view('screens/facil');
    }

    /**
     * incompleta, preguntar a alejandra
     */
    public function arrayCanciones(){
        $canciones = DB::table('canciones')->where('categoria', 'años80')->get();
       
        

       
    }
}
