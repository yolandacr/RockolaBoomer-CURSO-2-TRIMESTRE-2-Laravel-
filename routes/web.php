<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\GameController;

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

Route::get('/', HomeController::class);
Route::get('/index', HomeController::class);

Route::get('cookies', [PageController::class,'cookies']);
Route::get('info', [PageController::class,'about']);
Route::get('ranking', [PageController::class,'ranking']);


Route::get('registro', [UsuarioController::class,'register']);
Route::post('registro', [UsuarioController::class,'store']);

Route::get('login', [UsuarioController::class,'login']);
Route::post('login', [UsuarioController::class,'authenticate']);

Route::get('modo', [GameController::class,'level']);
Route::get('categoria', [GameController::class,'categoria']);
Route::get('facil', [GameController::class,'facil']);



