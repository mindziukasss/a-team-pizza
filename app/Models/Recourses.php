<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recourses extends CoreModel
{
    protected $table = 'pz_recourses';

    protected $fillable = ['id', 'mime_type', 'path', 'width', 'height', 'size'];

}
