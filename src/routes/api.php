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



Route::group( ['namespace'=>'generator\project\Http\Controllers'],function (){
    Route::post('register', 'UserController@register');
    Route::post('login', 'UserController@login');
    Route::get('profile', 'UserController@getAuthenticatedUser');
    Route::get('getUser','UserController@getUser');

});
