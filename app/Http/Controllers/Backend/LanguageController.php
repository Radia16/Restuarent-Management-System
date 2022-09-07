<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Language as ModelsLanguage;
use Illuminate\Http\Request;

use App\Models\Outlet;
use App\Models\Language;



class LanguageController extends Controller
{
    //
    ////Store Kitchen Assign List

public function LanguageStore(Request $request){

   

    
    $validation = $request->validate(
        [
            'outlet_id'=>'required',
            'language_name'=>'required',
           

           
            
        ]);

        // $table->unsignedBigInteger('outlet_id');
        // $table->string('language_name');  
    
//data insert
Language::insert(

 [ 


    'outlet_id'=>$request->outlet_id,
    'language_name'=>$request->language_name,
    
   
   
 ]

 );

 $notification = array(
    'message' =>  'Kitchen Assign Add Sucessyfuly',
    'alert-type' => 'success'
);

return redirect()->back();

// return redirect()->route('veiw.stock')->with($notification);        
     
}//end method


//View Language

public function LanguageView(){
    $language_view = Language::latest()->get();
    $outletset = Outlet::latest()->get();
   

    return view('backend.language.view_language',compact('language_view','outletset'));
}//end method




// Edit Language
public function LanguageEdit($id){
    $language_edit =Language::find($id);
    // dd(  $tab);
    return response()->json([
        'language_edit'=>$language_edit

    ]);
    
    
}//end method





// // Update Language
public function LanguageUpdate(Request $request){

    
    $language_update =Language::find($request->language_id);

      $language_update->outlet_id = $request->input('outlet_id');
      $language_update->language_name = $request->input('language_name');
    
      
     
      $language_update->update();

      $notification = array(
        'message' =>  'Language Update Sucessyfuly',
        'alert-type' => 'success'
    );

   



     
    return redirect()->route('language.view')->with($notification); 
    
}//end method



// Language Delete
public function LanguageDelete($id){

    Language::findOrFail($id)->delete();

    $notification = array(
    'message' => ' Language Deleted Successfully',
    'alert-type' => 'success'
  );

  return redirect()->back()->with($notification);



}

















}


























// $table->unsignedBigInteger('outlet_id');
// $table->string('language_name');