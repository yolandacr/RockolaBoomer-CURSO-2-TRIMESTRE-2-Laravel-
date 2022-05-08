<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Cancione;
use App\Models\opcione;
use Illuminate\Support\Arr;

class GameController extends Controller
{
    public function level(){
        return view('screens/modo');
    }

    public function categoria(){
        return view('screens/categoria');
    }

    public function categoriaDficil(){
        return view('screens/categoriaDificil');
    }


    public function dificil(){
        $result = $_GET['categoria'];
        $arrayCanciones=[];

        $arrayCanciones= DB::table('canciones')
        ->where('categoria', 'años80')
        ->inRandomOrder()
        ->take(10)
        ->get();

        $cancionActual= new Cancione;
        $cancionActual = $arrayCanciones[0];

        return view('screens/dificil',['cancionActual'=>$cancionActual]);
    }
    

    public function facil(){
        $result = $_GET['categoria'];
        $arrayCanciones=[];
        $opciones=[];
    
        $arrayCanciones= DB::table('canciones')
        ->where('categoria', 'años80')
        ->inRandomOrder()
        ->take(10)
        ->get();

        
        $cancionActual= new Cancione;
        $cancionActual = $arrayCanciones[0];

        $opciones = DB::table('opciones')
        ->where('id_cancion', $cancionActual->id)
        ->inRandomOrder()
        ->get();

        

        return view('screens/facil',['cancionActual'=>$cancionActual],['opciones' => $opciones]);
    }

    public function validar(Request $request){
        var_dump($request);

        return $request;

    }

    


       
        

       
    
}
