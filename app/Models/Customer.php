<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'outlet_id',
        'name',
        'email',
        'address',
        'dob',
        'phone',
       
        
    ];



 // Customer relationship with Outlet
public function outlets(){
    return $this->belongsTo(Outlet::class,'outlet_id','id');
}
}



// $table->unsignedBigInteger('outlet_id');
// $table->string('name');
// $table->string('email')->unique();
// $table->string('address');
// $table->date('dob');
// $table->string('phone');
// $table->rememberToken();