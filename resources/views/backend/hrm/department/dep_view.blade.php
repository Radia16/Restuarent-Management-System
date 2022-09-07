@extends('admin.main_master')


@section('content')

{{--  <!-- AddDepartmentModal Start -->  --}}
<div class="modal fade" id="AddDepartmentModal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title"> DEPARTMENT ADD </h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <ul id="saveform_errList"></ul>

            <div class="form-group md-3">
                <label for=""> Department Name</label>
                <input type="text" class="dep_name form-control">
            </div>

            <div class="form-group md-3">
                <label for=""> Status </label>
                <input type="text" class="status form-control">
            </div>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary float-end add_dep">Save changes</button>
        </div>
      </div>
      {{--  <!-- /.modal-content -->  --}}
    </div>
    {{--  <!-- /.modal-dialog -->  --}}
</div>
{{--  <!-- AddAwardModal End -->  --}}


{{--  <!-- EditDepartmentModal Start -->  --}}
<div class="modal fade" id="EditDepartmentModal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title"> DEPARTMENT Update </h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <ul id="updateform_errList"></ul>
            <input type="hidden"  id="edit_dep_id">

            <div class="form-group md-3">
                <label for=""> Department Name</label>
                <input type="text" id="edit_dep_name" class="dep_name form-control">
            </div>

            <div class="form-group md-3">
                <label for=""> Status </label>
                <input type="text" id="edit_status" class="status form-control">
            </div>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary float-end update_dep">Update</button>
        </div>
      </div>
      {{--  <!-- /.modal-content -->  --}}
    </div>
    {{--  <!-- /.modal-dialog -->  --}}
</div>
{{--  <!-- EditDepartmentModal End -->  --}}



{{--  <!-- DeleteDepartmentModal Start -->  --}}
<div class="modal fade" id="DeleteDepartmentModal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title"> DEPARTMENT Delete </h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">


            <input type="hidden"  id="del_dep_id">

            <h4>
                Are you sure want to delete ??
            </h4>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary float-end del_btn">YES,DELETE IT..</button>
        </div>
      </div>
      {{--  <!-- /.modal-content -->  --}}
    </div>
    {{--  <!-- /.modal-dialog -->  --}}
</div>
{{--  <!-- DeleteDepartmentModal End -->  --}}

<div class="row" >
    <div class="col-lg-12">
        <div class="box">
            <div class="box-header with-border">
            <h3 class="box-title">
                DEPARTMENT CONTROLLER
            </h3>
                <div class="bt">
                    <button type="button" class="btn btn-info-light btn-sm" data-bs-toggle="modal" data-bs-target="#AddDepartmentModal">
                        +  Add Department
                    </button>
                </div>

            </div>


            <!-- /.box-header -->
            <div class="box-body">
                <div class="table-responsive">
                <div id="example_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                    <table id="department_table" class="table table-bordered table-hover display nowrap margin-top-10 w-p100 dataTable" role="grid" aria-describedby="example_info">
                        <thead>
                            <tr role="row">
                                <th >Department Name</th>
                                <th >Status</th>
                                <th >ACTION</th>
                            </tr>
                        </thead>
                        <tbody id="department_table_body">
                        </tbody>
                        <tfoot>
                            <tr>
                                <th >Department Name</th>
                                <th >Status</th>
                                <th >ACTION</th>

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

    let  department_table = null;
    $(document).ready(function () {
        //view
        DepView();

        $(document).on('click','.add_dep', function(e) {
            e.preventDefault();

            var data = {
                'dep_name' : $('.dep_name').val(),
                'status'   : $('.status').val(),

            }

            //crsrf_token
            $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });

          $.ajax({
              type: "POST",
              url: "/department/store",
              data: data,
              dataType: "json",
              success: function (response) {
                destroyDataTable();
                $('#department_table_body').html("")
                DepView();
                $('#AddDepartmentModal').modal('hide');

              }
          });


        });


        // Edit Click method
        $(document).on('click','.edit_dep', function(e) {
            e.preventDefault();
            var dep_id = $(this).val();
            $('#EditDepartmentModal').modal('show'); // Edit Modal
            $.ajax({
                type: "GET",
                url: "/department/edit/"+dep_id, // must add prefix in url
                success: function (response) {
                    $('#edit_dep_name').val(response.department.dep_name);
                    $('#edit_status').val(response.department.status);
                    $('#edit_dep_id').val(dep_id);
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


        // Update award click event
        $(document).on('click','.update_dep', function(e) {
            $('#updateform_errList').html('');
            e.preventDefault();
            var dep_id = $('#edit_dep_id').val();
            var data = {
              'dep_name'        : $('#edit_dep_name').val(),
              'status'          : $('#edit_status').val(),

            }
            console.log(data);
            //crsrf_token
            $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
            });

            $.ajax({
              type: "PUT",
              url: "/department/update/"+dep_id,
              data: data,
              dataType: "json",
              success: function (response) {
                console.log(response);

                destroyDataTable();
                $('#department_table_body').html("")
                DepView();

                //$('.update_award').text("Updated");
                $('#EditDepartmentModal').modal('hide');

              },
              error(xhr, ajaxOptions, thrownError) {
                    /*alert(xhr.status);*/
                    $('#EditDepartmentModal').modal('hide');
                    let errors = xhr.responseJSON.errors;
                    if(xhr.status == 422){
                        $.each(errors, function (key, err_values) {
                            $('#updateform_errList').append('<li class="text-danger">'+err_values?.[0]+'</li>')
                        });
                    }
                    else{
                        $('#EditDepartmentModal').modal('hide');
                        DepView();
                    }
              }
            });


        }); // end update

        // delete award click
        $(document).on('click','.delete_dep', function(e) {
            e.preventDefault();
            var dep_id = $(this).val();
            $('#del_dep_id').val(dep_id);
            $('#DeleteDepartmentModal').modal('show');

        });

        $(document).on('click','.del_btn', function(e) {
            e.preventDefault();
            var dep_id = $('#del_dep_id').val();

            //crsrf_token
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "DELETE",
                url: "/department/delete/"+dep_id,
                success: function (response) {
                    $('#success_message').addClass('alert alert-success')
                    $('#success_message').text(response.message);
                    destroyDataTable();
                    $('#department_table_body').html("")
                    DepView();
                    $('#DeleteDepartmentModal').modal('hide');
                    //ViewAward();

                }
            });

        });
    }); //main doc

    // view by axios
    async function DepView(){

        let {data:{department}}  = await axios.get('/department/view');

        await $.each(department, function (key, item) {
            let data  = `<tr >
                            <td>${item.dep_name}</td>
                            <td>${item.status}</td>
                            <td>
                            <button type="button" value="${item.id}" class ="btn btn-primary btn-sm edit_dep">Edit</button>
                            <button type="button" value="${item.id}" class ="btn btn-danger btn-sm delete_dep">Delete</button>
                            </td>
                        </tr>`
            $('#department_table_body').append(data);
        });

            department_table =  $("#department_table").DataTable( {
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
        department_table.destroy()
    }

  </script>
@endsection


