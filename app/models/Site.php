<?php

class Site extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	//protected $table = 'site';

	/**
	 * Get a user by their username
	 *
	 * @param array
	 */
	public static function postSiteSettings($siteSettings)
	{
		Config::set('site.title', $siteSettings['siteTitle']);
		Config::set('site.address', $siteSettings['siteAddress']);
		Config::set('admin.email', $siteSettings['adminEmail']);
		Config::set('open.registrations', $siteSettings['openRegistrations']);
	}
}