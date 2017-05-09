<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTmPizzasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tm_pizzas', function(Blueprint $table)
		{
			$table->integer('count', true);
			$table->string('id', 36)->unique('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('base_id', 36)->index('fk_tm_pizzas_tm_bases1_idx');
			$table->string('cheese_id', 36)->index('fk_tm_pizzas_tm_cheeses1_idx');
			$table->string('name', 36);
			$table->string('calories', 45)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tm_pizzas');
	}

}
