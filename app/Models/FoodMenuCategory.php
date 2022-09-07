<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodMenuCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'outlet_id',
        'category_name',
        'description',
     
    ];

    public function foodMenu()
    {
        return $this->hasOne(FoodMenu::class,'id','food_menu_id');
    }



}
