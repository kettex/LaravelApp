<?php

class RegisterController extends BaseController {

	public function __construct()
	{
		// Always run csrf protection before the request when posting
		$this->beforeFilter('csrf', array('on' => 'post'));

		// Here's something that happens after the request
		$this->afterFilter(function() {
			// something
		});
	}

	public function showRegisterForm()
	{
		return View::make('user/register');
	}

	public function registerUser(){
		return View::make('hello');
	}
}
