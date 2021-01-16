<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserWorkingRecord extends Model
{
    protected $table = 'user_working_records';

    protected $fillable = [
        'company_name',
        'company_address',
        'org_id',
        'org_type',
        'working_role',
        'joining_date',
        'leave_date',
    ];
    // protected $dates = ['deleted_at'];
}
