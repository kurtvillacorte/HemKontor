<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPurchaseorderTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('purchaseorder', function(Blueprint $table)
		{
			$table->foreign('approved', 'fk_purchaseOrder_employee1')->references('employeeID')->on('employee')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('supplierID', 'fk_purchaseOrder_supplier1')->references('supplierID')->on('supplier')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('purchaseorder', function(Blueprint $table)
		{
			$table->dropForeign('fk_purchaseOrder_employee1');
			$table->dropForeign('fk_purchaseOrder_supplier1');
		});
	}

}
