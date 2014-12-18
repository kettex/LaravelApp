<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

# Public Website Routing
Route::get('/', function()
{
	return View::make('hello');
});

Route::get('about/index', function(){
	return View::make('about');
});

Route::get('products/index', function(){
	return View::make('products');
});

Route::get('contact/index', function(){
	return View::make('contact');
});

# Login/Register Routing
Route::get('login', function(){
	return View::make('user/login');
});

Route::get('register', function(){
	return View::make('user/register');
});

# Admin Routing
Route::get('admin/dashboard', function(){
	return View::make('admin/dashboard');
});

Route::get('admin/menumanagement', function(){
	return View::make('admin/menumanagement');
});

Route::get('admin/usermanagement', function(){
	return View::make('admin/usermanagement');
});

Route::get('admin/signout', function(){
	return View::make('hello');
});

# User Routing
Route::get('user/menuoverview', function(){
	return View::make('user/menuoverview');
});

Route::get('user/orderoverview', function(){
	return View::make('user/orderoverview');
});

Route::get('user/profile', function(){
	return View::make('user/profile');
});


