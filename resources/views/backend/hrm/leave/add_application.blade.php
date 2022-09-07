@extends('admin.main_master')


@section('content')

{{--  <!-- AddLeaveAppModal Start -->  --}}
<div class="modal fade bs-example-modal-lg" id="AddLeaveAppModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"  id="myLargeModalLabel"> Add Leave Applications Info</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
            {{--  <ul id="saveform_errList"></ul>  --}}
            <div class="row">

                <div class="col-lg-6">

                    <div class="form-group md-3">
                        <label for=""> Employee Name </label>
                        <select name="employee_id" class="employee_id form-control"  >

                            <option value="" selected="" disabled="">Select Employee Name</option>

                            @foreach($employee as $emp)
                             <option value="{{ $emp->id }}"> {{ $emp->name }}</option>
                            @endforeach

                         </select>
                    </div>

                    <div class="form-group md-3">
                        <label for=""> Leave Type </label>
                        <select name="leave_type_id" class="leave_type_id form-control"  >

                            <option value="" selected="" disabled="">Select Leave Type</option>

                            @foreach($leave as $leaves)
                             <option value="{{ $leaves->id }}"> {{ $leaves->leave_type }}</option>
                            @endforeach

                         </select>
                    </div>

                    <div class="form-group md-3">
                        <label for="">  Application Start Date </label>
                        <input type="date" class="start_date form-control" name="start_date">
                    </div>

                    <div class="form-group md-3">
                        <label for="">  Application End Date </label>
                        <input type="date" class="end_date form-control" name="end_date">
                    </div>

                    <div class="form-group md-3">
                        <label for="">  Total Number of days </label>
                        <input type="number" class="days form-control">
                    </div>

                    <div class="form-group md-3">
                        <label for="">  Application </label>
                        <input type="text" class="application form-control">
                    </div>

                </div>
                {{--  // 1st col end  --}}


                <div class="col-lg-6">

                    <div class="form-group md-3">
                        <label for="">  Outlet ID </label>
                        <input type="text" class="outlet_id form-control">
                    </div>

                    <div class="form-group md-3">
                        <label for="">  Approve Start Date </label>
                        <input type="date" class="approve_start form-control" name="approve_start">
                    </div>

                    <div class="form-group md-3">
                        <label for="">  Approve End Date </label>
                        <input type="date" class="approve_end form-control" name="approve_end">
                    </div>

                    <div class="form-group md-3">
                        <label for="">  Approve Days </label>
                        <input type="number" class="approve_day form-control">
                    </div>

                    <div class="form-group md-3">
                        <label for="">  Approve Status </label>
                        <input type="number" class="approve form-control">
                    </div>

                </div>
                {{--  // 2nd col end  --}}

            </div>
            {{--  // row end  --}}

            </div>
            {{--  Modal body end  --}}


            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary float-end add_leaveapp">Save changes</button>
            </div>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
{{--  <!-- AddLeaveAppModal End -->  --}}


{{--  <!-- EditLeaveAppModal Start -->  --}}
<div class="modal fade bs-example-modal-lg" id="EditLeaveAppModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"  id="myLargeModalLabel"> Update Leave Applications Info</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <ul id="updateform_errList"></ul>
                <input type="hidden" id="edit_leave_app_id">

            <div class="row">
                <div class="col-lg-6">

                    <div class="form-group md-3">
                        <label for=""> Employee Name </label>
                        <select name="employee_id" id="edit_employee_id" class="employee_id form-control"  >

                            <option value="" selected="" disabled="">Select Employee Name</option>

                            @foreach($employee as $emp)
                             <option value="{{ $emp->id }}"> {{ $emp->name }}</option>
                            @endforeach

                         </select>
                    </div>

                    <div class="form-group md-3">
                        <label for=""> Leave Type </label>
                        <select name="leave_type_id" id="edit_leave_type_id" class="leave_type_id form-control"  >

                            <option value="" selected="" disabled="">Select Leave Type</option>

                            @foreach($leave as $leaves)
                             <option value="{{ $leaves->id }}"> {{ $leaves->leave_type }}</option>
                            @endforeach

                         </select>
                    </div>

                    <div class="form-group md-3">
                        <label for="">  Application Start Date </label>
                        <input type="date" id="edit_start_date" class="start_date form-control" name="start_date">
                    </div>

                    <div class="form-group md-3">
                        <label for="">  Application End Date </label>
                        <input type="date" id="edit_end_date" class="end_date form-control" name="end_date">
                    </div>

                    <div class="form-group md-3">
                        <label for="">  Total Number of days </label>
                        <input type="number" id="edit_days" class="days form-control">
                    </div>

                    <div class="form-group md-3">
                        <label for="">  Application </label>
                        <input type="text" id="edit_application" class="application form-control">
                    </div>

                </div>
                {{--  // 1st col end  --}}


                <div class="col-lg-6">

                    <div class="form-group md-3">
                        <label for="">  Outlet ID </label>
                        <input type="text" id="edit_outlet_id" class="outlet_id form-control">
                    </div>

                    <div class="form-group md-3">
                        <label for="">  Approve Start Date </label>
                        <input type="date" id="edit_approve_start" class="approve_start form-control" name="approve_start">
                    </div>

                    <div class="form-group md-3">
                        <label for="">  Approve End Date </label>
                        <input type="date" id="edit_approve_end" class="approve_end form-control" name="approve_end">
                    </div>

                    <div class="form-group md-3">
                        <label for="">  Approve Days </label>
                        <input type="number" id="edit_approve_day" class="approve_day form-control">
                    </div>

                    <div class="form-group md-3">
                        <label for="">  Approve Status </label>
                        <input type="number" id="edit_approve" class="approve form-control">
                    </div>

                </div>
                {{--  // 2nd col end  --}}

            </div>
            {{--  // row end  --}}

            </div>
            {{--  Modal body end  --}}


            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary float-end update_leaveapp">Update</button>
            </div>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
{{--  <!-- EditLeaveAppModal End -->  --}}


{{--  DeleteLeaveAppModal Start  --}}
<div class="modal fade" id="DeleteLeaveAppModal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title"> Delete Info </h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">


            <input type="hidden" id="delete_leave_app_id">

                <h4> Are you sure want to delete??</h4>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary float-end del_btn">Yes Delete</button>
        </div>
      </div>
      {{--  <!-- /.modal-content -->  --}}
    </div>
    {{--  <!-- /.modal-dialog -->  --}}
</div>
{{--  DeleteLeaveAppModal Start  --}}



<div class="row" >
    <div class="col-lg-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">
                    LEAVE APPLICATION FORM
                </h3>
                <div class="bt">
                    <button type="button" class="btn btn-info-light btn-sm" data-bs-toggle="modal" data-bs-target="#AddLeaveAppModal">
                        Add Leave Information
                      </button>

                </div>
            </div>


            <!-- /.box-header -->
            <div class="box-body">
                <div class="table-responsive">
                <div id="example_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                    <table id="leave_app_table" class="table table-bordered table-hover display nowrap margin-top-10 w-p100 dataTable" role="grid" aria-describedby="example_info">
                        <thead>
                            <tr role="row">

                                <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending"
                                aria-label="Name: activate to sort column descending" style="width: 187.688px;">Outlet ID</th>

                                <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending"
                                aria-label="Name: activate to sort column descending" style="width: 187.688px;">Employee Name</th>

                                <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending"
                                aria-label="Name: activate to sort column descending" style="width: 187.688px;">Leave Type </th>

                                <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending"
                                aria-label="Name: activate to sort column descending" style="width: 187.688px;"> Application Start Date </th>

                                <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending"
                                aria-label="Name: activate to sort column descending" style="width: 187.688px;"> Application End Date </th>

                                <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending"
                                aria-label="Name: activate to sort column descending" style="width: 187.688px;"> Total Number of days </th>

                                <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending"
                                aria-label="Name: activate to sort column descending" style="width: 187.688px;"> Approve Start Date </th>

                                <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending"
                                aria-label="Name: activate to sort column descending" style="width: 187.688px;"> Approve End Date </th>

                                <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending"
                                aria-label="Name: activate to sort column descending" style="width: 187.688px;"> Approve Days </th>


                                <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending"
                                aria-label="Name: activate to sort column descending" style="width: 187.688px;"> Approve Status </th>


                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"
                                style="width: 118.719px;">Action </th>

                            </tr>
                        </thead>
                        <tbody id="leave_app_table_body">
                        </tbody>
                        <tfoot>
                            <tr>
                                <th rowspan="1" colspan="1">Outlet ID</th>
                                <th rowspan="1" colspan="1">Employee Name</th>
                                <th rowspan="1" colspan="1">Leave Type</th>
                                <th rowspan="1" colspan="1">Application Start Date</th>
                                <th rowspan="1" colspan="1">Application End Date</th>
                                <th rowspan="1" colspan="1">Total Number of days</th>
                                <th rowspan="1" colspan="1">Approve Start Date</th>
                                <th rowspan="1" colspan="1">Approve End Date</th>
                                <th rowspan="1" colspan="1">Approve Days</th>
                                <th rowspan="1" colspan="1">Approve Status</th>
                                <th rowspan="1" colspan="1">Action</th>

                            </tr>
                        </tfoot>
                    </table>
                </div>
                </div>
            </div>
            {{-- <!-- /.box-body --> --}}
        </div>
    </div>
</div>

@endsection


@section('css')
    <style>
        .box-title{

            align-items: center;

        }
        .bt{
            align-items: center;
            float: right !important;
            display: flex;
            justify-content: flex-end;
            margin-left: 80rem;
        }
    </style>
@endsection


@section('script')
    <script>

        //global variable
        let leave_app_table = null;
        $(document).ready(function () {

            // for data view
            ViewLeaveApplication();

            // add click
            $(document).on('click','.add_leaveapp', function(e) {

                e.preventDefault();
                //console.log("work");

                var data = {
                    'employee_id'    : $('.employee_id').val(),
                    'leave_type_id'  : $('.leave_type_id').val(),
                    'start_date'     : $('.start_date').val(),
                    'end_date'       : $('.end_date').val(),
                    'days'           : $('.days').val(),
                    'application'    : $('.application').val(),
                    'outlet_id'      : $('.outlet_id').val(),
                    'approve_start'  : $('.approve_start').val(),
                    'approve_end'    : $('.approve_end').val(),
                    'approve_day'    : $('.approve_day').val(),
                    'approve'        : $('.approve').val(),

                }

                //console.log(data);

                //crsrf_token
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: "POST",
                    url: "/leave/appstore",
                    data: data,
                    dataType: "json",
                    success: function (response) {
                        destroyDataTable();
                        $('#leave_app_table_body').html("")
                        ViewLeaveApplication();
                        $('#AddLeaveAppModal').modal('hide');
                    },
                    error(xhr, ajaxOptions, thrownError){

                    }
                });

            }); // end add/store



           //ajax code for getting leave days
           $(".end_date").on("change",function(){
            var endDate = $(this).val();
            var startDate = $('.start_date').val();
            Difference_In_Days = getDiffFromTwoDays(startDate,endDate);
            $('.days').val(Difference_In_Days);

        });

            //ajax code for getting Approved leave days
            $(".approve_end").on("change",function(){
                var app_endDate = $(this).val();
                var app_startDate = $('.approve_start').val();
                Diff_In_Days = getDiffFromTwoDays(app_startDate,app_endDate)
                $('.approve_day').val(Diff_In_Days);

        });


        //  for updated application dates and days
        $('#edit_start_date').on('change',function(){

                $("#edit_end_date").on('change',function(){
                    if($("#edit_start_date").val() && $("#edit_end_date").val()){
                        let start_end_date = $("#edit_start_date").val();
                        let edit_end_date = $("#edit_end_date").val();
                        console.log(start_end_date,edit_end_date)
                        let days = getDiffFromTwoDays(start_end_date,edit_end_date)
                        $('#edit_days').val(days);
                    }
                });
        });

        // for updated Approved dates and days
        $('#edit_approve_start').on('change',function(){

            $("#edit_approve_end").on('change',function(){
                if($("#edit_approve_start").val() && $("#edit_approve_end").val()){
                    let app_start_end_date = $("#edit_approve_start").val();
                    let app_edit_end_date = $("#edit_approve_end").val();
                    console.log(app_start_end_date,app_edit_end_date)
                    let approve_day = getDiffffFromTwoDays(app_start_end_date,app_edit_end_date)
                    $('#edit_approve_day').val(approve_day);
                }
            });
    });





        // Edit  Click
        $(document).on('click','.edit_leaveapp', function(e) {
            e.preventDefault();
            var leave_app_id = $(this).val();
            $('#EditLeaveAppModal').modal('show'); // Edit Modal
            $.ajax({
                type: "GET",
                url: "/leave/appedit/"+leave_app_id, // must add prefix in url
                success: function (response) {
                    $('#edit_employee_id').val(response.leaveapplication.employee_id);
                    $('#edit_leave_type_id').val(response.leaveapplication.leave_type_id);
                    $('#edit_start_date').val(response.leaveapplication.start_date);
                    $('#edit_end_date').val(response.leaveapplication.end_date);
                    $('#edit_days').val(response.leaveapplication.days);
                    $('#edit_application').val(response.leaveapplication.application);
                    $('#edit_outlet_id').val(response.leaveapplication.outlet_id);
                    $('#edit_approve_start').val(response.leaveapplication.approve_start);
                    $('#edit_approve_end').val(response.leaveapplication.approve_end);
                    $('#edit_approve_day').val(response.leaveapplication.approve_day);
                    $('#edit_approve').val(response.leaveapplication.approve);
                    $('#edit_leave_app_id').val(leave_app_id);
                },
                error(xhr, ajaxOptions, thrownError){
                    if(response.status == 404){
                        $('#success_message').html("");
                        $('#success_message').addClass('alert alert-danger');
                        $('#success_message').text(response.message);

                    }
               }
            });

        }); // end edit


        // Update  click event
        $(document).on('click','.update_leaveapp', function(e) {
            $('#updateform_errList').html('');
            e.preventDefault();
            var leave_app_id = $('#edit_leave_app_id').val();

            var data = {
              'employee_id'        : $('#edit_employee_id').val(),
              'leave_type_id'      : $('#edit_leave_type_id').val(),
              'start_date'         : $('#edit_start_date').val(),
              'end_date'           : $('#edit_end_date').val(),
              'days'               : $('#edit_days').val(),
              'application'        : $('#edit_application').val(),
              'outlet_id'          : $('#edit_outlet_id').val(),
              'approve_start'      : $('#edit_approve_start').val(),
              'approve_end'        : $('#edit_approve_end').val(),
              'approve_day'        : $('#edit_approve_day').val(),
              'approve'            : $('#edit_approve').val(),

            }

            //crsrf_token
            $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
            });

            $.ajax({
              type: "PUT",
              url: "/leave/appupdate/"+leave_app_id,
              data: data,
              dataType: "json",
              success: function (response) {
                //console.log(response);
                $('.update_leaveapp').text("Updated"); //pore
                destroyDataTable();
                $('#leave_app_table_body').html("")
                ViewLeaveApplication();

                $('.update_leaveapp').text("Updated");
                $('#EditLeaveAppModal').modal('hide');

              },
              error(xhr, ajaxOptions, thrownError) {
                    /*alert(xhr.status);*/
                    $('#EditLeaveAppModal').modal('hide');
                    let errors = xhr.responseJSON.errors;
                    if(xhr.status == 422){
                        $.each(errors, function (key, err_values) {
                            $('#updateform_errList').append('<li class="text-danger">'+err_values?.[0]+'</li>')
                        });
                    }
                    else{
                        $('#EditLeaveAppModal').modal('hide');
                        ViewLeaveApplication();
                    }
              }
            });


        }); // end update


        //Delete Click
        $(document).on('click','.delete_leaveapp', function(e) {
            e.preventDefault();
            var leave_app_id = $(this).val();
            $('#delete_leave_app_id').val(leave_app_id);
            $('#DeleteLeaveAppModal').modal('show');

        });

        $(document).on('click','.del_btn', function(e) {
            e.preventDefault();
            var leave_app_id = $('#delete_leave_app_id').val();

            //crsrf_token
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "DELETE",
                url: "/leave/appdelete/"+leave_app_id,
                success: function (response) {
                    $('#success_message').addClass('alert alert-success')
                    $('#success_message').text(response.message);
                    destroyDataTable();
                    $('#leave_app_table_body').html("")
                    ViewLeaveApplication();
                    $('#DeleteLeaveAppModal').modal('hide');


                }
            });

        });
        // end delete






        }); // main docreddy end

        // view by axios
        async function ViewLeaveApplication(){
        // console.log('this is running thisalsdfl;askdf');

         let {data:{leaveapplication}}  = await axios.get('/leave/appview');
         //console.log(leave,'datrfa gettin');

         await $.each(leaveapplication, function (key, item) {
            const {employee,leave}  = item;
             console.log(item);
             let data  =  `<tr >
                         <td>${item.outlet_id}</td>
                         <td>${employee.name}</td>
                         <td>${leave.leave_type}</td>
                         <td>${item.start_date}</td>
                         <td>${item.end_date}</td>
                         <td>${item.days}</td>
                         <td>${item.approve_start}</td>
                         <td>${item.approve_end}</td>
                         <td>${item.approve_day}</td>
                         <td>${item.approve}</td>

                         <td>
                         <button type="button" value="${item.id}" class="btn btn-primary btn-sm edit_leaveapp">Edit</button>
                         <button type="button" value="${item.id}" class="btn btn-danger btn-sm delete_leaveapp">Delete</button>
                        </td>
                    </tr>`
             $('#leave_app_table_body').append(data);
         });

         leave_app_table =  $("#leave_app_table").DataTable( {
             dom: 'Bfrtip',
             buttons: [
                 'copyHtml5',
                 'excelHtml5',
                 'csvHtml5',
                 'pdfHtml5'
             ]
         });
     } // view end

     function destroyDataTable(){
        leave_app_table.destroy()
     }


     // these are functions for calling days between dates
     function getDiffFromTwoDays(time1,time2){
        var dt1 = new Date(time1);
        var dt2 = new Date(time2);
        var Difference_In_Time = dt2.getTime() - dt1.getTime();
        var Difference_In_Days = Difference_In_Time / (1000 * 3600 * 24);
        return Difference_In_Days;0
   }

    function getDiffffFromTwoDays(time3,time4){
        var dt3 = new Date(time3);
        var dt4 = new Date(time4);
        var Diff_In_Time = dt4.getTime() - dt3.getTime();
        var Diff_In_Days = Diff_In_Time / (1000 * 3600 * 24);
        return Diff_In_Days;
    }





    </script>

@endsection
