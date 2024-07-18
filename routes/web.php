<?php

use App\Http\Controllers\CategoriasController;
use App\Models\Categorias;
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

Route::get('/', function () {
    // return view('welcome');
    return view('index');
});

// Route::resource('categorias', CategoriasController::class);
Route::get('/', [CategoriasController::class, 'index']);

// Route::resource('/', [CategoriasController::class, 'layout']);

