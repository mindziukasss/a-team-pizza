<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePzPizzaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pz_pizza', function(Blueprint $table)
		{
			$table->integer('count', true);
			$table->string('id', 36)->unique('id_UNIQUE');
			$table->timestamps();
			$table->softDeletes();
			$table->string('cheese_id', 36)->nullable()->index('fk_pz_pizza_pz_cheeses1_idx');
			$table->string('pizza_pad_id', 36)->index('fk_pz_pizza_pz_pizza_pads1_idx');
			$table->string('user_id', 36)->nullable()->index('fk_pz_pizza_pz_users1_idx');
			$table->string('name');
			$table->string('calories', 45)->nullable();
			$table->string('comment')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pz_pizza');
	}

}
