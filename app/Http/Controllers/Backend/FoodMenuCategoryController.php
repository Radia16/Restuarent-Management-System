<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\FoodMenu;
use Illuminate\Http\Request;
use App\Models\FoodMenuCategory;
use Illuminate\Support\Facades\DB;

class FoodMenuCategoryController extends Controller
{
    //Food menu add

    public function view()
    {
        $foodmenu_view  = FoodMenuCategory::with('foodMenu')->get();

       // dd($foodmenu_view);
       
       return view('backend.managefood.foodmenucategory_view',compact('foodmenu_view'));
    }

    public function create(){

        $foodMenus = FoodMenu::all();

        return view('backend.managefood.foodmenucategory_add',compact('foodMenus'));
    }

    //Food Menu Category Store
    public function store(Request $request){
        //form validation
         $request->validate([
                'outlet_id'=>'required',
                'description'=>'required',

            ],
            // [
            //     'id.required'=>'input',
            //     'outlet_id.required'=>'input',
            //     'food_menu_id.required'=>'input',
            //     'category_name.required'=>'input',
            //     'description.required'=>'input',

            // ],

         );




        // Food Menu Category Insert
        FoodMenuCategory::insert([
            'outlet_id' => $request->outlet_id,
            'food_menu_id'=> $request->food_menu_id,	
            'description' => $request->description,
        ]);
        return redirect()->route('foodmenucategory.view');

    }//end method

    //Food Menu View
   //end method

    //Food Menu Edit
    public function edit($id){

        $foodmenu_edit = FoodMenuCategory::findOrfail($id);
        return view('backend.managefood.foodmenucategory_edit', compact('foodmenu_edit'));

    }

    //Food Menu Update
    public function update(Request $request){
        $foodmenu_update = $request->id;
        // update foodmenu
        FoodMenuCategory::findOrfail($foodmenu_update)->update([
                'id'=>$request->id,
                'outlet_id'=>$request->outlet_id,
                'food_menu_id'=>$request->food_menu_id,
                'category_name'=>$request->category_name,
                'description'=>$request->description,
        ]);

        return redirect()->route('foodmenucategory.view');
    }//end method

    //Food Menu Delete
    public function destroy($id){
        FoodMenuCategory::findOrfail($id)->delete();
        return redirect()->route('foodmenucategory.view');

    }//end method

}