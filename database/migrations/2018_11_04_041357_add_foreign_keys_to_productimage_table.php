<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToProductimageTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('productimage', function(Blueprint $table)
		{
			$table->foreign('productCode', 'fk_productImage_product1')->references('productCode')->on('product')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('productimage', function(Blueprint $table)
		{
			$table->dropForeign('fk_productImage_product1');
		});
	}

}
