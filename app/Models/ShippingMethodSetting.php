<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Outlet;


class ShippingMethodSetting extends Model
{
    use HasFactory;



    protected $fillable = [
        
        'outlet_id',
        'shipping_method_name',
        'shipping_rate',
        'payment_method_id',
    
        
    ];



// Payment_Shipping_Method relationship with Payment_Method
public function payment_shipping_set(){
    return $this->belongsTo(PaymentMethod::class,'payment_method_id','id');
}




    // $table->id();
    //         $table->string('outlet_id');//foreign key
    //         $table->string('shipping_method_name');
    //         $table->string('shipping_rate');
    //         $table->string('payment_method_id');//foreign key
}
