<?php

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
		$user = array
		(
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
	}

	public function getLogout()
	{
		Auth::logout();
    	return Redirect::to('login');
	}

}