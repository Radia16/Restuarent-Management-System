<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KitchenList extends Model
{
    use HasFactory;


    protected $fillable = [
        'outlet_id',
        'kitchen_name',
        
    ];




// kitcheb List relationship with Outlet
public function outlets(){
     return $this->belongsTo(Outlet::class,'outlet_id','id');
 }












}
