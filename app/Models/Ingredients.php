<?php
/**
 * Created by PhpStorm.
 * User: Antanas Kiselis
 * Date: 2017.05.09
 * Time: 13:06
 */

namespace App\models;


class Ingredients extends CoreModel
{
    /**
     * Table name
     * @var string
     */
    protected $table = 'pz_ingredients';

    /**
     * Column names
     * @var array
     */
    protected $fillable = ['id', 'name', 'calories', 'recourse_id'];
}