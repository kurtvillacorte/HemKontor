<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePurchaseorderTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('purchaseorder', function(Blueprint $table)
		{
			$table->string('poNo', 11)->primary();
			$table->dateTime('dateCreated')->nullable();
			$table->date('deliveryDate')->nullable();
			$table->string('terms', 45)->nullable();
			$table->string('projectName', 45)->nullable();
			$table->string('discount', 45)->nullable();
			$table->string('supplierID', 11)->index('fk_purchaseOrder_supplier1_idx');
			$table->string('approved', 11)->nullable()->index('fk_purchaseOrder_employee1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('purchaseorder');
	}

}
