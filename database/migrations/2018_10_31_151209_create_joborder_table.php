<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJoborderTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('joborder', function(Blueprint $table)
		{
			$table->integer('joNo')->primary();
			$table->date('joDate')->nullable();
			$table->string('clientID', 11)->nullable()->index('clientID_idx');
			$table->string('clientOrderID', 11)->nullable()->index('clientOrderID_idx');
			$table->integer('joApproved')->nullable();
			$table->string('notes', 45)->nullable();
			$table->date('joDeliveryDate')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('joborder');
	}

}
