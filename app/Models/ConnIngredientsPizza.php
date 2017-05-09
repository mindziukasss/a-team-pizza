<?php
/**
 * Created by PhpStorm.
 * User: Antanas Kiselis
 * Date: 2017.05.09
 * Time: 13:06
 */

namespace App\models;


use Illuminate\Database\Eloquent\Model;

class ConnIngredientsPizza extends Model
{
    /**
     * @var bool
     */
    protected $updated_at = false;

    /**
     * Table name
     * @var string
     */
    protected $table = 'pz_connections_ingredients_pizza';

    /**
     * Column names
     * @var array
     */
    protected $fillable = ['pizza_id', 'ingredient_id'];
}