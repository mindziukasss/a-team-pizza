<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTmUsersRolesConnectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tm_users_roles_connections', function(Blueprint $table)
		{
			$table->foreign('role_id', 'fk_tm_users_roles_connections_tm_roles1')->references('id')->on('tm_roles')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('user_id', 'fk_tm_users_roles_connections_tm_users')->references('id')->on('tm_users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tm_users_roles_connections', function(Blueprint $table)
		{
			$table->dropForeign('fk_tm_users_roles_connections_tm_roles1');
			$table->dropForeign('fk_tm_users_roles_connections_tm_users');
		});
	}

}
