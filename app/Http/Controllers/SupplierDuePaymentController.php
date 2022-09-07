<?php

namespace App\Http\Controllers;
use App\Models\SupplierDuePayment;
use Illuminate\Http\Request;

class SupplierDuePaymentController extends Controller
{

    //Add SupplierDuePayment
    public function SupplierDuePaymentAdd()
    {
        return view('backend.supplier_due_payment.add_supplier_due_payment');
    }//end method

    //Store SupplierDuePayment
    public function SupplierDuePaymentStore(Request $request){
        // dd($request->all());
        $request->validate([
            'sn'=>'required',
            'date'=>'required',
            'supplier'=>'required',
            'amount'=>'required',
            'note'=>'required',
            'added_by'=>'required',
        ]);

        //data insert
        SupplierDuePayment::insert([
            'sn'=>$request->sn,
            'date'=>$request->date,
            'supplier'=>$request->supplier,
            'amount'=>$request->amount,
            'note'=>$request->note,
            'added_by'=>$request->added_by,
        ]);

        $notification = array(
            'message' =>  ' SupplierDuePayment Add Sucessyfuly',
            'alert-type' => 'success'
        );
        return redirect('supplier_p_due/view')->with($notification);

    }//end method

    //View SupplierDuePayment
    public function SupplierDuePaymentView(){
        $SupplierDuePayment_view = SupplierDuePayment::latest()->get();
        return view('backend.supplier_due_payment.view_supplier_due_payment',compact('SupplierDuePayment_view'));
    }//end method


   //Edit SupplierDuePayment
   public function SupplierDuePaymentEdit($id){
        $SupplierDuePayment_edit= SupplierDuePayment:: findOrfail($id);
        return view('backend.supplier_due_payment.edit_supplier_due_payment', compact('SupplierDuePayment_edit'));
    }//end method


    //Update SupplierDuePayment
    public function SupplierDuePaymentUpdate(Request $request){
        $SupplierDuePayment_update = $request->id;
        //update date
        SupplierDuePayment::findOrfail($SupplierDuePayment_update)->update([
            'sn'=>$request->sn,
            'date'=>$request->date,
            'supplier'=>$request->supplier,
            'amount'=>$request->amount,
            'note'=>$request->note,
            'added_by'=>$request->added_by,
        ]);
        $notification = array(
            'message' =>  'Table Add Sucessyfuly',
            'alert-type' => 'success'
        );
        return redirect('supplier_p_due/view')->with($notification);

    }//end method


    //Delete Supplier Due Payment
    public function SupplierDuePaymentDelete(Request $request){
        $SupplierDuePayment_delete = SupplierDuePayment::findOrfail($request->p_id);
        $SupplierDuePayment_delete->delete();
        return redirect()->back();
    }//end method

}