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
    /**
     * @var bool
     */
    protected $updated_at = false;

    /**
     * Table name
     * @var string
     */
    protected $table = 'pz_connections_users_roles';

    /**
     * Column names
     * @var array
     */
    protected $fillable = ['user_id', 'role_id',];
}