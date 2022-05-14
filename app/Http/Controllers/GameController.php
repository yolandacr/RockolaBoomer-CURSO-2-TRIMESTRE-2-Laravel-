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
        $categoria = $_GET['categoria'];
        $arrayCanciones=[];

        $arrayCanciones= DB::table('canciones')
        ->where('categoria', $categoria)
        ->inRandomOrder()
        ->take(10)
        ->get();

        $cancionActual= new Cancione;
        $cancionActual = $arrayCanciones[0];

        return view('screens/dificil',['cancionActual'=>$cancionActual]);
    }
    

    public function facil(){
        session_start();

        $categoria = $_GET['categoria'];
        $_SESSION['categoria'] = $categoria;
        $arrayCanciones=[];
        
        $opciones=[];
    
        $arrayCanciones= DB::table('canciones')
        ->where('categoria', $categoria)
        ->inRandomOrder()
        ->take(10)
        ->get();

        $_SESSION['canciones'] = $arrayCanciones;

        
        $cancionActual= new Cancione;
        $cancionActual = $arrayCanciones[0];

        $opciones = DB::table('opciones')
        ->where('id_cancion', $cancionActual->id)
        ->inRandomOrder()
        ->get();

        

        

        return view('screens/facil',['cancionActual'=>$cancionActual],['opciones' => $opciones]);
    }
    

   public function validar(){
        $categoria = $_SESSION['categoria'];
        $arrayCanciones=$_SESSION['canciones'];
        unset($arrayCanciones[0]);

        $cancionActual= new Cancione;
        $cancionActual = $arrayCanciones[0];

        $opciones = DB::table('opciones')
        ->where('id_cancion', $cancionActual->id)
        ->inRandomOrder()
        ->get();
        
    

    return view('screens/facil',['cancionActual'=>$cancionActual],['opciones' => $opciones]);

}}
