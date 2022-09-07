<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Table;


class TableController extends Controller
{
    //Add Table
    public function TableAdd()
    {
        return view('backend.table.add_table');
    }//end method


     //Store Table
    public function TableStore(Request $request){
        $request->validate([
            'outlet_id'=>'required',
            'table_name'=>'required',
            'seat_capacity'=>'required',
            'description'=>'required',
            'position'=>'required',
        ]);

        //data insert
        Table::insert([
            'outlet_id'     => $request->outlet_id,
            'table_name'    => $request->table_name,
            'seat_capacity' => $request->seat_capacity,
            'description'   => $request->description,
            'position'      => $request->position,
        ]);

        $notification = array(
            'message' =>  'Table Add Sucessyfuly',
            'alert-type' => 'success'
        );
       return redirect()->back()->with ($notification);
    }//end method


    //View Table
    public function TableView(){
        $table_view = Table::latest()->get();
        return view('backend.table.view_table',compact('table_view'));
    }//end method


    //Edit Table
   public function TableEdit($id){
        $table_edit= Table:: findOrfail($id);
        return view('backend.table.edit_table', compact('table_edit'));
    }//end method


    //Update Table
    public function TableUpdate(Request $request){
        $table_update = $request->id;

        //update date
        Table::findOrfail($table_update)->update([
            'outlet_id'     => $request->outlet_id,
            'table_name'    => $request->table_name,
            'seat_capacity' => $request->seat_capacity,
            'description'   => $request->description,
            'position'      => $request->position,
        ]);


        $notification = array(
            'message'    =>  'Table Add Sucessyfuly',
            'alert-type' => 'success'
        );
        return redirect('table/view')->with($notification);
    }//end method



    //Table Delete
    public function TableDelete(Request $request){
        $table_delete = Table::findOrfail($request->p_id);
        $table_delete->delete();
        return redirect()->back();
    }//end method




}