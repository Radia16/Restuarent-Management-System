<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Purchase;


class PurchaseController extends Controller
{
    //Purchase Add
    public function create()
    {
      return view('backend.purchase.add_purchase');
    }//end method


    public function store(Request $request){
        $validation = $request->validate([
            'outlet_id'=>'required',
            'reference_no'=>'required',
            'supplier'=>'required',
            'ingredients'=>'required',
            'date'=>'required',
            'grand_total'=>'required',
            'paid'=>'required',
            'due'=>'required',
            'sn'=>'required',
        ]);
        //data insert
        Purchase::create([
            'sn'=>$request->sn,
            'outlet_id'=>$request->outlet_id,
            'reference_no'=>$request->reference_no,
            'supplier'=>$request->supplier,
            'ingredients'=>$request->ingredients,
            'date'=>$request->date,
            'grand_total'=>$request->grand_total,
            'paid'=>$request->paid,
            'due'=>$request->due,
        ]);
        $notification = array(
            'message' =>  'Purchase Add Sucessyfuly',
            'alert-type' => 'success'
        );
        return redirect()->route('veiw.purchase')->with($notification);


    }//end method

//View Purchase

public function view(){
    $purchase_view = Purchase::latest()->get();
    return view('backend.purchase.view_purchase',compact('purchase_view'));
}//end method


//Edit Purchase
public function PurchaseEdit($id){

    $purchase_edit= Purchase:: findOrfail($id);
    return view('backend.purchase.edit_purchase', compact('purchase_edit'));

    }//end method


    //Update Purchase

public function PurchaseUpdate(Request $request){
    $purchase_update = $request->id;

    //update date
    Purchase::findOrfail($purchase_update)->update(
        [
            'outlet_id'=>$request->outlet_id,
            'reference_no'=>$request->reference_no,
            'supplier'=>$request->supplier,
            'ingredients'=>$request->ingredients,
            'date'=>$request->date,
            'grand_total'=>$request->grand_total,
            'paid'=>$request->paid,
            'due'=>$request->due,
            'sn'=>$request->sn,
     ]

    );


    $notification = array(
        'message' =>  'Purchase Add Sucessyfuly',
        'alert-type' => 'success'
    );

    return redirect('purchase/view')->with($notification);

    }//end method


    //Purchase Delete


public function PurchaseDelete(Request $request){

    $purchase = Purchase::findOrfail($request->p_id);
    $purchase->delete();

    return redirect()->back();



    }//end method








}//main