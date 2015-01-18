<?php

class MenuController extends BaseController {

	public function __construct()
	{
		// Always run csrf protection before the request when posting
		$this->beforeFilter('csrf', array('on' => 'post'));
	}

	public function editMenu(){
		// return if no id was sent to controller
		if(!Input::has('id')){
			return Redirect::to('admin/menumanagement');
		}

		// get the id out of the request params and find the right menu in database
		$menu = Menu::find(Input::get('id'));

		// return to management site if no menu was found by id!!
		if($menu == null){
			return Redirect::to('admin/menumanagement');
		}

		// update the menu
		$menu->menuDate = Input::get('menuDate');
		$menu->menuDescription = Input::get('menuDescription');
		$menu->menuTitle = Input::get('menuTitle');

		//
		$menu->save();

		return Redirect::to('admin/menumanagement');
	}
}
