<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIsActiveUserMenu extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function ($table) {
            $table->boolean("isActive");
        });
        Schema::table('menus', function ($table) {
            $table->boolean("isActive");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function ($table) {
            $table->dropColumn('isActive');
        });

        Schema::table('menus', function ($table) {
            $table->dropColumn('isActive');
        });
    }

}
