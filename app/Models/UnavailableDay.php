<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnavailableDay extends Model
{
    use HasFactory;

    protected $fillable = [
        'outlet_id',
        'unavailable_date',
        'available_time',
        
        
    ];


// UnavailableDay relationship with Outlet
public function outlets(){
    return $this->belongsTo(Outlet::class,'outlet_id','id');
}




    
}
