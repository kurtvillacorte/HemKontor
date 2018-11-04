<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToJoborderTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('joborder', function(Blueprint $table)
		{
			$table->foreign('clientID', 'clientID')->references('clientID')->on('client')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('joCoID', 'clientOrderID')->references('clientOrderID')->on('clientorders')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('joborder', function(Blueprint $table)
		{
			$table->dropForeign('clientID');
			$table->dropForeign('clientOrderID');
		});
	}

}
