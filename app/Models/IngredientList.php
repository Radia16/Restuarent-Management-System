<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IngredientList extends Model
{
    use HasFactory;

    protected $fillable = [

        'ingredient_unit_id',
        'ingredient_id',
        'stock_limit',
        'status',
    ];


    // Ingredient List  relationship with Ingredient
    public function ingredient()
    {
        return $this->belongsTo(Ingredient::class, 'ingredient_id', 'id');
    }

    // Ingredient List relationship with Ingredient Unit
    public function units()
    {
        return $this->belongsTo(IngredientUnit::class, 'ingredient_unit_id', 'id');
    }
}
