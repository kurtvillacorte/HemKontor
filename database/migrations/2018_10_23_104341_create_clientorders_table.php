<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClientordersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('clientorders', function(Blueprint $table)
		{
			$table->string('clientOrderID', 11)->primary();
			$table->dateTime('dateOrdered')->nullable();
			$table->date('dateRequired')->nullable();
			$table->string('verifyCode', 45)->nullable();
			$table->string('status', 45)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('clientorders');
	}

}
