<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CardTerminal extends Model
{
    use HasFactory;

    protected $fillable = [
        'outlet_id',
        'card_terminal_name',
        
      
    ];

 // Card Terminal relationship with Outlet
 public function outlets(){
    return $this->belongsTo(Outlet::class,'outlet_id','id');
 }



}
