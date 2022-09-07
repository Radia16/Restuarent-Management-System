<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;


    protected $fillable = [
        'outlet_id',
        'appliaction_title',
        'store_name',
        'address',
        'email_address',
        'phone',

        'image1',
        'image2',
        'opening_time',
        'close_time',
        'discount_type',
        'discount_rate',



        'service_charge',
        'service_charge_type',
        'vat_setting',
        'gst_vat',
        'payment_setup_id',
        'min_delivery_time',


        'language_id',
        'date_format',
        'time_zone',
        'application_alignment',
        'powered_by_text',
        'footer_text',
       
    ];


  // Application relationship with Outlet
public function outlets(){
    return $this->belongsTo(Outlet::class,'outlet_id','id');
 }
 


}
