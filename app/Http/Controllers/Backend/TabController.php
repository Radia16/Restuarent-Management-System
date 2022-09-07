<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Outlet;
use App\Models\Tab;

use Intervention\Image\Facades\Image;




class TabController extends Controller
{
    //
      
    // public function TabAdd(){
    //     return view('backend.tab.view_tablee');
    //     }//end method
      




// Table Store
public function TabStore(Request $request){
    //validate

    //  dd($request->all());

    $request->validate([
        'outlet_id'=> "required",
        'table_name'=> "required",
        'capacity'=> "required",
        'position'=> "required",
        'icon'=> "required",
       
       
        
    ],

    [
        'outlet_id.required' => "Input",
        'table_name.required' => "Input",
        'capacity.required' => "Input",
        'position.required' => "Input",
        'icon.required' => "Input",
       
        
       
    ]);

   
// image upload & save
$icon = $request->file('icon');

$name_gen = hexdec(uniqid()).'.'.$icon->getClientOriginalExtension();
Image::make($icon)->resize(50,50)->save('upload/table/'.$name_gen);
$save_url = 'upload/table/'.$name_gen;
// return $save_url;




    Tab::insert([
        'outlet_id' => $request->outlet_id,
        'table_name' => $request->table_name,
        'capacity' => $request->capacity,
        'position' => $request->position,
        'icon' => $save_url,
    ]);

    $notification = array(
        'message' => 'Inserted  Successfully',
        'alert-type' => 'success'
    );

    //  return redirect()->back()->with($notification);

    return redirect()->route('tab.view')->with($notification);
}


// View Tab
public function TabView(){
    $tab_view = Tab::with('outlets')->get();
    $outlet_view = Outlet::orderBy('id','desc')->get();
    
    return view('backend.tab.view_tablee',compact('tab_view','outlet_view'));
}//end method




// Edit Tab
public function TabEdit($id){
    $tab =Tab::find($id);
    // dd(  $tab);
    return response()->json([
        'tab'=>$tab

    ]);
    
    
}//end method




// Update Tab
public function TabUpdate(Request $request){

    
    $tab =Tab::find($request->tab_id);

      $tab->outlet_id = $request->input('outlet_id');
      $tab->table_name = $request->input('table_name');
      $tab->capacity = $request->input('capacity');
      $tab->position = $request->input('position');


    //   $tab->save_url->input('icon');
    //   'icon' => $save_url;

    // image upload & save
    $icon = $request->file('icon');

    $name_gen = hexdec(uniqid()).'.'.$icon->getClientOriginalExtension();
    Image::make($icon)->resize(50,50)->save('upload/table/'.$name_gen);
    $save_url = 'upload/table/'.$name_gen;

    $tab->icon = $save_url;




      $tab->update();
      return redirect()->back();
    
}//end method




public function TabDelete($id){

    Tab::findOrFail($id)->delete();

    $notification = array(
    'message' => ' Deleted Successfully',
    'alert-type' => 'success'
  );

  return redirect()->back()->with($notification);


}


}