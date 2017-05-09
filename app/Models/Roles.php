<?php
/**
 * Created by PhpStorm.
 * User: Antanas Kiselis
 * Date: 2017.05.09
 * Time: 13:08
 */

namespace App\models;


class Roles extends CoreModel
{
    protected $table = 'pz_roles';

    protected $fillable = ['id', 'name', 'comment'];
}