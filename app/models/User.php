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
	 * Put user information int he session for use later
	 */
	public function createSession()
	{
		Session::put('userID', Auth::user()->id);
		Session::put('username', Auth::user()->username);
    	Session::put('email', Auth::user()->email);
    	Session::put('role', Auth::user()->role);
    	Session::put('displayName', Auth::user()->displayName);
    	Session::put('firstName', Auth::user()->firstName);
    	Session::put('lastName', Auth::user()->lastName);
    	Session::put('website', Auth::user()->website);
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
	            'displayName' => $userCredentials['username'],
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
	 * Update the user's profile from the /manager/profile page
	 */
	public function postMyProfile($updatedProfileInformation)
	{
		if (isset($updatedProfileInformation['newPassword']) && isset($updatedProfileInformation['confirmNewPassword']))
		{
			if ($updatedProfileInformation['newPassword'] === $updatedProfileInformation['confirmNewPassword'])
			{
				$updatedProfileInformation['hashedNewPassword'] = Hash::make($updatedProfileInformation['newPassword']);
			}
		}
		if (isset($updatedProfileInformation['hashedNewPassword']))
		{
			DB::table('users')
				->where('id', Session::get('userID'))
				->update(array(
					'username' => $updatedProfileInformation['username'],
			        'displayName' => $updatedProfileInformation['displayName'],
			        'firstName' => $updatedProfileInformation['firstName'],
			        'lastName' => $updatedProfileInformation['lastName'],
			        'email' => $updatedProfileInformation['email'],
			        'website' => $updatedProfileInformation['website'],
			        'role' => $updatedProfileInformation['role'],
			        'password' => $updatedProfileInformation['hashedNewPassword']
			));
		}
		else
		{
			DB::table('users')
				->where('id', Session::get('userID'))
				->update(array(
					'username' => $updatedProfileInformation['username'],
			        'displayName' => $updatedProfileInformation['displayName'],
			        'firstName' => $updatedProfileInformation['firstName'],
			        'lastName' => $updatedProfileInformation['lastName'],
			        'email' => $updatedProfileInformation['email'],
			        'website' => $updatedProfileInformation['website'],
			        'role' => $updatedProfileInformation['role']
				));
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