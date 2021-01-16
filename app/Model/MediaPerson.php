<?php

namespace App\Model;

use App\Model\User;
use Illuminate\Database\Eloquent\Model;

class MediaPerson extends Model
{
	protected $fillable = [
		'user_id',
		'addedby_id',
		'editedby_id',
		'branch_id',
		'commission',
		'balance'
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
}
