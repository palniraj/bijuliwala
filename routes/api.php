<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register', 'Api\AuthController@register');
Route::post('/login', 'Api\AuthController@login');

Route::get('contacts', 'Api\ContactController@index');
Route::get('contacts/{id}', 'Api\ContactController@contactId');
Route::put('contacts/{id}', 'Api\ContactController@update');
Route::delete('contacts/{id}', 'Api\ContactController@delete');
Route::post('contacts/create', 'Api\ContactController@store');


Route::get('phonenumber', 'Api\bijuliwalaController@PhoneNumber');
Route::get('phonenumber/{id}', 'Api\bijuliwalaController@PhoneId');
Route::post('phonenumber/create', 'Api\bijuliwalaController@PhoneStore');
Route::delete('phonenumber/{id}', 'Api\bijuliwalaController@PhoneDelete');



Route::get('service', 'Api\ServiceController@index');
Route::get('service/{id}', 'Api\ServiceController@show');
Route::post('service/create', 'Api\ServiceController@store');
Route::put('service/{id}', 'Api\ServiceController@update');
Route::delete('service/{id}', 'Api\ServiceController@delete');


Route::get('subservice', 'Api\SubServiceController@index');
Route::get('subservice/{id}', 'Api\SubServiceController@show');
Route::post('subservice/create', 'Api\SubServiceController@store');
Route::put('subservice/{id}', 'Api\SubServiceController@update');
Route::delete('subservice/{id}', 'Api\SubServiceController@delete');


Route::get('detail', 'Api\DetailController@index');
Route::post('detail/create', 'Api\DetailController@store');
Route::put('detail/{id}', 'Api\DetailController@update');
Route::delete('detail/{id}', 'Api\DetailController@delete');


