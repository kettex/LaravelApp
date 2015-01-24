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
		Auth::logout();
		return View::make('hello');
	}

	public function importExcel(){
		$file = Input::file('file');

		$results = Excel::load($file, function($reader){

		})->get();

		foreach($results as $menu){
			try{
				$newMenu = new Menu();
				$newMenu->menuDate = $menu->menudate;
				$newMenu->menuTitle = $menu->menutitle;
				$newMenu->menuDescription = $menu->menudescription;
				$newMenu->isActive = false;
				$newMenu->save();
			} catch (Exception $e){
				// ToDo logging
				continue;
			}

		}

		return $file;
	}
}
