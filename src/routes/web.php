<?php
/**
 * Created by PhpStorm.
 * User: jakeline
 * Date: 19/04/2019
 * Time: 22:29
 */




Route::group( ['namespace'=>'generator\project\Http\Controllers'],function (){

    Route::post('register', 'UserController@register');
    Route::post('login', 'UserController@login');
    Route::get('profile', 'UserController@getAuthenticatedUser');
    Route::get('getUser','UserController@getUser');


    Route::get('registrarCargo','CargoController@store');
    Route::get('getCargo','CargoController@show');



    Route::get('registrarModulo','ModuloController@store');
    Route::get('getModulo','ModuloController@show');


    Route::get('registrarCu','CuController@store');
    Route::get('getCu','CuController@show');

});


Route::get('project',function (){
   return view('project::welcome');
});