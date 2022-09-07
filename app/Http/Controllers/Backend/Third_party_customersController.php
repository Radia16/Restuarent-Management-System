<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Outlet;
use App\Models\Third_party_customer;


class Third_party_customersController extends Controller
{
    ////Store CustomerTypeList

public function Third_party_customerStore(Request $request){

   

    
    $validation = $request->validate(
        [
            'outlet_id'=>'required',

            'company_name'=>'required',

            'commission'=>'required',

            'address'=>'required',
            
            
        ]);




    
//data insert
Third_party_customer::insert(

 [ 


    'outlet_id'=>$request->outlet_id,
    'company_name'=>$request->company_name,
    'commission'=>$request->commission,
    'address'=>$request->address,
   
   
 ]

 );

 $notification = array(
    'message' =>  'Third_party_customer Add Sucessyfuly',
    'alert-type' => 'success'
);

return redirect()->back();

// return redirect()->route('veiw.stock')->with($notification);        
     
}//end method





//View Third_party_customer

public function Third_party_customerView(){
    $third_party_customer_view = Third_party_customer::latest()->get();
    $outletset = Outlet::latest()->get();


    return view('backend.third_party_customer.add_third_party_customer',compact('third_party_customer_view','outletset'));
}//end method



// Edit Third_party_customer
public function Third_party_customerEdit($id){
    $third_party_customer_edit =Third_party_customer::find($id);
    // dd(  $tab);
    return response()->json([
        'third_party_customer_edit'=>$third_party_customer_edit

    ]);
    
    
}//end method




// // Update Third_party_customer
public function Third_party_customerUpdate(Request $request){

    
    $third_party_customer_update =Third_party_customer::find($request->third_party_customer_id);

      $third_party_customer_update->outlet_id = $request->input('outlet_id');
      $third_party_customer_update->company_name = $request->input('company_name');
      $third_party_customer_update->commission = $request->input('commission');
      $third_party_customer_update->address = $request->input('address');
     
      $third_party_customer_update->update();

      $notification = array(
        'message' =>  'third_party_customer Update Sucessyfuly',
        'alert-type' => 'success'
    );

   



     
    return redirect()->route('third_party_customer.view')->with($notification); 
    
}//end method






// Third_party_customer Delete
public function Third_party_customerDelete($id){

    Third_party_customer::findOrFail($id)->delete();

    $notification = array(
    'message' => ' Deleted Successfully',
    'alert-type' => 'success'
  );

  return redirect()->back()->with($notification);



}




}
