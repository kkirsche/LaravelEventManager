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
Route::get('/', 'Events\Controllers\Home\HomeController@getHome');

// Show login page
Route::get('/login', 'Events\Controllers\Login\LoginController@getLogin');

// Take user login
Route::post('/login', 'Events\Controllers\Login\LoginController@postLogin');

// Log user out and redirect them to the login page
Route::get('/logout', 'Events\Controllers\Login\LoginController@getLogout');

// Show user registration page
Route::get('/registerUser', 'Events\Controllers\User\UserController@getRegisterUser');

// Take user registration
Route::post('/registerUser', 'Events\Controllers\User\UserController@postRegisterUser');

// Show forgotten password page
Route::get('/forgotPassword', 'Events\Controllers\User\UserController@getForgotPassword');

// Take forgotten password page
Route::post('/forgotPassword', 'Events\Controllers\User\UserController@postForgotPassword');

// This Route handles all of the Manager sections. It relies on the view being the same name as the URL
Route::get('/manager/{nav?}', 'Events\Controllers\Manager\ManagerController@getManager');

// Take update profile
Route::post('/manager/profile', 'Events\Controllers\User\UserController@postMyProfile');

// Take update profile
Route::post('/manager/settings', 'Events\Controllers\Manager\ManagerController@postSiteSettings');