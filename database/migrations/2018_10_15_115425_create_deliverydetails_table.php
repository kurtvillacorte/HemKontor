<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDeliverydetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('deliverydetails', function(Blueprint $table)
		{
			$table->string('deliverDetailsID', 11)->primary();
			$table->string('productCode', 11)->index('fk_deliveryDetails_product1_idx');
			$table->integer('quantity')->nullable();
			$table->string('drNo', 11)->index('fk_deliveryDetails_deliveryReceipt1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('deliverydetails');
	}

}
