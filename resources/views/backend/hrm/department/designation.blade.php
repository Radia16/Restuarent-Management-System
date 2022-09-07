@extends('admin.main_master')

    @section('content')

    {{--  <!-- AddDesignationModal Start -->  --}}
    <div class="modal fade" id="AddDesignationModal">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title"> DESIGNATION ADD </h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <ul id="saveform_errList"></ul>

                <div class="form-group md-3">
                    <label for=""> Designation Name </label>
                    <input type="text" class="designation_name form-control">
                </div>

            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary float-end add_btn"> ADD </button>
            </div>
        </div>
        {{--  <!-- /.modal-content -->  --}}
        </div>
        {{--  <!-- /.modal-dialog -->  --}}
    </div>
    {{--  <!-- AddDesignationModal End -->  --}}


    {{--  <!-- EditDesignationModal Start -->  --}}
    <div class="modal fade" id="EditDesignationModal">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title"> UPDATE DESIGNATION  </h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <ul id="updateform_errList"></ul>
                <input type="hidden"  id="designation_edit_id">

                <div class="form-group md-3">
                    <label for=""> Designation Name </label>
                    <input type="text" id="edit_designation_name" class="designation_name form-control">
                </div>

            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary float-end update_btn"> Update </button>
            </div>
        </div>
        {{--  <!-- /.modal-content -->  --}}
        </div>
        {{--  <!-- /.modal-dialog -->  --}}
    </div>
    {{--  <!-- EditDesignationModal End -->  --}}



    {{--  <!-- DeletetDesignationModal Start -->  --}}
    <div class="modal fade" id="DeletetDesignationModal">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title"> DELETE DESIGNATION !!  </h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="del_designation_id">
                <h4> Are you sure want to delete??</h4>

            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary float-end del_btn"> Yes,Delete </button>
            </div>
        </div>
        {{--  <!-- /.modal-content -->  --}}
        </div>
        {{--  <!-- /.modal-dialog -->  --}}
    </div>
    {{--  <!-- DeletetDesignationModal End -->  --}}




    <div class="row" >
        <div class="col-lg-12">
            <div class="box">
                <div class="box-header with-border">
                <h3 class="box-title">
                     DESIGNATION CONTROLLER
                </h3>
                    <div class="bt">
                        <button type="button" class="btn btn-info-light btn-sm" data-bs-toggle="modal" data-bs-target="#AddDesignationModal">
                            +  Add Designation
                        </button>
                    </div>

                </div>


                {{--  <!-- /.box-header -->  --}}
                <div class="box-body">
                    <div class="table-responsive">
                    <div id="example_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                        <table id="designation_table" class="table table-bordered table-hover display nowrap margin-top-10 w-p100 dataTable" role="grid" aria-describedby="example_info">
                            <thead>
                                <tr role="row">


                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending"
                                    style="width: 293.969px;"> Designation Name </th>

                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"
                                    style="width: 118.719px;"> Action </th>
                                </tr>
                            </thead>
                            <tbody id="designation_table_body">
                            </tbody>
                            <tfoot>
                                <tr>

                                    <th rowspan="1" colspan="1">Designation Name</th>
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
        <style >
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
            let designation_table = null;
            $(document).ready(function () {

                // view
                ViewDesignation();

                // add award click
                $(document).on('click','.add_btn', function(e) {
                    e.preventDefault();
                    var data = {
                        'designation_name' : $('.designation_name').val(),

                    }
                    //crsrf_token
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        type: "POST",
                        url: "/designation/store",
                        data: data,
                        dataType: "json",
                        success: function (response) {
                            destroyDataTable();
                            $('#designation_table_body').html("")
                            ViewDesignation();
                            $('#AddDesignationModal').modal('hide');
                        },
                        error(xhr, ajaxOptions, thrownError){

                        }
                    });

                }); //store method

                // Edit Click method
                $(document).on('click','.edit_btn', function(e) {
                    e.preventDefault();
                    var designation_id = $(this).val();
                    $('#EditDesignationModal').modal('show'); // Edit Modal
                    $.ajax({
                        type: "GET",
                        url: "/designation/edit/"+designation_id,
                        success: function (response) {
                            console.log(response);
                            $('#edit_designation_name').val(response.designation.designation_name);
                            $('#designation_edit_id').val(designation_id);
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
                $(document).on('click','.update_btn', function(e) {
                    $('#updateform_errList').html('');
                    e.preventDefault();
                    var designation_id = $('#designation_edit_id').val();
                    var data = {
                    'designation_name' : $('#edit_designation_name').val(),
                    }

                    //crsrf_token
                    $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                    });

                    $.ajax({
                    type: "PUT",
                    url: "/designation/update/"+designation_id,
                    data: data,
                    dataType: "json",
                    success: function (response) {

                        destroyDataTable();
                        $('#designation_table_body').html("")
                        ViewDesignation();

                        $('.update_btn').text("Updated");
                        $('#EditDesignationModal').modal('hide');

                    },
                    error(xhr, ajaxOptions, thrownError) {
                            $('#EditDesignationModal').modal('hide');
                            let errors = xhr.responseJSON.errors;
                            if(xhr.status == 422){
                                $.each(errors, function (key, err_values) {
                                    $('#updateform_errList').append('<li class="text-danger">'+err_values?.[0]+'</li>')
                                });
                            }
                            else{
                                $('#EditDesignationModal').modal('hide');
                                ViewDesignation();
                            }
                    }
                    });
                }); // end update


                // delete award click
                $(document).on('click','.delete_btn', function(e) {
                    e.preventDefault();
                    var designation_id = $(this).val();
                    $('#del_designation_id').val(designation_id);
                    $('#DeletetDesignationModal').modal('show');

                });

                $(document).on('click','.del_btn', function(e) {
                    e.preventDefault();
                    var designation_id = $('#del_designation_id').val();

                    //crsrf_token
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    $.ajax({
                        type: "POST",
                        url: "/designation/delete/"+designation_id,
                        success: function (response) {
                            $('#success_message').addClass('alert alert-success')
                            $('#success_message').text(response.message);
                            destroyDataTable();
                            $('#designation_table_body').html("")
                            ViewDesignation();
                            $('#DeletetDesignationModal').modal('hide');


                        }
                    });

                });





            });// main  doc end

            //view data
            async function ViewDesignation(){
                let {data:{designation}} = await axios.get('/designation/view');

                await $.each(designation, function (key, item) {
                    let data = `<tr>
                                <td>${item.designation_name}</td>
                                <td><button type="button" value="${item.id}" class="btn btn-info btn-sm edit_btn">Edit</button>
                                    <button type="button" value="${item.id}" class="btn btn-danger btn-sm delete_btn">Delete</button></td>
                                </tr>`
                    $('#designation_table_body').append(data);
                });

                designation_table =  $("#designation_table").DataTable( {
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
                designation_table.destroy()
            }

        </script>


    @endsection
