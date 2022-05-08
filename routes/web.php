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

Route::get('/', HomeController::class)->name('home');
Route::get('/index', HomeController::class)->name('index');

Route::get('cookies', [PageController::class,'cookies'])->name('pages.cookies');
Route::get('info', [PageController::class,'about'])->name('pages.info');
Route::get('ranking', [PageController::class,'ranking'])->name('pages.ranking');


Route::get('registro', [UsuarioController::class,'register'])->name('users.register');
Route::post('registro', [UsuarioController::class,'store'])->name('users.store');

Route::get('login', [UsuarioController::class,'login'])->name('users.login');
Route::post('login', [UsuarioController::class,'authenticate'])->name('users.authenticate');

Route::get('modo', [GameController::class,'level'])->name('screens.modo');
Route::get('categoria', [GameController::class,'categoria'])->name('screens.categoria');
Route::get('categoriaDificil', [GameController::class,'categoriaDficil'])->name('screens.categoriaDificil');

Route::get('facil', [GameController::class,'facil'])->name('screens.facil');
Route::post('facil', [GameController::class,'validar'])->name('facil.validar');

Route::get('dificil', [GameController::class,'dificil'])->name('screens.dificil');


