<?php

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

Route::get ("/", "micontrolador@index");
Route::get ("/index", "micontrolador@index");
Route::get ("/crear", "micontrolador@crear");
Route::get ("/articulos", "micontrolador@articulos");
Route::get ("/mostrar", "micontrolador@mostrar");
Route::get ("/contacto", "micontrolador@contacto");


