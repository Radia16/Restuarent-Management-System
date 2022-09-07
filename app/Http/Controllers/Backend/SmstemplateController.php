<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Smstemplate;



class SmstemplateController extends Controller
{

    // sms template view start
    public function SmsTemplate(){
        $smstemplates=Smstemplate::latest()->get();
        return view('backend.sms.smstemplete',compact('smstemplates'));
    }
     // sms template view end



     // sms template store start
    public function SmsTemplateStore(Request $request){
        Smstemplate::create([
            'template_name' => $request->template_name,
            'type' => $request->type,
            'description' => $request->description,

        ]);

        $notification = array(
            'message' =>  ' Add Sucessyfuly',
            'alert-type' => 'success'
        );

        return redirect()->route('sms.template')->with($notification);
    }
      // sms template store end



     // sms template edit page start
    public function SmsEdit($id){
        $smstemplate = Smstemplate::findOrfail($id);
        return view('backend.sms.smstemplateedit',compact('smstemplate'));
    }
    // sms template edit page end



    // sms template update  start
    public function SmsTemplateUpdate(Request $request,$id){
        $smstemplate= Smstemplate::findOrfail($id);
        $smstemplate->update([
            'template_name' => $request->template_name,
            'type' => $request->type,
            'description' => $request->description,
        ]);

        $notification = array(
            'message' =>  ' Update Sucessyfuly',
            'alert-type' => 'success'
        );
        return redirect()->route('sms.template')->with($notification);
    }
    // sms template update end


    // sms template delete page start
    public function SmsTemplateDelete(Request $request){

        $smstemplate = Smstemplate::findOrfail($request->s_id);

        $smstemplate->delete();
        $notification = array(
            'message' =>  ' Sms Report Delete Sucessyfuly',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
     // sms template delete page end

}
