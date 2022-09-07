<?php

namespace App\Http\Controllers\Backend\Setting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\IngredientList;
use App\Models\IngredientUnit;
use App\Models\Ingredient;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Validator;

class IngredientListController extends Controller
{
    //Ingredient List Add

    public function store(Request $request)
    {

        $request->validate([

            
                'ingredient_id'      => 'required',
                'ingredient_unit_id' => 'required',
                'stock_limit'        => 'required',
                'status'             => 'required',
            ]
        );

       

        //Ingredient List Insert
        
            IngredientList::insert([

                'ingredient_id'      => $request->ingredient_id,
                'ingredient_unit_id' => $request->ingredient_unit_id,
                'stock_limit'        => $request->stock_limit,
                'status'             => $request->status,

            ]);

            return redirect()->back();
        


        //Ingredient List View

    }

    public function view()
    {

        $ingredient = Ingredient::all();
      
        $unit_name = IngredientUnit::all();
        $ingredientlist_view = IngredientList::all();
        //dd($ingredientlist_view);

        return view('backend.setting.unitmeasurement.view_ingredientlist', compact('ingredientlist_view', 'ingredient', 'unit_name'));
    }


    
// Edit Ingredient List
    public function edit($id)
    {
        $ingredientlist_edit =IngredientList::find($id);
    // dd(  $tab);
    return response()->json([
        'ingredientlist_edit'=>$ingredientlist_edit

    ]);
    
    
}//end method

// Update Ingredient List

    public function update(Request $request){

        $ingredientlist_update =IngredientList::find($request->ingredient_unit_id);

        $ingredientlist_update -> ingredient_unit_id = $request->input('ingredient_unit_id');
        $ingredientlist_update -> ingredient_id = $request->input('ingredient_id');
        $ingredientlist_update -> stock_limit   = $request->input('stock_limit');
        $ingredientlist_update -> status        = $request->input('status');


        $ingredientlist_update ->update();
    }

}





//     $kitchen_list_update->outlet_id = $request->input('outlet_id');
//        $kitchen_list_update->kitchen_name = $request->input('kitchen_name');