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
    /**
     * Table name
     * @var string
     */
    protected $table = 'pz_cheeses';

    /**
     * Column names
     * @var array
     */
    protected $fillable = ['id', 'name', 'calories'];
}