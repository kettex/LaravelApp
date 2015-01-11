<?php

class UserController extends BaseController {
	public function showOrderOverview()
	{
		return View::make('user/orderoverview');
	}

	public function showMenuOverView(){
		return View::make('user/menuoverview');
	}

	public function showProfile(){
		return View::make('user/profile');
	}
}
