<?php

class AdminController extends BaseController {
	/**
	 * @return dashboard view of admins
	 */
	public function showDashboard()
	{
		return View::make('admin/dashboard');
	}

	/**
	 * @return menumanagement view of admins
	 */
	public function showMenuManagement(){
		return View::make('admin/menumanagement');
	}

	/**
	 * @return usermanagement view of admins
	 */
	public function showUserManagement(){
		return View::make('admin/usermanagement');
	}

	/**
	 * Logs the out of the application
	 * @return hello view of public website
	 */
	public function signOut(){
		Auth::logout();
		return View::make('hello');
	}

	/**
	 * importing an excel file of available menus
	 */
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

	/**
	 * @return the latest ordered menus for admin dashboard
	 */
	public function getLatestOrderedMenus(){
		if (isset($_GET["limit"])) {
			$limit = $_GET["limit"];
		} else {
			$limit = 10;
		}

		if (isset($_GET["offset"])) {
			$offset = $_GET["offset"];
		} else {
			$offset = 0;
		}

		if (isset($_GET["sort"])) {
			$sort = $_GET["sort"];
		} else {
			$sort = "";
		}

		if (isset($_GET["order"])) {
			$order = $_GET["order"];
		} else {
			$order = "asc";
		}

		$resultOrders = DB::table('orders')->get();

		try{
			for($i = 0; $i < count($resultOrders); $i++){
				$menu = Menu::find($resultOrders[$i]->menu_id);
				$resultOrders[$i]->menuDescription = $menu->menuDescription;
				$resultOrders[$i]->menuTitle = $menu->menuTitle;
				$resultOrders[$i]->menuDate = $menu->menuDate;
			}
		} catch (Exception $e){
			$blub = $e;
		}


//get the result size
		$count = sizeof($resultOrders);

//order the array
		if ($order != "asc") {
			$result = array_reverse($resultOrders);
		}

//get the subview of the array
		$result = array_slice($resultOrders, $offset, $limit);

		echo "{";
		echo '"total": ' . $count . ',';
		echo '"rows": ';
		echo json_encode($result);
		echo "}";
	}
}
