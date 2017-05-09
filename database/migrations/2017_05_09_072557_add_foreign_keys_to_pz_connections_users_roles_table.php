<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPzConnectionsUsersRolesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('pz_connections_users_roles', function(Blueprint $table)
		{
			$table->foreign('role_id', 'fk_pz_connections_users_roles_pz_roles1')->references('id')->on('pz_roles')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('user_id', 'fk_pz_connections_users_roles_pz_users')->references('id')->on('pz_users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('pz_connections_users_roles', function(Blueprint $table)
		{
			$table->dropForeign('fk_pz_connections_users_roles_pz_roles1');
			$table->dropForeign('fk_pz_connections_users_roles_pz_users');
		});
	}

}
