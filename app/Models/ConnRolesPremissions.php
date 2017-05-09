<?php
/**
 * Created by PhpStorm.
 * User: Antanas Kiselis
 * Date: 2017.05.09
 * Time: 13:06
 */

namespace App\models;


use Illuminate\Database\Eloquent\Model;

class ConnRolesPremissions extends Model
{
    protected $table = 'pz_connections_roles_permissions';

    protected $fillable = ['role_id', 'permission_id'];
}