<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;
    protected $fillable = [
        'employee_name',
        'employee_id',
        'day',
        'check_in',
        'check_out',
    ];


    function covertToTime($value){
        if($value == null){
            return null;
        }
        return date('h:i:s a',strtotime($value));
    }



    public function getDiffernceOfState($time1,$time2){
        if($time1 == null || $time2 == null){
            return null;
        }
        //    return date('H:i:s',strtotime($time2));
           $start_time  = new \DateTime($time1);
           $end_time    = new \DateTime($time2);
          $since_start  = $start_time->diff($end_time);
        // dd($since_start);
        // echo $since_start->days.' days total<br>';
        // echo $since_start->y.' years<br>';
        // echo $since_start->m.' months<br>';
        // echo $since_start->d.' days<br>';
        // echo $since_start->h.' hours<br>';
        // echo $since_start->i.' minutes<br>';
        // echo $since_start->s.' seconds<br>';
           return $since_start->h.":".$since_start->i.":".$since_start->s;
    }

}
