<?php

class AboutController extends BaseController {

	/**
	 * @param none
	 * @return about view
	 */
	public function about()
	{
		return View::make('about');
	}

}
