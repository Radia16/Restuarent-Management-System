<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KitchenAssign extends Model
{
    use HasFactory;

    protected $fillable = [
        'outlet_id',
        'kitchen_list_id',
        'customer_id',
        
    ];

    // Kitchen Assign relationship with Outlet
public function outlets(){
    return $this->belongsTo(Outlet::class,'outlet_id','id');
}

// Kitchen Assign relationship with Kitchen List
public function kitchenlist(){
    return $this->belongsTo(KitchenList::class,'kitchen_list_id','id');
}

// Kitchen Assign relationship with Customer
public function customer(){
    return $this->belongsTo(Customer::class,'customer_id','id');
}












}
