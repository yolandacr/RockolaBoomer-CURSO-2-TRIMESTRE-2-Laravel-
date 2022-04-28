<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Cancion;

class GameController extends Controller
{
    public function level(){
        return view('screens/modo');
    }

    public function categoria(){
        return view('screens/categoria');
    }

    public function facil(){
      /*   $canciones = new Cancion();
        $canciones = Cancion::where('categoria',$categoria);
        return $canciones; */
        return view('screens/facil');
    }

    


       
        

       
    
}
