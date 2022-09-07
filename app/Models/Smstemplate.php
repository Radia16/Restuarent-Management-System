<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Smstemplate extends Model
{
    protected $fillable = [

        'template_name',
        'type',
        'description',
    ];
    use HasFactory;
}
