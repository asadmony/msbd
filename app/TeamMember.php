<?php

namespace App;

use App\Model\Branch;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    use HasFactory;
    
    public function branch()
    {
        return $this->belongsTo(Branch::class, 'branch_id');
    }
}
