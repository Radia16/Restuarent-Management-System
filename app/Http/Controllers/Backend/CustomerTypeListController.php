<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Outlet;
use App\Models\CustomerTypeList;



class CustomerTypeListController extends Controller
{


    // //Add CustomerTypeList
    // public function Customer_type_listAdd()
    // {

    //     $outletset = Outlet::latest()->get();



    //     return view('backend.customer_type.add_customer_type',compact('outletset'));  

    // }//end method



    // $table->id();
    // $table->unsignedBigInteger('outlet_id');
    // $table->string('customer_type');

//Store CustomerTypeList

public function Customer_type_listStore(Request $request){

   

    
        $validation = $request->validate(
            [
                'outlet_id'=>'required',

                'customer_type'=>'required',
                
                
            ]);


        
    //data insert
    CustomerTypeList::insert(
    
     [ 


        'outlet_id'=>$request->outlet_id,
        'customer_type'=>$request->customer_type,
       
       
     ]
    
     );

     $notification = array(
        'message' =>  'Customer_Type_List Add Sucessyfuly',
        'alert-type' => 'success'
    );

    return redirect()->back();

    // return redirect()->route('veiw.stock')->with($notification);        
         
    }//end method
    


//View CustomerTypeList

public function Customer_type_listView(){
    $customer_type_view = CustomerTypeList::latest()->get();
    $outletset = Outlet::latest()->get();


    return view('backend.customer_type.add_customer_type',compact('customer_type_view','outletset'));
}//end method




// Edit CustomerTypeList
public function Customer_type_listEdit($id){
    $customer_type =CustomerTypeList::find($id);
    // dd(  $tab);
    return response()->json([
        'customer_type'=>$customer_type

    ]);
    
    
}//end method

// Update CustomerTypeList
public function Customer_type_listUpdate(Request $request){

    
    $customer_type_update =CustomerTypeList::find($request->customer_type_id);

      $customer_type_update->outlet_id = $request->input('outlet_id');
      $customer_type_update->customer_type = $request->input('customer_type');
     
      $customer_type_update->update();

      $notification = array(
        'message' =>  'Customer_Type_List Update Sucessyfuly',
        'alert-type' => 'success'
    );

   



     
    return redirect()->route('customer_type_list.view')->with($notification); 
    
}//end method


// public function Customer_type_listDelete($id){

//     CustomerTypeList::findOrFail($id)->delete();

//     $notification = array(
//     'message' => ' Deleted Successfully',
//     'alert-type' => 'success'
//   );

//   return redirect()->back()->with($notification);

// }



// CustomerTypeList Delete
public function Customer_type_listDelete($id){

    CustomerTypeList::findOrFail($id)->delete();

    $notification = array(
    'message' => ' Deleted Successfully',
    'alert-type' => 'success'
  );

  return redirect()->back()->with($notification);



}


}