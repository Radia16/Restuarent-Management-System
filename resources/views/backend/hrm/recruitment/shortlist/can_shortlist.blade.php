@extends('admin.main_master')

@section('content')

{{--  <!-- AddShortlistModal Start -->  --}}
<div class="modal fade" id="AddShortlistModal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title"> Shortlist ADD </h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <ul id="saveform_errList"></ul>

            <div class="form-group md-3">
                <label for=""> Candidate ID </label>
                <select name="candidate_id" class="candidate_id form-control "  style="width: 100%;">
                    <option selected="selected">Select Can ID</option>
                    @foreach($candidates as $cand)
                     <option value="{{ $cand->id }}"> {{ $cand->candidate_id }}</option>
                    @endforeach
                </select>
                <span class="text-danger candidate_id_error" ></span>
                {{--  <input type="text" class="candidate_id form-control">  --}}
            </div>

            <div class="form-group md-3">
                <label for=""> Candidate Name</label>
                <input type="text" class="candidate_name form-control">
                <span class="text-danger candidate_name_error" ></span>
            </div>

            <div class="form-group md-3">
                <label for=""> Job Postion </label>
                <select class="designation_id form-control select2"  style="width: 100%;">
                    <option selected="selected">Select Job Position</option>
                    @foreach($designation as $des)
                     <option value="{{ $des->id }}"> {{ $des->designation_name }}</option>
                    @endforeach
                </select>
            </div>


            <div class="form-group md-3">
                <label for=""> Shortlist Date </label>
                <input type="date" class="todays_date form-control">
            </div>

            <div class="form-group md-3">
                <label for=""> InterView Date </label>
                <input type="date" class="interview_date form-control">
            </div>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary float-end add_shortlist">Save changes</button>
        </div>
      </div>
      {{--  <!-- /.modal-content -->  --}}
    </div>
    {{--  <!-- /.modal-dialog -->  --}}
</div>
{{--  <!-- AddShortlistModal End -->  --}}


{{--  <!-- EditShortlistModal Start -->  --}}
<div class="modal fade" id="EditShortlistModal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title"> Shortlist Update </h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <ul id="updateform_errList"></ul>
            <input type="hidden"  id="edit_shortlist_id">

            <div class="form-group md-3">
                <label for=""> Candidate ID </label>
                <select name="candidate_id" id="edit_candidate_id" class="candidate_id form-control "  style="width: 100%;">
                    <option selected="selected">Select Can ID</option>
                    @foreach($candidates as $cand)
                     <option value="{{ $cand->id }}"> {{ $cand->candidate_id }}</option>
                    @endforeach
                </select>
                <span class="text-danger candidate_id_error" ></span>
                {{--  <input type="text" class="candidate_id form-control">  --}}
            </div>

            <div class="form-group md-3">
                <label for=""> Candidate Name</label>
                <input type="text" id="edit_candidate_name" class="candidate_name form-control">
                <span class="text-danger candidate_name_error" ></span>
            </div>

            <div class="form-group md-3">
                <label for=""> Job Postion </label>
                <select class="designation_id form-control select2" id="edit_designation_id" style="width: 100%;">
                    <option selected="selected">Select Job Position</option>
                    @foreach($designation as $des)
                     <option value="{{ $des->id }}"> {{ $des->designation_name }}</option>
                    @endforeach
                </select>
            </div>


            <div class="form-group md-3">
                <label for=""> Shortlist Date </label>
                <input type="date" id="edit_todays_date" class="todays_date form-control">
            </div>

            <div class="form-group md-3">
                <label for=""> InterView Date </label>
                <input type="date" id="edit_interview_date" class="interview_date form-control">
            </div>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary float-end update_btn">Update</button>
        </div>
      </div>
      {{--  <!-- /.modal-content -->  --}}
    </div>
    {{--  <!-- /.modal-dialog -->  --}}
</div>
{{--  <!-- EditShortlistModal End -->  --}}


{{--  <!-- DeleteShortlistModal Start -->  --}}
<div class="modal fade" id="DeleteShortlistModal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title"> Shortlist Delete </h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">


            <input type="hidden"  id="delete_shortlist_id">
            <h4> Dob You Want to Delete Data ??</h4>



        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary float-end del_btn">Yes,Delete</button>
        </div>
      </div>
      {{--  <!-- /.modal-content -->  --}}
    </div>
    {{--  <!-- /.modal-dialog -->  --}}
</div>
{{--  <!-- DeleteShortlistModal End -->  --}}



<div class="row" >
    <div class="col-lg-12">
        <div class="box">
            <div class="box-header with-border">
            <h3 class="box-title">
                Candidate Shortlist
                <div class="bt">
                    <button type="button" class="btn btn-info-light btn-sm" data-bs-toggle="modal" data-bs-target="#AddShortlistModal">
                        +  Add Shortlists
                    </button>
                </div>
            </h3>
            </div>


            <!-- /.box-header -->
            <div class="box-body">
                <div class="table-responsive">
                <div id="example_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                    <table id="shortlist_table" class="table table-bordered table-hover display nowrap margin-top-10 w-p100 dataTable" role="grid" aria-describedby="example_info">
                        <thead>
                            <tr role="row">
                                <th>Candidate ID</th>
                                <th>Candidate Name</th>
                                <th>Job Positon</th>
                                <th>Shortlist Date</th>
                                <th>Interview Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="shortlist_table_body">
                        </tbody>
                        <tfoot>
                            <tr>
                                <th >Candidate ID</th>
                                <th >Candidate Name</th>
                                <th >Job Positon</th>
                                <th >Shortlist Date</th>
                                <th >Interview Date</th>
                                <th >Action</th>

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

        .modal{
            z-index:1050 !important;
        }
    </style>
@endsection

@section('script')

    <script src="{{ asset('backend/assets/vendor_components/bootstrap-select/dist/js/bootstrap-select.js ')}}"></script>
    <script src="{{ asset('backend/assets/vendor_components/select2/dist/js/select2.full.js ')}}"></script>
    <script src="{{ asset('backend/js/pages/advanced-form-element.js') }}"></script>

    <script>

        let shortlist_table = null;

        $(document).ready(function () {

            $('select[name="candidate_id"]').on('change', function() {
                var candidate_id = $(this).val();
                if (candidate_id) {
                    $.ajax({
                        url:  "/recruitment/caninfo/"+candidate_id,
                        type: "GET",
                        dataType: "json",
                        success: function(response) {
                            $('.candidate_name').val(response.candidate_name);
                        }
                    });
                } else {
                    alert('danger');
                }
            });

            //view
            ShortlistView();

            // add
            $(document).on('click','.add_shortlist', function(e) {
                e.preventDefault();

                var data = {
                    'candidate_id'    : $('.candidate_id').val(),
                    'candidate_name'  : $('.candidate_name').val(),
                    'designation_id'  : $('.designation_id').val(),
                    'todays_date'     : $('.todays_date').val(),
                    'interview_date'  : $('.interview_date').val(),
                }
                console.log(data);


            //crsrf_token
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "POST",
                url: "/recruitment/shortlist/store",
                data: data,
                dataType: "json",
                success: function (response) {
                    console.log(response);
                    destroyDataTable();
                    ShortlistView();
                    $('#AddShortlistModal').modal('hide');
                },
                error(xhr, ajaxOptions, thrownError){
                    /*if(error.response.status === 422){
                        let errors = error.response.data.errors;
                        setErrorinshortlistAddForm(errors)
                    }*/
               }
            });
            }); // end add

            //edit
           $(document).on('click','.edit_short', function(e) {
               e.preventDefault();
               var shortlist_id = $(this).val();
               $('#EditShortlistModal').modal('show');
               $.ajax({
                   type: "GET",
                   url: "/recruitment/shortlist/edit/"+shortlist_id,
                   success: function (response) {
                       console.log(response);
                       const {candidate,designation} = response.shortlist
                       $('#edit_candidate_id').val(response.shortlist.candidate_id);
                       $('#edit_candidate_name').val(response.shortlist.candidate_name);
                       $('#edit_designation_id').val(response.shortlist.designation_id);
                       $('#edit_todays_date').val(response.shortlist.todays_date);
                       $('#edit_interview_date').val(response.shortlist.interview_date);
                       $('#edit_shortlist_id').val(shortlist_id);
                   },
                   error(xhr, ajaxOptions, thrownError){
                    if(response.status == 404){
                        $('#success_message').html("");
                        $('#success_message').addClass('alert alert-danger');
                        $('#success_message').text(response.message);

                    }
                    }
               });

           });//end


        // Update award click event
        $(document).on('click','.update_btn', function(e) {
            $('#updateform_errList').html('');
            e.preventDefault();
            var shortlist_id = $('#edit_shortlist_id').val();
            var data = {
              'candidate_id'      : $('#edit_candidate_id').val(),
              'candidate_name'    : $('#edit_candidate_name').val(),
              'designation_id'    : $('#edit_designation_id').val(),
              'todays_date'       : $('#edit_todays_date').val(),
              'interview_date'    : $('#edit_interview_date').val(),

            }

            //crsrf_token
            $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
            });

            $.ajax({
              type: "PUT",
              url: "/recruitment/shortlist/update/"+shortlist_id,
              data: data,
              dataType: "json",
              success: function (response) {
                //console.log(response);

                destroyDataTable();
                $('#shortlist_table_body').html("")
                ShortlistView();

                $('.update_btn').text("Updated");
                $('#EditShortlistModal').modal('hide');

              },
              error(xhr, ajaxOptions, thrownError) {
                    /*alert(xhr.status);*/
                    $('#EditShortlistModal').modal('hide');
                    let errors = xhr.responseJSON.errors;
                    if(xhr.status == 422){
                        $.each(errors, function (key, err_values) {
                            $('#updateform_errList').append('<li class="text-danger">'+err_values?.[0]+'</li>')
                        });
                    }
                    else{
                        $('#EditShortlistModal').modal('hide');
                        ShortlistView();
                    }
              }
            });
        }); // end update


        //Delete Click
        $(document).on('click','.delete_short', function(e) {
        e.preventDefault();
        var shortlist_id = $(this).val();
        $('#delete_shortlist_id').val(shortlist_id);
        $('#DeleteShortlistModal').modal('show');

       });

      $(document).on('click','.del_btn', function(e) {
        e.preventDefault();
        var shortlist_id = $('#delete_shortlist_id').val();

        //crsrf_token
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: "DELETE",
            url: "/recruitment/shortlist/delete/"+shortlist_id,
            success: function (response) {
                $('#success_message').addClass('alert alert-success')
                $('#success_message').text(response.message);
                destroyDataTable();
                $('#shortlist_table_body').html("")
                ShortlistView();
                $('#DeleteShortlistModal').modal('hide');

            }
            });

      });
    // end delete


    });// main doc end

        //view
        async function ShortlistView(){

            let {data:{shortlists}}  = await axios.get('/recruitment/shortlist/view');
            //console.log(leave,'datrfa gettin');

            await $.each(shortlists, function (key, item) {
               const {candidate,designation}  = item;

                let data  =  `<tr>
                               <td>${candidate.candidate_id}</td>
                               <td>${item.candidate_name}</td>
                               <td>${designation.designation_name}</td>
                               <td>${item.todays_date}</td>
                               <td>${item.interview_date}</td>
                               <td>
                                   <button type="button" value="${item.id}" class="btn btn-primary btn-sm edit_short">Edit</button>
                                   <button type="button" value="${item.id}" class="btn btn-danger btn-sm delete_short">Delete</button>
                               </td>
                           </tr>`
                $('#shortlist_table_body').append(data);
            });

           $("#shortlist_table").DataTable( {
                dom: 'Bfrtip',
                buttons: [
                    'copyHtml5',
                    'excelHtml5',
                    'csvHtml5',
                    'pdfHtml5'
                ]
            });

        };

        function destroyDataTable(){
            shortlist_table.destroy()
        }


        function setErrorinshortlistAddForm(errors){
            let candidate_id_error = document.querySelector('.candidate_id_error');
            candidate_id_error.innerText = errors['candidate_id_error'][0];

            let candidate_name_error = document.querySelector('.candidate_name_error');
            candidate_name_error.innerText = errors['candidate_name_error'][0];
        }

    </script>
@endsection
