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
Route::get('activateAccount', 'RegisterController@setUserActive');
Route::post('authenticate', 'UserController@authUser');

Route::post('register', 'RegisterController@registerUser');

# Sign out route mustn't be protected
Route::get('admin/signout', 'AdminController@signOut');

# Filter for admin users
Route::filter('admin', function() {
    if(!Auth::user()->isAdmin){
        return Redirect::to('/');
    }
});

# Filter for normal users
Route::filter('user', function(){
    if(Auth::user()->isAdmin != 0){
        return Redirect::to('/');
    }
});

# Protected Routes (only for authenticated admin users)
Route::group(['before' => 'auth|admin'], function(){
    # Admin Routing
    Route::get('admin/dashboard', 'AdminController@showDashboard');
    Route::get('admin/menumanagement', 'AdminController@showMenuManagement');
    Route::get('admin/usermanagement', 'AdminController@showUserManagement');

    # Import Routing
    Route::post('admin/menumangement/importExcel', 'AdminController@importExcel');

    # Menu Routing
    Route::post('menu/edit', 'MenuController@editMenu');
    Route::get('menu/getonlinemenus', 'MenuController@getOnlineMenus');
    Route::get('menu/getofflinemenus', 'MenuController@getOfflineMenus');
    Route::post('admin/menu/setOnline', 'MenuController@setMenusOnline');
    Route::get('user/getUsers', 'UserController@getUsers');
});

# Protected Routes (only for authenticated normal users)
Route::group(['before' => 'auth|user'], function(){
    # User Routing
    Route::get('user/orderoverview', 'UserController@showOrderOverview');
    Route::get('user/menuoverview', 'UserController@showMenuOverview');
    Route::get('user/profile', 'UserController@showProfile');
    Route::get('user/getLatestOrderedMenus', 'UserController@getLatestOrderedMenus');
    Route::post('user/profile', 'UserController@updateProfile');
});

# Error route
Route::get('error', function(){
    return View::make('error');
});

# SuccesfulRegistration route
Route::get('successfulRegistration', function(){
    return View::make('successReg');
});