<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Outlet;

class ReservationController extends Controller
{
    //Add Reservation
    public function ReservationAdd()
    {
        $outletset = Outlet::latest()->get();
        return view('backend.reservation.add_reservation', compact('outletset'));  
    }//end method
//Store Reservation
public function ReservationStore(Request $request){
    // dd($request->all());
        $validation = $request->validate(
            [
                'outlet_id'=>'required',
                'customer_name'=>'required',
                'table_id'=>'required',
                'person_number'=>'required',
                'start_time'=>'required',
                'end_time'=>'required',
                'date'=>'required',
                'status'=>'required',
            ]);


// $table->unsignedBigInteger('outlet_id');
// $table->string('customer_name');
// $table->unsignedBigInteger('table_id');
// $table->integer('person_number');
// $table->time('start_time');
// $table->time('end_time');
// $table->date('date');
// $table->tinyInteger('status')->default(0);



    //data insert
    Reservation::insert(
     [
        'outlet_id'=>$request->outlet_id,
        'customer_name'=>$request->customer_name,
        'table_id'=>$request->table_id,
        'person_number'=>$request->person_number,
       'start_time'=>$request->start_time,
       'end_time'=>$request->end_time,
        'date'=>$request->date,
        'status'=>$request->status,
     ]
     );
     $notification = array(
        'message' =>  'Reservation Add Sucessyfuly',
        'alert-type' => 'success'
    );
    return redirect('reservation/view')->with($notification);

    }//end method

    //View Reservation
    public function ReservationView(){
        $reservation_view = Reservation::latest()->get();
        return view('backend.reservation.view_reservation',compact('reservation_view'));
    }//end method

    //Edit Reservation
public function ReservationEdit($id){
    $reservation_edit= Reservation:: findOrfail($id);
    $outletset = Outlet::latest()->get();

    return view('backend.reservation.edit_reservation', compact('reservation_edit','outletset'));
    }//end method

//Update Reservation
public function ReservationUpdate(Request $request){
    $reservation_update = $request->id;
    //update date
    Reservation::findOrfail($reservation_update)->update(
        [  
            'outlet_id'=>$request->outlet_id,
        'customer_name'=>$request->customer_name,
        'table_id'=>$request->table_id,
        'person_number'=>$request->person_number,
       'start_time'=>$request->start_time,
       'end_time'=>$request->end_time,
        'date'=>$request->date,
        'status'=>$request->status,
     ]
    );
    $notification = array(
        'message' =>  'Reservation Update Sucessyfuly',
        'alert-type' => 'success'
    );
    return redirect('reservation/view')->with($notification);
    }//end method
//Delete Reservation
public function ReservationDelete(Request $request){
    $reservation_delete = Reservation::findOrfail($request->p_id);
    $reservation_delete->delete();
    return redirect()->back();
    }//end method
}