<?php
/**
 * Created by PhpStorm.
 * User: Antanas Kiselis
 * Date: 2017.05.09
 * Time: 13:02
 */

namespace App\models;


class Users extends CoreModel
{
    protected $table = 'pz_users';

    protected $fillable = ['id', 'name', 'email', 'password', 'phone', 'address', 'comment'];
}