<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{
    use HasFactory;

    // public function foods()
    // {
    //     return $this->morphMany(TransferItem::class, Food::class, 'transferItemAble');
    // }
    // public function ingredients()
    // {
    //     return $this->morphMany(Ingredient::class, 'transferItemAble');
    // }

}
