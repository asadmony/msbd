<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserEducationRecord extends Model
{
    protected $table = 'user_education_records';

    protected $fillable = [
        'passed_degree',
        'passed_year',
        'passed_grade',
        'passed_department',
        'organization_name',
        'organization_address',
        'organization_type',
        'year_from',
        'year_to',
    ];
    // protected $dates = ['deleted_at'];
}
