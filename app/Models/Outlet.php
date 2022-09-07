<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Outlet extends Model
{
    use HasFactory;

    protected $fillable = [
        'outlet_code',
        'outlet_name',
        'address',
        'phone',
        'email',
        'password',
        'collect_vat',
       
    ];

}
