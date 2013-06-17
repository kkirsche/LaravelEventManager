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
	 * Put user information in the session for use later
	 */
	public static function createSession()
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

		$user = new User;
		$user->email 		= $userCredentials['email'];
	    $user->username 	= $userCredentials['username'];
	    $user->displayName 	= $userCredentials['username'];
	    $user->password 	= $userCredentials['hashedPassword'];
	    $user->created_at	= date('Y-m-d H:i:s');
		$user->updated_at	= date('Y-m-d H:i:s');
    	if ($user->save())
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

		$user = User::find(Session::get('userID'));
		$user->username 	= $updatedProfileInformation['username'];
		$user->displayName	= $updatedProfileInformation['displayName'];
		$user->firstName	= $updatedProfileInformation['firstName'];
		$user->lastName		= $updatedProfileInformation['lastName'];
		$user->email 		= $updatedProfileInformation['email'];
		$user->website		= $updatedProfileInformation['website'];
		$user->role 		= $updatedProfileInformation['role'];
		$user->password 	= (isset($updatedProfileInformation['hashedNewPassword'])) ? $updatedProfileInformation['hashedNewPassword'] : $user->password;
		$user->updated_at	= date('Y-m-d H:i:s');

		if ($user->save())
		{
			return true;
		}
		else
		{
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

	/**
	 * Get a user by their username
	 *
	 * @param string $username
	 * @return string
	 */
	public function getByUsername($username)
	{
		return User::where('username', '=', $username)->firstOrFail();
	}
}