<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PZCheeses extends CoreModel
{
    protected $table = 'pz_cheeses';

    protected $fillable = ['id', 'name', 'calories'];
}
