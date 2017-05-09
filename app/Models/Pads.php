<?php
/**
 * Created by PhpStorm.
 * User: Antanas Kiselis
 * Date: 2017.05.09
 * Time: 13:07
 */

namespace App\models;


class Pads extends CoreModel
{
    /**
     * Table name
     * @var string
     */
    protected $table = 'pz_pizza_pads';

    /**
     * Column names
     * @var array
     */
    protected $fillable = ['id', 'name', 'calories'];
}