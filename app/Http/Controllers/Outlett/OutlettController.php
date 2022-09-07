<?php

namespace App\Http\Controllers\Outlett;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Outlett;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class OutlettController extends Controller
{
    function create(Request $request){
          //Validate inputs
          $request->validate([
             'name'=>'required',
             'email'=>'required|email|unique:outletts,email',
             'password'=>'required|min:5|max:30',
             'cpassword'=>'required|min:5|max:30|same:password'
          ]);

          $outlett = new Outlett();
          $outlett->name     = $request->name;
          $outlett->email    = $request->email;
          $outlett->password = Hash::make($request->password);
          $save                 = $outlett->save();

          if( $save ){
              return redirect()->back()->with('success','You are now registered successfully as Outlett');
          }else{
              return redirect()->back()->with('fail','Something went Wrong, failed to register');
          }
    }

    function check(Request $request){
        //Validate Inputs
        $request->validate([
           'email'=>'required|email|exists:outletts,email',
           'password'=>'required|min:5|max:30'
        ],[
            'email.exists'=>'This email is not exists in outlett table'
        ]);
        $creds = $request->only('email','password');
        if( Auth::guard('outlett')->attempt($creds) ){
            return redirect()->route('outlett.home');
        }else{
            return redirect()->route('outlett.login')->with('fail','Incorrect Credentials');
        }
    }

    function logout(){
        Auth::guard('outlett')->logout();
        return redirect('/');
    }
}
