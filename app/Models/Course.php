<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
    protected $fillable = [
        'course_name',
        'course_code',
        'duration',
        'description',
    ];
    
}

