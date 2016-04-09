<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateAccountTableSchema extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
            	Schema::table('accounts', function($table)
		{
		
                        $table->string('city');

		});
            DB::update("ALTER TABLE `accounts` CHANGE COLUMN `phoneNumber` `phoneNumber` varchar(20) NOT NULL;");
            DB::update("ALTER TABLE `accounts` CHANGE COLUMN `cellPhone` `cellPhone` varchar(20) NOT NULL;");
            DB::update("ALTER TABLE `accounts` CHANGE COLUMN `zipcode` `zipcode` varchar(11) NOT NULL;");
            
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
