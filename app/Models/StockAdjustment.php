<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StockAdjustment extends Model
{
    use HasFactory;
    protected $fillable = [
        'sn',
        'reference_no',
        'date',
        'unit',
        'responsible_person',
        'note',
        'added_by',
        

    ];
}
