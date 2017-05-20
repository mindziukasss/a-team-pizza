<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConnUserRecourses extends CoreModel
{
	protected $updated_at = false;
	
    protected $table = 'pz_users_recourses_connections';

    protected $fillable = ['id', 'user_id', 'recourse_id'];
}
