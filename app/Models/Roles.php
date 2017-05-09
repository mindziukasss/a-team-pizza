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
    /**
     * Table name
     * @var string
     */
    protected $table = 'pz_roles';

    /**
     * Column names
     * @var array
     */
    protected $fillable = ['id', 'name', 'comment'];
}