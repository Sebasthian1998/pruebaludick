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

Route::get('/', function () {
    return view('welcome');
});
Route::post('pregunta1','UsuarioController@pregunta1');
Route::post('pregunta2','UsuarioController@pregunta2');
Route::post('pregunta3','UsuarioController@pregunta3');
Route::get('pregunta4','UsuarioController@pregunta4');