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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/create-persona', 'PersonaController@create')->name('persona.create');
Route::post('/create-persona', 'PersonaController@store')->name('persona.store');
Route::get('/create-ingreso/{id}', 'IngresoController@create')->name('ingreso.create');
Route::post('/create-ingreso', 'IngresoController@store')->name('ingreso.store');
Route::get('/historial-ingreso/{id}', 'IngresoController@getHistorialIngreso')->name('ingreso.historial');
Route::get('/imprimir-ingreso/{id}', 'IngresoController@imprimir')->name('ingreso.imprimir');
Route::get('/imprimir-personas/', 'PersonaController@imprimir')->name('persona.imprimir');
Route::get('/imprimir-acta-persona/{id}', 'PersonaController@imprimiracta')->name('persona.imprimiracta');
Route::get('/edit-persona/{id}', 'PersonaController@edit')->name('persona.editar');
Route::post('/edit-persona/{id}', 'PersonaController@update')->name('persona.update');
Route::get('/comite-apoyo/', 'PersonaController@comiteapoyo')->name('persona.comite');
Route::get('/create-ingreso-apoyo/{id}', 'IngresoController@ingresoapoyo')->name('ingreso.apoyo');
Route::get('/imprimir-apoyo/{id}/{mes}', 'IngresoController@imprimirhistorialapoyo')->name('ingreso.apoyoimprimir');
Route::post('/store-ingreso', 'IngresoController@ingresoapoyostore')->name('ingreso.apoyostore');

