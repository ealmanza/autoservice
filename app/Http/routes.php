<?php

use Autoservice\Http\Entities\County;

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

//Route::get('/', 'WelcomeController@index');

Route::get('/', function(){
    return County::all();
});

Route::get('home', 'HomeController@index');

/**
 * This Route Sum Many Numbers
 */

Route::group(['prefix'=>'operation'], function(){

    Route::get('/sum/{num1}/{num2}','OperationController@sum');

    Route::get('/subtraction/{num1}/{num2}','OperationController@subtraction');

    Route::get('/multiplication/{num1}/{num2}','OperationController@multiplication');

    Route::get('/division/{num1}/{num2}','OperationController@division');

});



Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
