<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Pushagainagian extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('email')->unique();
			$table->string('password', 60);
			$table->rememberToken();
			$table->timestamps();
		});
		Schema::create('password_resets', function(Blueprint $table)
		{
			$table->string('email')->index();
			$table->string('token')->index();
			$table->timestamp('created_at');
		});
		Schema::create('types', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->integer('status')->default(0);
			$table->timestamps();
		});
		Schema::create('categories', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->integer('status')->default(0);
			$table->timestamps();
		});
		Schema::create('labels', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('type');
			$table->integer('status')->default(0);
			$table->timestamps();
		});
		Schema::create('colours', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('hex');
			$table->integer('status')->default(0);
			$table->timestamps();
		});
		Schema::create('brochures', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('file');
			$table->string('thumb');
			$table->longText('description');
			$table->integer('label_id')->unsigned()->nullable();
			$table->foreign('label_id')->references('id')->on('labels');
			$table->integer('status')->default(0);
			$table->timestamps();
		});
		Schema::create('images', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('file');
			$table->longText('description');
			$table->boolean('product')->default(0);
			$table->integer('label_id')->unsigned()->nullable();
			$table->foreign('label_id')->references('id')->on('labels');
			$table->integer('status')->default(1);
			$table->timestamps();
		});
		Schema::create('rankings', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('rank');
			$table->integer('status')->default(1);
			$table->integer('rankable_id');
			$table->string('rankable_type');
			$table->timestamps();
		});
		Schema::create('brand', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('logo');
			$table->string('website')->nullable();
			$table->string('address')->nullable();
			$table->string('email')->nullable();
			$table->string('phone')->nullable();
			$table->string('fax')->nullable();
			$table->longText('about')->nullable();
			$table->timestamps();
		});
		Schema::create('products', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->longText('description');
			$table->longText('features');
			$table->longText('options');
			$table->string('url')->unique();
			$table->integer('type_id')->unsigned();
			$table->foreign('type_id')->references('id')->on('types');
			$table->integer('category_id')->unsigned();
			$table->foreign('category_id')->references('id')->on('categories');
			$table->integer('brochure_id')->unsigned()->nullable();
			$table->foreign('brochure_id')->references('id')->on('brochures');
			$table->string('video')->nullable();
			$table->integer('status')->default(0);
			$table->longText('meta')->nullable();
			$table->longText('head')->nullable();
			$table->longText('scripts')->nullable();
			$table->timestamps();
		});
		Schema::create('colour_product', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('colour_id')->unsigned();
			$table->foreign('colour_id')->references('id')->on('colours');
			$table->integer('product_id')->unsigned();
			$table->foreign('product_id')->references('id')->on('products');
			$table->timestamps();
		});
		Schema::create('image_product', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('image_id')->unsigned();
			$table->foreign('image_id')->references('id')->on('images');
			$table->integer('product_id')->unsigned();
			$table->foreign('product_id')->references('id')->on('products');
			$table->timestamps();
		});
		Schema::create('tags', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->timestamps();
		});
		Schema::create('articles', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title');
			$table->text('body');
			$table->timestamps('published_at');
			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users');
			$table->integer('status')->default(0);
		});
		Schema::create('article_tag', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('article_id')->unsigned();
			$table->foreign('article_id')->references('id')->on('articles');
			$table->integer('tag_id')->unsigned();
			$table->foreign('tag_id')->references('id')->on('tags');
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
		Schema::drop('users');
		Schema::drop('password_resets');
		Schema::drop('types');
		Schema::drop('categories');
		Schema::drop('labels');
		Schema::drop('colours');
		Schema::drop('colour_product');
		Schema::drop('brochures');
		Schema::drop('images');
		Schema::drop('rankings');
		Schema::drop('brand');
		Schema::drop('products');
		Schema::drop('image_product');
		Schema::drop('tags');
		Schema::drop('articles');
		Schema::drop('article_tag');
	}

}
