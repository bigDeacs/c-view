<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColoursBrand extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('brand', function($table)
		{
			$table->string('color1');
			$table->string('color2');
			$table->string('color3');
			$table->string('color4');
		});	
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('brand', function(Blueprint $table)
		{
			$table->dropColumn('color1');
			$table->dropColumn('color2');
			$table->dropColumn('color3');
			$table->dropColumn('color4');
		});
	}

}
