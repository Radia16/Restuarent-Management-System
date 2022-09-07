<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;
use Image;


class SupplierController extends Controller
{
    //Supplier Add
    public function SupplierAdd()
    {
        return view('backend.supplier.add_supplier');

    }//end method




//for Insert_supplier
public function SupplierStore(Request $request){
    $request->validate(
        [
            'outlet_id' => 'required',
            'name' => 'required',
            'address' => 'required',
            'contact_person' => 'required',
            'description' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'image' => 'required',

        ],




        [
            'outlet_id.required' => 'Input ',
            'name.required' => 'Input ',
            'address.required' => 'Input  ',
            'contact_person.required' => 'Input ',
            'description.required' => 'Input ',
            'phone.required' => 'Input ',
            'email.required' => 'Input ',
            'image.required' => 'Input ',

        ]);

       // dd($request->all());
        // image upload & save
        $image = $request->file('image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(50,50)->save('upload/supplier_image/'.$name_gen);
        $save_url = 'upload/supplier_image/'.$name_gen;
        // return $save_url;

            // data Insert
            Supplier::insert([
                'outlet_id' => $request->outlet_id,
                'name' => $request->name,
                'address' => $request->address,
                'contact_person' => $request->contact_person,
                'description' => $request->description,
                'phone' => $request->phone,
                'email' => $request->email,
                'image' => $save_url,

            ]);
        return redirect('supplier/view')->with('message','Stock info added successfully');
}


// View Supplier

public function SupplierView(){
    $supplier_view = Supplier::latest()->get();
    return view('backend.supplier.view_supplier',compact('supplier_view'));
}//end method



//Edit Supplier
public function SupplierEdit($id){

    $supplier_edit= Supplier:: findOrfail($id);
    return view('backend.supplier.edit_supplier', compact('supplier_edit'));

    }//end method


    //Update Supplier

public function SupplierUpdate(Request $request){
    $supplier_update = $request->id;

    //update date
    Supplier::findOrfail($supplier_update)->update(
        [


                'outlet_id' => $request->outlet_id,
                'name' => $request->name,
                'address' => $request->address,
                'contact_person' => $request->contact_person,
                'description' => $request->description,
                'phone' => $request->phone,
                'email' => $request->email,
                'image' => $save_url,
     ]

    );


    $notification = array(
        'message' =>  'Supplier Updated Sucessyfuly',
        'alert-type' => 'success'
    );

    return redirect('supplier/view')->with($notification);

    }//end method


//Purchase Delete


public function SupplierDelete(Request $request){

    $supplier =Supplier::findOrfail($request->p_id);
    $supplier->delete();

    return redirect()->back();



    }//end method














}