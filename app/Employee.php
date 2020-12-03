<?php

namespace App; 

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'id',
        'name',
        'lastname',
        'salary',
        'stall',
        'CURP',
        'social_security'
    ];
}
