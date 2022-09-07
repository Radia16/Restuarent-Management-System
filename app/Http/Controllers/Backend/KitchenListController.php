<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\KitchenList;
use Illuminate\Http\Request;
use App\Models\Outlet;



class KitchenListController extends Controller
{
    


////Store Kitchen List

public function KitchenListStore(Request $request){

   

    
    $validation = $request->validate(
        [
            'outlet_id'=>'required',

            'kitchen_name'=>'required',

           
            
        ]);



    
//data insert
    KitchenList::insert(

    [ 


    'outlet_id'=>$request->outlet_id,
    'kitchen_name'=>$request->kitchen_name,
   
   
 ]

 );

 $notification = array(
    'message' =>  'Third_party_customer Add Sucessyfuly',
    'alert-type' => 'success'
);

return redirect()->back();

// return redirect()->route('veiw.stock')->with($notification);        
     
}//end method





//View Kitchen List

public function KitchenListView(){
    $kitchen_list_view = KitchenList::latest()->get();
    $outletset = Outlet::latest()->get();


    return view('backend.kitchen.view_kitchen_list',compact('kitchen_list_view','outletset'));
}//end method







// Edit Kitchen List
public function KitchenListEdit($id){
    $kitchen_list_edit =KitchenList::find($id);
    // dd(  $tab);
    return response()->json([
        'kitchen_list_edit'=>$kitchen_list_edit

    ]);
    
    
}//end method




// // Update Kitchen List
public function KitchenListUpdate(Request $request){

    
    $kitchen_list_update =KitchenList::find($request->kitchen_list_id);

      $kitchen_list_update->outlet_id = $request->input('outlet_id');
      $kitchen_list_update->kitchen_name = $request->input('kitchen_name');
      
     
      $kitchen_list_update->update();

      $notification = array(
        'message' =>  'third_party_customer Update Sucessyfuly',
        'alert-type' => 'success'
    );

   



     
    return redirect()->route('kitchen_list.view')->with($notification); 
    
}//end method







// Kitchen List Delete
public function KitchenListDelete($id){

    KitchenList::findOrFail($id)->delete();

    $notification = array(
    'message' => ' Deleted Successfully',
    'alert-type' => 'success'
  );

  return redirect()->back()->with($notification);



}













}
