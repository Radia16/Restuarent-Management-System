<?php

namespace App\Http\Controllers\Backend\payment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ShippingMethodSetting;
use App\Models\PaymentMethod;



class ShippingMethodSettingController extends Controller
{
     
//Add Shipping Method Setting

    public function ShippingMethodAdd(){
        // dd('this is is ');
      $paymethodset = PaymentMethod::latest()->get();
      


     
    //   dd($outlets);
        return view('backend.paymentmethod.add_shipping_method',compact('paymethodset'));
        }//end method




// Shipping Method Setting Store
public function ShippingMethodStore(Request $request){
  //validate

  // dd($request->all());

  $request->validate([
      'outlet_id'=> "required",
      'shipping_method_name'=> "required",
      'shipping_rate'=> "required",
      'payment_method_id'=> "required",
      
     
      
  ],


  // $table->id();
  // $table->string('outlet_id');//foreign key
  // $table->string('shipping_method_name');
  // $table->string('shipping_rate');
  // $table->string('payment_method_id');//foreign key

  [
      'outlet_id.required' => "Input",
      'shipping_method_name.required' => "Input",
      'shipping_rate.required' => "Input",
      'payment_method_id.required' => "Input",
      
      
     
  ]);

 
  ShippingMethodSetting::insert([

      'outlet_id' => $request->outlet_id,
      'shipping_method_name' => $request->shipping_method_name,
      'shipping_rate' => $request->shipping_rate,
      'payment_method_id' => $request->payment_method_id,
      
     
         

  ]);

  $notification = array(
      'message' => 'Inserted Successfully',
      'alert-type' => 'success'
  );

   return redirect()->back();

}


// View Shipping Method Setting
public function ShippingMethodView(){
  $paymentshipping_setup_view = ShippingMethodSetting::with('payment_shipping_set')->get();
  $paymentshipping_v = PaymentMethod::orderBy('id','desc')->get();
  
  // dd($availablefood_view);
  // dd($availablefood_view);
  return view('backend.paymentmethod.view_shipping_method',compact('paymentshipping_setup_view','paymentshipping_v'));
}//end method






//Edit Shipping Method Setting
public function ShippingMethodEdit($id){  

  $payments = PaymentMethod::latest()->get();

  

  $paymentshipping_setup_edit= ShippingMethodSetting::findOrfail($id);

  // dd($payment_setup_edit);
  return view('backend.paymentmethod.edit_shipping_method', compact('payments','paymentshipping_setup_edit'));
  
  }











  public function ShippingMethodDelete($id){

    ShippingMethodSetting::findOrFail($id)->delete();

    $notification = array(
    'message' => ' Deleted Successfully',
    'alert-type' => 'success'
  );

  return redirect()->back()->with($notification);












}


}