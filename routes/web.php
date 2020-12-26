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


Route::group(['prefix' => 'admin','middleware' => 'auth'], function() {
    Route::get('select/create', 'Admin\SelectController@add');
    Route::post('select/create', 'Admin\SelectController@create');
    Route::get('select', 'Admin\SelectController@index');
    Route::get('select/edit', 'Admin\SelectController@edit'); 
    Route::post('select/edit', 'Admin\SelectController@update');
});
