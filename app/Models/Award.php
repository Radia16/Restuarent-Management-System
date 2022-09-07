<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Award extends Model
{
    use HasFactory;

    protected $fillable =[
        'award_name',
        'description',
        'gift_item',
        'employee_name',
        'date',
        'award_by',
    ];


    // Employee_Name Relationships
    public function employee(){
        return $this->belongsTo(Employee::class,'employee_name','id');
    }


}
