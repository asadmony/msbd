<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialIdentity extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'provider_name',
        'provider_token',
    ];
    public function user()
    {
        return $this->belongsTo('App\Model\User', 'user_id');
    }
}
