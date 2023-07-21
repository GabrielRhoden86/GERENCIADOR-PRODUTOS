<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\CategoriaController;

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
    return view('welcome');
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/produtos', [ProdutoController::class, 'index'])->middleware('auth');
Route::delete('/produtos/{id}', [ProdutoController::class, 'destroy']);
Route::post('/cadastro-produtos', [ProdutoController::class, 'store']);
Route::get('/cadastro-produtos', [ProdutoController::class, 'create'])->middleware('auth');
Route::get('/editar-produto/{id}', [ProdutoController::class, 'edit'])->middleware('auth');
Route::put('/editar-produto/{id}', [ProdutoController::class, 'update'])->middleware('auth');

Route::get('/categoria', [CategoriaController::class, 'index'])->middleware('auth');
Route::delete('/categoria/{id}', [CategoriaController::class, 'destroy']);
Route::get('/cadastro-categoria', [CategoriaController::class, 'create'])->middleware('auth');
Route::post('/cadastro-categoria', [CategoriaController::class, 'store'])->middleware('auth');
Route::get('/editar-categoria/{id}', [CategoriaController::class, 'edit'])->middleware('auth');
Route::put('/editar-categoria/{id}', [CategoriaController::class, 'update'])->middleware('auth');
