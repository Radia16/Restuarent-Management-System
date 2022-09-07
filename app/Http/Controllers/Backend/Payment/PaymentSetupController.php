<?php

namespace App\Http\Controllers\Backend\Payment;

use App\Http\Controllers\Controller;
use App\Models\PaymentMethod;
use App\Models\PaymentSetup;
use Illuminate\Http\Request;
use App\Http\Controllers\Backend\Payment\PaymentMethodController;
use App\Models\Outlet;

class PaymentSetupController extends Controller
{
    
    
    public function PaymentMethodSetupAdd(){
        // dd('this is is ');
      $paymethodset = PaymentMethod::latest()->get();
      $outletset = Outlet::latest()->get();


     
    //   dd($outlets);
        return view('backend.paymentmethod.add_payment_method_setup' ,compact('paymethodset','outletset'));
        }//end method


// payment methos setup Store
public function PaymentMethodSetupStore(Request $request){
    //validate

    // dd($request->all());

    $request->validate([
        'outlet_id'=> "required",
        'payment_method_id'=> "required",
        'marchant_id_or_application_id'=> "required",
        'currency'=> "required",
        'mode'=> "required",
        'status'=> "required",
       
        
    ],

    [
        'outlet_id.required' => "Input",
        'payment_method_id.required' => "Input",
        'marchant_id_or_application_id.required' => "Input",
        'currency.required' => "Input",
        'mode.required' => "Input",
        'status.required' => "Input",
        
       
    ]);

    // 'outlet_id',
    // 'payment_method_name',
    // 'marchant_id/application_id',
    // 'currency',
    // 'mode',
    // 'status',




    PaymentSetup::insert([

        'outlet_id' => $request->outlet_id,
        'payment_method_id' => $request->payment_method_id,
        'marchant_id_or_application_id' => $request->marchant_id_or_application_id,
        'currency' => $request->currency,
        'mode' => $request->mode,
        'status' => $request->status,
       
           

    ]);

    $notification = array(
        'message' => 'Inserted Successfully',
        'alert-type' => 'success'
    );

    // return redirect()->back();

    return redirect()->route('payment_method_setup.view')->with($notification);
}

// View payment method setup
public function PaymentMethodSetupView(){
    $paymentmethod_setup_view = PaymentSetup::with('paymentsetup')->get();
    $paymentsetup_v = PaymentMethod::orderBy('id','desc')->get();
    
    // dd($availablefood_view);
    // dd($availablefood_view);
    return view('backend.paymentmethod.view_payment_method_setup',compact('paymentmethod_setup_view','paymentsetup_v'));
}//end method






//Edit payment method setup
public function PaymentMethodSetupEdit($id){

    $payments = PaymentMethod::latest()->get();

    

    $payment_setup_edit= PaymentSetup:: findOrfail($id);

    // dd($payment_setup_edit);
    return view('backend.paymentmethod.edit_payment_method_setup', compact('payments','payment_setup_edit'));
    
    }







// // Edit payment method setup
// public function PaymentEdit($id){
//     $payment_edit = PaymentMethod::findorFail($id);

//     return view('backend.paymentmethod.payment_edit',compact('payment_edit'));

// }



// Update payment method setup
public function ReservationSettingUpdate(Request $request){
    $payment_setup_update = $request->id;
       

    // SubCategory::findOrFail($subcat_id)->update([
    //update date
    PaymentSetup::findOrfail($payment_setup_update)->update(
        [  
 
            // 'company_id'=>$request->company_id,
            // 'cdept_id'=>$request->cdept_id,
            // 'name'=>$request->name,

           
        'outlet_id' => $request->outlet_id,
        'payment_method_id' => $request->payment_method_id,
        'marchant_id_or_application_id' => $request->marchant_id_or_application_id,
        'currency' => $request->currency,
        'mode' => $request->mode,
        'status' => $request->status,
            
           
     ]
    
    );

    $notification = array(
        'message' => 'Updated Successfully',
        'alert-type' => 'success'
    );

    // return redirect()->back();

    return redirect()->route('payment_method_setup.view')->with($notification);




    
    }//end method









public function PaymentMethodSetupDelete($id){

    PaymentSetup::findOrFail($id)->delete();

    $notification = array(
    'message' => ' Deleted Successfully',
    'alert-type' => 'success'
  );

  return redirect()->back()->with($notification);


// //payment methos setup Delete
// public function PaymentMethodSetupDelete(Request $request, $id){
//     // return $id;
//     $paymentmethod_setup_delete = PaymentSetup::findOrfail($request->p_id);
//     $paymentmethod_setup_delete->delete();

//     return redirect()->back();
// }//end method





}


}
