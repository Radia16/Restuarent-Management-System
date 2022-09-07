<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodVarient extends Model
{
    use HasFactory;
    protected $fillable = [
        'outlet_id',
        'food_name',
        'food_varient',
        'price',


    ];

    //  relationships

    public function expense(){
        return $this->belongsTo(Food::class,'food_name','id');

    }


}

