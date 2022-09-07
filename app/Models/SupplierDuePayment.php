<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupplierDuePayment extends Model
{
    use HasFactory;


    protected $fillable = [
        'sn',
        'date',
        'supplier',
        'amount',
        'note',
        'added_by',
        

    ];


}
