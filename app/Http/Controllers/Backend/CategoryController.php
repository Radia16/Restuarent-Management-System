<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Image;

class CategoryController extends Controller
{
    //
 //category
 public function CategoryAdd(){
    return view('backend.category.add_category');
}//end method

// category add
 public function CategoryStore(Request $request){

      $validation=$request->validate([
          'outlet_id' => 'required',
          'category_name' => 'required',
          'start_date' => 'required',
          'parent_name' => 'required',
          'end_date' => 'required',
          'status' => 'required',
          'category_image' => 'required',

        ],

       );
        // img upload and save
        $image = $request->file('category_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(300,300)->save('upload/category/image/'.$name_gen);
        $save_url = 'upload/category/image/'.$name_gen;

        // setting Insert
        Category::insert([
          'outlet_id' => $request->outlet_id,
          'category_name' => $request->category_name,
          'start_date' => $request->start_date,
          'parent_name' => $request->parent_name,
          'end_date' => $request->end_date,
          'status' => $request->status,
          'category_image' => $save_url,

        ]);

        $notification = array(
          'message' =>  'setting Add Sucessyfuly',
          'alert-type' => 'success'
        );

        // return redirect(category/view)->with($notification);
        return redirect()->route('category.view')->with($notification);

      } // end mathod

         //View category
         public function CategoryView(){
            $category_view = Category::latest()->get();
            return view('backend.category.view_category',compact('category_view'));
            }//end method
            //Purchase Delete
            public function CategoryDelete(Request $request){
                $category =Category::findOrfail($request->p_id);
                $category->delete();
                return redirect()->back();
                }//end method
        //Edit category
            public function CategoryEdit($id){
                $category_edit= Category::findOrfail($id);
                $notification = array(
                    'message' =>  'edit Sucessyfuly',
                    'alert-type' => 'error'
                );
                return view('backend.category.edit_category', compact('category_edit'))->with($notification);
                }

                //  category Update
                  public function CategoryUpdate(Request $request){
                      $category_id = $request->id;
                      $old_img  = $request->old_image;
                      if ($request->file('category_image')) {

                          unlink($old_img);
                          $image = $request->file('category_image');
                          $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                          Image::make($image)->resize(300,300)->save('upload/category/image'.$name_gen);
                          $save_url = 'upload/category/image'.$name_gen;

                          Category::findOrFail($category_id)->update([
                                      'outlet_id' => $request->outlet_id,
                                      'category_name' => $request->category_name,
                                      'start_date' => $request->start_date,
                                      'parent_name' => $request->parent_name,
                                      'end_date' => $request->end_date,
                                      'status' => $request->status,
                                      'category_image' => $save_url,
                          ]);
                          $notification = array(
                            'message' =>  'category Update Sucessyfully',
                            'alert-type' => 'success'
                        );
                        return redirect()->route('category.view')->with($notification);
                      }else{
                          Category::findOrFail($category_id)->update([
                                      'outlet_id' => $request->outlet_id,
                                      'category_name' => $request->category_name,
                                      'start_date' => $request->start_date,
                                      'parent_name' => $request->parent_name,
                                      'end_date' => $request->end_date,
                                      'status' => $request->status,
                                      // 'category_image' => $save_url,
                            ]);
                            $notification = array(
                              'message' =>  'category Update Sucessyfully',
                              'alert-type' => 'info'
                          );
                          return redirect()->route('category.view')->with($notification);
                      } // else end
                  }


}

