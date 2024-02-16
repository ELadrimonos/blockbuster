<?php

use App\Http\Controllers\PeliculaController;
use App\Models\Usuario;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::resource('peliculas', PeliculaController::class);

Route::get('/', function () {
    $usuarios = Usuario::get();
    return view('login', compact('usuarios'));
})->name('inicio');

