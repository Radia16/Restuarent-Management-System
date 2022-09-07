<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\KitchenAssign;
use App\Models\KitchenList;
use Illuminate\Http\Request;
use App\Models\Outlet;
use App\Models\Customer;



class KitchenAssignController extends Controller
{

////Store Kitchen Assign List

public function KitchenAssignStore(Request $request){

   

    
    $validation = $request->validate(
        [
            'outlet_id'=>'required',
            'kitchen_list_id'=>'required',
            'customer_id'=>'required',


           
            
        ]);

        // $table->unsignedBigInteger('outlet_id');//foreign key
        // $table->string('kitchen_list_id');//foreign key
        // $table->string('user_id');//foreign key

    
//data insert
KitchenAssign::insert(

 [ 


    'outlet_id'=>$request->outlet_id,
    'kitchen_list_id'=>$request->kitchen_list_id,
    'customer_id'=>$request->customer_id,

   
   
 ]

 );

 $notification = array(
    'message' =>  'Kitchen Assign Add Sucessyfuly',
    'alert-type' => 'success'
);

return redirect()->back();

// return redirect()->route('veiw.stock')->with($notification);        
     
}//end method


//View Kitchen Assign List

public function KitchenAssignView(){
    $kitchen_assign_view = KitchenAssign::latest()->get();
    $outletset = Outlet::latest()->get();
    $customerset = Customer::latest()->get();
    $kitchen_listset = KitchenList::latest()->get();




    return view('backend.kitchen.view_kitchen_assign',compact('kitchen_assign_view','outletset','customerset','kitchen_listset'));
}//end method





// Edit Kitchen Assign List
public function KitchenAssignEdit($id){
    $kitchen_assign_edit =KitchenAssign::find($id);
    // dd(  $tab);
    return response()->json([
        'kitchen_assign_edit'=>$kitchen_assign_edit

    ]);
    
    
}//end method




// // Update Kitchen Assign List
public function KitchenAssignUpdate(Request $request){

    
    $kitchen_assign_update =KitchenAssign::find($request->kitchen_assign_id);

      $kitchen_assign_update->outlet_id = $request->input('outlet_id');
      $kitchen_assign_update->kitchen_list_id = $request->input('kitchen_list_id');
      $kitchen_assign_update->customer_id = $request->input('customer_id');

      
     
      $kitchen_assign_update->update();

      $notification = array(
        'message' =>  'kitchen_assign Update Sucessyfuly',
        'alert-type' => 'success'
    );

   



     
    return redirect()->route('kitchen_list.view')->with($notification); 
    
}//end method



//  Kitchen Assign List Delete
public function KitchenAssignDelete($id){

    KitchenAssign::findOrFail($id)->delete();

    $notification = array(
    'message' => ' Deleted Successfully',
    'alert-type' => 'success'
  );

  return redirect()->back()->with($notification);



}










}
