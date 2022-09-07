<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Outlet;
use App\Models\Customer;

class CustomerController extends Controller
{
    //

//Cutomer Add
public function Customer2Add(){

    $outletset = Outlet::latest()->get();

    return view('backend.customer.add_customer',compact('outletset'));
}



// Customer Store
public function Customer2Store(Request $request){
    //validate

    // dd($request->all());

    $request->validate([
        'outlet_id'=> "required",
        'name'=> "required",
        'email'=> "required",
        'address'=> "required",
        'dob'=> "required",
        'phone'=> "required",
    ],
    [
        'outlet_id.required' => "Input",
        'name.required' => "Input",
        'email.required' => "Input",
        'address.required' => "Input",
        'dob.required' => "Input",
        'phone.required' => "Input",
    ]);


    // $table->unsignedBigInteger('outlet_id');
    // $table->string('name');
    // $table->string('email')->unique();
    // $table->string('address');
    // $table->date('dob');
    // $table->string('phone');
    // $table->rememberToken();



    Customer::insert([
        'outlet_id' => $request->outlet_id,
        'name' => $request->name,
        'email' => $request->email,
        'address' => $request->address,
        'dob' => $request->dob,
        'phone' => $request->phone,
       


    ]);

    $notification = array(
        'message' => 'Inserted Successfully',
        'alert-type' => 'success'
    );

    return redirect()->route('customer2.view')->with($notification);

    // return redirect()->route('customer.view')->with($notification);
}


// Customer View
public function Customer2View(){
    $customers = Customer::with('outlets')->get();
   $outlet_v = Outlet::orderBy('id','desc')->get();

   



    // $paymentshipping_setup_view = ShippingMethodSetting::with('payment_shipping_set')->get();
    // $paymentshipping_v = PaymentMethod::orderBy('id','desc')->get();
    





    return view ('backend.customer.view_customer',compact('customers','outlet_v'));
}


// Customer Edit
public function Customer2Edit($id){
    $customer_edit = Customer::findorFail($id);

    $outlet_edit = Outlet::latest()->get();


    return view('backend.customer.edit_customer',compact('customer_edit','outlet_edit'));

}


// Customer Update

public function Customer2Update(Request $request){

    $customer_id = $request->id;

    Customer::findOrFail($customer_id)->update([

        'outlet_id' => $request->outlet_id,
        'name' => $request->name,
        'email' => $request->email,
        'address' => $request->address,
        'dob' => $request->dob,
        'phone' => $request->phone,        
       

        //  $table->id();
        //     $table->unsignedBigInteger('outlet_id');
        //     $table->string('name');
        //     $table->string('email')->unique();
        //     $table->string('address');
        //     $table->date('dob');
        //     $table->string('phone');
        //     $table->rememberToken(); 



    ]);

    $notification = array(
    'message' => 'Customer Updated Successfully',
    'alert-type' => 'success'
  );

  return redirect()->route('customer2.view')->with($notification);

  }  // end method



// Customer Delete

public function Customer2Delete($id){

    Customer::findOrFail($id)->delete();

    $notification = array(
    'message' => ' Deleted Successfully',
    'alert-type' => 'success'
  );

  return redirect()->back()->with($notification);

}





}
