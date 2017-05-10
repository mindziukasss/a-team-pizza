<?php
/**
 * Created by PhpStorm.
 * User: Antanas Kiselis
 * Date: 2017.05.09
 * Time: 13:06
 */

namespace App\models;


use Illuminate\Database\Eloquent\Model;

class ConnRolesPermissions extends Model
{
    /**
     * @var bool
     */
    protected $updated_at = false;
    /**
     * Table name
     * @var string
     */
    protected $table = 'pz_connections_roles_permissions';
    /**
     * Column names
     * @var array
     */
    protected $fillable = ['role_id', 'permission_id'];
}