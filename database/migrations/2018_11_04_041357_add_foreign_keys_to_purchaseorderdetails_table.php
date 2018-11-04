<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPurchaseorderdetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('purchaseorderdetails', function(Blueprint $table)
		{
			$table->foreign('rawMatCode', 'fk_purchaseOrderDetails_product1')->references('rawMatCode')->on('rawmaterial')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('poNo', 'fk_purchaseOrderDetails_purchaseOrder1')->references('poNo')->on('purchaseorder')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('purchaseorderdetails', function(Blueprint $table)
		{
			$table->dropForeign('fk_purchaseOrderDetails_product1');
			$table->dropForeign('fk_purchaseOrderDetails_purchaseOrder1');
		});
	}

}
