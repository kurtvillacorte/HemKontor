<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClientorderdetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('clientorderdetails', function(Blueprint $table)
		{
			$table->string('clientOrderDetailID', 11)->primary();
			$table->string('clientOrderID', 11)->nullable()->index('fk_clientOrderDetails_clientOrders1_idx');
			$table->string('productCode', 11)->index('fk_clientOrderDetails_product1_idx');
			$table->integer('productQuantity');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('clientorderdetails');
	}

}
