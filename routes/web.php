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



Route::group(['middleware' => ['admin'],'namespace' => 'Admin', 'prefix' => '/admin'], function () {

    Route::get('/', 'TestController@index');

	
	/*---------------------------------------------------*/
	/* --------------- Start Cases Part ---------------- */
	
	Route::get('cases', 'CaseController@index');
	Route::get('cases/create', 'CaseController@create');
	Route::get('cases/{case}/show', 'CaseController@showcase'); // For Comments Part
	Route::post('cases', 'CaseController@store');
	Route::post('cases/{case}/edit', 'CaseController@edit');
	Route::post('cases/{case}/update', 'CaseController@update');
	Route::delete('cases/{case}/delete', 'CaseController@destroy');
	
	/* --------------- End Cases Part ----------------- */
	/*--------------------------------------------------*/

	/*----------------------------------------------------------*/
	/* --------------- Start Organization Part ---------------- */

	Route::get('org', 'OrganizationController@index');
	Route::get('org/create', 'OrganizationController@create');
	Route::post('org', 'OrganizationController@store');
	Route::post('org/{org}/edit', 'OrganizationController@edit');
	Route::post('org/{org}/update', 'OrganizationController@update');
	Route::delete('org/{org}/delete', 'OrganizationController@destroy');


	/* --------------- End Organization Part ----------------- */
	/*---------------------------------------------------------*/
 
});


Route::get('/home', 'HomeController@index')->name('home');

