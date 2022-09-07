<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReservationSetting;


class ReservationSettingController extends Controller
{
    //
    
    //Add Reservation Setting
    public function ReservationSettingAdd()
    {


        return view('backend.reservation.add_reservation_setting');  

    }//end method



//Store Reservation Setting
public function ReservationSettingStore(Request $request){

   
    // dd($request->all());
        
    
        $validation = $request->validate(
            [
                'opening_time'=>'required',
                'close_time'=>'required',
                'max_reserve_person'=>'required',
               
                
                
            ]);

            // $table->id();
            // $table->time('opening_time');
            // $table->time('close_time');
            // $table->string('max_reserve_person');
            // $table->timestamps();
 
        
    //data insert
    ReservationSetting::insert(
    
     [ 
         
        'opening_time'=>$request->opening_time,
        'close_time'=>$request->close_time,
        'max_reserve_person'=>$request->max_reserve_person,
       
        
     ]
    
     );

     $notification = array(
        'message' =>  'Table Add Sucessyfuly',
        'alert-type' => 'success'
    );

    
    return redirect('reservation_setting/view')->with($notification);
        
         
    }//end method

//View Reservation Setting

public function ReservationSettingView(){
    $reservation_setting_view = ReservationSetting::latest()->get();
    return view('backend.reservation.view_reservation_setting',compact('reservation_setting_view'));
}//end method

 //Edit Reservation Setting
 public function ReservationSettingEdit($id){

    $reservation_setting_edit= ReservationSetting:: findOrfail($id);
    return view('backend.reservation.edit_reservation_setting', compact('reservation_setting_edit'));
    
    }//end method


    //Update Reservation Setting
 public function ReservationSettingUpdate(Request $request){
    $reservation_setting_update = $request->id;
       
    //update date
    ReservationSetting::findOrfail($reservation_setting_update)->update(
        [  
        'opening_time'=>$request->opening_time,
        'close_time'=>$request->close_time,
        'max_reserve_person'=>$request->max_reserve_person,
        
     ]

    //  $table->id();
    //  $table->time('opening_time');
    //  $table->time('close_time');
    //  $table->string('max_reserve_person');
    //  $table->timestamps();

    
    );


    $notification = array(
        'message' =>  'Stock Add Sucessyfuly',
        'alert-type' => 'success'
    );
    
    return redirect('reservation_setting/view')->with($notification);
    
    }//end method
    

//Delete Reservation Setting


public function ReservationSettingDelete(Request $request){

    $reservation_setting_delete = ReservationSetting::findOrfail($request->p_id);
    $reservation_setting_delete->delete();

    return redirect()->back();



    
    }//end method


}
