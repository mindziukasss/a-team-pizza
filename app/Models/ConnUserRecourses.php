<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConnUserRecourses extends Model
{
	protected $updated_at = false;
	
    protected $table = 'pz_users_recourses_connections';

    protected $fillable = ['user_id', 'recourse_id'];
}
