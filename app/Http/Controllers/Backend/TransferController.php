<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Food;
use App\Models\Ingredient;
use App\Models\Transfer;
use App\Models\TransferItem;
use App\Models\TransferOutlet;
use Illuminate\Http\Request;

class TransferController extends Controller
{
    //
    //transfer deshbord
    public function TransferAdd()
    {

        // $item = Transfer::find(1);
        // $transfer_items = TransferItem::where('transfer_id',$item->id)->get();
        // $transfer_items = collect([]);
        // foreach($transfer_items as $transfer_item){
        //     if($transfer_item->type == 'food')
        //     {
        //           $food = Food::find($transfer_item->transferable_id);
        //           $transfer_items->push($food);
        //     }
        //     else if ($transfer_item->type =='ingredient'){
        //         $ingredient = Ingredient::find($transfer_item->transferable_id);
        //         $transfer_items->push($ingredient);
        //     }
        // compact('transfer_items')
        // }


        return view('backend.transfer.add_transfer',);
    } //end method


    public function getTransferTypeList($transfer_type)
    {
        $items = null;
        if ($transfer_type === 'food') {
            $items = Food::orderBy('id', 'desc')->get();
        } elseif ($transfer_type === 'ingredients') {
            $items = Ingredient::orderBy("id", 'desc')->get();
        }
        return response()->json(compact('items'));
    }
    public function getTransferItem($type, $transferItem_id)
    {
        $item = null;
        if ($type === 'food') {
            $item = Food::find($transferItem_id);
        } elseif ($type === 'ingredients') {
            $item = Ingredient::find($transferItem_id);
        }
        return response()->json(compact('item'));
    } //  end nur bhai method



    // transfer outlet store
    public function TransferOutletStore(Request $request)
    {

        // dd($request->all());
        // validation
        $request->validate([
            'reference_no' => 'required',
            'date' => 'required',
            'to_outlet' => 'required',
            'status' => 'required',
            'transfer_type' => 'required',
            'aboute_project' => 'required',
            'qty_amount' => 'required',
        ], [
            'reference_no.required' => 'Input ',
            'date.required' => 'Input',
            'to_outlet.required' => 'Input ',
            'status.required' => 'Input ',
            'transfer_type.required' => 'Input ',
            'aboute_project.required' => 'Input ',
            'qty_amount.required' => 'Input ',

        ]);
        // Brand Insert
        TransferOutlet::insert([
            'reference_no' => $request->reference_no,
            'date' => $request->date,
            'to_outlet' => $request->to_outlet,
            'status' => $request->status,
            'transfer_type' => $request->transfer_type,
            'aboute_project' => $request->aboute_project,
            'qty_amount' => $request->qty_amount,


        ]);

        $notification = array(
            'message' =>  'Outlet Add Sucessyfuly',
            'alert-type' => 'success'
        );
        // return redirect()->back()->with($notification);
        return redirect('transfer/view')->with($notification);
    }



    //View transfer
    public function TransferOutletView()
    {
        $transfer_view = TransferOutlet::latest()->get();
        return view('backend.transfer.view_transfer', compact('transfer_view'));
    } //end method



    //Transfer Delete
    public function TransferOutletDelete(Request $request)
    {
        $outlet = TransferOutlet::findOrfail($request->p_id);
        $outlet->delete();
        return redirect()->back();
    } //end method




    ///////////////////////////////////////////////// edit part/////////////////////////////////////

    //Edit transfer outlet
    public function TransferOutletEdit($id)
    {
        $transferoutlet_edit = TransferOutlet::findOrfail($id);
        $notification = array(
            'message' =>  'edit Sucessyfuly',
            'alert-type' => 'error'
        );
        return view('backend.transfer.edit_transfer', compact('transferoutlet_edit'))->with($notification);
    }


    //Update transfer outlet
    public function TransferOutletUpdate(Request $request)
    {
        $transferutlet_update = $request->id;
        //update date
        TransferOutlet::findOrfail($transferutlet_update)->update(
            [
                'reference_no' => $request->reference_no,
                'date' => $request->date,
                'to_outlet' => $request->to_outlet,
                'status' => $request->status,
                'transfer_type' => $request->transfer_type,
                'aboute_project' => $request->aboute_project,
                'qty_amount' => $request->qty_amount,

            ]
        );

        $notification = array(
            'message' =>  'update Sucessyfuly',
            'alert-type' => 'error'
        );

        return redirect('transfer/view')->with($notification);
    } //end method
    /////////////////////////////////////////////////////////// Show /////////////////////////////////////////

    public function TransferOutletShow($id)
    {
        $show = TransferOutlet::findOrfail($id);

        return view('backend.transfer.show_transfer', compact('show'));
    }
}
