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
        $categoria = $_GET['categoria'];
        $arrayCanciones=[];
        $opciones=[];
    
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

   /*  public function validar(){
        echo "<script>alert('entra')</script>";
        $respuesta = $_POST['respuesta'];
        $correcta = $_POST['correcta'];
        $suma = 50;
    

        if($respuesta==$correcta){
            echo "<script>alert('has acertado')</script>";
        }else{
            echo "<script>alert('respuesta erronea')</script>";
        }

        return view('screens/facil',$puntos);

    } */

    


       
        

       
    
}
