<?php

use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function($table)
		{
			// Auto incrememntal id (PK)
			$table->increments('id');

			// Varchar
			$table->string('username')->unique();
			$table->string('firstName');
			$table->string('lastName');
			$table->string('displayName');
			$table->string('email')->unique();
			$table->string('website');
			$table->string('password');

			// Integer
			$table->integer('role');

			// Created_at | updated_at DATETIME
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
	}

}