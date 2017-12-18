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




Route::post('peliculas/create', 'PeliculasController@store');
Route::put('peliculas/{id}/edit', 'PeliculasController@putEdit');
Route::resource('peliculas', 'PeliculasController');
	
Auth::routes();

Route::get('logout', 'Auth\LoginController@logout');

Route::get('/', 'HomeController@index')->name('home');

