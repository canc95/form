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

// =========================TEST

Route::get('/test/laravel', 'TestController@index')->name('test.index');

Route::get('/test/laravel/create', 'TestController@create')->name('test.create');

Route::post('/test/store', 'TestController@store')->name('test.store');

Route::get('/test/laravel/edit/{id}', 'TestController@edit')->name('test.edit');

Route::post('/test/update/{id}', 'TestController@update')->name('test.update');

Route::get('/test/delete/{id}', 'TestController@delete')->name('test.delete');

Route::get('/test/show/{id}', 'TestController@show')->name('test.show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
