<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Reservation extends Model
{
    use HasFactory;
    protected $fillable = [
        'outlet_id',
        'customer_name',
        'table_id',
        'person_number',
        'start_time',
        'end_time',
        'date',
        'status',
        
    ];



// Reservation relationship with Outlet
public function outlets(){
    return $this->belongsTo(Outlet::class,'outlet_id','id');
}








}


// $table->unsignedBigInteger('outlet_id');
// $table->string('customer_name');
// $table->unsignedBigInteger('table_id');
// $table->integer('person_number');
// $table->time('start_time');
// $table->time('end_time');
// $table->date('date');
// $table->tinyInteger('status')->default(0);