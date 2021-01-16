<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserRoleItem extends Model
{
    protected $fillable = [
		'user_id',
		'role_id',
		'name',
		'addedby_id',
		'editedby_id',
    ];
}
