<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ingredient;

class IngredientController extends Controller
{
   

    public function create(){ 
        
        return view('backend.ingredient.ingredient_add');
    }


    //Ingredient Store
    public function store(Request $request){
        //form validation
        $request->validate([
            'outlet_id'=>'required',
            'purchase_price'=>'required',
            'alert_qty'=>'required',
            'code'=>'required',
            'name'=>'required',
            'added_by'=>'required',



        ]);




    //     $table->unsignedBigInteger('outlet_id');
    //     $table->decimal('purchase_price');
    //     $table->unsignedBigInteger('alert_qty');
    //    // $table->string('unit');
    //     $table->string('code')->unique();
    //     $table->string('name');
    //     $table->unsignedBigInteger('added_by');





        // Ingredient Insert
        Ingredient::create([
            'outlet_id'      => $request->outlet_id,
            'purchase_price' => $request->purchase_price,
            'alert_qty'      => $request->alert_qty,
            'code'           => $request->code,
            'name'           => $request->name,
            'added_by'       => $request->added_by,
        ]);


    return redirect()->back();

        // return redirect()->route('ingredient.view');
    }//end method
    

     //Ingredient View
     public function index(){
        $ingredient_view = Ingredient::latest()->get();
        return view('backend.ingredient.ingredient_view',compact('ingredient_view'));
    }//end method


    //Ingredient Edit
    public function edit($id){
        $ingredient_edit = Ingredient::findOrfail($id);
        return view('backend.ingredient.ingredient_edit', compact('ingredient_edit'));

    }//end method

    //Ingredient Update
    public function update(Request $request){
        // update ingredient
        Ingredient::findOrfail(  $request->id)->update([
            'outlet_id'       => $request->outlet_id,
            'purchase_price'  => $request->purchase_price,
            'alert_qty'       => $request->alert_qty,
            'code'            => $request->code,
            'name'            => $request->name,
          
        ]);
        return redirect()->route('ingredient.view');
    }//end method


    //Ingredient Delete

    public function destroy($id){
        Ingredient::findOrfail($id)->delete();
        return redirect()->route('ingredient.view');

    }//end method


}//main method