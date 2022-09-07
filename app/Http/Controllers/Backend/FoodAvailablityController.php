<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FoodAvailablity;
use App\Models\Food;
use App\Models\Outlet;

class FoodAvailablityController extends Controller
{
    //
    public function FoodAvailablityAdd()
    {
        // dd('this is is ');
        $foods = Food::latest()->get();

        $outlets = Outlet::latest()->get();
        //   dd($outlets);

        return view('backend.food.food_availablity', compact('foods', 'outlets'));
    } //end method

    // store foodavailble
    public function FoodAvailablityStore(Request $request)
    {
        // dd($request);

        // validation
        $request->validate([
            'outlet_id' => 'required',
            'food_id' => 'required',
            'available_day' => 'required',
            'frome_time' => 'required',
            'end_time' => 'required',
            'status' => 'required',
        ], [
            'outlet_id.required' => 'Input ',
            'food_id.required' => 'Input ',
            'available_day.required' => 'Input ',
            'frome_time.required' => 'Input',
            'end_time.required' => 'Input ',
            'status.required' => 'Input ',


        ]);
        // foodavailble Insert
        FoodAvailablity::insert([

            'outlet_id' => $request->outlet_id,
            'food_id' => $request->food_id,
            'available_day' => $request->available_day,
            'frome_time' => $request->frome_time,
            'end_time' => $request->end_time,
            'status' => $request->status,

        ]);

        $notification = array(
            'message' =>  'Available Food Add Sucessyfuly',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
        // return redirect('outlet/view')->with($notification);

    } // end method


    // View foodavailble

    public function FoodAvailablityView()
    {
        $availablefood_view = FoodAvailablity::with('outlets', 'foods')->get();
        $outlets = Outlet::orderBy('id', 'desc')->get();

        $foods    = Food::orderBy('id', 'desc')->get();


        // dd($outlets);
        // dd($availablefood_view);
        return view('backend.food.food_availablity', compact('availablefood_view', 'outlets', 'foods'));
    } //end method

    //foodavailble Delete
    public function FoodAvailablityDelete(Request $request, $id)
    {
        // return $id;
        $outlet = FoodAvailablity::findOrfail($request->p_id);
        $outlet->delete();
        return redirect()->back();
    } //end method

    /////////////////////////////////////////// Edite and Update /////////////////////////////////////////


    // Edit Tab

    public function FoodVarientEdit($id)
    {
        $tab = FoodAvailablity::find($id);
        return response()->json([
            'tab' => $tab
        ]);
    } //end method

    // Update Tab

    public function FoodVarientUpdate(Request $request)
    {
        $tab = FoodAvailablity::find($request->tab_id);
        $tab->food_name = $request->input('food_name');
        $tab->food_varient = $request->input('food_varient');
        $tab->price = $request->input('price');
        $tab->update();
        return redirect()->back();
    } //end method






}
