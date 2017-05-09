<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTmRolesPermissionsConnectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tm_roles_permissions_connections', function(Blueprint $table)
		{
			$table->foreign('permission_id', 'fk_tm_roles_permissions_connections_permissions1')->references('id')->on('permissions')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('role_id', 'fk_tm_roles_permissions_connections_tm_roles1')->references('id')->on('tm_roles')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tm_roles_permissions_connections', function(Blueprint $table)
		{
			$table->dropForeign('fk_tm_roles_permissions_connections_permissions1');
			$table->dropForeign('fk_tm_roles_permissions_connections_tm_roles1');
		});
	}

}
