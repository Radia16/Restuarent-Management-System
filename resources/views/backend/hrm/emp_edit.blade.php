

@extends('admin.main_master')

@section('content')


<div class="row">
    <div class="col-lg-2"></div>



    <div class="col-lg-8">
     <section class="content">


     <form action="{{ route('employee.update') }}" method="POST" enctype="multipart/form-data" >
         @csrf

         <input type="hidden" name="id" value="{{$employee_edit->id}}">
         <input type="hidden" name="old_image" value="{{$employee_edit->image}}">


         <div class="row">


             {{--  Employee Info  --}}
             <div class="col-lg-6">

                     <div class="box">

                       <!-- /.box-header -->


                           <div class="box-body">
                               <h4 class="box-title text-info mb-0"><i class="ti-user me-15"></i> Employee Info </h4>
                               <hr class="my-15">
                               <div class="row">

                                 <div class="col-md-6">
                                   <div class="form-group">
                                     <label class="form-label">Employee Name</label>
                                     <input type="text" name="name" value="{{ $employee_edit->name }}" class="form-control" placeholder=" Name">
                                   </div>
                                 </div>

                                 <div class="col-md-6">
                                   <div class="form-group">
                                     <label class="form-label">E-mail</label>
                                     <input type="email" name="email" value="{{ $employee_edit->email }}" class="form-control" placeholder="email">
                                   </div>
                                 </div>
                               </div>

                               <div class="row">
                                 <div class="col-md-6">
                                   <div class="form-group">
                                     <label class="form-label">Contact Number</label>
                                     <input type="number" name="phone" value="{{ $employee_edit->phone }}" class="form-control" placeholder="phone">
                                   </div>
                                 </div>

                                 <div class="col-md-6">
                                   <div class="form-group">
                                     <label class="form-label"> Emergency Contact Number</label>
                                     <input type="number" name="e_phone" value="{{ $employee_edit->e_phone }}" class="form-control" placeholder="Phone">
                                   </div>
                                 </div>
                               </div>


                               <div class="row">
                                 <div class="col-md-6">
                                   <div class="form-group">
                                     <label class="form-label">Father Name</label>
                                     <input type="text" name="father_name" value="{{ $employee_edit->father_name }}" class="form-control" placeholder="father_name">
                                   </div>
                                 </div>

                                 <div class="col-md-6">
                                   <div class="form-group">
                                     <label class="form-label"> Mother Name</label>
                                     <input type="text" name="mother_name" value="{{ $employee_edit->mother_name }}" class="form-control" placeholder="father_name">
                                   </div>
                                 </div>
                               </div>

                               <div class="row">
                                 <div class="col-md-6">
                                   <div class="form-group">
                                     <label class="form-label"> Present Address</label>
                                     <textarea rows="4" name="address" value="{{ $employee_edit->address }}" class="form-control" placeholder="Address"></textarea>
                                   </div>
                                 </div>

                                 <div class="col-md-6">
                                   <div class="form-group">
                                     <label class="form-label"> Parmanent Address</label>
                                     <textarea rows="4" name="par_address" value="{{ $employee_edit->par_address }}" class="form-control" placeholder="Address"></textarea>
                                   </div>
                                 </div>
                               </div>


                               <div class="row">
                                 <div class="col-md-6">
                                   <div class="form-group">
                                     <label class="form-label"> Gender </label>
                                         <select class="form-select" value="{{ $employee_edit->gender }}" name="gender">

                                             <option> Select </option>
                                             <option> Male </option>
                                             <option> Female  </option>

                                         </select>
                                   </div>
                                 </div>


                                 <div class="col-md-6">
                                   <div class="form-group">
                                     <label class="form-label"> Maritial Status </label>
                                         <select class="form-select" value="{{ $employee_edit->maritial_status }}" name="maritial_status">

                                             <option> Select </option>
                                             <option> Single </option>
                                             <option> Married  </option>
                                             <option> Widow  </option>

                                         </select>
                                   </div>
                                 </div>
                               </div>


                               <div class="row">
                                 <div class="col-md-6">
                                   <div class="form-group">
                                     <label class="form-label"> Date of Birth </label>
                                     <input type="date" name="dob" value="{{ $employee_edit->dob }}" class="form-control" placeholder="D/M/Y">
                                   </div>
                                 </div>

                                 <div class="col-md-6">
                                   <div class="form-group">
                                     <label class="form-label"> Employee Photo </label>
                                     <input type="file" name="image" value="{{ $employee_edit->image }}" class="form-control" placeholder="Choose photo">
                                   </div>
                                 </div>
                               </div>





                             </div>
                           <!-- /.box-body -->



                     </div>
                     <!-- /.box -->


             </div>






             {{--  Company details  --}}
             <div class="col-lg-6">

                     <div class="box">

                       <!-- /.box-header -->



                           <div class="box-body">
                               <h4 class="box-title text-info mb-0"><i class="ti-user me-15"></i> Company Details </h4>
                               <hr class="my-15">

                               <div class="row">
                                 <div class="col-md-6">

                                   <div class="form-group">
                                     <label class="form-label">Outlet ID</label>
                                     <input type="text" name="outlet_id" value="{{ $employee_edit->outlet_id }}" class="form-control" placeholder="outlet_id">
                                   </div>
                                 </div>
                                 <div class="col-md-6">
                                   <div class="form-group">
                                     <label class="form-label">Employee_id</label>
                                     <input type="number" name="employee_id" value="{{ $employee_edit->employee_id }}" class="form-control" placeholder="employee_id">
                                   </div>
                                 </div>
                               </div>


                               <div class="row">
                                 <div class="col-md-6">
                                   <div class="form-group">
                                     <label class="form-label">Designation</label>
                                     <input type="text" name="designation" value="{{ $employee_edit->designation }}" class="form-control" placeholder="designation">
                                   </div>
                                 </div>
                                 <div class="col-md-6">
                                   <div class="form-group">
                                    <label class="form-label" >Department</label>
                                    <div class="col-sm-12">
                                     <select name="department" class="form-control"  >

                                      <option value="" selected="" disabled="">Select Department</option>

                                      {{--  @foreach($expenseitems as $item)
                                      <option value="{{ $item->id }}" {{ $item->id == $expense_edit->expense_item_id ? 'selected' : ''}} > {{ $item->expense_item_name }} </option>
                                     @endforeach  --}}

                                      @foreach($deps as $dep)
                                       <option value="{{ $dep->id }}" {{ $dep->id == $employee_edit->department ? 'selected' : '' }} > {{ $dep->dep_name }}</option>
                                      @endforeach

                                     </select>
                                    </div>
                                   </div>
                                 </div>
                               </div>


                               <div class="row">
                                 <div class="col-md-6">
                                   <div class="form-group">
                                     <label class="form-label">Date of Joining</label>
                                     <input type="date" name="doj" value="{{ $employee_edit->doj }}" class="form-control" placeholder="doj">
                                   </div>
                                 </div>
                                 <div class="col-md-6">
                                   <div class="form-group">
                                     <label class="form-label">Salary</label>
                                     <input type="number" name="salary" value="{{ $employee_edit->salary }}" class="form-control" placeholder="salary">
                                   </div>
                                 </div>
                               </div>

                               <div class="row">
                                 <div class="col-md-6">
                                   <div class="form-group">
                                     <label class="form-label">Eperience</label>
                                     <input type="text" name="experience" value="{{ $employee_edit->experience }}" class="form-control" placeholder="experience">
                                   </div>
                                 </div>
                                 <div class="col-md-6">
                                   <div class="form-group">
                                     <label class="form-label">National ID</label>
                                     <input type="number" name="nid" value="{{ $employee_edit->nid }}" class="form-control" placeholder="nid">
                                   </div>
                                 </div>
                               </div>


                               <div class="row">
                                 <div class="col-md-6">
                                   <div class="form-group">
                                     <label class="form-label">Academic Qualification</label>
                                     <input type="text" name="a_qua" value="{{ $employee_edit->a_qua }}" class="form-control" placeholder="a_qua">
                                   </div>
                                 </div>
                                 <div class="col-md-6">
                                   <div class="form-group">
                                     <label class="form-label">Professional Qualification</label>
                                     <input type="text" name="p_qua" value="{{ $employee_edit->p_qua }}" class="form-control" placeholder="p_qua">
                                   </div>
                                 </div>
                               </div>


                         </div>
                           <!-- /.box-body -->


                     </div>
                     <!-- /.box -->


             </div>




      </div>
      {{--  1st row end  --}}


      {{--  /////////////////////////// 2nd row  //////////////////////////////////////  --}}
      <div class="row">


         {{--  Bank holder  --}}
         <div class="col-lg-6">

                 <div class="box">

                   <!-- /.box-header -->



                       <div class="box-body">
                           <h4 class="box-title text-info mb-0"><i class="ti-user me-15"></i> Bank Account Details</h4>
                           <hr class="my-15">

                           <div class="row">
                             <div class="col-md-6">

                               <div class="form-group">
                                 <label class="form-label">Account Holder Name</label>
                                 <input type="text" name="acc_name" value="{{ $employee_edit->acc_name }}" class="form-control" placeholder="acc_name">
                               </div>
                             </div>
                             <div class="col-md-6">
                               <div class="form-group">
                                 <label class="form-label">Account Nmuber</label>
                                 <input type="number" name="acc_num" value="{{ $employee_edit->acc_num }}" class="form-control" placeholder="acc_num">
                               </div>
                             </div>
                           </div>

                           <div class="row">
                             <div class="col-md-6">
                               <div class="form-group">
                                 <label class="form-label">Bank Name</label>
                                 <input type="text" name="bank_name" value="{{ $employee_edit->bank_name }}" class="form-control" placeholder="bank_name">
                               </div>
                             </div>
                             <div class="col-md-6">
                               <div class="form-group">
                                 <label class="form-label">Branch Name</label>
                                 <input type="text" name="branch" value="{{ $employee_edit->branch }}" class="form-control" placeholder="branch">
                               </div>
                             </div>
                           </div>

                           <div class="row">
                             <div class="col-md-6">
                               <div class="form-group">
                                 <label class="form-label">Pan Code</label>
                                 <input type="text" name="code" value="{{ $employee_edit->code }}" class="form-control" placeholder="code">
                               </div>
                             </div>
                           </div>




                     </div>
                       <!-- /.box-body -->

                 </div>
                 <!-- /.box -->


         </div>



         {{--  Documents  --}}
         <div class="col-lg-6">

                 <div class="box">

                   <!-- /.box-header -->



                       <div class="box-body">

                           <h4 class="box-title text-info mb-0 mt-20"><i class="ti-envelope me-15"></i> Documents </h4>
                           <hr class="my-15">
                           <div class="form-group">
                             <label class="form-label">CV</label>
                             <input class="form-control" type="file" value="{{ $employee_edit->file }}" name="file" placeholder="Choose File">
                           </div>

                           <div class="form-group">
                             <label class="form-label"> Agreement/Offer Letter </label>
                             <input class="form-control" type="file" value="{{ $employee_edit->agfile }}" name="agfile" placeholder="Choose File">
                           </div>



                         </div>
                       <!-- /.box-body -->



                 </div>
                 <!-- /.box -->


         </div>


  </div>
  {{--  2nd row end  --}}


  {{--  Button for all  --}}
  <div class="box-footer">
     <button type="submit" class="btn btn-success pull-right">  Updated Info </button>
 </div>

  {{--  Button for all end  --}}

     </form>
     </section>

 </div>
 {{--  co9lum end 8  --}}







    <div class="col-lg-2"></div>
</div>


@endsection
