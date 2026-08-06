<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mesa extends Model
{
    protected $fillable = [

        'number',
        'capacity',
        'shape',
        'zone',
        'status',
        'x',
        'y',
        'status'

    ];

}
