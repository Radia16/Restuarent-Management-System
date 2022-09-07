<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransferOutlet extends Model
{
    use HasFactory;

    protected $fillable = [
        'reference_no',
        'date',
        'to_outlet',
        'status',
        'transfer_typ',
        'aboute_project',
        'qty_amount',



    ];
}
