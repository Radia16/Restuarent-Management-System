<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\IngredientUnit;

class IngredientUnitsController extends Controller
{
   //Ingredient Units Add

    public function create(){
         return view('backend.ingredientunits.ingredientunits_add');
    }//end method

    //Ingredient Units Store
    public function store(Request $request){
        //form validation
        $request->validate([
            
            'outlet_id'=>'required',
            'unit_name'=>'required',
            //'order_id'=>'required',
            'description'=>'required',
        ]);
        // Ingredient Units Insert
        IngredientUnit::create([
            
            'outlet_id' => $request->outlet_id,
            'unit_name' => $request->unit_name,
            //'order_id' => $request->order_id,
            'description' => $request->description,
        ]);
        return redirect()->route('ingredientunit.view');

    }//end method


    //Ingredient Units View
    public function index(){
        $ingredientunit_view = IngredientUnit::all();
        return view('backend.ingredientunits.ingredientunits_view',compact('ingredientunit_view'));
    }//end method

//Ingredient Units Edit

    public function edit($id){
        $ingredientunit_edit = IngredientUnit::findOrfail($id);
        return view('backend.ingredientunits.ingredientunits_edit', compact('ingredientunit_edit'));
     }//end method


   //Ingredient Units Update

    public function update(Request $request){
        $ingredientunit_update = $request->id;
        IngredientUnit::findOrfail($ingredientunit_update)->update([
           
            'outlet_id'=>$request->outlet_id,
            'unit_name'=>$request->unit_name,
            'category_name'=>$request->category_name,
            'description'=>$request->description,
        ]);

    return redirect()->route('ingredientunit.view');
    }//end method


//Ingredient Categories Delete

public function destroy($id){
    IngredientUnit::findOrfail($id)->delete();
    return redirect()->route('ingredientunit.view');

    }//end method


}//main method