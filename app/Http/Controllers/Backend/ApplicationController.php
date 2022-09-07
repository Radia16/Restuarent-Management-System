<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Outlet;
use App\Models\Application;
use Image;




class ApplicationController extends Controller
{
    //Add Application
    public function ApplicationAdd()
    {

        $outletset = Outlet::latest()->get();


        return view('backend.application.add_application',compact('outletset'));  

    }//end method





//Store Stock

public function ApplicationStore(Request $request){

   
    // dd($request->all());

    
    //  $table->unsignedBigInteger('outlet_id');//c3
    //     $table->string('appliaction_title');//c3
    //     $table->string('store_name');//c3
    //     $table->string('address');//c3
    //     $table->string('email_address');//c3
    //     $table->string('phone');//c3

    //     $table->string('image1')->nullable();//c
    //     $table->string('image2')->nullable();//c

    //     $table->string('opening_time');//c3
    //     $table->string('close_time');//c3
    //     $table->string('discount_type')->nullable();//c3
    //     $table->decimal('discount_rate')->nullable();//c3
    //     $table->decimal('service_charge')->nullable();//c3
    //     $table->string('service_charge_type')->nullable();//c3

    //     $table->decimal('vat_setting')->nullable();//c3
    //     $table->decimal('gst_vat')->nullable();//c3
    //     $table->decimal('payment_setup_id')->nullable();//c3
    //     $table->decimal('min_delivery_time')->nullable();
    //     $table->decimal('language_id')->nullable();//c3
    //     $table->string('date_format');//c3

    //     $table->string('time_zone');//c3
    //     $table->string('application_alignment');//c3
    //     $table->string('powered_by_text');
    //     $table->string('footer_text');

    
        $validation = $request->validate(
            [
                'outlet_id'=>'required',
                'appliaction_title'=>'required',
                'store_name'=>'required',
                'address'=>'required',
                'email_address'=>'required',
                'phone'=>'required',

                'opening_time'=>'required',
                'close_time'=>'required',
                'discount_type'=>'required',
                'discount_rate'=>'required',
                'service_charge'=>'required',
                'service_charge_type'=>'required',

                'vat_setting'=>'required',
                'gst_vat'=>'required',
                'payment_setup_id'=>'required',
                'min_delivery_time'=>'required',
                'language_id'=>'required',
                'date_format'=>'required',

                'time_zone'=>'required',
                'application_alignment'=>'required',
                'powered_by_text'=>'required',
                'footer_text'=>'required',

                'image1'=>'required',
                'image2'=>'required',

                
            ]);


        // if($validation)
        // {
        //     dd('work');
        // }
      
        
//  // img1 upload and save
 $image1 = $request->file('image1');
 $name_gen = hexdec(uniqid()).'.'.$image1->getClientOriginalExtension();
 Image::make($image1)->resize(300,300)->save('upload/food/image/'.$name_gen);
 $save_url1 = 'upload/food/image/'.$name_gen;

       
//  // img2 upload and save
 $image2 = $request->file('image2');
 $name_gen = hexdec(uniqid()).'.'.$image2->getClientOriginalExtension();
 Image::make($image2)->resize(300,300)->save('upload/food/image/'.$name_gen);
 $save_url2 = 'upload/food/image/'.$name_gen;


    //data insert
    Application::insert(
    
     [ 


        'outlet_id'=>$request->outlet_id,
        'appliaction_title'=>$request->appliaction_title,
        'store_name'=>$request->store_name,
        'address'=>$request->address,
        'email_address'=>$request->email_address,
        'phone'=>$request->phone,

        
        'opening_time'=>$request->opening_time,
        'close_time'=>$request->close_time,
        'discount_type'=>$request->discount_type,
        'discount_rate'=>$request->discount_rate,
        'service_charge'=>$request->service_charge,
        'service_charge_type'=>$request->service_charge_type,

        
        'vat_setting'=>$request->vat_setting,
        'gst_vat'=>$request->gst_vat,
        'payment_setup_id'=>$request->payment_setup_id,
        'min_delivery_time'=>$request->min_delivery_time,
        'language_id'=>$request->language_id,
        'date_format'=>$request->date_format,

        
        'time_zone'=>$request->time_zone,
        'application_alignment'=>$request->application_alignment,
        'powered_by_text'=>$request->powered_by_text,
        'footer_text'=>$request->footer_text,

        
        'image1' => $save_url1,
        'image2' => $save_url2,
       
     ]
    
     );

     $notification = array(
        'message' =>  'Application Add Sucessyfuly',
        'alert-type' => 'success'
    );

    // return redirect()->back();

     return redirect()->back()->with($notification);        
         
    }//end method




 ///Food view

 public function ApplicationView(){
    $application_view = Application::latest()->get();
    $outletset = Outlet::latest()->get();

    return view('backend.application.view_application',compact('application_view','outletset'));
    }//end method




















}
