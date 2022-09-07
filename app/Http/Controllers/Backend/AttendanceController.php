<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Attendance;
use App\Models\Employee;
use DateTime;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{

// attendace form start
    public function Attendanceform(){

        $employees=Employee::latest()->get();
        $attendaces=Attendance::latest()->get();

        return view('backend.attendance.form',compact('employees','attendaces'));
    }
// attendace form end

// attandance Check in store start
    public function AttendanceAdd(Request $request){
        $now = Now()->setTimezone('Asia/Dhaka');
        $check_in = $now->format('H:i:s');
        $day = $now->format('Y-m-d');
        $employee=Employee::Where('employee_id', $request->employee_id)->first();

        $employee_atn=Attendance::Where('employee_id', $request->employee_id)->Where('day',$day)->first();


        $employee_id   = $employee->employee_id;
        $employee_name = $employee->name;


        if ($employee_atn != null) {
            $notification = array(
                'message' =>  'This Employee Already Checked In',
                'alert-type' => 'success'
            );
            return redirect()->route('attendance.form')->with($notification);
        }else{
            Attendance::create([
                'employee_name' => $employee_name,
                'employee_id'   => $employee_id,
                'day'           => $day,
                'check_in'      => $check_in,
            ]);

            $notification = array(
                'message' =>  ' Check In Sucessyfuly',
                'alert-type' => 'success'
            );
        }


        return redirect()->route('attendance.form')->with($notification);


    }
// attandance Check in store end


// attandance Check out store start
    public function AttendanceCheckOut($id){
        $attendance= Attendance::findOrfail($id);

        $now = now()->setTimezone('Asia/Dhaka');
        $check_out = $now->format('H:i:s');
        $attendance->update([
            'check_out' => $check_out,
        ]);

        $notification = array(
            'message' =>  ' Check out Sucessyfuly',
            'alert-type' => 'success'
        );

        return redirect()->route('attendance.form')->with($notification);

    }
// attandance Check out store end


    //attendance Delete start
    public function AttendanceDelete(Request $request){

        $attendace = Attendance::findOrfail($request->a_id);

        $attendace->delete();
        $notification = array(
            'message' =>  ' Attendance Delete Sucessyfuly',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);;
    }//end method


    // attendance report page start
    public function AttendanceReport (){

        $employees=Employee::latest()->get();
        $attendaces=Attendance::latest()->get();
        return view('backend.attendance.report',compact('employees','attendaces'));
    }
     // attendance report page end


    // report search by id start
    public function ReportById(Request $request){
        $attendaces = Attendance::where('employee_id',$request->employee_id)->latest()->get();
        $employees=Employee::latest()->get();
        return view('backend.attendance.report',compact('employees','attendaces'));
     }
     // end





     // report search by date start

     public function ReportByDate(Request $request){

        $date = $request->date;
        $attendaces = Attendance::whereDate('day',$date)->latest()->get();
        $employees=Employee::latest()->get();
        return view('backend.attendance.report',compact('employees','attendaces'));
     }
     // end mehtod



     // search by Month
     public function ReportByMonth(Request $request){
        $date= Carbon::createFromDate($request->year, $request->month);
        $startOfTheMonth = $date->startOfMonth();
        $startOfTheMonth=$startOfTheMonth->toDateString();
        $endOfTheMonth = $date->endOfMonth();
        $endOfTheMonth=$endOfTheMonth->toDateString();
        $attendaces= Attendance::whereBetween('day',[$startOfTheMonth,$endOfTheMonth])->latest()->get();
        $employees=Employee::latest()->get();
        return view('backend.attendance.report',compact('employees','attendaces'));

    } // end mehtod


     // search by Year
       public function ReportByYear(Request $request){
        $attendaces = Attendance::whereYear('day',$request->year)->latest()->get();
        $employees=Employee::latest()->get();
        return view('backend.attendance.report',compact('employees','attendaces'));
    } // end mehtod

// attendance edit start
    public function AttendanceEditData($id){
        $attendanceEditData= Attendance::findOrfail($id);
        if(!$attendanceEditData) {
            return response()->json(['error'=>"Data Not Found"],404);
        }
        return response()->json(compact('attendanceEditData'));

    }
    // attendance edit end

    // attendance update start
    public function updateAttendance(Request $request, $id){

        $attendanceUpdateData=Attendance::findOrFail($id)->update([
            'check_in'      => $request->check_in,
            'check_out'     => $request->check_out,
        ]);

        // $notification = array(
        // 'success' =>  ,
        // 'alert-type' => 'success'
        // );
       return response()->json(['success'=>' Updated Sucessyfully']);

    }

// attendance edit end


}
