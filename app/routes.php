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
Route::get('/', 'HomeController@showWelcome');

Route::get('about/index','AboutController@about');

Route::get('products/index', 'ProductsController@products');

Route::get('contact/index', 'ContactController@contact');

# Login/Register Routing
Route::get('login', 'LoginController@showLogin');

Route::get('register', 'RegisterController@showRegisterForm');

Route::post('register', 'RegisterController@registerUser');

# Admin Routing
Route::get('admin/dashboard', 'AdminController@showDashboard');

Route::get('admin/menumanagement', 'AdminController@showMenuManagement');

Route::get('admin/usermanagement', 'AdminController@showUserManagement');

Route::get('admin/signout', 'AdminController@signOut');

# Import Routing
Route::post('admin/menumangement/importExcel', 'AdminController@importExcel');

# User Routing
Route::get('user/orderoverview', 'UserController@showOrderOverview');

Route::get('user/menuoverview', 'UserController@showMenuOverview');

Route::get('user/profile', 'UserController@showProfile');

# Menu Routing
Route::post('menu/edit', 'MenuController@editMenu');