<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    public function users(){
		return $this->belongsToMany('App\Model\User', 'branch_users', 'branch_id', 'user_id');
	}

	public function hasUser($user){
		$row = $this->users()->where('users.id',$user->id)->first();
		if($row){
			return true;
		}
		return false;
	}

}
