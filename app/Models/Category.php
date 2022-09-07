<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'outlet_id',
        'category_name',
        'start_date',
        'parent_name',
        'end_date',
        'status',
        'category_image',


    ];


}