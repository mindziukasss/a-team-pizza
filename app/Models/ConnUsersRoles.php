<?php
/**
 * Created by PhpStorm.
 * User: Antanas Kiselis
 * Date: 2017.05.09
 * Time: 13:06
 */

namespace App\models;


use Illuminate\Database\Eloquent\Model;

class ConnUsersRoles extends Model
{
    protected $table = 'pz_connections_users_roles';

    protected $fillable = ['user_id', 'role_id',];
}