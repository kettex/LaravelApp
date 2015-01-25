<?php

class LoginController extends BaseController {
	/**
	 * @return login view of public website
	 */
	public function showLogin()
	{
		return View::make('user/login');
	}
}
