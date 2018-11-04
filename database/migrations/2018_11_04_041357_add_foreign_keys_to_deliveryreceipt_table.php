<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDeliveryreceiptTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('deliveryreceipt', function(Blueprint $table)
		{
			$table->foreign('clientID', 'fk_deliveryReceipt_client1')->references('clientID')->on('client')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('clientOrderID', 'fk_deliveryReceipt_clientOrders1')->references('clientOrderID')->on('clientorders')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('employeeID', 'fk_deliveryReceipt_employee1')->references('employeeID')->on('employee')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('deliveryreceipt', function(Blueprint $table)
		{
			$table->dropForeign('fk_deliveryReceipt_client1');
			$table->dropForeign('fk_deliveryReceipt_clientOrders1');
			$table->dropForeign('fk_deliveryReceipt_employee1');
		});
	}

}
