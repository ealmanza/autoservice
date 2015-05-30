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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

/**
 * This Route Sum Many Numbers
 */
Route::get('/sum','OperationController@sum');

Route::get('/subtraction','OperationController@subtraction');

Route::get('/multiplication','OperationController@multiplication');

Route::get('/divicion','OperationController@divicion');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
