<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVehicleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vehicle', function(Blueprint $table)
		{
			$table->string('vehicleID', 11)->primary();
			$table->string('employeeID', 11)->nullable()->index('fk_vehicle_employee1_idx');
			$table->string('plateNumber', 7)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('vehicle');
	}

}
