<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PZConnectionsUsersRoles extends Model
{
    protected $table = 'pz_connections_users_roles';

    protected $fillable = ['user_id', 'role_id'];
}
