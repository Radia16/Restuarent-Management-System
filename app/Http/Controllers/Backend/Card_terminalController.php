<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CardTerminal;
use App\Models\Outlet;



class Card_terminalController extends Controller
{
    //



////Store Card_terminal

public function Card_terminalStore(Request $request){

   

    
    $validation = $request->validate(
        [
            'outlet_id'=>'required',

            'card_terminal_name'=>'required',

           
            
        ]);


        // $table->unsignedBigInteger('outlet_id');
        // $table->string('company_name');
        // $table->string('commission');
        // $table->string('address');




    
//data insert
CardTerminal::insert(

 [ 


    'outlet_id'=>$request->outlet_id,
    'card_terminal_name'=>$request->card_terminal_name,
    
   
   
 ]

 );

 $notification = array(
    'message' =>  'Card Terminal Add Sucessyfuly',
    'alert-type' => 'success'
);



return redirect()->back();

// return redirect()->route('veiw.stock')->with($notification);        
     
}//end method



//View Card_terminal

public function Card_terminalView(){
    $card_terminal_view = CardTerminal::latest()->get();
    $outletset = Outlet::latest()->get();


    return view('backend.card_terminal.add_card_terminal',compact('card_terminal_view','outletset'));
}//end method


// Edit Card_terminal
public function Card_terminalEdit($id){
    $card_terminal_edit =CardTerminal::find($id);
    // dd(  $tab);
    return response()->json([
        'card_terminal_edit'=>$card_terminal_edit

    ]);
    
    
}//end method



// // Update Card_terminal
public function Card_terminalUpdate(Request $request){

    
    $card_terminal_update =CardTerminal::find($request->card_terminal_id);

      $card_terminal_update->outlet_id = $request->input('outlet_id');
      $card_terminal_update->card_terminal_name = $request->input('card_terminal_name');
     
     
      $card_terminal_update->update();

      $notification = array(
        'message' =>  'CardTerminal Update Sucessyfuly',
        'alert-type' => 'success'
    );

   



     
    return redirect()->route('card_terminal.view')->with($notification); 
    
}//end method



// Third_party_customer Delete
public function Card_terminalDelete($id){

    CardTerminal::findOrFail($id)->delete();

    $notification = array(
    'message' => ' Deleted Successfully',
    'alert-type' => 'success'
  );

  return redirect()->back()->with($notification);



}




}
