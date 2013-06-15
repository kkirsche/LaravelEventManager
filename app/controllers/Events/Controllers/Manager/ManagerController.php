<?php

namespace Events\Controllers\Manager;

use \View, \BaseController;

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
}