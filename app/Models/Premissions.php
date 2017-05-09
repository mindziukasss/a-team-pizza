<?php
/**
 * Created by PhpStorm.
 * User: Antanas Kiselis
 * Date: 2017.05.09
 * Time: 13:07
 */

namespace App\models;


class Premissions extends CoreModel
{
    protected $table = 'pz_permissions';

    protected $fillable = ['id', 'name', 'comment'];
}