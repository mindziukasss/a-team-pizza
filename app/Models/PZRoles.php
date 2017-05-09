<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PZRoles extends CoreModel
{
    protected $table = 'pz_roles';

    protected $fillable = ['id', 'name', 'comment'];
}
