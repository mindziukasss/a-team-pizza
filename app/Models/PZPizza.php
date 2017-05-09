<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PZPizza extends CoreModel
{
    protected $table = 'pz_pizza';

    protected $fillable = ['id', 'name', 'comment', 'calories', 'cheese_id', 'pizza_pad_id', 'user_id'];
}
