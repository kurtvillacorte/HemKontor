<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToBasicmaterialTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('basicmaterial', function(Blueprint $table)
		{
			$table->foreign('productCode', 'fk_basicMaterials_product1')->references('productCode')->on('product')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('rawMatCode', 'fk_basicMaterials_rawMaterial1')->references('rawMatCode')->on('rawmaterial')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('basicmaterial', function(Blueprint $table)
		{
			$table->dropForeign('fk_basicMaterials_product1');
			$table->dropForeign('fk_basicMaterials_rawMaterial1');
		});
	}

}
