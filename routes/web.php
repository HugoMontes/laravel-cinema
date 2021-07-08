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

// Rutas Admin 
Route::group(['prefix'=>'admin'],function(){
    Route::get('/home','admin\HomeController@index')->name('admin.home');
    
    Route::resource('/user', 'admin\UserController');
    Route::get('user/{id}/destroy','admin\UserController@destroy')->name('user.destroy');
});


