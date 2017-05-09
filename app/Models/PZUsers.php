<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PZUsers extends CoreModel
{
    protected $table = 'pz_users';

    protected $fillable = ['id', 'name', 'email', 'password', 'phone', 'address', '	comment'];
}
