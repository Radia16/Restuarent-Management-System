<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


use App\Models\Award;
use App\Models\Employee;

class AwardController extends Controller
{

    // Add method
    public function AddAward(){
        $employee = Employee::orderBy('name','ASC')->get();
        return view('backend.hrm.award.award',compact('employee'));
    }

    // Store Method
    public function StoreAward(Request $request){

        $validator = Validator::make($request->all(),[
            'award_name' => 'required',
            'description' => 'required',
            'gift_item' => 'required',
            'employee_name' => 'required',
            'date' => 'required',
            'award_by' => 'required',
        ]);




        if($validator->fails()){
            return response()->json(['errors' => $validator->errors()],422);
        }
        else{

            $award = new Award;
            $award->award_name      = $request->input('award_name');
            $award->description     = $request->input('description');
            $award->gift_item       = $request->input('gift_item');
            $award->employee_name   = $request->input('employee_name');
            $award->date            = $request->input('date');
            $award->award_by        = $request->input('award_by');
            $award->save();
            return response()->json(['message' => 'Added Successfully']);

        }


    }// store end

    // View Method
    public function ViewAward(){
        $employee = Employee::orderBy('name','ASC')->get();
        $award = Award::all();
        return response()->json([
            'award' =>$award,
             'employee' =>$employee,
        ]);
    }

    // Edit Method
    public function EditAward($id){
        $award = Award::find($id);
        if($award){
            return response()->json(['award' =>$award]);
        }
        else{
            return response()->json(['message' => 'Not Found'],404);

        }

    } // edit

    // Update Method
    public function UpdateAward(Request $request,$id){
        // dd($request->all());
        $award =  Award::find($id);
        if(!$award){
            return response()->json(['message' => ' Not Found'],404);
        }
        $validator = Validator::make($request->all(),[
            'award_name' => 'required',
            'description' => 'required',
            'gift_item' => 'required',
            'employee_name' => 'required',
            'date' => 'required',
            'award_by' => 'required',
        ]);

        if($validator->fails()){
            return response()->json(['errors' => $validator->errors()],422);
        }

        try{
            $award->award_name      = $request->input('award_name');
            $award->description     = $request->input('description');
            $award->gift_item       = $request->input('gift_item');
            $award->employee_name   = $request->input('employee_name');
            $award->date            = $request->input('date');
            $award->award_by        = $request->input('award_by');
            $award->update();
            return response()->json(['message' => 'Added Successfully',]);

        }catch(\Exception $e){
            return response()->json(['error' => $e->getMessage()],500);
        }



    }// update end

    public function DeleteAward($id){

        $award = Award::find($id);
        $award->delete();
        return response()->json(['message' => 'Deleted Successfully',]);

    }



}// mainmethod end
