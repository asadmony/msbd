<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class MediaPersonItem extends Model
{
    public function mediaPerson()
    {
    	return $this->belongsTo('App\Model\User', 'media_person_id')->withoutGlobalScopes();
    }
}
