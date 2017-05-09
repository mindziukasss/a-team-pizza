<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PZConnectionsRolesPermissions extends Model
{
    protected $table = 'pz_connections_roles_permissions';

    protected $fillable = ['role_id', 'permission_id'];
}
