<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SmsConfig;
class SmsConfigController extends Controller

{
  public function SmsConfig(){
      $smsconfigs=SmsConfig::all();
      return view('backend.sms.smsconfig',compact('smsconfigs'));
  }
  public function SmsConfigActive($id){
    $smsconfigs=SmsConfig::find($id);
    $smsconfigs->update([

        'avtive' =>"1",
    ]);
    $diactive=SmsConfig::WhereNotIn('id',$id)->update(array('active' => '0'));
    $notification = array(
        'message' => ' Activeted Successfully',
        'alert-type' => 'success'
      );

      return redirect()->route('sms.configaretion')->with($notification);
  }
  public function SmsConfigEdit($id){
    $smsconfigs=SmsConfig::find($id);
      return view('backend.sms.configedit',compact('smsconfigs'));
  }

  public function SmsConfigUpdate (Request $request,$id){
    $smsconfigs=SmsConfig::find($id);
    $smsconfigs->update([

        'name' =>$request->name,
        'username' =>$request->username,
        'password' =>$request->password,
        'from' =>$request->from,
    ]);

    $notification = array(
        'message' => ' updated Successfully',
        'alert-type' => 'success'
      );

      return redirect()->route('sms.configaretion')->with($notification);
  }

}
