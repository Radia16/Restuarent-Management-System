@extends('admin.main_master')

@section('content')

{{--  <!-- AddLeaveModal Start -->  --}}
<div class="modal fade" id="AddLeaveModal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title"> Add Leave Type </h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            {{--  <ul id="saveform_errList"></ul>  --}}

            <div class="form-group md-3">
                <label for="">  Leave Type </label>
                <input type="text" class="leave_type form-control">
            </div>



        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary float-end add_leavetype">Save changes</button>
        </div>
      </div>
      {{--  <!-- /.modal-content -->  --}}
    </div>
    {{--  <!-- /.modal-dialog -->  --}}
</div>
{{--  <!-- AddLeaveModal End -->  --}}


{{--  EditLeaveModal Start  --}}
<div class="modal fade" id="EditLeaveModal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title"> Update your Leave Type  Info </h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <ul id="updateform_errList"></ul>
            <input type="hidden" id="edit_leave_id">

            <div class="form-group md-3">
                <label for=""> Leave Type Name</label>
                <input type="text" id="edit_leave_type" class="leave_type form-control">
            </div>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary float-end update_leave">Update</button>
        </div>
      </div>
      {{--  <!-- /.modal-content -->  --}}
    </div>
    {{--  <!-- /.modal-dialog -->  --}}
</div>
{{--  EditLeaveModal Start  --}}


{{--  DeleteLeaveModal Start  --}}
<div class="modal fade" id="DeleteLeaveModal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title"> Delete Info </h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">


            <input type="hidden" id="delete_leave_id">

                <h4> Are you sure want to delete??</h4>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary float-end del_leave_btn">Yes Delete</button>
        </div>
      </div>
      {{--  <!-- /.modal-content -->  --}}
    </div>
    {{--  <!-- /.modal-dialog -->  --}}
</div>
{{--  DeleteLeaveModal Start  --}}



<div class="row" >
    <div class="col-lg-12">
        <div class="box">
            <div class="box-header with-border">
            <h3 class="box-title">
                LEAVE TYPE
            </h3>
                <div class="bt">
                    <button type="button" class="btn btn-info-light btn-sm" data-bs-toggle="modal" data-bs-target="#AddLeaveModal">
                        +  Add Leave Type
                    </button>
                </div>

            </div>


            <!-- /.box-header -->
            <div class="box-body">
                <div class="table-responsive">
                <div id="example_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                    <table id="leave_table" class="table table-bordered table-hover display nowrap margin-top-10 w-p100 dataTable" role="grid" aria-describedby="example_info">
                        <thead>
                            <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending"
                                aria-label="Name: activate to sort column descending" style="width: 187.688px;">Leave Type Name</th>


                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"
                                style="width: 118.719px;">Action </th>

                            </tr>
                        </thead>
                        <tbody id="leave_table_body">
                        </tbody>
                        <tfoot>
                            <tr>
                                <th rowspan="1" colspan="1">Leave Type Name</th>
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
            margin-left: 83rem;
        }
    </style>

@endsection


@section('script')

   <script>

     //Global variable
     let leave_table = null;

    $(document).ready(function () {

        // View leave data
        ViewLeave();


        // add leavetype click
        $(document).on('click','.add_leavetype', function(e) {
            e.preventDefault();

            var data = {
                'leave_type' : $('.leave_type').val(),

            }

            //crsrf_token
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "POST",
                url: "/leave/store",
                data: data,
                dataType: "json",
                success: function (response) {
                    destroyDataTable();
                    $('#leave_table_body').html("")
                    ViewLeave();
                    $('#AddLeaveModal').modal('hide');
                },
                error(xhr, ajaxOptions, thrownError){

                }
            });


        }); // end add/Store method


        // Edit leavetype Click
        $(document).on('click','.edit_leave', function(e) {
            e.preventDefault();
            var leave_id = $(this).val();
            $('#EditLeaveModal').modal('show'); // Edit Modal
            $.ajax({
                type: "GET",
                url: "/leave/edit/"+leave_id, // must add prefix in url
                success: function (response) {
                    $('#edit_leave_type').val(response.leave.leave_type);
                    $('#edit_leave_id').val(leave_id);
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


        // Update leave click event
        $(document).on('click','.update_leave', function(e) {
            $('#updateform_errList').html('');
            e.preventDefault();
            var leave_id = $('#edit_leave_id').val();

            var data = {
              'leave_type'      : $('#edit_leave_type').val(),
            }

            //crsrf_token
            $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
            });

            $.ajax({
              type: "PUT",
              url: "/leave/update/"+leave_id,
              data: data,
              dataType: "json",
              success: function (response) {
                //console.log(response);
                $('.update_leave').text("Updated"); //pore
                destroyDataTable();
                $('#leave_table_body').html("")
                ViewLeave();

                $('.update_leave').text("Updated");
                $('#EditLeaveModal').modal('hide');

              },
              error(xhr, ajaxOptions, thrownError) {
                    /*alert(xhr.status);*/
                    $('#EditLeaveModal').modal('hide');
                    let errors = xhr.responseJSON.errors;
                    if(xhr.status == 422){
                        $.each(errors, function (key, err_values) {
                            $('#updateform_errList').append('<li class="text-danger">'+err_values?.[0]+'</li>')
                        });
                    }
                    else{
                        $('#EditLeaveModal').modal('hide');
                        ViewLeave();
                    }
              }
            });


        }); // end update



        // delete leave click
        $(document).on('click','.delete_leave', function(e) {
            e.preventDefault();
            var leave_id = $(this).val();
            $('#delete_leave_id').val(leave_id);
            $('#DeleteLeaveModal').modal('show');

        });

        $(document).on('click','.del_leave_btn', function(e) {
            e.preventDefault();
            var leave_id = $('#delete_leave_id').val();

            //crsrf_token
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "DELETE",
                url: "/leave/delete/"+leave_id,
                success: function (response) {
                    $('#success_message').addClass('alert alert-success')
                    $('#success_message').text(response.message);
                    destroyDataTable();
                    $('#leave_table_body').html("")
                    ViewLeave();
                    $('#DeleteLeaveModal').modal('hide');


                }
            });

        });
            // end delete


    }); // main docReddy end

    // view by axios
    async function ViewLeave(){
       // console.log('this is running thisalsdfl;askdf');

        let {data:{leave}}  = await axios.get('/leave/view');
        //console.log(leave,'datrfa gettin');
        await $.each(leave, function (key, item) {
            console.log(item);
            let data  =  `<tr >
                            <td>${item.leave_type}</td>

                            <td><button type="button" value="${item.id}" class="btn btn-primary btn-sm edit_leave">Edit</button>
                            <button type="button" value="${item.id}" class="btn btn-danger btn-sm delete_leave">Delete</button>
                            </td>
                        </tr>`
            $('#leave_table_body').append(data);
        });

        leave_table =  $("#leave_table").DataTable( {
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
        leave_table.destroy()
    }



    </script>




@endsection
