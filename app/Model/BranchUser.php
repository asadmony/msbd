<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class BranchUser extends Model
{
    
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function contactPerson()
    {
        return $this->belongsTo(User::class, 'contact_user_role_id');
    }
}
