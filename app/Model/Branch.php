<?php

namespace App\Model;

use App\TeamMember;
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

	public function teamMembers()
	{
		return $this->hasMany(TeamMember::class, 'branch_id');
	}
	public function marketingTeamMembers()
	{
		return $this->teamMembers()->where('active', 1)->where('team_name', 'Marketing Team')->get();
	}
	public function serviceTeamMembers()
	{
		return $this->teamMembers()->where('active', 1)->where('team_name', 'Service Team')->get();
	}
	public function itTeamMembers()
	{
		return $this->teamMembers()->where('active', 1)->where('team_name', 'IT Team')->get();
	}

}
