<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBasicmaterialTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('basicmaterial', function(Blueprint $table)
		{
			$table->string('basicMatID', 11)->primary();
			$table->string('productCode', 11)->index('fk_basicMaterials_product1_idx');
			$table->string('rawMatCode', 11)->index('fk_basicMaterials_rawMaterial1_idx');
			$table->integer('quantity')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('basicmaterial');
	}

}
