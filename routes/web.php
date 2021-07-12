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

// Rutas Admin 
Route::group(['prefix'=>'admin', 'middleware'=>'auth'],function(){
    Route::get('/home','admin\HomeController@index')->name('admin.home');

    Route::resource('/user', 'admin\UserController');
    Route::get('user/{id}/destroy','admin\UserController@destroy')->name('user.destroy');

    Route::resource('/genero', 'admin\GeneroController'); 
    Route::get('genero/{id}/destroy', 'admin\GeneroController@destroy')->name('genero.destroy');

    Route::resource('director', 'admin\DirectorController');
    Route::get('director/{id}/destroy','admin\DirectorController@destroy')->name('director.destroy');

    Route::resource('pelicula', 'admin\PeliculaController'); 
    Route::get('pelicula/{id}/destroy', 'admin\PeliculaController@destroy')->name('pelicula.destroy');
});




