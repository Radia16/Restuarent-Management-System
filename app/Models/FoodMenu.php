<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodMenu extends Model
{
    use HasFactory;
    protected $fillable = [
        'outlet_id',
        'name',
        'code',
        'category',
        'ingredient_consumptions',
        'sale_price',
        'vat',
        'description',
        'featured_photo',
    ];

   
  public function cat(){

    return $this->belongsTo(FoodMenuCategory::class);

  }


}
