<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MenuType;
use App\Models\Outlet;
use Image;
class MenuTypeController extends Controller
{
    //

    public function MenuTypeAdd(){


        return view('backend.food.menutype');

        }//end method

        public function MenuTypeStore(Request $request){
            //   dd($request->all());
            // validation
                $request->validate([

                    'outlet_id' => 'required',
                    'icon_image' => 'required',
                    'menu_type' => 'required',
                    'food_name' => 'required',
                    'status' => 'required',

                  ],[
                    'outlet_id.required' => 'Input',
                    'icon_image.required' => 'Input',
                    'menu_type.required' => 'Input',
                    'food_name.required' => 'Input',
                    'status.required' => 'Input',


                  ]);


                   // img upload and save
                   $image = $request->file('icon_image');
                   $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                   Image::make($image)->resize(300,300)->save('upload/icon_image/image/'.$name_gen);
                   $save_url = 'upload/icon_image/image/'.$name_gen;


               // Brand Insert
                 MenuType::insert([
                   'outlet_id' => $request->outlet_id,
                   'icon_image' => $save_url,
                   'menu_type' => $request->menu_type,
                   'food_name' => $request->food_name,
                   'status' => $request->status,


                  ]);

                  $notification = array(
                    'message' =>  'food menu type Add Sucessyfuly',
                    'alert-type' => 'success'
                );
                  return redirect()->back()->with($notification);


          } // end method


              // foodvarient View
           public function MenuTypeView(){

            // $menutype_view = MenuType::latest()->get();

            $menutype_view =MenuType::with('outlets')->get();
            $outlets = Outlet::orderBy('id','desc')->get();

             return view ('backend.food.menutype',compact('menutype_view','outlets',));
            }//end mathod

            //foodvarient Delete
            public function MenuTypeDelete(Request $request){
                $outlet = MenuType::findOrfail($request->p_id);
                $outlet->delete();
                return redirect()->back();
                }//end method

}
