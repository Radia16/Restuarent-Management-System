<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentSetup extends Model
{
    use HasFactory;



    protected $fillable = [
        
        'outlet_id',
        'payment_method_id',
        'marchant_id_or_application_id',
        'currency',
        'mode',
        'status',
        
       
        
    ];

    // $table->id();
    // $table->string('outlet_id');//foreign key
    // $table->string('payment_method_name');//foreign key
    // $table->string('marchant_id_or_application_id');
    // $table->string('currency');
    // $table->string('mode');
    // $table->string('status');//foreign key


// Employee's relationship with Department of Company Table
public function paymentsetup(){
    return $this->belongsTo(PaymentMethod::class,'payment_method_id','id');
}


}
