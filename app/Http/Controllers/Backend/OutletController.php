<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Outlet;

class OutletController extends Controller
{
     //Total outlet
        public function TotalOutletAdd(){
            $outlet = Outlet::all();
          return view('backend.outlet.total_outlet',compact('outlet'));
        }//end method



    //outlet add
    public function OutletAdd(){
        return view('backend.outlet.add_outlet');
    }//end method

// store outlet
public function OutletStore(Request $request){

    // validation
        $request->validate([
            'outlet_code' => 'required',
            'outlet_name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'password' => 'required',
            'collect_vat' => 'required',
            
          ],[
            'outlet_code.required' => 'Input The outlet Name in Cats Eye',
            'outlet_name.required' => 'Input The outlet Name in Cats Eye',
            'address.required' => 'Input The outlet address in Easy',
            'phone.required' => 'Input The outlet phone in Easy',
            'email.required' => 'Input The outlet invoice in Easy',
            'password.required' => 'Input The outlet invoice in Easy',
            'collect_vat.required' => 'Input The outlet collect in Easy',
           
          ]);

       // Brand Insert
          Outlet::insert([
           'outlet_code' => $request->outlet_code,
           'outlet_name' => $request->outlet_name,
           'address' => $request->address,
           'phone' => $request->phone,
           'email' => $request->email,
           'password' => $request->password,
           'collect_vat' => $request->collect_vat,
         

          ]);

          $notification = array(
            'message' =>  'Outlet Add Sucessyfuly',
            'alert-type' => 'success'
        );

        return redirect('outlet/view')->with($notification);

  } // end method

            //View outlet
            public function OutletView(){
                $outlet_view = Outlet::latest()->get();
                return view('backend.outlet.view_outlet',compact('outlet_view'));
            }//end method


            //Purchase Delete
            public function OutletDelete(Request $request){
                $outlet = Outlet::findOrfail($request->p_id);
                $outlet->delete();
                return redirect()->back();
                }//end method


                //Edit outlet
            public function OutletEdit($id){
                $outlet_edit= Outlet:: findOrfail($id);
                $notification = array(
                    'message' =>  'edit Sucessyfuly',
                    'alert-type' => 'error'
                );
                return view('backend.outlet.edit_outlet', compact('outlet_edit'))->with($notification);
                }


            //Update outlet
            public function OutletUpdate(Request $request){
                $Outlet_update = $request->id;
                //update date
            Outlet::findOrfail($Outlet_update)->update(
                    [
                       'outlet_code' => $request->outlet_code,
                       'outlet_name' => $request->outlet_name,
                       'address' => $request->address,
                       'phone' => $request->phone,
                       'email' => $request->email,
                       'password' => $request->password,
                       'collect_vat' => $request->collect_vat,

            ]);

            $notification = array(
                'message' =>  'update Sucessyfuly',
                'alert-type' => 'error'
            );

                return redirect('outlet/view')->with($notification);
            }//end method


}

