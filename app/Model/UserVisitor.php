<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserVisitor extends Model
{
    protected $fillable = [ 
        'user_id', 
        'visitor_id', 
        'visits'
    ];
}
