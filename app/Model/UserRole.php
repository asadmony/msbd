<?php

namespace App\Model;

use App\Model\User;
use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    
    protected $fillable = [
		'user_id',
		'role_name',
		'role_value',
		'addedby_id',
		'editedby_id',
		'branch_id'
    ];


  public function user()
	{
	    return $this->belongsTo('App\Model\User', 'user_id')->withoutGlobalScopes();
	}

	public function addedBy()
	  {
	      return $this->belongsTo('App\Model\User', 'addedby_id')->withoutGlobalScopes();
	  }

  public function editedBy()
  {
      return $this->belongsTo('App\Model\User', 'editedby_id')->withoutGlobalScopes();
  }	  

  public function items()
  {
  	return $this->hasMany('App\Model\UserRoleItem', 'role_id');
  }

  public function branch()
  {
  	return $this->belongsTo('App\Model\Branch', 'branch_id');
  }

  public function branchStatus()
  {
    if ($this->branch_id > 0) 
    {
      return $this->branch->branch_name;
    }
    else
    {
      return 'All Branches';
    }
  }
}
