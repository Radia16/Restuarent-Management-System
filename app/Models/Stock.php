<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;


    protected $fillable = [
       
        'outlet_id',
        'code',
        'category',
        'unit',
        'alert_qty',
    ];
    


// Stock relationship with Outlet
public function outlets(){
    return $this->belongsTo(Outlet::class,'outlet_id','id');
}




}
