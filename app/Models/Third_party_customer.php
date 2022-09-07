<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Third_party_customer extends Model
{
    use HasFactory;


    protected $fillable = [
        'outlet_id',
        'company_name',
        'commission',
        'address',
        
        
    ];



    // $table->unsignedBigInteger('outlet_id');
    // $table->string('company_name');
    // $table->string('commission');
    // $table->string('address');

    // CustomerTypeList relationship with Outlet
 public function outlets(){
    return $this->belongsTo(Outlet::class,'outlet_id','id');
 }

 

}
