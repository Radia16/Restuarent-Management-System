<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

    protected $fillable = [
        'sn',
        'outlet_id',
        'reference_no',
        'supplier',
        'ingredients',
        'date',
        'grand_total',
        'paid',
        'due',
       
        
    ];
}
 