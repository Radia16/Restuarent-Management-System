<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StockAdjustment;


class StockAdjustmentController extends Controller
{

//Add Stock Adjustment
public function StockAdjustmentAdd()
{


    return view('backend.stock_adjustment.add_stock_adjustment');  

}//end method


//Store Stock Adjustment

public function StockAdjustmentStore(Request $request){

   
    // $table->id();
    // $table->string('sn');
    // $table->string('reference_no');
    // $table->string('date');
    // $table->string('unit');
    // $table->string('responsible_person');
    // $table->string('note');
    // $table->string('added_by');
    // $table->timestamps();

    
        $validation = $request->validate(
            [
                'sn'=>'required',
                'reference_no'=>'required',
                'date'=>'required',
                'unit'=>'required',
                'responsible_person'=>'required',
                'note'=>'required',
                'added_by'=>'required',
                
                
            ]);


        // if($validation)
        // {
        //     dd('work');
        // }
      
        
    //data insert
    StockAdjustment::insert(
    
     [ 
         
        'sn'=>$request->sn,
        'reference_no'=>$request->reference_no,
        'date'=>$request->date,
        'unit'=>$request->unit,
        'responsible_person'=>$request->responsible_person,
        'note'=>$request->note,
        'added_by'=>$request->added_by,
       
     ]
    
     );

     $notification = array(
        'message' =>  'Stock Adjustment Add Sucessyfuly',
        'alert-type' => 'success'
    );

    return redirect()->route('stock_adj.view')->with($notification);
    return redirect()->back();       
         
    }//end method


    //View Stock Adjustment

public function StockAdjustmentView(){
    $stock_adj_view = StockAdjustment::latest()->get();
    return view('backend.stock_adjustment.view_stock_adjustment',compact('stock_adj_view'));
}//end method


//Edit Stock Adjustment
public function StockAdjustmentEdit($id){

    $stock_adjustment_edit= StockAdjustment:: findOrfail($id);
    return view('backend.stock_adjustment.edit_stock_adjustment', compact('stock_adjustment_edit'));
    
    }//end method


    //Update Stock Adjustment

public function StockAdjustmentUpdate(Request $request){
    $stock_adjustment_update = $request->id;
       
    //update date
    StockAdjustment::findOrfail($stock_adjustment_update)->update(
        [  
            'sn'=>$request->sn,
            'reference_no'=>$request->reference_no,
            'date'=>$request->date,
            'unit'=>$request->unit,
            'responsible_person'=>$request->responsible_person,
            'note'=>$request->note,
            'added_by'=>$request->added_by,
            
     ]
    
    );


    $notification = array(
        'message' =>  'StockAdjustment Updated Sucessyfuly',
        'alert-type' => 'success'
    );
    
    return redirect('stock_adj/view')->with($notification);
    
    }//end method


    //Stock adjustment Delete


public function StockAdjustmentDelete(Request $request){

    $stock = StockAdjustment::findOrfail($request->p_id);
    $stock->delete();

    return redirect()->back();
    

    
    }//end method






}
