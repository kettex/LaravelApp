<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';
	protected $guarded = ['id', 'created_at', 'updated_at'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	public function getAuthIdentifier() {
		return $this->getKey();
	}

	public function getAuthPassword(){
		return $this->password;
	}

	public function getReminderEmail()
	{
		return $this->email;
	}

	public static function validateRegisterModel($input) {
		$rules = array(
			'company' => 'Required',
			'username' => 'Required|Min:6|Max:30|Unique:users',
			'email' => 'Required|Email|Unique:users',
			'password' => 'Required|Min:6|Max:30|Confirmed',
			'password_confirmation' => 'Required|Min:6|Max:30',
			'deliveryAddress' => 'Regex:/([a-zA-Z\s\.\-\ß]+)\s(.*[0-9]+.*)/i',
			'zip' => 'Required',
			'city' => 'Required'
		);

		return Validator::make($input, $rules);
	}

	public static function validateProfileModel($input) {
		$rules = array(
			'company' => 'Required',
			'email' => 'Required|Email|Unique:users',
			'deliveryAddress' => 'Regex:/([a-zA-Z\s\.\-\ß]+)\s(.*[0-9]+.*)/i',
			'zip' => 'Required',
			'city' => 'Required'
		);

		return Validator::make($input, $rules);
	}
}
