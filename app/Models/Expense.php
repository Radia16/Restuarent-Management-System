<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;

    protected $fillable = [
        'outlet_id',
        'employee_id',
        'total_amount',
        'image',
        'note',
        'added_by',

    ];

    // Expense Item relationships
    public function expenseitem(){
        return $this->hasMany(ExpenseItem::class,'expense_id','id');

    }

    // employee table relationships
    public function employee(){
        return $this->belongsTo(Employee::class,'employee_id','id');
    }
}
