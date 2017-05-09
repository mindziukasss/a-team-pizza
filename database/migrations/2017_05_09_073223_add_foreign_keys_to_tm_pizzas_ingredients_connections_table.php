<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTmPizzasIngredientsConnectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tm_pizzas_ingredients_connections', function(Blueprint $table)
		{
			$table->foreign('ingredient_id', 'fk_tm_pizzas_ingredients_connections_tm_ingredients1')->references('id')->on('tm_ingredients')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('pizza_id', 'fk_tm_pizzas_ingredients_connections_tm_pizzas1')->references('id')->on('tm_pizzas')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tm_pizzas_ingredients_connections', function(Blueprint $table)
		{
			$table->dropForeign('fk_tm_pizzas_ingredients_connections_tm_ingredients1');
			$table->dropForeign('fk_tm_pizzas_ingredients_connections_tm_pizzas1');
		});
	}

}
