<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UnavailableDay;
use App\Models\Outlet;



class UnavailableDayController extends Controller
{
    //

     ////Add UnavailableDay
     public function UnavailableDayAdd()
     {
 
        $outletset = Outlet::latest()->get();

         return view('backend.reservation.add_unavailableday',compact('outletset'));  
 
     }//end method



     //Store UnavailableDay
public function UnavailableDayStore(Request $request){

   
    // dd($request->all());
        
    
        $validation = $request->validate(
            [
                'outlet_id'=>'required',
                'unavailable_date'=>'required',
                'available_time'=>'required',  
                
            ]);
      
       
        
    //data insert
    UnavailableDay::insert(
    
     [ 
         
        'outlet_id'=>$request->outlet_id,
        'unavailable_date'=>$request->unavailable_date,
        'available_time'=>$request->available_time,
     ]
    
     );

     $notification = array(
        'message' =>  'unavailable_day Added Sucessyfuly',
        'alert-type' => 'success'
    );

    
    return redirect('unavailable_day/view')->with($notification);
        
         
    }//end method


    //View UnavailableDay

    public function UnavailableDayView(){
        $unavailable_day_view = UnavailableDay::latest()->get();
        $outletset = Outlet::latest()->get();


        return view('backend.reservation.view_unavailable_day',compact('unavailable_day_view'));
    }//end method

    
    //Edit UnavailableDay
public function UnavailableDayEdit($id){

    $unavailable_day_edit= UnavailableDay:: findOrfail($id);
    $outletset = Outlet::latest()->get();

    return view('backend.reservation.edit_unavailable_day', compact('unavailable_day_edit','outletset'));
    
    }//end method



    
//Update UnavailableDay
public function UnavailableDayUpdate(Request $request){
    $unavailable_day_update = $request->id;
       
    //update date
    UnavailableDay::findOrfail($unavailable_day_update)->update(
        [  
        'si'=>$request->si,
        'unavailable_date'=>$request->unavailable_date,
        'available_time'=>$request->available_time,
        
     ]

    //  $table->id();
    //  $table->string('si');
    //  $table->date('unavailable_date');
    //  $table->time('available_time');
    
    );


    $notification = array(
        'message' =>  'UnavailableDay Updated Sucessyfuly',
        'alert-type' => 'success'
    );
    
    return redirect('unavailable_day/view')->with($notification);
    
    }//end method


//Delete UnavailableDay


public function UnavailableDayDelete(Request $request){

    $unavailable_day_delete = UnavailableDay::findOrfail($request->p_id);
    $unavailable_day_delete->delete();

    return redirect()->back();



}//end method



 
}
