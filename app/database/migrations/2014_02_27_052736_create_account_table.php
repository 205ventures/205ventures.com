<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('accounts', function($table)
		{
			$table->increments('id');
                        $table->string('name');
                        $table->string('lname');
                        $table->string('email');
                        $table->string('password', 25);
                        $table->string('secQuestion');
                        $table->string('secAnswer');
                        $table->integer('phoneNumber');
                        $table->integer('cellPhone');
                        $table->string('address');
                        $table->string('state');
                        $table->string('country');
                        $table->integer('zipcode');
                        $table->string('message')->nullable();
                        $table->date('dateCreated');
                        $table->date('lastModified');
                        $table->string('type')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */

	public function down()
	{
		Schema::drop('accounts');
	}

}