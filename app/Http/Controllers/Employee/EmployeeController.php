<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Employee;
use App\Models\Department;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Image;

class EmployeeController extends Controller
{
    function create(Request $request){
        //Validate inputs
        $request->validate([
            'name'  =>'required',
            'email' =>'required|email|unique:employees,email',
            'password'=>'required|min:5|max:30',
            'cpassword'=>'required|min:5|max:30|same:password'
        ]);

        $employee = new Employee();
        $employee->name     = $request->name;
        $employee->email    = $request->email;
        $employee->password = Hash::make($request->password);
        $save = $employee->save();

        if( $save ){
            return redirect()->back()->with('success','You are now registered successfully as Employee');
        }else{
            return redirect()->back()->with('fail','Something went Wrong, failed to register');
        }
    }

    function check(Request $request){
        //Validate Inputs
        $request->validate([
            'email'    =>  'required|email|exists:employees,email',
            'password' =>  'required|min:5|max:30'
        ],[
            'email.exists'=>'This email is not exists in employees table'
        ]);

        $creds = $request->only('email','password');

        if( Auth::guard('employee')->attempt($creds) ){
            return redirect()->route('employee.home');
        }else{
            return redirect()->route('employee.login')->with('fail','Incorrect Credentials');
        }
    }



    function logout(){
        Auth::guard('employee')->logout();
        return redirect('/');
    }


// ********************************************************* Employeee data table Crud Operation ****************************** //

// Employee Add
public function EmployeeAdd(){

    $deps = Department::orderBy('dep_name','ASC')->get();
    return view('backend.hrm.emp_add', compact('deps'));
}

// Employee Store
public function EmployeeStore(Request $request){
    // dd($request->all());
    //validate

    // dd($request->all());

    $request->validate([
        'outlet_id'=> "required",
        'name'=> "required",
        'email'=> "required",

        'father_name'=> "required",
        'mother_name'=> "required",
        'dob'=> "required",
        'gender'=> "required",
        'maritial_status'=> "required",
        'phone'=> "required",
        'e_phone'=> "required",
        'address'=> "required",
        'par_address'=> "required",
        'image'=> "required",

        'employee_id'=> "required",
        'department'=> "required",
        'designation'=> "required",
        'doj'=> "required",
        'salary'=> "required",
        'nid'=> "required",
        'a_qua'=> "required",
        'p_qua'=> "required",
        'experience'=> "required",

        'acc_name'=> "required",
        'acc_num'=> "required",
        'bank_name'=> "required",
        'branch'=> "required",
        'code'=> "required",

         'file'=> "required|mimes:csv,jpg,png,xlx,xls,doc,pdf",
        'agfile'=> "required|mimes:csv,jpg,png,xlx,xls,doc,pdf",

    ],
    [
        'outlet_id.required' => "Input",
        'name.required' => "Input",
        'email.required' => "Input",

        'father_name.required' => "Input",
        'mother_name.required' => "Input",
        'dob.required' => "Input",
        'gender.required' => "Input",
        'maritial_status.required' => "Input",
        'phone.required' => "Input",
        'e_phone.required' => "Input",
        'address.required' => "Input",
        'par_address.required' => "Input",
        'image.required' => "Input",

        'employee_id.required' => "Input",
        'department.required' => "Input",
        'designation.required' => "Input",
        'doj.required' => "Input",
        'salary.required' => "Input",
        'nid.required' => "Input",
        'a_qua.required' => "Input",
        'p_qua.required' => "Input",
        'experience.required' => "Input",

        'acc_name.required' => "Input",
        'acc_num.required' => "Input",
        'bank_name.required' => "Input",
        'branch.required' => "Input",
        'code.required' => "Input",

        'file.required' => "Input",
        'agfile.required' => "Input",

    ]);



     // image upload & save
     $image = $request->file('image');
     $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
     Image::make($image)->resize(50,50)->save('upload/employee/image/'.$name_gen);
     $save_url = 'upload/employee/image/'.$name_gen;
     // return $save_url;

    //  File upload & save

     $fileName = time().'.'.$request->file('file')->extension();
     $request->file('file')->move(public_path('upload/employee/file/'), $fileName);
     $save_url1 = 'upload/employee/file/'.$fileName;




      // AgFile upload & save
     $agfileName = time().time().'.'.$request->file('agfile')->getClientOriginalName();
     $request->file('agfile')->move(public_path('upload/employee/agrement_file/'), $agfileName);
     $save_url2 = 'upload/employee/agrement_file/'.$agfileName;




     Employee::insert([
        'outlet_id' => $request->outlet_id,
        'name' => $request->name,
        'email' => $request->email,

        'father_name' => $request->father_name,
        'mother_name' => $request->mother_name,
        'dob' => $request->dob,
        'gender' => $request->gender,
        'maritial_status' => $request->maritial_status,
        'phone' => $request->phone,
        'e_phone' => $request->e_phone,
        'address' => $request->address,
        'par_address' => $request->par_address,
        'image' => $save_url,

        'employee_id' => $request->employee_id,
        'department' => $request->department,
        'designation' => $request->designation,
        'doj' => $request->doj,
        'salary' => $request->salary,
        'nid' => $request->nid,
        'a_qua' => $request->a_qua,
        'p_qua' => $request->p_qua,
        'experience' => $request->experience,

        'acc_name' => $request->acc_name,
        'acc_num' => $request->acc_num,
        'bank_name' => $request->bank_name,
        'branch' => $request->branch,
        'code' => $request->code,

        'file' => $save_url1,
        'agfile' => $save_url2,

    ]);

    $notification = array(
        'message' => 'Inserted Successfully',
        'alert-type' => 'success'
    );

    return redirect()->route('employee.view')->with($notification);
}



// Employee View
public function EmployeeView(){

    $employees = Employee::latest()->get();
    return view ('backend.hrm.emp_view',compact('employees'));
}


// Employee Edit
public function EmployeeEdit($id){
    $employee_edit = Employee::findorFail($id);
    $deps = Department::orderBy('dep_name','ASC')->get();

    return view ('backend.hrm.emp_edit',compact('employee_edit','deps'));

}

//  Employee Update
public function EmployeeUpdate(Request $request){

    $emp_id = $request->id;
    $old_img  = $request->old_image;

    if ($request->file('image')) {

        unlink($old_img);
        $image = $request->file('image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(300,300)->save('upload/employee/image/'.$name_gen);
        $save_url = 'upload/employee/image/'.$name_gen;


    //     //  File upload & save

    //  $fileName = time().'.'.$request->file('file')->extension();
    //  $request->file('file')->move(public_path('upload/employee/file/'), $fileName);
    //  $save_url1 = 'upload/employee/file/'.$fileName;




    //   // AgFile upload & save
    //  $agfileName = time().time().'.'.$request->file('agfile')->getClientOriginalName();
    //  $request->file('agfile')->move(public_path('upload/employee/agrement_file/'), $agfileName);
    //  $save_url2 = 'upload/employee/agrement_file/'.$agfileName;


        Employee::findOrFail($emp_id)->update([
        'outlet_id' => $request->outlet_id,
        'name' => $request->name,
        'email' => $request->email,

        'father_name' => $request->father_name,
        'mother_name' => $request->mother_name,
        'dob' => $request->dob,
        'gender' => $request->gender,
        'maritial_status' => $request->maritial_status,
        'phone' => $request->phone,
        'e_phone' => $request->e_phone,
        'address' => $request->address,
        'par_address' => $request->par_address,
        'image' => $save_url,

        'employee_id' => $request->employee_id,
        'department' => $request->department,
        'designation' => $request->designation,
        'doj' => $request->doj,
        'salary' => $request->salary,
        'nid' => $request->nid,
        'a_qua' => $request->a_qua,
        'p_qua' => $request->p_qua,
        'experience' => $request->experience,

        'acc_name' => $request->acc_name,
        'acc_num' => $request->acc_num,
        'bank_name' => $request->bank_name,
        'branch' => $request->branch,
        'code' => $request->code,

        // 'file' => $save_url1,
        // 'agfile' => $save_url2,

        ]);

        $notification = array(
          'message' =>  ' Update Sucessyfully',
          'alert-type' => 'success'
      );

      return redirect()->route('employee.view')->with($notification);


    }


    else{



        Employee::findOrFail($emp_id)->update([
            'outlet_id' => $request->outlet_id,
            'name' => $request->name,
            'email' => $request->email,

            'father_name' => $request->father_name,
            'mother_name' => $request->mother_name,
            'dob' => $request->dob,
            'gender' => $request->gender,
            'maritial_status' => $request->maritial_status,
            'phone' => $request->phone,
            'e_phone' => $request->e_phone,
            'address' => $request->address,
            'par_address' => $request->par_address,
            // 'image' => $save_url,

            'employee_id' => $request->employee_id,
            'department' => $request->department,
            'designation' => $request->designation,
            'doj' => $request->doj,
            'salary' => $request->salary,
            'nid' => $request->nid,
            'a_qua' => $request->a_qua,
            'p_qua' => $request->p_qua,
            'experience' => $request->experience,

            'acc_name' => $request->acc_name,
            'acc_num' => $request->acc_num,
            'bank_name' => $request->bank_name,
            'branch' => $request->branch,
            'code' => $request->code,

            // 'file' => $save_url1,
            // 'agfile' => $save_url2,


           ]);

           $notification = array(
             'message' =>  'Brand Update Sucessyfully',
             'alert-type' => 'info'
         );

         return redirect()->route('employee.view')->with($notification);


    } // else end

} // method end


// Employee Delete

public function EmployeeDelete($id){

    Employee::findOrFail($id)->delete();

    $notification = array(
    'message' => ' Deleted Successfully',
    'alert-type' => 'success'
  );

  return redirect()->back()->with($notification);



}
        //////////////////////employee deshboard/////////////////////////////////////


            public function EmployeeDesh(){
                return view('backend.hrm.employee.employee_desh');
            }








}  // main method end
