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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/about', [App\Http\Controllers\PagesController::class, 'about']);
Route::get('/', [App\Http\Controllers\PagesController::class, 'index']);

Route::resource('peliculas', '\App\Http\Controllers\PeliculasController');
Route::resource('actores', '\App\Http\Controllers\ActoresController');
Route::resource('directores', '\App\Http\Controllers\DirectoresController');
Route::resource('generos', '\App\Http\Controllers\GenerosController');