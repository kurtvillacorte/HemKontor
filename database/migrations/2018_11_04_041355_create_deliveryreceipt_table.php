<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDeliveryreceiptTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('deliveryreceipt', function(Blueprint $table)
		{
			$table->string('drNo', 11);
			$table->string('clientID', 11)->index('fk_deliveryReceipt_client1_idx');
			$table->string('clientOrderID', 11)->index('fk_deliveryReceipt_clientOrders1_idx');
			$table->date('deliveryDate')->nullable();
			$table->string('terms', 45)->nullable();
			$table->string('deliveryAddress', 45)->nullable();
			$table->string('employeeID', 11)->index('fk_deliveryReceipt_employee1_idx');
			$table->string('status', 45)->nullable();
			$table->dateTime('timeDelivered')->nullable();
			$table->primary(['drNo','employeeID']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('deliveryreceipt');
	}

}
