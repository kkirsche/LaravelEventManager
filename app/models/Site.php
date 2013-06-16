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
		Config::set('app.url', $siteSettings['siteAddress']);
		Config::set('mail.from.address', $siteSettings['adminEmail']);
		Config::set('site.openRegistrations', $siteSettings['openRegistrations']);
	}
}