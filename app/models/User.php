<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password');

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return boolean
	 */
	public function postRegisterUser($userCredentials)
	{
		$userCredentials['hashedPassword'] = Hash::make($userCredentials['password']);

	        if (DB::table('users')->insertGetId(array(
	            'email' => $userCredentials['email'],
	            'username' => $userCredentials['username'],
	            'password' => $userCredentials['hashedPassword']
	        )))
        	{
        		//Success
        		return true;
        	}
        	else
    		{
    			//Failure
    			return false;
    		}
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}

}