<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSupplierTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('supplier', function(Blueprint $table)
		{
			$table->string('supplierID', 11)->primary();
			$table->string('name', 45)->nullable();
			$table->string('province', 45)->nullable();
			$table->string('city', 45)->nullable();
			$table->string('country', 45)->nullable();
			$table->string('contactPerson', 45)->nullable();
			$table->string('contactDetails', 45)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('supplier');
	}

}
