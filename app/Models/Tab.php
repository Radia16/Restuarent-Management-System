<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tab extends Model
{
    use HasFactory;
    protected $fillable = [
        'outlet_id',
        'table_name',
        'capacity',
        'position',
         'icon',
      
    ];




// Tab relationship with Outlet
public function outlets(){
    return $this->belongsTo(Outlet::class,'outlet_id','id');
}









}
