<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PZConnectionsIngredientsPizza extends Model
{
    protected $table = 'pz_connections_ingredients_pizza';

    protected $fillable = ['pizza_id', 'ingredient_id'];
}
