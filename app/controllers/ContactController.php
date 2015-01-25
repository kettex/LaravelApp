<?php

class ContactController extends BaseController {

	/**
	 * @return contact view of public website
	 */
	public function contact()
	{
		return View::make('contact');
	}

}
