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
		$user = new User();
		return View::make('user/register', compact('user'));
	}

	public function registerUser(){

		$user = new User();
		$user->fill(Input::all());

		$user->save();
		return Redirect::to('/');
	}
}
