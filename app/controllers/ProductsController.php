<?php

class ProductsController extends BaseController {

	/**
	 * @return products view of public website
	 */
	public function products()
	{
		return View::make('products');
	}

}
