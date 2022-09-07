<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'outlet_id',
        'language_name',
      
        
    ];

//     // Kitchen Assign relationship with Outlet
public function outlets(){
   return $this->belongsTo(Outlet::class,'outlet_id','id');
}


}
