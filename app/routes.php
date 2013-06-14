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
Route::get('/login', function()
{
    if (Auth::guest())
    {
        return View::make('login');
    }
    else
    {
        return Redirect::to('/manager');
    }
});

// Take user login
Route::post('/login', function()
{
    $user = array(
        'username' => Input::get('username'),
        'password' => Input::get('password')
    );

    if (Auth::attempt(array('username' => $user['username'], 'password' => $user['password']), true))
    {
        return Redirect::to('/manager');
    }
    else
    {
        return View::make('login');
    }
});

// Log user out and redirect them to the login page
Route::get('/logout', function()
{
    Auth::logout();
    return Redirect::to('login');
});

// Show user registration page
Route::get('/registerUser', function()
{
    return View::make('registerUser');
});

// Take user registration
Route::post('/registerUser', function()
{
    $user = array(
        'email' => Input::get('email'),
        'username' => Input::get('username'),
        'password' => Input::get('password')
    );

    $rules = array(
        'email' => 'required|unique:users|email',
        'username' => 'required|unique:users',
        'password' => 'required'
    );

    $v = Validator::make($user, $rules);

    if ( $v->passes() )
    {
        $user['hashedPassword'] = Hash::make($user['password']);

        $id = DB::table('users')->insertGetId(array(
            'email' => $user['email'],
            'username' => $user['username'],
            'password' => $user['hashedPassword']
        ));

        if (Auth::attempt(array('username' => $user['username'], 'password' => $user['password']), true))
        {
            return View::make('/manager');
        }
        else
        {
            return "There was a problem...";
        }
    }
    else
    {
        return View::make('registerUser');
    }
});

// This Route handles all of the Manager sections. It relies on the view being the same name as the URL
Route::get('/manager/{nav?}', array('before' => 'auth', function($nav = null)
{
        if ($nav == null)
        {
            return View::make('manager');
        }
        else
        {
            return View::make('manager/'.$nav);
        }
}));