<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductimageTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('productimage', function(Blueprint $table)
		{
			$table->integer('productImageID', true);
			$table->string('productImage', 299)->nullable();
			$table->string('productCode', 45)->nullable()->index('fk_productImage_product1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('productimage');
	}

}
