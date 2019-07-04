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

// Disabled Auth Backend
//Route::group(['middleware' => 'auth:api'], function() {
    Route::get('keys/sorted/{sort}', 'ProductKeyController@getKeysSorted');
    Route::resource('keys', 'ProductKeyController');
    Route::post('logout', 'Auth\LoginController@logout');
//});
Route::post('login', 'Auth\LoginController@login');
Route::post('register', 'Auth\RegisterController@register');


Route::fallback(function () {
    return response()->json(['message' => 'Not Found!'], 404);
})->name('fallback');