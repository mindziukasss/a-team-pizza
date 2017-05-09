<?php
/**
 * Created by PhpStorm.
 * User: Antanas Kiselis
 * Date: 2017.05.09
 * Time: 13:06
 */

namespace App\models;


use Illuminate\Database\Eloquent\Model;

class ConnIngridientsPizza extends Model
{
    protected $table = 'pz_connections_ingredients_pizza';

    protected $fillable = ['pizza_id', 'ingredient_id'];
}