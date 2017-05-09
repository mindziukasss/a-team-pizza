<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PZIngredients extends CoreModel
{
    protected $table = 'pz_ingredients';

    protected $fillable = ['id', 'name', 'calories'];
}
