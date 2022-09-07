<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerTypeList extends Model
{
    use HasFactory;

    protected $fillable = [
        'outlet_id',
        'customer_type',
        
    ];

    

// CustomerTypeList relationship with Outlet
 public function outlets(){
    return $this->belongsTo(Outlet::class,'outlet_id','id');
 }

}
