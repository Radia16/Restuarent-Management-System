

@extends('admin.main_master')

@section('content')

{{--  <!-- AddHolidayModal Start -->  --}}
<div class="modal fade" id="AddHolidayModal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title"> Add Holidays </h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            {{--  <ul id="saveform_errList"></ul>  --}}


                    <div class="form-group md-3">
                        <label for="">  Holidays Name </label>
                        <input type="text" class="holi_name form-control" >
                    </div>

                    <div class="form-group md-3">
                        <label for="">  Start Date </label>
                        <input type="date" class="start_date form-control" name="start_date">
                    </div>

                    <div class="form-group md-3">
                        <label for="">  End Date </label>
                        <input type="date" class="end_date form-control" name="end_date">
                    </div>

                    <div class="form-group md-3">
                        <label for="">   Number of days </label>
                        <input type="number" class="days form-control">
                    </div>

                    <div class="form-group md-3">
                        <label for="">  Status </label>
                        <input type="number" class="status form-control">
                    </div>


            </div>
            {{--  Modal body end  --}}
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary float-end add_holiday">Save changes</button>
            </div>
      </div>
      {{--  <!-- /.modal-content -->  --}}
    </div>
    {{--  <!-- /.modal-dialog -->  --}}
</div>
{{--  <!-- AddHolidayModal End -->  --}}



{{--  <!-- EditHolidayModal Start -->  --}}
<div class="modal fade" id="EditHolidayModal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title"> Add Holidays </h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <ul id="updateform_errList"></ul>
                <input type="hidden" id="edit_holiday_id">


                    <div class="form-group md-3">
                        <label for="">  Holidays Name </label>
                        <input type="text" id="edit_holi_name" class="holi_name form-control" >
                    </div>

                    <div class="form-group md-3">
                        <label for="">  Start Date </label>
                        <input type="date" id="edit_start_date" class="start_date form-control" name="start_date">
                    </div>

                    <div class="form-group md-3">
                        <label for="">  End Date </label>
                        <input type="date" id="edit_end_date" class="end_date form-control" name="end_date">
                    </div>

                    <div class="form-group md-3">
                        <label for="">   Number of days </label>
                        <input type="number" id="edit_days" class="days form-control">
                    </div>

                    <div class="form-group md-3">
                        <label for="">  Status </label>
                        <input type="number" id="edit_status" class="status form-control">
                    </div>


            </div>
            {{--  Modal body end  --}}
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary float-end update_holiday">Update</button>
            </div>
      </div>
      {{--  <!-- /.modal-content -->  --}}
    </div>
    {{--  <!-- /.modal-dialog -->  --}}
</div>
{{--  <!-- EditHolidayModal End -->  --}}


{{--  DeleteHolidayModal Start  --}}
<div class="modal fade" id="DeleteHolidayModal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title"> Delete Info </h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">


            <input type="hidden" id="delete_holiday_id">

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
{{--  DeleteHolidayModal Start  --}}






<div class="row" >
    <div class="col-lg-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">
                    HOLIDAY
                </h3>
                <div class="bt">
                    <button type="button" class="btn btn-info-light btn-sm" data-bs-toggle="modal" data-bs-target="#AddHolidayModal">
                        Add Holidays
                      </button>

                </div>
            </div>


            <!-- /.box-header -->
           <div class="box-body">
                <div class="table-responsive">
                <div id="example_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                    <table id="holiday_table" class="table table-bordered table-hover display nowrap margin-top-10 w-p100 dataTable" role="grid" aria-describedby="example_info">
                        <thead>
                            <tr role="row">

                                <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending"
                                aria-label="Name: activate to sort column descending" style="width: 187.688px;">Holiday Name</th>

                                <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending"
                                aria-label="Name: activate to sort column descending" style="width: 187.688px;">From</th>

                                <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending"
                                aria-label="Name: activate to sort column descending" style="width: 187.688px;">To </th>


                                <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending"
                                aria-label="Name: activate to sort column descending" style="width: 187.688px;"> Number of days </th>

                                <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending"
                                aria-label="Name: activate to sort column descending" style="width: 187.688px;"> Status </th>


                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"
                                style="width: 118.719px;">Edit </th>
                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"
                                style="width: 118.719px;">Delete </th>
                            </tr>
                        </thead>
                        <tbody id="holiday_table_body">
                        </tbody>
                        <tfoot>
                            <tr>
                                <th rowspan="1" colspan="1">Holiday Name</th>
                                <th rowspan="1" colspan="1">From</th>
                                <th rowspan="1" colspan="1">To</th>
                                <th rowspan="1" colspan="1"> Number of days</th>
                                <th rowspan="1" colspan="1"> Status</th>
                                <th rowspan="1" colspan="1">Edit</th>
                                <th rowspan="1" colspan="1">Delete</th>
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
        //Global variable
        let holiday_table = null;
        $(document).ready(function () {

            //View data
            ViewHoliday();

            // add/store click
            $(document).on('click','.add_holiday', function(e) {
                e.preventDefault();

                var data ={

                    'holi_name'  :$('.holi_name').val(),
                    'start_date' :$('.start_date').val(),
                    'end_date'   :$('.end_date').val(),
                    'days'       :$('.days').val(),
                    'status'     :$('.status').val(),
                }

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: "POST",
                    url: "/holiday/store",
                    data: data,
                    dataType: "json",
                    success: function (response) {
                        destroyDataTable();
                        $('#holiday_table_body').html("")
                        ViewHoliday();
                        $('#AddHolidayModal').modal('hide');

                    },
                    error(xhr, ajaxOptions, thrownError){

                    }
                });
            }); // end add


            //ajax code for getting lholiday days
           $(".end_date").on("change",function(){
            var endDate = $(this).val();
            var startDate = $('.start_date').val();
            Difference_In_Days = getDiffFromTwoDays(startDate,endDate);
            $('.days').val(Difference_In_Days);

        });

        //  for updated holidayn dates and days
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


        // Edit  Click
        $(document).on('click','.edit_holiday', function(e) {
            e.preventDefault();
            var holiday_id = $(this).val();
            $('#EditHolidayModal').modal('show'); // Edit Modal
            $.ajax({
                type: "GET",
                url: "/holiday/edit/"+holiday_id, // must add prefix in url
                success: function (response) {

                    $('#edit_holi_name').val(response.holiday.holi_name);
                    $('#edit_start_date').val(response.holiday.start_date);
                    $('#edit_end_date').val(response.holiday.end_date);
                    $('#edit_days').val(response.holiday.days);
                    $('#edit_status').val(response.holiday.status);
                    $('#edit_holiday_id').val(holiday_id);
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
        $(document).on('click','.update_holiday', function(e) {
            $('#updateform_errList').html('');
            e.preventDefault();
            var holiday_id = $('#edit_holiday_id').val();

            var data = {
              'holi_name'          : $('#edit_holi_name').val(),
              'leave_type_id'      : $('#edit_leave_type_id').val(),
              'start_date'         : $('#edit_start_date').val(),
              'end_date'           : $('#edit_end_date').val(),
              'days'               : $('#edit_days').val(),
              'status'             : $('#edit_status').val(),

            }

            //crsrf_token
            $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
            });

            $.ajax({
              type: "PUT",
              url: "/holiday/update/"+holiday_id,
              data: data,
              dataType: "json",
              success: function (response) {
                //console.log(response);
                $('.update_holiday').text("Updated"); //pore
                destroyDataTable();
                $('#holiday_table_body').html("")
                ViewHoliday();

                $('.update_holiday').text("Updated");
                $('#EditHolidayModal').modal('hide');

              },
              error(xhr, ajaxOptions, thrownError) {
                    /*alert(xhr.status);*/
                    $('#EditHolidayModal').modal('hide');
                    let errors = xhr.responseJSON.errors;
                    if(xhr.status == 422){
                        $.each(errors, function (key, err_values) {
                            $('#updateform_errList').append('<li class="text-danger">'+err_values?.[0]+'</li>')
                        });
                    }
                    else{
                        $('#EditHolidayModal').modal('hide');
                        ViewHoliday();
                    }
              }
            });

        }); // end update



        //Delete Click
        $(document).on('click','.delete_holiday', function(e) {
            e.preventDefault();
            var holiday_id = $(this).val();
            $('#delete_holiday_id').val(holiday_id);
            $('#DeleteHolidayModal').modal('show');

        });

        $(document).on('click','.del_btn', function(e) {
            e.preventDefault();
            var holiday_id = $('#delete_holiday_id').val();

            //crsrf_token
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "DELETE",
                url: "/holiday/delete/"+holiday_id,
                success: function (response) {
                    $('#success_message').addClass('alert alert-success')
                    $('#success_message').text(response.message);
                    destroyDataTable();
                    $('#holiday_table_body').html("")
                    ViewHoliday();
                    $('#DeleteHolidayModal').modal('hide');


                }
            });

        });
        // end delete


        });// main doc end

        // view holiday
        async function ViewHoliday(){
            console.log("wokring");

            let {data:{holiday}}  = await axios.get('/holiday/view');

            //console.log("working");
         await $.each(holiday, function (key, item) {
            console.log(item);
             let data  =  `<tr >

                         <td>${item.holi_name}</td>
                         <td>${item.start_date}</td>
                         <td>${item.end_date}</td>
                         <td>${item.days}</td>
                         <td>${item.status}</td>

                         <td><button type="button" value="${item.id}" class="btn btn-primary btn-sm edit_holiday">Edit</button></td>
                         <td><button type="button" value="${item.id}" class="btn btn-danger btn-sm delete_holiday">Delete</button></td></tr>`
             $('#holiday_table_body').append(data);
         });

         holiday_table =  $("#holiday_table").DataTable( {
             dom: 'Bfrtip',
             buttons: [
                 'copyHtml5',
                 'excelHtml5',
                 'csvHtml5',
                 'pdfHtml5'
             ]
         });
        }

        function destroyDataTable(){
            holiday_table.destroy()
         }


         // these are functions for calling days between dates
        function getDiffFromTwoDays(time1,time2){
            var dt1 = new Date(time1);
            var dt2 = new Date(time2);
            var Difference_In_Time = dt2.getTime() - dt1.getTime();
            var Difference_In_Days = Difference_In_Time / (1000 * 3600 * 24);
            return Difference_In_Days;
        }



    </script>

@endsection
