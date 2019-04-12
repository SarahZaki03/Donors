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

Route::get('/admin', function() { return view('adminTemplate');  });

/*--------------------------------------------------*/
/* --------------- Start Case Part ---------------- */

Route::get('/admin/cases', 'CaseController@index');
Route::get('/admin/cases/create', 'CaseController@create');
Route::post('/admin/cases', 'CaseController@store');
Route::delete('/admin/cases/{case}/delete', 'CaseController@destroy');

/* --------------- End Case Part ----------------- */
/*-------------------------------------------------*/


/*----------------------------------------------------------*/
/* --------------- Start Organization Part ---------------- */

Route::get('/admin/org', 'OrganizationController@index');
Route::get('/admin/org/create', 'OrganizationController@create');
Route::post('/admin/org', 'OrganizationController@store');
Route::post('/admin/org/{org}/edit', 'OrganizationController@edit');
Route::post('/admin/org/{org}/update', 'OrganizationController@update');
Route::delete('/admin/org/{org}/delete', 'OrganizationController@destroy');


/* --------------- End Organization Part ----------------- */
/*---------------------------------------------------------*/

Route::get('/admin/test', 'TestController@index');
























