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
use App\Http\Controllers\Caminhoscontroller;
Route::get('/', [Caminhoscontroller::class , 'index']);
Route::post('/cadastramentos', [Caminhoscontroller::class ,'store']);
Route::get('criar', [Caminhoscontroller::class ,'criar']);
Route::get('ver/{id}', [Caminhoscontroller::class ,'ver']);
Route::delete('ver/{id}', [Caminhoscontroller::class ,'deletar']);
Route::get('edit/{id}', [Caminhoscontroller::class ,'editar']);
Route::put('update/{id}', [Caminhoscontroller::class ,'update']);