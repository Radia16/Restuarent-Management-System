<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Holiday extends Model
{
    use HasFactory;

    protected $fillable =[

        'holi_name',
        'start_date',
        'end_date',
        'days',
        'status',

    ];
}
