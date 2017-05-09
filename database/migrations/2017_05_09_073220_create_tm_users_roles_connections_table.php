<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTmUsersRolesConnectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tm_users_roles_connections', function(Blueprint $table)
		{
			$table->integer('count', true);
			$table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->string('user_id', 36)->index('fk_tm_users_roles_connections_tm_users_idx');
			$table->string('role_id', 36)->index('fk_tm_users_roles_connections_tm_roles1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tm_users_roles_connections');
	}

}
