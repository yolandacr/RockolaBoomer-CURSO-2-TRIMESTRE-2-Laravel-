<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partida;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{

    /**
     * metodo que retorna la vista de + info
     */
    public function about(){
        return view('/pages/info');
    }

    /**
     * metodo que etorna la vista de cookies
     */
    public function cookies(){
        return view('/pages/cookies');
    }

    /**
     * metodo para retornar la vista ranking
     */

     public function ranking(){
        $partidas= Partida::all();

        //ordenamos los datos de la base de dato por el numer de puntos de la serie en orden descendente
        $partidas= DB::table('partidas')
        ->orderBy('puntos','desc')
        ->take(5)
        ->get();

        return view('pages/ranking',['partidas'=>$partidas]);
     }
     
   

}
