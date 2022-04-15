<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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


}
