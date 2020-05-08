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

use App\Http\Controllers\bijuliwalaController;

Route::get('/', 'bijuliwalaController@home');
Route::get('/home', 'bijuliwalaController@home');

Route::get('/phonenumberlist', 'bijuliwalaController@PhoneNumberList');
Route::post('/PhoneNumber', 'bijuliwalaController@PhoneNumberData');

Route::get('/page2', 'bijuliwalaController@page2');

Route::get('/contactform', 'ContactController@contactform');
Route::get('/contactlist', 'ContactController@contactList');
Route::post('/contactFormData', 'ContactController@contactFormData');


Route::get('/service', 'ServiceController@index');
Route::get('/service/{id}', 'ServiceController@show');
Route::get('/service/create', 'ServiceController@create');
Route::post('/ServiceData', 'ServiceController@store');

Route::get('/service/subservice', 'SubServiceController@index');
Route::get('/service/subservice/create', 'SubServiceController@create');
Route::post('/SubServiceData', 'SubServiceController@store');
