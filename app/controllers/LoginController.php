<?php

class LoginController extends BaseController {
	public function showLogin()
	{
		return View::make('user/login');
	}
}
