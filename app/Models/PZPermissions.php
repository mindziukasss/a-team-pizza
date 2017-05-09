<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PZPermissions extends CoreModel
{
    protected $table = 'pz_permissions';

    protected $fillable = ['id', 'name', 'comment'];
}
