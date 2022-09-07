<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Employee extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'outlet_id',
        'name',
        'email',
        'password',

        'father_name',
        'mother_name',
        'dob',
        'gender',
        'maritial_status',
        'phone',
        'e_phone',
        'address',
        'par_address',
        'image',

        'employee_id',
        'department',
        'designation',
        'doj',
        'salary',
        'nid',
        'a_qua',
        'p_qua',
        'experience',

        'acc_name',
        'acc_num',
        'bank_name',
        'branch',
        'code',
        'file',
        'agfile',


    ];


    // // Outlet Relationships
    // public function outlet(){
    //     return $this->belongsTo(Outlet::class,'outlet_id','id');
    // }

    
    // Department Relationships
    public function dep(){
        return $this->belongsTo(Department::class,'department','id');
    }


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];






}
