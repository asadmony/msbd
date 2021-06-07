<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class MembershipPackage extends Model
{
    public function image()
    {
        if ($this->image_name) {
            return 'storage/package/'.$this->image_name;
        }
    }
}
