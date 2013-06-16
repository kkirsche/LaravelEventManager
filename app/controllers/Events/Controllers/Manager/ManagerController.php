<?php

namespace Events\Controllers\Manager;

use \View, \BaseController, \Site, \Input;

class ManagerController extends BaseController
{
	public function __construct()
	{
		$this->beforeFilter('auth');
	}

	public function getManager($nav = null)
	{
		if ($nav == null)
        {
            return View::make('manager');
        }
        else
        {
            return View::make('manager/'.$nav);
        }
	}

    public function postSiteSettings()
    {
        $siteSettings = array(
            'siteTitle' => Input::get('siteTitle'),
            'siteAddress' => Input::get('siteAddress'),
            'adminEmail' => Input::get('adminEmail'),
            'openRegistrations' => Input::get('openRegistrations')
        );

        Site::postSiteSettings($siteSettings);

        return View::make('manager/settings');
    }
}