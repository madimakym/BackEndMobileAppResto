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


// Route::get('/peoples', 'PeoplesController@index');
// Route::post("/peoples", "PeoplesController@store");
// Route::get('/peoples/{id}', 'PeoplesController@show');
// Route::delete('/peoples/{id}', 'PeoplesController@destroy');
// Route::put('/peoples/{id}', 'PeoplesController@update');


Route::get('dejeuner', 'ApiDejeunerController@index');


Route::post('login', 'PassportController@login');
Route::post('register', 'PassportController@register');
 
Route::middleware('auth:api')->group(function () {
    Route::get('user', 'PassportController@details');
 
    Route::resource('products', 'ProductController');
});