<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $guarded = [];

    //outlet relationship
    public function outlets(){
        return $this->belongsTo(Outlet::class,'outlet_id','id');
    }
}
