<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FoodMenu;
use Image;
class FoodMenuController extends Controller
{
    //Food Menu Add

    public function create(){

        return view('backend.foodmenu.foodmenu_add');
    }

    //Food Menu Store
    public function store(Request $request){
       
   
        //Form Validation
        $request->validate([
                'outlet_id'=>'required',
                'name'=>'required',
                'code'=>'required',
                'category'=>'required',
                'ingredient_consumptions'=>'required',
               // 'sale_price'=>'required',
                'vat'=>'required|numeric',
                'description'=>'required',
                'featured_photo'=>'required',
            ],
        );

        //Food Menu image upload & save
        $image = $request->file('featured_photo');

        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(50,50)->save('upload/foodmenu_image/'.$name_gen);
        $save_url = $name_gen;

        //Food Menu Start
        FoodMenu::create([
            
            'outlet_id'=>$request->outlet_id,
            'name'=>$request->name,
            'code'=>$request->code,
            'category'=>$request->category,
            'ingredient_consumptions'=>$request->ingredient_consumptions,
            // 'sale_price'=>$request->sale_price,
            'vat'=>$request->vat,
            'description'=>$request->description,
            'featured_photo' =>$save_url,
        ]);
        return redirect()->route('menu.view');

    }//End Method


    // View Food Menu
    public function index(){

        $menu_view = FoodMenu::with(['cat'])->get();

        //dd($menu_view);

        return view('backend.foodmenu.menu_view',compact('menu_view'));
    }//End Method


    //Edit Food Menu
    public function edit($id){

        $menu_edit =  FoodMenu::findOrfail($id);
        return view('backend.foodmenu.menu_edit',compact('menu_edit'));
    }//end method



    //Update Food Menu
    public function update(Request $request){
    
       $id = $request->id;

        $update =  FoodMenu::findOrfail($id);

        //Form Validation
        // $request->validate([
        //         'outlet_id'=>'required',
        //         'code'=>'required',
        //         'ingredient_consumptions'=>'required',
        //     ],
        // );
        
        //Food Menu Start
        $update->outlet_id = $request->outlet_id;
        $update->code = $request->code;
        $update->ingredient_consumptions = $request->ingredient_consumptions;

        $update->save();
        
        return redirect()->route('menu.view');
    }//End Method


   //Delete Food Menu
   public function delete($id){

        FoodMenu::findOrfail($id)->delete();
        return redirect()->route('menu.view');
}//end method



}