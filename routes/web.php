<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JuegosController;

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

Route::get('/',[JuegosController::class, 'mostrarJuegosLanding'])->name('landing');

Route::get('/registerLink', function () {
    return view('auth/register');
})->name('registerLink');

Route::get('/loginPage', function () {
    return view('auth/login');
})->name('loginFoto');

Route::get('/añadirJuegos', function () {
    return view('añadirJuegos');
})->name('añadirJuegos');

Route::post('/relacionarJuegos/{id}',[JuegosController::class, 'reservar'])->name('relacionarJuegos');

Route::delete('/eliminarUsuarios/{id}',[JuegosController::class, 'eliminarUsuarios'])->name('eliminarUsuarios');

Route::post('/añadirJuegosPost',[JuegosController::class, 'create'])->name('añadirJuegosPost');

Route::get('/mostrarJuegos',[JuegosController::class, 'mostrarJuegos'])->name('mostrarJuegos');

Route::get('/modificarDescripcion/{id}',[JuegosController::class, 'modificarDescripcion'])->name('modificarDescripcion');

Route::post('/realizarUpdate/{idJuego}',[JuegosController::class, 'realizarUpdate'])->name('realizarUpdate');

Route::get('/mostrarJuegosModificar',[JuegosController::class, 'mostrarJuegosModificar'])->name('mostrarJuegosModificar');

Route::get('/reservasPanel',[JuegosController::class, 'reservasPanel'])->name('reservasPanel');

Route::get('/adminPanel',[JuegosController::class, 'adminPanel'])->name('adminPanel');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logoutLink');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



