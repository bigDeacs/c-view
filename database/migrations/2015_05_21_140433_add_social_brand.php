<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSocialBrand extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('brand', function($table)
		{
			$table->string('facebook')->nullable();
			$table->string('twitter')->nullable();
			$table->string('google')->nullable();
			$table->string('instagram')->nullable();
			$table->string('yellow')->nullable();
			$table->string('pinterest')->nullable();
			$table->string('vimeo')->nullable();
			$table->string('youtube')->nullable();
			$table->string('houzz')->nullable();
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
			$table->dropColumn('facebook');
			$table->dropColumn('twitter');
			$table->dropColumn('google');
			$table->dropColumn('instagram');
			$table->dropColumn('yellow');
			$table->dropColumn('pinterest');
			$table->dropColumn('vimeo');
			$table->dropColumn('youtube');
			$table->dropColumn('houzz');
		});
	}

}
