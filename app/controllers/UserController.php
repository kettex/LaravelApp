<?php

class UserController extends BaseController {
	public function showOrderOverview()
	{
		return View::make('user/orderoverview');
	}

	public function showMenuOverView(){
		$menus = DB::table('menus')->orderBy('menuDate', 'asc')->where('menuDate', '>', time())->get();
		return View::make('user/menuoverview')->with('menus', $menus);
	}

	public function showProfile(){
		return View::make('user/profile');
	}

	// Server side search, paging and sorting for user table in admin/usermanagement
	public function getUsers(){
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

		if(isset($_GET["search"])) {
			// string concatination for 'like' keyword in mysql query
			$search = '%'.$_GET["search"].'%';
		} else {
			$search = "";
		}

		if($search == "") {
			$result = DB::table('users')->get();
		} else {
			$result = DB::table('users')->where(function($query) use ($search) {
				$query->where('city', 'like', $search)
					->orwhere('company', 'like', $search)
					->orwhere('deliveryAddress', 'like', $search)
					->orwhere('email', 'like', $search)
					->orwhere('username', 'like', $search)
					->orwhere('zip', 'like', $search);
			})->get();
		}

//get the result size
		$count = sizeof($result);

//order the array
		if ($order != "asc") {
			$result = array_reverse($result);
		}

//get the subview of the array
		$result = array_slice($result, $offset, $limit);

		echo "{";
		echo '"total": ' . $count . ',';
		echo '"rows": ';
		echo json_encode($result);
		echo "}";
	}

	public function authUser(){
		if(!isset($_POST['username']) || !isset($_POST['password'])){
			// ToDo error site
			return;
		}

		$username = $_POST['username'];
		$password = $_POST['password'];

		// Authenticate user und remember him --> set second parameter to 'true'
		if(Auth::attempt(array('username' => $username, 'password' => $password, 'isActive' => 1), true)){
			if(Auth::user()->isAdmin){
				return Redirect::intended('admin/dashboard');
			}
			else{
				return Redirect::intended('user/orderoverview');
			}
		}

		// ToDo error site
		return;
	}
}
