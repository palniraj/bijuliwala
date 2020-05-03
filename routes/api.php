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

Route::get('contacts', 'Api\bijuliwalaController@index');
Route::get('contacts/{id}', 'Api\bijuliwalaController@contactId');
Route::put('contacts/{id}', 'Api\bijuliwalaController@update');
Route::delete('contacts/{id}', 'Api\bijuliwalaController@delete');
Route::post('send', 'Api\bijuliwalaController@store');


