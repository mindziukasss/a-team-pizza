<?php
/**
 * Created by PhpStorm.
 * User: Antanas Kiselis
 * Date: 2017.05.09
 * Time: 13:06
 */

namespace App\models;


class Ingridients extends CoreModel
{
    protected $table = 'pz_ingredients';

    protected $fillable = ['id', 'name', 'calories'];
}