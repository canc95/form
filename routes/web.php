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


Route::get('/', 'FormularioController@index')->name('formulario.index');

Route::post('/store', 'FormularioController@store')->name('formulario.store');

Route::post('/update/{id}', 'FormularioController@update')->name('formulario.update');

Route::get('/delete/{id}', 'FormularioController@delete')->name('formulario.delete');
