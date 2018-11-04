<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePurchaseorderdetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('purchaseorderdetails', function(Blueprint $table)
		{
			$table->string('poDetailsID', 11)->primary();
			$table->string('quantity', 45);
			$table->string('rawMatCode', 11)->index('fk_purchaseOrderDetails_product1_idx');
			$table->string('poNo', 11)->index('fk_purchaseOrderDetails_purchaseOrder1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('purchaseorderdetails');
	}

}
