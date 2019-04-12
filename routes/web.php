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



Route::group(['middleware' => ['admin'], 'prefix' => '/admin'], function () {
    Route::get('/', 'TestController@index');

	Route::get('cases', 'CaseController@index');
	Route::get('cases/create', 'CaseController@create');
	Route::post('cases', 'CaseController@store');

	Route::delete('cases/{case}/delete', 'CaseController@destroy');

});


Route::get('/home', 'HomeController@index')->name('home');

