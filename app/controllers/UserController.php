<?php

class UserController extends BaseController
{

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
	}
}