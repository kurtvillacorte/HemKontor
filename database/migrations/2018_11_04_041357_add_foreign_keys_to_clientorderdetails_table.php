<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToClientorderdetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('clientorderdetails', function(Blueprint $table)
		{
			$table->foreign('clientOrderID', 'fk_clientOrderDetails_clientOrders1')->references('clientOrderID')->on('clientorders')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('productCode', 'fk_clientOrderDetails_product1')->references('productCode')->on('product')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('clientorderdetails', function(Blueprint $table)
		{
			$table->dropForeign('fk_clientOrderDetails_clientOrders1');
			$table->dropForeign('fk_clientOrderDetails_product1');
		});
	}

}
