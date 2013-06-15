<?php

namespace Events\Controllers\Login;

use \Auth, \BaseController, \View, \Redirect, \Input, \Session;

class LoginController extends BaseController
{

	public function getLogin()
	{
		if (Auth::guest())
	    {
	        return View::make('login');
	    }
	    else
	    {
	        return Redirect::to('/manager');
	    }
	}

	public function postLogin()
	{
		$user = array(
	        'username' => Input::get('username'),
	        'password' => Input::get('password')
	    );

	    if (Auth::attempt(array('username' => $user['username'], 'password' => $user['password']), true))
	    {
	        return Redirect::intended('/manager');
	    }
	    else
	    {
	    	Session::put('error', 'Yes.');
	    	Session::put('reason', 'Username or password were incorrect.');
	        return View::make('login');
	    }
	}

	public function getLogout()
	{
		Auth::logout();
		Session::flush();
    	return Redirect::to('/login');
	}

}