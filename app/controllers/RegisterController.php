<?php

class RegisterController extends BaseController {

	public function __construct()
	{
		// Always run csrf protection before the request when posting
		$this->beforeFilter('csrf', array('on' => 'post'));
	}

	public function showRegisterForm()
	{
		$user = new User();

		// fill register form with values of empty user
		return View::make('user/register', compact('user'));
	}

	public function registerUser(){

		$user = new User();

		try{
			// fill the user with values of the form
			$user->fill(Input::except('repeatPassword'));
			$user->password = Hash::make($user->password);
			$user->isActive = false;
			// ToDo Send mail notification!!
			// save the user to database
			$user->save();
		} catch(Exception $e){
			// ToDo: Something went wrong --> logging, ErrorHandling!!
		}

		return Redirect::to('/');
	}
}
