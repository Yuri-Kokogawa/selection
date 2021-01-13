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


// 投稿者側のコントローラー
Route::group(['prefix' => 'contributor','middleware' => 'auth'], function() {
    Route::get('create', 'Contributor\ContributorsController@add');
    Route::post('create', 'Contributor\ContributorsController@create');
    Route::get('index', 'Contributor\ContributorsController@index');
    Route::get('edit/{id}', 'Contributor\ContributorsController@edit'); 
    Route::post('edit', 'Contributor\ContributorsController@update');
    Route::delete('delete/{id}', 'Contributor\ContributorsController@delete');
    Route::get('info', 'Contributor\ContributorsController@info');
    Route::get('info_edit', 'Contributor\ContributorsController@info_edit');
});


// 回答者側のコントローラー
Route::group(['prefix' => 'answer','middleware' => 'auth'], function() {
    Route::get('index', 'AnswerController@index');
    Route::get('create', 'AnswerController@create');
    
});
