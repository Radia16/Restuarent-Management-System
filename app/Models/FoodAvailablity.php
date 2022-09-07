<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodAvailablity extends Model
{
    use HasFactory;
    protected $fillable = [
        'outlet_id',
        'food_id',
        'available_day',
        'frome_time',
        'end_time',
        'status',
    ];


        // Employee's relationship with Company Table
        public function outlets(){
            return $this->belongsTo(Outlet::class,'outlet_id','id');

        }

        // Employee's relationship with Department of Company Table
        public function foods(){
            return $this->belongsTo(Food::class,'food_id','id');

        }

}


