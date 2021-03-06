<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Menu extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'menus';
	protected $guarded = ['id', 'created_at', 'updated_at'];

	function user() {
		return $this->belongsTo('User', 'id');
	}
}
