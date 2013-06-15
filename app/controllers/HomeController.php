<?php

namespace Event\Controller;

class HomeController extends BaseController {

	public function showWelcome()
	{
		return View::make('hello');
	}

}