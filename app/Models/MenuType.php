<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuType extends Model
{
    use HasFactory;
    protected $fillable = [
        'outlet_id',
        'icon_image',
        'menu_type',
        'food_name',
        'status',

    ];
            //relation in outlet table
                public function outlets(){
                    return $this->belongsTo(Outlet::class,'outlet_id','id');

                }


}


