<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('noticias',[App\Http\Controllers\NoticiaController::class,'index']);
Route::get('noticias/create', [App\Http\Controllers\NoticiaController::class, 'create']); 
Route::post('noticias', [App\Http\Controllers\NoticiaController::class, 'store']); 
Route::get('noticias/{noticia}/edit', [App\Http\Controllers\NoticiaController::class, 'edit']);
Route::put('noticias/{noticia}', [App\Http\Controllers\NoticiaController::class, 'update']); 
Route::delete('noticias/{noticia}', [App\Http\Controllers\NoticiaController::class, 'destroy']);