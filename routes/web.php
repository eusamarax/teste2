<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;


Route::get('/', function () {
return view('welcome');
});

//------------------------------------------PRODUTO--------------------------------------------
Route::get('/produto', [ProdutoController::class, 'index']);
Route::get('/produto/create', [ProdutoController::class, 'create']);
Route::get('/produto/{id}', [ProdutoController::class, 'show']);
Route::get('/produto/{id}/edit', [ProdutoController::class, 'edit']);
Route::get('/produto/{id}/destroy', [ProdutoController::class, 'destroy']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//------------------------------------------PRODUTO--------------------------------------------


//------------------------------------------CATEGORIA--------------------------------------------

Route::get('/categoria', [CategoriaController::class, 'index']);
Route::get('/Categoria/create', [CategoriaController::class, 'create']);
Route::get('/Categoria/{id}', [CategoriaController::class, 'show']);
Route::get('/Categoria/{id}/edit', [CategoriaController::class, 'edit']);
Route::get('/Categoria/{id}/destroy', [CategoriaController::class, 'destroy']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//------------------------------------------CATEGORIA--------------------------------------------



