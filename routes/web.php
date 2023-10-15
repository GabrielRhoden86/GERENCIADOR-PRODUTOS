<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\ApiIngestionController;

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

Route::get('/template/email', [EmailController::class, 'index'])->middleware('auth');
Route::post('/controller-email', [EmailController::class, 'store'])->middleware('auth');

Route::delete('/produtos/{id}', [ProdutoController::class, 'destroy'])->middleware('auth');
Route::post('/produtos/cadastro-produto', [ProdutoController::class, 'store'])->middleware('auth');
Route::get('/produtos/cadastro-produto', [ProdutoController::class, 'create'])->middleware('auth');
Route::get('/produtos/editar-produto/{id}', [ProdutoController::class, 'edit'])->middleware('auth');
Route::put('/produtos/editar-produto/{id}', [ProdutoController::class, 'update'])->middleware('auth');

Route::get('/categorias', [CategoriaController::class, 'index'])->middleware('auth');
Route::delete('/categorias/{id}', [CategoriaController::class, 'destroy'])->middleware('auth');
Route::get('/categorias/cadastro-categoria', [CategoriaController::class, 'create'])->middleware('auth');
Route::post('/categorias/cadastro-categoria', [CategoriaController::class, 'store'])->middleware('auth');
Route::get('/categorias/editar-categoria/{id}', [CategoriaController::class, 'edit'])->middleware('auth');
Route::put('/categorias/editar-categoria/{id}', [CategoriaController::class, 'update'])->middleware('auth');

Route::get('/apiHome', [ApiController::class, 'index'])->middleware('auth');
Route::get('api-posts', [ApiIngestionController::class, 'apiIngestion'])->middleware('auth');
