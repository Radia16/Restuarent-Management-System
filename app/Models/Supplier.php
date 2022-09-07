<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    protected $fillable = [
        'outlet_id',
        'name',
        'address',
        'contact_person',
        'description',
        'phone',
        'email',
        'image',

    ];

}