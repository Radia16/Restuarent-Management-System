<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stock;
use App\Models\Outlet;



class StockController extends Controller
{
    //Add Stock
    public function StockAdd()
    {

        $outletset = Outlet::latest()->get();


        return view('backend.stock.add_stock',compact('outletset'));  

    }//end method


//Store Stock

    public function StockStore(Request $request){

   
        // dd($request->all());

        
        // $table->id();
        // $table->string('code');
        // $table->string('category');
        // $table->string('unit');
        // $table->string('alert_qty');
        // $table->timestamps();

        
            $validation = $request->validate(
                [
                    'outlet_id'=>'required',

                    'code'=>'required',
                    'category'=>'required',
                    'unit'=>'required',
                    'alert_qty'=>'required',
                    
                ]);
    
    
            // if($validation)
            // {
            //     dd('work');
            // }
          
            
        //data insert
        Stock::insert(
        
         [ 


            'outlet_id'=>$request->outlet_id,
            'code'=>$request->code,
            'category'=>$request->category,
            'unit'=>$request->unit,
            'alert_qty'=>$request->alert_qty,
           
         ]
        
         );
    
         $notification = array(
            'message' =>  'Stock Add Sucessyfuly',
            'alert-type' => 'success'
        );
    
        return redirect()->back();

        //  return redirect()->route('veiw.stock')->with($notification);        
             
        }//end method



//View Stock

public function StockView(){
    $stock_view = Stock::latest()->get();
    return view('backend.stock.view_stock',compact('stock_view'));
}//end method


//Edit Stock
public function StockEdit($id){

    $stock_edit= Stock:: findOrfail($id);
    $outlet_edit = Outlet::latest()->get();

    return view('backend.stock.edit_stock', compact('stock_edit','outlet_edit'));
    
    }//end method



//Update Stock
public function StockUpdate(Request $request){
    $stock_update = $request->id;
       
    //update date
    Stock::findOrfail($stock_update)->update(
        [  
             'code'=>$request->code,
             'category'=>$request->category,
             'unit'=>$request->unit,
             'alert_qty'=>$request->alert_qty,
     ]
    
    );


    $notification = array(
        'message' =>  'Stock Add Sucessyfuly',
        'alert-type' => 'success'
    );
    
    return redirect('stock/view')->with($notification);
    
    }//end method



//Stock Delete


public function StockDelete(Request $request){

    $stock = Stock::findOrfail($request->p_id);
    $stock->delete();

    return redirect()->back();
    

    
    }//end method







}
