<?php
/**
 * Created by PhpStorm.
 * User: Antanas Kiselis
 * Date: 2017.05.09
 * Time: 13:05
 */

namespace App\models;


class Cheeses extends CoreModel
{
    protected $table = 'pz_cheeses';

    protected $fillable = ['id', 'name', 'calories'];
}