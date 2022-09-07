<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Helpers\Helper;
use App\Models\RecruitmentAddCanditate;
use App\Models\Designation;
use App\Models\CandidateShortlist;
use App\Models\Interview;
use App\Models\CandidateSelection;
use Image;

class RecuitmentController extends Controller
{
    //.................. ADD Candidate Crud Start....................//

    public function CandidateAdd(){
        return view('backend.hrm.recruitment.addcandidate.can_index');
    } // end add

    public function CandidateStore(Request $request){
        //  dd($request->all());
        $request->validate([
            'candidate_name' => "required",
            'email' => "required|email",
            'phone' => "required|max:11",

        ]);


          // image upload & save
          $image = $request->file('image');
          $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
          Image::make($image)->resize(50,50)->save('upload/candidate/'.$name_gen);
          $save_url = 'upload/candidate/'.$name_gen;



            $candidate_id = Helper::IDGenerator(new RecruitmentAddCanditate, 'candidate_id', 4 , 'CAND');

            $candidates = new RecruitmentAddCanditate;

            $candidates->candidate_id     = $candidate_id;
            $candidates->candidate_name   = $request->candidate_name;
            $candidates->email            = $request->email;
            $candidates->phone            = $request->phone;
            $candidates->alt_phone        = $request->alt_phone;
            $candidates->present_add      = $request->present_add;
            $candidates->par_add          = $request->par_add;
            $candidates->dob              = $request->dob;
            $candidates->image            = $save_url;
            $candidates->obtained_degree  = $request->obtained_degree;
            $candidates->university_name  = $request->university_name;
            $candidates->gpa              = $request->gpa;
            $candidates->outof_gpa        = $request->outof_gpa;
            $candidates->company_name     = $request->company_name;
            $candidates->designation      = $request->designation;
            $candidates->working_period   = $request->working_period;
            $candidates->duties           = $request->duties;

            $candidates->save();

            $notification = array(
                'message' => 'Inserted Successfully',
                'alert-type' => 'success'
            );
            return redirect()->route('recruitment.manage_candidate')->with($notification);

    }//end store

    // Manage ADD_Candidate
    public function CandidateView(){
        $candidates = RecruitmentAddCanditate::latest()->get();
        return view ('backend.hrm.recruitment.addcandidate.manage_candidate',compact('candidates'));
    } // end manage


    //For showing Particular Page
    public function CandidateViewPage($id){
        $candidates = RecruitmentAddCanditate::findOrfail($id);
        //dd($candidates);
        return view('backend.hrm.recruitment.addcandidate.show_candidate',compact('candidates'));
    }

    //Edit Add_candidate
    public function CandidateEdit($id){
        $candidate_edit = RecruitmentAddCanditate::findOrfail($id);
        //dd($candidate_edit);

        return view('backend.hrm.recruitment.addcandidate.edit_candidate',compact('candidate_edit'));
    }

    //Update add_candidate
    public function CandidateUpdate(Request $request,$id){

        // $candidate_edit_id = $request->id;
        $previous_img = $request->previous_img;
        $candidate = RecruitmentAddCanditate::find($id);
        if(!$candidate){
           return response()->json(['error'=> "Candidate Not Found"]);
        }
        $save_url = $candidate->image;
        if($request->file('image')){
            $this->removePreviousImage($previous_img);
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(50,50)->save('upload/candidate/'.$name_gen);
            $save_url = 'upload/candidate/'.$name_gen;
        }

        $candidate->update([
            'candidate_name'   => $request->candidate_name,
            'email'            => $request->email,
            'phone'            => $request->phone,
            'alt_phone'        => $request->alt_phone,
            'present_add'      => $request->present_add,
            'par_add'          => $request->par_add,
            'dob'              => $request->dob,
            'image'            => $save_url,
            'obtained_degree'  => $request->obtained_degree,
            'university_name'  => $request->university_name,
            'gpa'              => $request->gpa,
            'outof_gpa'       => $request->outof_gpa,
            'company_name'      => $request->company_name,
            'designation'     => $request->designation,
            'working_period'  => $request->working_period,
            'duties'           => $request->duties,
        ]);
        return response()->json(['message'=>"Updated Successfully"]);
    }// end method


    // Delete
    public function CandidateDelete($id){

        RecruitmentAddCanditate::findOrFail($id)->delete();
        $notification = array(
            'message' => 'Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);

    } // end delete


    private function removePreviousImage($image){
        if(file_exists(public_path($image))){
            unlink(public_path($image));
            return true;
        }
       return false;
    }


    //................................. Shortlist Crud Start......................................//

    //add
    public function AddShortlist(){
        $designation = Designation::orderBy('designation_name','ASC')->get();
        $candidates = RecruitmentAddCanditate::orderBy('candidate_id','ASC')->get();
        return view('backend.hrm.recruitment.shortlist.can_shortlist',compact('designation','candidates'));
    } // end add

    // for dynamic data
    public function DynamicData($candidate_id){
        $candidate = RecruitmentAddCanditate::where('id','like',$candidate_id)->first();
        return response()->json($candidate);
    }

    //store
    public function StoreShortlist(Request $request){

        $validator = Validator::make($request->all(),[
            'candidate_id'     =>'required',
            'candidate_name'   =>'required',
            'designation_id'   =>'required',
            'todays_date'      =>'required',
            'interview_date'   =>'required',

        ]);

        if($validator->fails()){
            return response()->json(['errors' => $validator->errors()],422);
        }else{
            $shortlists = new CandidateShortlist;

            $shortlists->candidate_id   = $request->input('candidate_id');
            $shortlists->candidate_name = $request->input('candidate_name');
            $shortlists->designation_id = $request->input('designation_id');
            $shortlists->todays_date    = $request->input('todays_date');
            $shortlists->interview_date = $request->input('interview_date');
            $shortlists->save();
            return response()->json(['message' => 'Added Successfully']);

        }
    } // end store

    //view
    public function ShortlistView(){
        $shortlists = CandidateShortlist::with(['candidate','designation'])->get();
        // $shortlists = CandidateShortlist::with(['candidate'])->get();
        // $shortlists[candidate][candidate_id];
        // dd($shortlists);
        return response()->json([
            'shortlists' => $shortlists,
        ]);
    }// wnd

    // Edit Method
    public function EditShortlist($id){
        $shortlist = CandidateShortlist::with('candidate','designation')->find($id);
        if($shortlist){
            return response()->json(['shortlist' =>$shortlist]);
        }
        else{
            return response()->json(['message' => 'Not Found'],404);

        }
        } // edit




    //update
    public function UpdateShortlist(Request $request,$id){
        $shortlist = CandidateShortlist::with('candidates','designation')->find($id);

        if(!$shortlist){
            return response()->json(['message' => ' Not Found'],404);
        }
        $validator = Validator::make($request->all(),[
            'candidate_id'     =>'required',
            'candidate_name'   =>'required',
            'designation_id'   =>'required',
            'todays_date'      =>'required',
            'interview_date'   =>'required',
        ]);

        if($validator->fails()){
            return response()->json(['errors' => $validator->errors()],422);
        }

        try{
            $shortlist->candidate_id   = $request->input('candidate_id');
            $shortlist->candidate_name = $request->input('candidate_name');
            $shortlist->designation_id = $request->input('designation_id');
            $shortlist->todays_date    = $request->input('todays_date');
            $shortlist->interview_date = $request->input('interview_date');
            $shortlist->update();
            return response()->json(['message' => 'Updated Successfully',]);

        }catch(\Exception $e){
            return response()->json(['error' => $e->getMessage()],500);
        }
    }//end

    //delete
    public function DeleteShortlist($id){

        $shortlist = CandidateShortlist::find($id);
        $shortlist->delete();
        return response()->json(['message' => 'Deleted Successfully',]);

    }

    //................................. Interview Crud Start...........................//

    //add
    public function AddInterview(){
        $shortlist = Interview::with(['candidates'])->get();
        // dd($shortlist);
        return view('backend.hrm.recruitment.interview.interview',compact('shortlist'));
    }


    public function getCandidates(){
        // $candidates = RecruitmentAddCanditate::latest()->get();
        $candidates = CandidateShortlist::with(['candidate'])->get();
        // dd($candidates);
        return response()->json(compact('candidates'));
    }

    public function getShortListViaCandidateId($candidate_id){
        // `candidate_id`, `candidate_name`, `designation_id`, `todays_date`, `interview_date`,
        $shortList = CandidateShortlist::with(['candidate','designation'])->where('candidate_id',$candidate_id)->first();
        //dd($shortList);
        return response()->json(compact('shortList'));
    }


    public function StoreInterview(Request $request){

        $validator = Validator::make($request->all(),[
            //'candidate_id'    => 'required',
            'candidate_name'  => 'required',
            'interview_date'  => 'required',
            'designation_id'  => 'required',
            'interviewr_name' => 'required',
            'mcq'             => 'required',
            'viva'            => 'required',
            'written'         => 'required',
            'total_mark'      => 'required',
            'selection'       => 'required',
        ]);

        if($validator->fails()){
            return response()->json(['errors' => $validator->errors()],422);
        }else{
            $interviews = new Interview;
            //dd($interviews);

            $interviews->candidate_id    = $request->input('candidate_id');
            $interviews->candidate_name  = $request->input('candidate_name');
            $interviews->interview_date  = $request->input('interview_date');
            $interviews->designation_id  = $request->input('designation_id');
            $interviews->interviewr_name = $request->input('interviewr_name');
            $interviews->viva            = $request->input('viva');
            $interviews->written         = $request->input('written');
            $interviews->mcq             = $request->input('mcq');
            $interviews->total_mark      = $request->input('total_mark');
            $interviews->selection       = $request->input('selection');
            $interviews->save();
            return response()->json(['message' => 'Added Successfully']);
        }

    } // end

    //view
    public function ViewInterview(){
        $interview = Interview::with(['candidates','designation'])->get();
        return response()->json(['interview' => $interview]);
    }

    // Edit Method
    public function EditInterview($id){
        $interview = Interview::with('candidates','designation')->find($id);
        if($interview){
            return response()->json(['interview' =>$interview]);
        }
        else{
            return response()->json(['message' => 'Not Found'],404);

        }
    } // edit

    //update
    public function UpdateInterview(Request $request,$id){
        $interview = Interview::with('candidates','designation')->find($id);

        if(!$interview){
            return response()->json(['message' => ' Not Found'],404);
        }
        $validator = Validator::make($request->all(),[
            'candidate_name'  => 'required',
            'interview_date'  => 'required',
            'designation_id'  => 'required',
            'interviewr_name' => 'required',
            'mcq'             => 'required',
            'viva'            => 'required',
            'written'         => 'required',
            'total_mark'      => 'required',
            'selection'       => 'required',
        ]);

        if($validator->fails()){
            return response()->json(['errors' => $validator->errors()],422);
        }

        try{
            $interview->candidate_id    = $request->input('candidate_id');
            $interview->candidate_name  = $request->input('candidate_name');
            $interview->interview_date  = $request->input('interview_date');
            $interview->designation_id  = $request->input('designation_id');
            $interview->interviewr_name = $request->input('interviewr_name');
            $interview->viva            = $request->input('viva');
            $interview->written         = $request->input('written');
            $interview->mcq             = $request->input('mcq');
            $interview->total_mark      = $request->input('total_mark');
            $interview->selection       = $request->input('selection');
            $interview->update();
            return response()->json(['message' => 'Updated Successfully',]);

        }catch(\Exception $e){
            return response()->json(['error' => $e->getMessage()],500);
        }
    }//end


    //delete
    public function DeleteInterview($id){
        $interview = Interview::find($id);
        $interview->delete();
        return response()->json(['message' => 'Deleted Successfully',]);

    }



    //............................... Candidate Selection Crud Start .............................//

    public function AddSelection(){
        // $candidates = Interview::with(['candidates','designation'])->get();
        // dd($candidates);
        return view('backend.hrm.recruitment.selection.can_select');
    }

    public function getCandfrominterview(){
        $candidates = Interview::with(['candidates','designation'])->get();
        return response()->json(compact('candidates'));
    }

    public function getInterviewlist($candidate_id){
        $interview = Interview::with(['candidates','designation'])->where('candidate_id',$candidate_id)->first();
        return response()->json(compact('interview'));
    }

    public function StoreSelection(Request $request){

        $validator = Validator::make($request->all(),[
            'candidate_name' => 'required',
            'designation_id' => 'required',
            'terms'          => 'required',
        ]);

        if($validator->fails()){
            return response()->json(['errors' => $validator->errors()],422);
        }else{
            $emp_id = Helper::IDGenerator(new CandidateSelection, 'employee_id', 4 , 'EMP');

            $selections = new CandidateSelection;

            $selections->employee_id    = $emp_id;
            $selections->candidate_id   = $request->input('candidate_id');
            $selections->candidate_name = $request->input('candidate_name');
            $selections->designation_id = $request->input('designation_id');
            $selections->terms          = $request->input('terms');
            $selections->save();
            return response()->json(['message' => 'Added Successfully']);

        }

    }// end store

    public function ViewSelection(){
        $selection = CandidateSelection::with(['interviews','designation'])->get();
        return response()->json(compact('selection'));
    }

    public function EditSelection($id){
        $selection = CandidateSelection::with(['interviews','designation'])->find($id);

        if($selection){
            return response()->json(['selection' => $selection]);
        }else{
            return response()->json(['message' => 'Not Found'],404);
        }

    }

    public function UpdateSelection(Request $request,$id){
        $selection = CandidateSelection::with(['interviews','designation'])->find($id);

        if(!$selection){
            return response()->json(['message' => 'Not Found'],404);
        }else{

            $validator = Validator::make($request->all(),[
                'candidate_name' => 'required',
                'designation_id' => 'required',
                'terms'          => 'required',
            ]);

            if($validator->fails()){
                return response()->json(['errors' => $validator->errors()],422);
            }

            try{

                $selection->candidate_id   = $request->input('candidate_id');
                $selection->candidate_name = $request->input('candidate_name');
                $selection->designation_id = $request->input('designation_id');
                $selection->terms          = $request->input('terms');
                $selection->update();
                return response()->json(['message' => 'Updated Successfully',]);

            }catch(\Exception $e){
                return response()->json(['error' => $e->getMessage()],500);
            }

        }

    } // end


    //delete
    public function DeleteSelection($id){
        $selection = CandidateSelection::find($id);
        $selection->delete();
        return response()->json(['message' => 'Deleted Successfully',]);

    }



} // main method
