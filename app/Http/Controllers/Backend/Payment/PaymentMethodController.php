<?php

namespace App\Http\Controllers\Backend\Payment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\PaymentMethod;

class PaymentMethodController extends Controller
{
     //payment Add 
     public function PaymentAdd(){
        return view('backend.paymentmethod.payment_add');
    }

    // payment Store
    public function PaymentStore(Request $request){
        //validate

        // dd($request->all());

        $request->validate([
            'outlet_id'=> "required",
            'name'=> "required",
            'status'=> "required",
            'added_by'=> "required",
            
        ],
        [
            'outlet_id.required' => "Input",
            'name.required' => "Input",
            'status.required' => "Input",
            'added_by.required' => "Input",
           
        ]);


        PaymentMethod::insert([
            'outlet_id' => $request->outlet_id,
            'name' => $request->name,
            'status' => $request->status,
            'added_by' => $request->added_by,
               

        ]);

        $notification = array(
			'message' => 'Inserted Successfully',
			'alert-type' => 'success'
		);

        return redirect()->route('payment.view')->with($notification);
    }

     // payment View
     public function PaymentView(){
        $payments = PaymentMethod::latest()->get();
        return view ('backend.paymentmethod.payment_view',compact('payments'));
    }

    // payment Edit
    public function PaymentEdit($id){
        $payment_edit = PaymentMethod::findorFail($id);

        return view('backend.paymentmethod.payment_edit',compact('payment_edit'));

    }


    // payment Update
    public function PaymentUpdate(Request $request){

        $payment_id = $request->id;

        PaymentMethod::findOrFail($payment_id)->update([

            'outlet_id' => $request->outlet_id,
            'name' => $request->name,
            'status' => $request->status,
            'added_by' => $request->added_by,


        ]);

        $notification = array(
        'message' => ' Updated Successfully',
        'alert-type' => 'success'
        );

        return redirect()->route('payment.view')->with($notification);


    }


    // Customer Delete
    public function PaymentDelete($id){

        PaymentMethod::findOrFail($id)->delete();
  
        $notification = array(
        'message' => ' Deleted Successfully',
        'alert-type' => 'success'
      );
  
      return redirect()->back()->with($notification);

}















} // main method
