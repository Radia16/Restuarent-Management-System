<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExpenseItem extends Model
{
    use HasFactory;
    protected $fillable = [
        'expense_id',
        'expense_item_name',
        'quantity',
        'price',
    ];
}
