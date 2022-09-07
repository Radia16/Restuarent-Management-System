<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use Image;

class SettingController extends Controller
{
    //

    public function SettingtAdd(){
        return view('setting.add_setting');
    }/////  end method


    public function SettingtDesh(){
      return view('setting.setting_desh');
  }


    public function CategoryStore(Request $request){
      //  dd($request->all());
        $validation=$request->validate([
            'outlet_id' => 'required',
            'resturent_name' => 'required',
            'logo_image' => 'required',
            'webside' => 'required',
            'date' => 'required',
            'time_zone' => 'required',
            'currency_symbol' => 'required',
            'currency_position' => 'required',
            'precision' => 'required',  
            'default_customer' => 'required', 
            'default_payment_method' => 'required', 
            'charge_type' => 'required', 
            'percentage_amount' => 'required',      
            'status' => 'required', 
            'export_daly' => 'required',
            'invoice_footer' => 'required',
            'printing_invoice' => 'required',
            'printing_bill' => 'required',
            'printing_kot' => 'required',
            'printing_bot' => 'required',
            'recept_printer' => 'required',

          ],[ 
            'outlet_id.required' => 'Input The Brand Name in Cats Eye',
            'resturent_name.required' => 'Input The Brand Name in Easy',
            'logo_image.required' => 'Input The Brand Name in Easy',
            'webside.required' => 'Input The Brand Name in Easy',
            'date.required' => 'Input The Brand Name in Easy',
            'time_zone.required' => 'Input The Brand Name in Easy',
            'currency_symbol.required' => 'Input The Brand Name in Easy',
            'currency_position.required' => 'Input The Brand Name in Easy',
            'precision.required' => 'Input The Brand Name in Easy',
            'default_customer.required' => 'Input The Brand Name in Easy',
            'default_payment_method.required' => 'Input The Brand Name in Easy',
            'charge_type.required' => 'Input The Brand Name in Easy',
            'percentage_amount.required' => 'Input The Brand Name in Easy',
            'status.required' => 'Input The Brand Name in Easy',
            'export_daly.required' => 'Input The Brand Name in Easy',
            'invoice_footer.required' => 'Input The Brand Name in Easy',
            'printing_invoice.required' => 'Input The Brand Name in Easy',
            'printing_bill.required' => 'Input The Brand Name in Easy',
            'printing_kot.required' => 'Input The Brand Name in Easy',
            'printing_bot.required' => 'Input The Brand Name in Easy',
            'recept_printer.required' => 'Input The Brand Name in Easy',
    
          ]);

          
          // img upload and save
          $image = $request->file('logo_image');
          $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
          Image::make($image)->resize(300,300)->save('upload/setting/image/'.$name_gen);
          $save_url = 'upload/setting/image/'.$name_gen;


          
          // setting Insert    
          Setting::insert([
            'outlet_id' => $request->outlet_id,
            'resturent_name' => $request->resturent_name,
            'logo_image' => $save_url,
            'webside' => $request->webside,
            'date' => $request->date,
            'time_zone' => $request->time_zone,
            'currency_symbol' => $request->currency_symbol,
            'currency_position' => $request->currency_position,
            'precision' => $request->precision,
            'default_customer' => $request->default_customer,
            'default_payment_method' => $request->default_payment_method,
            'charge_type' => $request->charge_type,
            'percentage_amount' => $request->percentage_amount,
            'status' => $request->status,
            'export_daly' => $request->export_daly,
            'invoice_footer' => $request->invoice_footer,
            'printing_invoice' => $request->printing_invoice,
            'printing_bill' => $request->printing_bill,
            'printing_kot' => $request->printing_kot,
            'printing_bot' => $request->printing_bot,
            'recept_printer' => $request->recept_printer,

           
          ]);

          $notification = array(
            'message' =>  'setting Add Sucessyfuly',
            'alert-type' => 'success'
          ); 

          return redirect('setting/view')->with($notification);
        } // end mathod




          //View outlet
          public function SettingView(){
            $setting_view = Setting::latest()->get();
            return view('setting.view_setting',compact('setting_view'));
            }//end method



}