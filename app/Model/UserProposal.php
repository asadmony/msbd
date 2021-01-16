<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserProposal extends Model
{
	use SoftDeletes;
   	protected $casts = [

        'accepted' => 'boolean',
    ];

    public function user()
    {
    	return $this->belongsTo('App\Model\User');
    }

    public function userSecond()
    {
    	return $this->belongsTo('App\Model\User', 'user_second_id');
    }
}
