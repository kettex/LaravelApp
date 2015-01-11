<?php

class RegisterController extends BaseController {
	public function showRegisterForm()
	{
		return View::make('user/register');
	}
}
