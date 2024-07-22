<?php

use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\CursosController;
use App\Models\Categorias;
use App\Models\Cursos;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SiteController;

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

Route::get('/', [HomeController::class, 'index']);

// Route::get('/', [CategoriasController::class, 'index'], [[CursosController::class, 'index']]);

Route::get('/produto/{slug}', [SiteController::class, 'details'])->name('cursos.details');




