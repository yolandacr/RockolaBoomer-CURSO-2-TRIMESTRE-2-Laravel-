<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/cookies', function () {
    return view('web/cookies');
});

Route::get('/index', function () {
    return view('/index');
});


Route::get('/info', function () {
    return view('web/info');
});



Route::resource('usuarios', UsuarioController::class);
