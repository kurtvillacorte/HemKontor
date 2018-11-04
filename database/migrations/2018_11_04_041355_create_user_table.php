<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user', function(Blueprint $table)
		{
			$table->string('username', 45)->primary();
			$table->string('password', 199)->nullable();
			$table->string('firstName', 45)->nullable();
			$table->string('lastName', 45)->nullable();
			$table->string('email', 45)->nullable();
			$table->string('phone', 45)->nullable();
			$table->date('dateJoined')->nullable();
			$table->string('employeeID', 11)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user');
	}

}
