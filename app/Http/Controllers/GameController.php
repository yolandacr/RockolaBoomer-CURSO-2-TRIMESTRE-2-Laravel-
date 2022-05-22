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

    
    public function crearCancionesPartida(Request $request){
        session_start();

        $categoria=$request->categoria;

         $arrayCancionesCategoria=[];
         $objeto= DB::table('canciones')
         ->where('categoria', $categoria)
         ->inRandomOrder()
         ->take(10)
         ->get();

         $arrayCancionesCategoria= (array)$objeto;
      
         $_SESSION ['arrayGuardado'] = $arrayCancionesCategoria;


          if($request->modo=="facil"){
             return redirect('facil');
            
         }else{
            return redirect('dificil');
          }

    }


    public function dificil(){

        session_start();

        $cancionesPartida =$_SESSION ['arrayGuardado'];

        $random = rand(0, 9);
        $cancionActual= new Cancione;
        $cancionActual = $cancionesPartida[$random];

        unset($cancionesPartida[0]);
        $_SESSION ['arrayGuardado']= $cancionesPartida;
        
    return view('screens/dificil',['cancionActual'=>$cancionActual]);
    }
    
/**
 * FUNCION PARA EL JUEGO FÁCIL
 */
     public function facil(){
        session_start();

      
        $cancionesPartida = $_SESSION ['arrayGuardado'];
    
        $cancionActual= new Cancione;
        //$cancionActual = $cancionesPartida[1];

        //unset($cancionesPartida[0]);
        //array_values($cancionesPartida); 
        //$_SESSION ['arrayGuardado']= $cancionesPartida;


        // $opciones = DB::table('opciones')
        // ->where('id_cancion', $cancionActual->id)
        // ->inRandomOrder()
        // ->get();
        

        // DEVUELVE OBJETO Y NECESITO UN ARRAY
          return gettype($cancionesPartida);
        //return view('screens/facil',['cancionActual'=>$cancionActual],['opciones' => $opciones]);
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
