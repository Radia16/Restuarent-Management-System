<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    use HasFactory;

    protected $fillable = [

        'outlet_id',
        'name',
        'purchase_price',
        'alert_qty',
        'code',
        'added_by',
    ];


    public function transfer_items(){
        return $this->morphMany(TransferItem::class,'transferable');
    }

    

}
