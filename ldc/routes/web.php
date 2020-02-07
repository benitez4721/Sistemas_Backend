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
Route::resource('/maquinas', 'maquinasController');
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::resource('/salas', 'salasController');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/preparadores', 'PreparadorController@index');

Route::get('/maquinas/create/{id}', 'maquinasController@create');

Route::get('/salas/{id}/maquinas', 'maquinasController@index');


