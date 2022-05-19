<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Cancione;
use App\Models\Partida;
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


    public function dificil($categoria){
        $arrayCanciones=[];
        $arrayCanciones= DB::table('canciones')
        ->where('categoria', $categoria)
        ->inRandomOrder()
        ->take(10)
        ->get();

        $cancionActual= new Cancione;
        $cancionActual = $arrayCanciones[0];

        $opciones = DB::table('opciones')
        ->where('id_cancion', $cancionActual->id)
        ->inRandomOrder()
        ->get();
        
        return view('screens/dificil',['cancionActual'=>$cancionActual]);
    }
    
/**
 * FUNCION PARA EL JUEGO FÁCIL
 */
     public function facil($categoria){
        $arrayCanciones=[];
        $arrayCanciones= DB::table('canciones')
        ->where('categoria', $categoria)
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


     public function fin(){
        return view('screens/fin');
     }


     public function grabar(Request $request){
        $partida = new Partida;
        $partida->nombre_usuario = $request->jugador;
        $partida->puntos= $request->puntos;
        $partida->save();

       return redirect('ranking');

     }

     

   
}
