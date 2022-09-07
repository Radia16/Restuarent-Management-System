<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Department;
use App\Models\Designation;

class DepartmentController extends Controller
{
    //Depmaretment add
    public  function DepAdd()
    {
        // $deps = Department::latest()->get();
        return view('backend.hrm.department.dep_view');
    }

    // Depmaretment Store
    public function DepStore(Request $request){

        $validator = Validator::make($request->all(),[
            'dep_name' => 'required',
            'status'   => 'required',
        ]);

        if($validator->fails()){
            return response()->json(['errors' => $validator->errors()],422);
        }
        else{

            $departments = new Department;
            $departments->dep_name = $request->input('dep_name');
            $departments->status   = $request->input('status');

            $departments->save();
            return response()->json(['message' => 'Added Successfully']);
        }//end

    } //end

    // view
    public function DepView(){
        $department = Department::all();
        return response()->json(['department'=> $department]);
    }// end


    // edit
    public function DepEdit($id){
        $department = Department::find($id);

        if($department){
            return response()->json(['department'=> $department]);
        }
        else{
            return response()->json(['message' => 'Not found'],404);
        }
    }//end



    public function DepUpdate(Request $request,$id){
        $department = Department::find($id);
        if(!$department){
            return response()->json(['message' => ' Not Found'],404);
        }
        $validator = Validator::make($request->all(),[
            'dep_name' => 'required',
            'status'   => 'required',
        ]);

        if($validator->fails()){
            return response()->json(['errors' => $validator->errors()],422);
        }

        try{
            $department->dep_name = $request->input('dep_name');
            $department->status   = $request->input('status');
            $department->update();
            return response()->json(['message' => 'updated Successfully',]);

        }catch(\Exception $e){
            return response()->json(['error' => $e->getMessage()],500);
        }
    }// end

     //delete
    public function DepDelete($id){

        $department = Department::find($id);
        $department->delete();
        return response()->json(['message' => 'Deleted Successfully',]);

    }


    //........... Designation Crud Operation Start................//

    public function AddDesignation(){
        return view('backend.hrm.department.designation');
    }

    // store
    public function StoreDesignation(Request $request){

        $validator = Validator::make($request->all(),[
            'designation_name' => 'required',
        ]);

        if($validator->fails()){
            return response()->json(['errors' => $validator->errors()],422);
        }
        else{

            $designations = new Designation;
            $designations->designation_name = $request->input('designation_name');

            $designations->save();
            return response()->json(['message' => 'Designation Added Successfully']);
        }//end

    }// end store

    // view
    public function ViewDesignation(){
        $designation = Designation::all();
        return response()->json([
            'designation'=> $designation,
        ]);
    }// end

    // edit
    public function EditDesignation($id){
        $designation = Designation::find($id);

        if($designation){
            return response()->json(['designation'=> $designation]);
        }
        else{
            return response()->json(['message' => 'Not found'],404);
        }
    }//end

    //update
    public function UpdateDesignation(Request $request,$id){
        $designation = Designation::find($id);
        if(!$designation){
            return response()->json(['message' => ' Not Found'],404);
        }
        $validator = Validator::make($request->all(),[
            'designation_name' => 'required',
        ]);

        if($validator->fails()){
            return response()->json(['errors' => $validator->errors()],422);
        }

        try{
            $designation->designation_name = $request->input('designation_name');
            $designation->update();
            return response()->json(['message' => 'updated Successfully',]);

        }catch(\Exception $e){
            return response()->json(['error' => $e->getMessage()],500);
        }
    }// end

    //delete
    public function DeleteDesignation($id){

        $designation = Designation::find($id);
        $designation->delete();
        return response()->json(['message' => 'Deleted Successfully',]);

    }



}// main method end
