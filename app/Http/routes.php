<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('create', 'TestController@create');
Route::get('play', 'TestController@play');

Route::get('parallel_command_test', 'TestController@parallel_command_test');
Route::get('add_product/{product_id}', 'TestController@add_product');
Route::get('create_cart/{cart_id}', 'TestController@create_cart');

Route::get('user/create', 'UserController@create');