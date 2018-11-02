<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDeliverydetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('deliverydetails', function(Blueprint $table)
		{
			$table->foreign('drNo', 'fk_deliveryDetails_deliveryReceipt1')->references('drNo')->on('deliveryreceipt')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('productCode', 'fk_deliveryDetails_product1')->references('productCode')->on('product')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('deliverydetails', function(Blueprint $table)
		{
			$table->dropForeign('fk_deliveryDetails_deliveryReceipt1');
			$table->dropForeign('fk_deliveryDetails_product1');
		});
	}

}
