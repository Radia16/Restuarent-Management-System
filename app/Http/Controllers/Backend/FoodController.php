<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Food;
use Image;

class FoodController extends Controller
{

    //food
    public function FoodAdd()
    {
        return view('backend.food.add_food');
    } //end method



    // Food add
    public function FoodStore(Request $request)
    {

        $validation = $request->validate(
            [
                'outlet_id' => 'required',
                'category_name' => 'required',
                'kichen' => 'required',
                'food_name' => 'required',
                'component' => 'required',
                'notes' => 'required',
                'description' => 'required',
                'start_date' => 'required',
                'end_date' => 'required',
                'cooking_time' => 'required',
                'vat' => 'required',
                'offer_rate' => 'required',
                'status' => 'required',
                'image' => 'required',
                'manu_type' => 'required',

            ],

        );
        // img upload and save
        $image = $request->file('image');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(300, 300)->save('upload/food/image/' . $name_gen);
        $save_url = 'upload/food/image/' . $name_gen;

        // Food Insert
        Food::insert([
            'outlet_id' => $request->outlet_id,
            'category_name' => $request->category_name,
            'kichen' => $request->kichen,
            'food_name' => $request->food_name,
            'component' => $request->component,
            'notes' => $request->notes,
            'description' => $request->description,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'cooking_time' => $request->cooking_time,
            'vat' => $request->vat,
            'offer_rate' => $request->vat,
            'status' => $request->vat,

            'image' => $save_url,
            'manu_type' => $request->notes,

        ]);

        $notification = array(
            'message' =>  'Food Add Sucessyfuly',
            'alert-type' => 'success'
        );

        //   return redirect()->back()->with($notification);
        return redirect()->route('food.view')->with($notification);
    } // end mathod

    ///Food view

    public function FoodView()
    {
        $food_view = Food::latest()->get();
        return view('backend.food.view_food', compact('food_view'));
    } //end method


    //Food Delete
    public function FoodDelete(Request $request)
    {
        $category = Food::findOrfail($request->p_id);
        $category->delete();
        return redirect()->back();
    } //end method



    //Edit Food
    public function FoodEdit($id)
    {
        $food_edit = Food::findOrfail($id);
        $notification = array(
            'message' =>  'edit Sucessyfuly',
            'alert-type' => 'error'
        );
        return view('backend.food.edit_food', compact('food_edit'))->with($notification);
    }

    //  Food Update
    public function FoodUpdate(Request $request)
    {
        $food_id = $request->id;
        $old_img  = $request->old_image;
        if ($request->file('image')) {

            unlink($old_img);
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, 300)->save('upload/food/image' . $name_gen);
            $save_url = 'upload/food/image' . $name_gen;

            Food::findOrFail($food_id)->update([
                'outlet_id' => $request->outlet_id,
                'category_name' => $request->category_name,
                'kichen' => $request->kichen,
                'food_name' => $request->food_name,
                'component' => $request->component,
                'notes' => $request->notes,
                'description' => $request->description,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
                'cooking_time' => $request->cooking_time,
                'vat' => $request->vat,
                'offer_rate' => $request->offer_rate,
                'status' => $request->status,

                'image' => $save_url,
                'manu_type' => $request->manu_type,
            ]);

            $notification = array(
                'message' =>  'food Update Sucessyfully',
                'alert-type' => 'success'
            );
            return redirect()->route('food.view')->with($notification);
        } else {
            Food::findOrFail($food_id)->update([
                'outlet_id' => $request->outlet_id,
                'category_name' => $request->category_name,
                'kichen' => $request->kichen,
                'food_name' => $request->food_name,
                'component' => $request->component,
                'notes' => $request->notes,
                'description' => $request->description,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
                'cooking_time' => $request->cooking_time,
                'vat' => $request->vat,
                'offer_rate' => $request->offer_rate,
                'status' => $request->status,

                // 'image' => $save_url,
                'manu_type' => $request->manu_type,
            ]);
            $notification = array(
                'message' =>  'food Update Sucessyfully',
                'alert-type' => 'info'
            );
            return redirect()->route('food.view')->with($notification);
        } // else end
    }
}
