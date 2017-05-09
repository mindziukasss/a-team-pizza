<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTmPizzasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tm_pizzas', function(Blueprint $table)
		{
			$table->foreign('base_id', 'fk_tm_pizzas_tm_bases1')->references('id')->on('tm_bases')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('cheese_id', 'fk_tm_pizzas_tm_cheeses1')->references('id')->on('tm_cheeses')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tm_pizzas', function(Blueprint $table)
		{
			$table->dropForeign('fk_tm_pizzas_tm_bases1');
			$table->dropForeign('fk_tm_pizzas_tm_cheeses1');
		});
	}

}
