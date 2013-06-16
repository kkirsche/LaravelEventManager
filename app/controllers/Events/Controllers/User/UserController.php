<?php

namespace Events\Controllers\User;

use \View, \BaseController, \Input, \Password, \Validator, \DB, \Hash, \Auth, \User, \Session, \Redirect;

class UserController extends BaseController
{

	public function getForgotPassword()
	{
		return View::make('forgotPassword');
	}

	public function postForgotPassword()
	{

		$credentials = array('email' => Input::get('email'));

		return Password::remind($credentials, function($message, $user)
		{
			$message->subject('Your Password Reminder');
		});
	}

	public function getRegisterUser()
	{
		return View::make('registerUser');
	}

	public function postRegisterUser()
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
	        if ($userModel->postRegisterUser($user))
        	{
		        if (Auth::attempt(array('username' => $user['username'], 'password' => $user['password']), true))
		        {
	    			User::createSession();
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
	    }
	    else
	    {
	        return View::make('registerUser');
	    }
	}

	public function postMyProfile()
	{
		$user = array(
	        'username' => Input::get('username'),
	        'displayName' => Input::get('displayName'),
	        'firstName' => Input::get('firstName'),
	        'lastName' => Input::get('lastName'),
	        'email' => Input::get('email'),
	        'website' => Input::get('website'),
	        'newPassword' => Input::get('newPassword'),
	        'confirmNewPassword' => Input::get('confirmNewPassword'),
	        'role' => Input::get('userRole')
	    );

	    $rules = array(
	        'email' => 'required|email',
	        'username' => 'required',
	        'displayName' => 'required',
	        'role' => 'required'
	    );

	    $v = Validator::make($user, $rules);
	    if ($v->passes())
	    {
	    	if(User::postMyProfile($user))
	    	{
		    	Session::flush();
		    	User::createSession();
	    		return Redirect::to('manager/profile');
	    	}
	    	else
	    	{
	    		//error?
	    	}
	    }
	    else
    	{
    		return View::make('/manager/profile');
    	}
	}
}