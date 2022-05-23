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

    /**
     * FUNNCION PARA  CREAR EL ARRAY DE LA PARTIDA
     */

    
    public function crearCancionesPartida(Request $request){
        session_start();

        $categoria=$request->categoria;

        
         $canciones= DB::table('canciones')
         ->where('categoria', $categoria)
         ->inRandomOrder()
         ->take(10)
         ->get();

         $arrayCancionesCategoria= $canciones;
      
         $_SESSION ['arrayGuardado[]'] = $arrayCancionesCategoria;
         $_SESSION ['track'] = 0;


          if($request->modo=="facil"){
             return redirect('facil');
            
         }else{
            return redirect('dificil');
          }

    }


    /**
     * FUNCION DEL JUEGO EN MODO DIFICIL
     */

    public function dificil(){

        session_start();

        $cancionesPartida = $_SESSION ['arrayGuardado[]'];
        $numero = $_SESSION ['track'];

        if($numero<10){

        $cancionActual= new Cancione;
        $cancionActual = $cancionesPartida[$numero];

        $_SESSION ['track']= (int)$numero+1;

        return view('screens/dificil',['cancionActual'=>$cancionActual]);

        }else{
            return view('screens/fin');
        }
    }
    
/**
 * FUNCION PARA EL JUEGO FÁCIL
 */
     public function facil(){
        session_start();

        $cancionesPartida = $_SESSION ['arrayGuardado[]'];
        $numero = $_SESSION ['track'];

        if($numero<10){

        $cancionActual= new Cancione;
        $cancionActual = $cancionesPartida[$numero];

        $_SESSION ['track']= (int)$numero+1;

        $opciones = DB::table('opciones')
        ->where('id_cancion', $cancionActual->id)
        ->inRandomOrder()
        ->get();

        return view('screens/facil',['cancionActual'=>$cancionActual],['opciones' => $opciones]);

        }else{
            return view('screens/fin');
        }
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
