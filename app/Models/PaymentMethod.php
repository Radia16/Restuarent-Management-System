<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'outlet_id',
        'name',
        'status',
        'added_by',
       
        
    ];


    // Outlet relationships hobe

}



