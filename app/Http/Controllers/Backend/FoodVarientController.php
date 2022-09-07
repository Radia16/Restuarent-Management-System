<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FoodVarient;
use App\Models\Food;

class FoodVarientController extends Controller
{



     //food varient
    public function FoodVarientAdd(){

        $foodvar = FoodVarient::latest()->get();
        $foodvarient = Food::orderBy('food_name','ASC')->get();
        return view('backend.food.food_varient',compact('foodvarient','foodvar'));

    }//end method

    // store outlet
    public function FoodVarientStore(Request $request){
    // validation
        $request->validate([
            // 'outlet_id' => 'required',
            'food_name' => 'required',
            'food_varient' => 'required',
            'price' => 'required',
        ]);

        // Brand Insert
        FoodVarient::insert([
          //'outlet_id' => $request->outlet_id,
           'food_name'   => $request->food_name,
           'food_varient' => $request->food_varient,
           'price'        => $request->price,
        ]);

        $notification = array(
            'message'    =>  'food varient Add Sucessyfuly',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    } // end method


    // foodvarient View
    public function FoodVarientView(){
        $foodvarient = FoodVarient::latest()->get();
        return view ('backend.food.food_varient',compact('foodvarient'));
    }//end mathod


    //foodvarient Delete
    public function FoodVarientDelete(Request $request){
        $outlet = FoodVarient::findOrfail($request->p_id);
        $outlet->delete();
        return redirect()->back();
    }//end method

//////////////////////////////////////// Edit and update////////////////////////////////////////////////////////////////

                // Edit Tab
                public function FoodVarientEdit($id){
                    $tab =FoodVarient::find($id);
                    return response()->json([
                        'tab'=>$tab
                    ]);
                }//end method

                // Update Tab
                public function FoodVarientUpdate(Request $request){

                    $tab =FoodVarient::find($request->tab_id);

                    $tab->outlet_id = $request->input('outlet_id');
                    $tab->food_id = $request->input('food_id');
                    $tab->available_day = $request->input('available_day');
                    $tab->frome_time = $request->input('frome_time');
                    $tab->end_time = $request->input('end_time');
                    $tab->status = $request->input('status');
                    $tab->update();
                    return redirect()->back();
                }//end method



}//main end