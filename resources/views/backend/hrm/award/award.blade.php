@extends('admin.main_master')

@section('content')
{{--  <!-- AddAwardModal Start -->  --}}
<div class="modal fade" id="AddAwardModal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title"> AWARD ADD </h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <ul id="saveform_errList"></ul>

            <div class="form-group md-3">
                <label for=""> Award Name</label>
                <input type="text" class="award_name form-control">
            </div>

            <div class="form-group md-3">
                <label for=""> Award Description</label>
                <input type="text" class="description form-control">
            </div>

            <div class="form-group md-3">
                <label for=""> Gift Item </label>
                <input type="text" class="gift_item form-control">
            </div>


            <div class="form-group md-3">
                <label for=""> Employee Name </label>
                <select name="employee_name" class="employee_name form-control"  >

                    <option value="" selected="" disabled="">Select Employee Name</option>

                    @foreach($employee as $emp)
                     <option value="{{ $emp->id }}"> {{ $emp->name }}</option>
                    @endforeach

                 </select>

            </div>

            <div class="form-group md-3">
                <label for=""> Award Given Date </label>
                <input type="date" class="date form-control">
            </div>

            <div class="form-group md-3">
                <label for=""> Awarded By </label>
                <input type="text" class="award_by form-control">
            </div>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary float-end add_award">Save changes</button>
        </div>
      </div>
      {{--  <!-- /.modal-content -->  --}}
    </div>
    {{--  <!-- /.modal-dialog -->  --}}
</div>
{{--  <!-- AddAwardModal End -->  --}}

{{--  EditAwardModal Start  --}}
<div class="modal fade" id="EditAwardModal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title"> Update your Award Info </h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <ul id="updateform_errList"></ul>
            <input type="hidden" id="edit_award_id">

            <div class="form-group md-3">
                <label for=""> Award Name</label>
                <input type="text" id="edit_award_name" class="award_name form-control">
            </div>

            <div class="form-group md-3">
                <label for=""> Award Description</label>
                <input type="text" id="edit_description" class="description form-control">
            </div>

            <div class="form-group md-3">
                <label for=""> Gift Item </label>
                <input type="text" id="edit_gift_item" class="gift_item form-control">
            </div>


            <div class="form-group md-3">
                <label for=""> Employee Name </label>
                <select name="employee_name" id="edit_employee_name" class="employee_name form-control"  >

                    <option value="" selected="" disabled="">Select Employee Name</option>

                    @foreach($employee as $emp)
                     <option value="{{ $emp->id }}"> {{ $emp->name }}</option>
                    @endforeach

                 </select>

            </div>

            <div class="form-group md-3">
                <label for=""> Award Given Date </label>
                <input type="date" id="edit_date" class="date form-control">
            </div>

            <div class="form-group md-3">
                <label for=""> Awarded By </label>
                <input type="text" id="edit_award_by" class="award_by form-control">
            </div>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary float-end update_award">Update</button>
        </div>
      </div>
      {{--  <!-- /.modal-content -->  --}}
    </div>
    {{--  <!-- /.modal-dialog -->  --}}
</div>
{{--  EditAwardModal Start  --}}


{{--  DeleteAwardModal Start  --}}
<div class="modal fade" id="DeleteAwardModal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title"> Delete Info </h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">


            <input type="hidden" id="delete_award_id">

                <h4> Are you sure want to delete??</h4>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary float-end del_award_btn">Yes Delete</button>
        </div>
      </div>
      {{--  <!-- /.modal-content -->  --}}
    </div>
    {{--  <!-- /.modal-dialog -->  --}}
</div>
{{--  DeleteAwardModal Start  --}}





        <div class="row" >
            <div class="col-lg-12">
                <div class="box">
                    <div class="box-header with-border">
                    <h3 class="box-title">
                        AWARD CONTROLLER
                    </h3>
                        <div class="bt">
                            <button type="button" class="btn btn-info-light btn-sm" data-bs-toggle="modal" data-bs-target="#AddAwardModal">
                                +  Add Award
                            </button>
                        </div>

                    </div>


                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                        <div id="example_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                            <table id="award_table" class="table table-bordered table-hover display nowrap margin-top-10 w-p100 dataTable" role="grid" aria-describedby="example_info">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending"
                                        aria-label="Name: activate to sort column descending" style="width: 187.688px;">Award Name</th>

                                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending"
                                        style="width: 293.969px;"> Award Description </th>

                                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending"
                                        style="width: 137.969px;"> Gift Item </th>

                                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending"
                                        style="width: 65.7188px;"> Employee Name </th>

                                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending"
                                        style="width: 129.891px;"> Date </th>

                                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"
                                        style="width: 118.719px;"> Awarded By </th>


                                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"
                                        style="width: 118.719px;">Action </th>

                                    </tr>
                                </thead>
                                <tbody id="award_table_body">
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th rowspan="1" colspan="1">Award Name</th>
                                        <th rowspan="1" colspan="1">Award Description</th>
                                        <th rowspan="1" colspan="1">Gift Item</th>
                                        <th rowspan="1" colspan="1">Employee Name</th>
                                        <th rowspan="1" colspan="1">Date</th>
                                        <th rowspan="1" colspan="1">Awarded By</th>
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

    //global variable
    let award_table = null;
    $(document).ready(function () {
        //call for award data
         ViewAward();

        // add award click
        $(document).on('click','.add_award', function(e) {
            e.preventDefault();
            var data = {
                'award_name'     : $('.award_name').val(),
                'description'    : $('.description').val(),
                'gift_item'      : $('.gift_item').val(),
                'employee_name'  : $('.employee_name').val(),
                'date'           : $('.date').val(),
                'award_by'       : $('.award_by').val(),
            }


            //crsrf_token
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "POST",
                url: "/award/store",
                data: data,
                dataType: "json",
                success: function (response) {
                    destroyDataTable();
                    $('#award_table_body').html("")
                    ViewAward();
                    $('#AddAwardModal').modal('hide');
                },
                error(xhr, ajaxOptions, thrownError){

                }
            });

        }); //store method

        // Edit Click method
        $(document).on('click','.edit_award', function(e) {
            e.preventDefault();
            var award_id = $(this).val();
            $('#EditAwardModal').modal('show'); // Edit Modal
            $.ajax({
                type: "GET",
                url: "/award/edit/"+award_id, // must add prefix in url
                success: function (response) {
                    $('#edit_award_name').val(response.award.award_name);
                    $('#edit_description').val(response.award.description);
                    $('#edit_gift_item').val(response.award.gift_item);
                    $('#edit_employee_name').val(response.award.employee_name);
                    $('#edit_date').val(response.award.date);
                    $('#edit_award_by').val(response.award.award_by);
                    $('#edit_award_id').val(award_id);
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
        $(document).on('click','.update_award', function(e) {
            $('#updateform_errList').html('');
            e.preventDefault();
            var award_id = $('#edit_award_id').val();
            var data = {
              'award_name'      : $('#edit_award_name').val(),
              'description'     : $('#edit_description').val(),
              'gift_item'       : $('#edit_gift_item').val(),
              'employee_name'   : $('#edit_employee_name').val(),
              'date'            : $('#edit_date').val(),
              'award_by'        : $('#edit_award_by').val(),
            }

            //crsrf_token
            $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
            });

            $.ajax({
              type: "PUT",
              url: "/award/update/"+award_id,
              data: data,
              dataType: "json",
              success: function (response) {
                //console.log(response);
                $('.update_award').text("Updated"); //pore
                destroyDataTable();
                $('#award_table_body').html("")
                ViewAward();

                $('.update_award').text("Updated");
                $('#EditAwardModal').modal('hide');

              },
              error(xhr, ajaxOptions, thrownError) {
                    /*alert(xhr.status);*/
                    $('#EditAwardModal').modal('hide');
                    let errors = xhr.responseJSON.errors;
                    if(xhr.status == 422){
                        $.each(errors, function (key, err_values) {
                            $('#updateform_errList').append('<li class="text-danger">'+err_values?.[0]+'</li>')
                        });
                    }
                    else{
                        $('#EditAwardModal').modal('hide');
                        ViewAward();
                    }
              }
            });


        }); // end update


        // delete award click
        $(document).on('click','.delete_award', function(e) {
            e.preventDefault();
            var award_id = $(this).val();
            $('#delete_award_id').val(award_id);
            $('#DeleteAwardModal').modal('show');

        });

        $(document).on('click','.del_award_btn', function(e) {
            e.preventDefault();
            var award_id = $('#delete_award_id').val();

            //crsrf_token
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "DELETE",
                url: "/award/delete/"+award_id,
                success: function (response) {
                    $('#success_message').addClass('alert alert-success')
                    $('#success_message').text(response.message);
                    destroyDataTable();
                    $('#award_table_body').html("")
                    ViewAward();
                    $('#DeleteAwardModal').modal('hide');
                    //ViewAward();

                }
            });

        });




    }); // main doc ready




    // view by axios
    async function ViewAward(){
        console.log('this is running thisalsdfl;askdf');

        let {data:{award,employee}}  = await axios.get('/award/view');
        console.log(award,'datrfa gettin');
        await $.each(award, function (key, item) {
            console.log(item);
            let data  =  `<tr >
                        <td>${item.award_name}</td>
                        <td>${item.description}</td>
                        <td>${item.gift_item}</td>
                        <td>${employee[0].name}</td>
                        <td>${item.date}</td>
                        <td>${item.award_by}</td>
                        <td>
                        <button type="button" value="${item.id}" class="btn btn-primary btn-sm edit_award">Edit</button>
                        <button type="button" value="${item.id}" class="btn btn-danger btn-sm delete_award">Delete</button>
                        </td>
                    </tr>`
            $('#award_table_body').append(data);
        });

        award_table =  $("#award_table").DataTable( {
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
        award_table.destroy()
    }



</script>

@endsection
