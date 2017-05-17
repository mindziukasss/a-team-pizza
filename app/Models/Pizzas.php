<?php
/**
 * Created by PhpStorm.
 * User: Antanas Kiselis
 * Date: 2017.05.09
 * Time: 13:07
 */

namespace App\models;


class Pizzas extends CoreModel
{
    /**
     * Table name
     * @var string
     */
    protected $table = 'pz_pizza';

    /**
     * Column names
     * @var array
     */
    protected $fillable = ['id', 'cheese_id', 'pizza_pad_id', 'user_id', 'name', 'calories', 'comment'];

    public function pizzaBase() {
        return $this->hasOne(Pads::class, 'id', 'pizza_pad_id');
    }
    public function pizzaCheese() {
        return $this->hasOne(Cheeses::class, 'id', 'cheese_id');
    }
    public function pizzaIngredient() {
        return $this->belongsToMany(Ingredients::class, 'tdb_connection_pizza_toppings', 'pizza_id', 'ingredient_id' );
    }
    public function pizzaUser() {
        return $this->hasOne(Users::class, 'id', 'user_id');
    }
}