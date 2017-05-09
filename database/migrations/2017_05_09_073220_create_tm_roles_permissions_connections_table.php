<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTmRolesPermissionsConnectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tm_roles_permissions_connections', function(Blueprint $table)
		{
			$table->integer('count', true);
			$table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->string('role_id', 36)->index('fk_tm_roles_permissions_connections_tm_roles1_idx');
			$table->string('permission_id', 36)->index('fk_tm_roles_permissions_connections_permissions1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tm_roles_permissions_connections');
	}

}
