<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPzPizzaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('pz_pizza', function(Blueprint $table)
		{
			$table->foreign('cheese_id', 'fk_pz_pizza_pz_cheeses1')->references('id')->on('pz_cheeses')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('pizza_pad_id', 'fk_pz_pizza_pz_pizza_pads1')->references('id')->on('pz_pizza_pads')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('user_id', 'fk_pz_pizza_pz_users1')->references('id')->on('pz_users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('pz_pizza', function(Blueprint $table)
		{
			$table->dropForeign('fk_pz_pizza_pz_cheeses1');
			$table->dropForeign('fk_pz_pizza_pz_pizza_pads1');
			$table->dropForeign('fk_pz_pizza_pz_users1');
		});
	}

}
