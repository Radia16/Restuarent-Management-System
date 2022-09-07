<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\IngredientCatergory;

class IngredientCategoriesController extends Controller
{
    //Ingredient Categories Add

    public function create(){
        return view('backend.ingredientcategories.ingredientcategories_add');
    }


       //Ingredient Categories Store
    public function store(Request $request){
   
        //form validation
        $request->validate([
            'outlet_id'      => 'required',
            'category_name'  => 'required',
            'description'    => 'required',
        ]);

        // Ingredient Categories Insert
        IngredientCatergory::create([
            'outlet_id'     => $request->outlet_id,
            'category_name' => $request->category_name,
            'description'   => $request->description,
        ]);

        return redirect()->route('ingredient.category.view')->with('ingredient_categories_message', 'Data Insert Successfull');

    }//end method

    //Ingredient Categories View

    public function index(){
        $ingredientcategory_view  = IngredientCatergory::all();
        return view('backend.ingredientcategories.ingredientcategories_view',compact('ingredientcategory_view'));
    }//end method


    //Ingredient Categories Edit
    public function edit($id){

        
        $ingredientcategory_edit = IngredientCatergory::findOrfail($id);
        return view('backend.ingredientcategories.ingredientscategories_edit',compact('ingredientcategory_edit'));

    }//end method


   //Ingredients Categories Update
    public function update(Request $request){

        
        $ingredientcategory_update = $request->id;
        // update ingredients categories
        IngredientCatergory::findOrfail($ingredientcategory_update)->update([
            'id'             => $request->id,
            'outlet_id'      => $request->outlet_id,
            'category_name'  => $request->category_name,
            'description'    => $request->description,
        ]);
        return redirect()->route('ingredient.category.view');
    }//end method

    //Ingredient Delete
    public function destroy($id){
        IngredientCatergory::findOrfail($id)->delete();
        return redirect()->route('ingredient.category.view');
    }//end method


}//main method