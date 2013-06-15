<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Show normal homepage
Route::get('/', function()
{
	return View::make('home');
});

// Show login page
Route::get('/login', 'LoginController@getLogin');

// Take user login
Route::post('/login', 'LoginController@postLogin');

// Log user out and redirect them to the login page
Route::get('/logout', 'LoginController@getLogout');

// Show user registration page
Route::get('/registerUser', 'UserController@getRegisterUser');

// Take user registration
Route::post('/registerUser', 'UserController@postRegisterUser');

// This Route handles all of the Manager sections. It relies on the view being the same name as the URL
Route::get('/manager/{nav?}', 'ManagerController@getManager');