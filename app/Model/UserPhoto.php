<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserPhoto extends Model
{
    protected $fillable = [
 
        'img_type', //private, public,
        'autoload',
        'addedby_id',
        'editedby_id'
    ];

    protected $casts = ['autoload' => 'boolean'];

    public function scopePrivate($query)
    {
        return $query->where('img_type', 'private');
    }

    public function scopePublic($query)
    {
        return $query->where('img_type', 'public');
    }
}
