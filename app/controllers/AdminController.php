<?php

class AdminController extends BaseController {
	public function showDashboard()
	{
		return View::make('admin/dashboard');
	}

	public function showMenuManagement(){
		return View::make('admin/menumanagement');
	}

	public function showUserManagement(){
		return View::make('admin/usermanagement');
	}

	public function signOut(){
		return View::make('hello');
	}
}
