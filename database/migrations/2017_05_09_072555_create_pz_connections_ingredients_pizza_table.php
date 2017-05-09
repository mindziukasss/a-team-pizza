<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePzConnectionsIngredientsPizzaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pz_connections_ingredients_pizza', function(Blueprint $table)
		{
			$table->integer('count', true);
			$table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->string('pizza_id', 36)->index('fk_pz_connections_ingredients_pizza_pz_pizza1_idx');
			$table->string('ingredient_id', 36)->index('fk_pz_connections_ingredients_pizza_pz_ingredients1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pz_connections_ingredients_pizza');
	}

}
