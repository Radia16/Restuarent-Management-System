<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'outlet_id',
        'resturent_name',
        'logo_image',
        'webside',
        'date',
        'time_zone',
        'currency_symbol',
        'currency_position',
        'precision',
        'default_customer',
        'default_payment_method',
        'charge_type',
        'percentage_amount',
        'status',
        'export_daly',
        'invoice_footer',
        'printing_invoice',
        'printing_bill',
        'printing_kot',
        'printing_bot',
        'recept_printer',


    ];

}

