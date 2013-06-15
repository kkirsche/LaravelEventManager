<?php

namespace Events\Controllers\Home;

use \View, \BaseController;

class HomeController extends BaseController {

	public function getHome()
	{
		return View::make('home');
	}

}