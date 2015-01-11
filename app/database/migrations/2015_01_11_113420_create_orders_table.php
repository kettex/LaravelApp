<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('orders', function($table){
			$table->increments('id');
			$table->dateTime('orderDate');
			$table->boolean('isCanceled');
			$table->integer('user_id')->unsigned();
			//When trying to add the constraint for menu_id like user_id --> got an error at migrating the database (cannot add foreign key constraint...)
			$table->unsignedInteger('menu_id');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('orders');
	}

}
