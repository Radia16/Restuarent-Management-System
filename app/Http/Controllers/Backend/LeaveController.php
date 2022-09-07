<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Leave;
use App\Models\LeaveApplication;
use App\Models\Employee;
use App\Models\Holiday;
use App\Models\Weekend;

use DB;
use Input;

class LeaveController extends Controller
{

    //************************************* Add Leave Type Crud Start******************************************//*/

    // Add method
    public function AddLeave(){

        return view('backend.hrm.leave.add_leave');
    } // add end


    // Store Method
    public function StoreLeave(Request $request){

        $validator = Validator::make($request->all(),[
            'leave_type' => 'required',

        ]);


        if($validator->fails()){
            return response()->json(['errors' => $validator->errors()],422);
        }
        else{

            $leave = new Leave;

            $leave->leave_type      = $request->input('leave_type');
            $leave->save();
            return response()->json(['message' => 'Added Successfully']);
        }

    } // Store end


    // View Method
    public function ViewLeave(){

        $leave = Leave::all();
        return response()->json([
            'leave' =>$leave,

        ]);
    } // end view

    public function EditLeave($id){
        $leave = Leave::find($id);
        if($leave){
            return response()->json(['leave' =>$leave]);
        }
        else{
            return response()->json(['message' => 'Not Found'],404);

        }
    } // end edit


    // Update Method
    public function UpdateLeave(Request $request,$id){
        // dd($request->all());
        $leave =  Leave::find($id);
        if(!$leave){
            return response()->json(['message' => ' Not Found'],404);
        }
        $validator = Validator::make($request->all(),[
            'leave_type' => 'required',

        ]);

        if($validator->fails()){
            return response()->json(['errors' => $validator->errors()],422);
        }

        try{
            $leave->leave_type      = $request->input('leave_type');

            $leave->update();
            return response()->json(['message' => 'Added Successfully',]);

        }catch(\Exception $e){
            return response()->json(['error' => $e->getMessage()],500);
        }

    }// update end

    // Delete Method
    public function DeleteLeave($id){

        $leave = Leave::find($id);
        $leave->delete();
        return response()->json(['message' => 'Deleted Successfully',]);

    } // end delete method


    //**************************** Leave Application Crud Start ******************************************//

    // Add Method
    public function AddLeaveApplication(){
        $employee = Employee::orderBy('name','ASC')->get();
        $leave = Leave::orderBy('leave_type','ASC')->get();
        return view ('backend.hrm.leave.add_application',compact('employee','leave'));
    } // end add


    public function StoreLeaveApplication(Request $request){

        $validator = Validator::make($request->all(),[
            'employee_id'   => 'required',
            'leave_type_id' => 'required',
            'start_date'    => 'required',
            'end_date'      => 'required',
            'days'          => 'required',
            'application'   => 'required',
            'outlet_id'     => 'required',
            'approve_start' => 'required',
            'approve_end'   => 'required',
            'approve_day'   => 'required',
            'approve'       => 'required',

        ]);



        if($validator->fails()){
            return response()->json(['errors' => $validator->errors()],422);
        }
        else{

            $leaveapplication = new LeaveApplication;

            $leaveapplication->employee_id        = $request->input('employee_id');
            $leaveapplication->leave_type_id      = $request->input('leave_type_id');
            $leaveapplication->start_date         = $request->input('start_date');
            $leaveapplication->end_date           = $request->input('end_date');
            $leaveapplication->days               = $request->input('days');
            $leaveapplication->application        = $request->input('application');
            $leaveapplication->outlet_id          = $request->input('outlet_id');
            $leaveapplication->approve_start      = $request->input('approve_start');
            $leaveapplication->approve_end        = $request->input('approve_end');
            $leaveapplication->approve_day        = $request->input('approve_day');
            $leaveapplication->approve            = $request->input('approve');



            $leaveapplication->save();
            return response()->json(['message' => 'Added Successfully']);
        }

    } // end store


    // View Method
    public function ViewLeaveApplication(){
        // $employee = Employee::orderBy('name','ASC')->get();
        // $leave = Leave::orderBy('leave_type','ASC')->get();
        $leaveapplication = LeaveApplication::with(['leave','employee'])->get();
        return response()->json([
            //  'employee' =>$employee,
            //  'leave' =>$leave,
             'leaveapplication' =>$leaveapplication,
        ]);
    } // end view

    // Edit method
    public function EditLeaveApplication($id){
        $leaveapplication = LeaveApplication::find($id);
        if($leaveapplication){
            return response()->json(['leaveapplication' =>$leaveapplication]);
        }
        else{
            return response()->json(['message' => 'Not Found'],404);

        }
    } // end edit


    // Update Method
    public function UpdateLeaveApplication(Request $request,$id){
        //dd($request->all());
        $leaveapplication =  LeaveApplication::find($id);
        if(!$leaveapplication){
            return response()->json(['message' => ' Not Found'],404);
        }
        $validator = Validator::make($request->all(),[
            'employee_id'   => 'required',
            'leave_type_id' => 'required',
            'start_date'    => 'required',
            'end_date'      => 'required',
            'days'          => 'required',
            'application'   => 'required',
            'outlet_id'     => 'required',
            'approve_start' => 'required',
            'approve_end'   => 'required',
            'approve_day'   => 'required',
            'approve'       => 'required',

        ]);

        if($validator->fails()){
            return response()->json(['errors' => $validator->errors()],422);
        }

        try{
            $leaveapplication->employee_id        = $request->input('employee_id');
            $leaveapplication->leave_type_id      = $request->input('leave_type_id');
            $leaveapplication->start_date         = $request->input('start_date');
            $leaveapplication->end_date           = $request->input('end_date');
            $leaveapplication->days               = $request->input('days');
            $leaveapplication->application        = $request->input('application');
            $leaveapplication->outlet_id          = $request->input('outlet_id');
            $leaveapplication->approve_start      = $request->input('approve_start');
            $leaveapplication->approve_end        = $request->input('approve_end');
            $leaveapplication->approve_day        = $request->input('approve_day');
            $leaveapplication->approve            = $request->input('approve');

            $leaveapplication->update();
            return response()->json(['message' => 'updated Successfully',]);

        }catch(\Exception $e){
            return response()->json(['error' => $e->getMessage()],500);
        }

    }// update end


    // Delete Method
    public function DeleteLeaveApplication($id){

        $leaveapplication = LeaveApplication::find($id);
        $leaveapplication->delete();
        return response()->json(['message' => 'Deleted Successfully',]);

    } // end delete method


    //********************************************* Holiday Crud Start *******************//

    // add holiday
    public function AddHoliday(){
        return view('backend.hrm.leave.holiday');
    }

    // store holiday
    public function StoreHoliday(Request $request){

        $validator = Validator::make($request->all(),[
            'holi_name'   => 'required',
            'start_date'  => 'required',
            'end_date'    => 'required',
            'days'        => 'required',
            'status'      => 'required',


        ]);



        if($validator->fails()){
            return response()->json(['errors' => $validator->errors()],422);
        }
        else{

            $holiday = new Holiday;

            $holiday->holi_name          = $request->input('holi_name');
            $holiday->start_date         = $request->input('start_date');
            $holiday->end_date           = $request->input('end_date');
            $holiday->days               = $request->input('days');
            $holiday->status             = $request->input('status');

            $holiday->save();
            return response()->json(['message' => 'Added Successfully']);
        }


    }// end store

    // view
    public function ViewHoliday(){

        $holiday = Holiday::all();
        return response()->json([
            'holiday' =>$holiday,
        ]);
    }// end view


    // Edit method
    public function EditHoliday($id){
        $holiday = Holiday::find($id);
        if($holiday){
            return response()->json(['holiday' =>$holiday]);
        }
        else{
            return response()->json(['message' => 'Not Found'],404);

        }
    } // end edit


    // Update Method
    public function UpdateHoliday(Request $request,$id){
        //dd($request->all());
        $holiday = Holiday::find($id);
        if(!$holiday){
            return response()->json(['message' => ' Not Found'],404);
        }
        $validator = Validator::make($request->all(),[
            'holi_name'   => 'required',
            'start_date'  => 'required',
            'end_date'    => 'required',
            'days'        => 'required',
            'status'      => 'required',

        ]);

        if($validator->fails()){
            return response()->json(['errors' => $validator->errors()],422);
        }

        try{
            $holiday->holi_name          = $request->input('holi_name');
            $holiday->start_date         = $request->input('start_date');
            $holiday->end_date           = $request->input('end_date');
            $holiday->days               = $request->input('days');
            $holiday->status             = $request->input('status');

            $holiday->update();
            return response()->json(['message' => 'updated Successfully',]);

        }catch(\Exception $e){
            return response()->json(['error' => $e->getMessage()],500);
        }

    }// update end

    // Delete Method
    public function DeleteHoliday($id){

        $holiday = Holiday::find($id);
        $holiday->delete();
        return response()->json(['message' => 'Deleted Successfully',]);

    } // end delete method


//................................ Weekend Crud start.........................//

public function AddWeekend(){

    return view('backend.hrm.leave.weekend');
}

public function StoreWeekend(Request $request){

    // $request->validate([
    //     'friday' => 'required',
    // ],[
    //     'friday.required' => "Input the Field",
    // ]);


    // Weekend::insert([

    //     'friday'   => $request->friday,
    //     'saturday' => $request->saturday,
    //     'sunday'   => $request->sunday,

    // ]);

    // $notification = array(
    //     'message' => 'Add Successfully',
    //     'alert-type' => 'success'
    // );


    // dd($request->all());
    // $input = $request->all();
    //     $input['weekends'] = $request->input('weekends');
    //     Weekend::create($input);

    // Weekend::create([
    //     'weekends' => $request->weekends,
    // ]);
        //dd($request->all());
    // $weekend = Weekend::get('weekends');
    // //dd($weekend);
    // foreach($weekend as $week) {
    // DB::insert(array($week));
    // }

    if(!empty($request->input('weekends'))){
        $checkbox = join(',',$request->input('weekends'));
        DB::table('weekends')->insert(['weekends'=>$checkbox]);
    }else{
        $checkbox = '';
    }


    $notification = array(
        'message' => 'Add Successfully',
        'alert-type' => 'success'
    );
    return redirect()->back()->with($notification);

}

    public function ViewWeekend(){
        $days = Weekend::latest()->get();
        //dd($days);
        return view('backend.hrm.leave.weekend_view',compact('days'));
    }

    public function EditWeekend($id){
        $weekends = Weekend::findOrFail($id);
        return view('backend.hrm.leave.weekend_edit',compact('weekends'));
    }

    public function UpdateWeekend(Request $request,$id){

        Weekend::findOrFail($id);
        if(!empty($request->input('weekends'))){
            $checkbox = join(',',$request->input('weekends'));
            DB::table('weekends')->insert(['weekends'=>$checkbox]);
        }else{
            $checkbox = '';
        }


        $notification = array(
            'message' => 'Add Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('weekend.view')->with($notification);

    }













} // main method end
