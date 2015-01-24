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
			$user->isAdmin = false;
			$email = $user->email;
			$regId = GUID::generate();
			$user->registrationId = $regId;
			// save the user to database
			$user->save();

			// Send mail for activating
			Mail::send('emails.auth.activate', array('msg' => 'Please click the following link to activate your user account!', 'link' => 'http://localhost:8000/activateAccount?registrationId='.$regId), function($message){
				// ToDo Development purposes only!!
				$message->to('alexander@imendo.at')->subject('Activate account');
			});
		} catch(Exception $e){
			return Redirect::to('error');
		}

		return Redirect::to('login');
	}

	// method which is called, when user clicks the link in the e-mail for activating his account
	public function setUserActive(){
		if (!isset($_GET["registrationId"])) {
			return Redirect::to('error');
		}

		// set the specified user 'active' in database
		$regId = $_GET["registrationId"];
		DB::table('users')->where('registrationId', $regId)->update(array('isActive' => 1));

		return Redirect::to('successfulRegistration');
	}
}
