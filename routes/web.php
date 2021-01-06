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
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', function () {
    return view('welcome');
});


// 管理者側のコントローラー
Route::group(['prefix' => 'admin','middleware' => 'auth'], function() {
    Route::get('select/create', 'Admin\SelectController@add');
    Route::post('select/create', 'Admin\SelectController@create');
    Route::get('select/index', 'Admin\SelectController@index');
    Route::get('select/edit/{id}', 'Admin\SelectController@edit'); 
    Route::post('select/edit', 'Admin\SelectController@update');
    Route::delete('select/delete/{id}', 'Admin\SelectController@delete');
    Route::get('select/info', 'Admin\SelectController@info');
   
});


// 回答者側のコントローラー
Route::group(['prefix' => 'answer','middleware' => 'auth'], function() {
    Route::get('index', 'AnswerController@index');
});
