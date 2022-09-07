<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeaveApplication extends Model
{
    use HasFactory;

    protected $fillable =[
        'outlet_id',
        'employee_id',
        'leave_type_id',
        'start_date',
        'end_date',
        'days',
        'approve_start',
        'approve_end',
        'approve_day',
        'application',
        'approve'


    ];

    public function leave(){
        return $this->belongsTo(Leave::class,'leave_type_id','id');
    }

    public function employee(){
        return $this->belongsTo(Employee::class,'employee_id','id');
    }
}
