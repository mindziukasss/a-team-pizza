<?php
/**
 * Created by PhpStorm.
 * User: Code Academy
 * Date: 5/9/2017
 * Time: 1:26 PM
 */

namespace App\Models;


class PZPizzaPads extends CoreModel
{
    protected $table = 'pz_pizza_pads';

    protected $fillable = ['id', 'name', 'calories'];
}