@extends('admin.main_master')

@section('content')


{{--  // AddInterviewModal start //  --}}
<!-- Modal -->
<div class="modal center-modal fade" id="AddSelectionModal" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Candidate Selection Add</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <ul id="saveform_errList"></ul>

            <div class="form-group md-3">
                <label for="candidate_id"> Candidates </label>
                <select name="candidate_id" id="candidate_id" class="candidate_id form-control"  style="width: 100%;">
                    <option selected="selected" >Select Candidates</option>
                    {{--  @foreach ($candidates as $candidate)
                    <option value="{{ $candidate->id }}"> {{ $candidate->candidate_id }}</option>
                    @endforeach  --}}
                </select>
                <span class="text-danger candidate_id_error" ></span>
            </div>


            <div class="form-group md-3">
                <label for="candidate_name"> Candidate Name </label>
                <input type="text"  name="candidate_name" id="candidate_name" class="candidate_name form-control">
            </div>

            <div class="form-group md-3">
                <label for="designation_id"> Job Position </label>
                <input type="hidden" name="designation_id"  id="designation_id" class="designation_id form-control">
                <input type="text" name="designation_name"  id="designation_name" class=" form-control">
            </div>



            <div class="form-group md-3">
                <label for="terms"> Selection Terms </label>
                <textarea name="terms" id="terms" class="terms form-control" cols="30" rows="10" placeholder="Write Here"></textarea>
            </div>

        </div>
        <div class="modal-footer modal-footer-uniform">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary float-end add_sec">Save changes</button>
        </div>
      </div>
    </div>
</div>
<!-- /.modal -->
{{--  // AddInterviewModal End //  --}}


{{--  // EditSelectionModal start //  --}}
<!-- Modal -->
<div class="modal center-modal fade" id="EditSelectionModal" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Candidate Selection Update</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <ul id="updateform_errList"></ul>
            <input type="hidden" id="edit_select_id">

            <div class="form-group md-3">
                <label for="candidate_id"> Candidates </label>
                <select name="candidate_id" id="edit_candidate_id" class="candidate_id form-control"  style="width: 100%;">
                    <option selected="selected" >Select Candidates</option>

                </select>
                <span class="text-danger candidate_id_error" ></span>
            </div>


            <div class="form-group md-3">
                <label for="candidate_name"> Candidate Name </label>
                <input type="text"  name="candidate_name" id="edit_candidate_name" class="candidate_name form-control">
            </div>

            <div class="form-group md-3">
                <label for="designation_id"> Designation </label>
                <input type="hidden" name="designation_id"  id="edit_designation_id" class="designation_id form-control">
                <input type="text" name="designation_name"  id="designation_name" class=" form-control">
            </div>



            <div class="form-group md-3">
                <label for="terms"> Selection Terms </label>
                <textarea name="terms" id="edit_terms" class="terms form-control" cols="30" rows="10" placeholder="Write Here"></textarea>
            </div>

        </div>
        <div class="modal-footer modal-footer-uniform">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary float-end update_sec">Update</button>
        </div>
      </div>
    </div>
</div>
<!-- /.modal -->
{{--  // EditSelectionModal End //  --}}


{{--  // DeleteSelectionModal start //  --}}
<!-- Modal -->
<div class="modal center-modal fade" id="DeleteSelectionModal" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Candidate Selection Delete</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">


            <input type="hidden" id="del_select_id">

            <h4> Are you sure want to delete ??</h4>


        </div>
        <div class="modal-footer modal-footer-uniform">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary float-end del_sec">Yes, Delete it</button>
        </div>
      </div>
    </div>
</div>
<!-- /.modal -->
{{--  // DeleteSelectionModal End //  --}}

<div class="row" >
    <div class="col-lg-12">
        <div class="box">
            <div class="box-header with-border">
            <h3 class="box-title">
                CANDIDATE SELECTION
            </h3>
                <div class="bt">
                    {{--  data-bs-toggle="modal" data-bs-target="#AddInterviewModal"  --}}
                    <button type="button" class="btn btn-info-light btn-sm" id="addSelection" >
                        + Candidate Selections
                    </button>
                </div>
            </div>


            {{--  <!-- /.box-header -->  --}}
            <div class="box-body">
                <div class="table-responsive">
                <div id="example_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                    <table id="selection_table" class="table table-bordered table-hover display nowrap margin-top-10 w-p100 dataTable" role="grid" aria-describedby="example_info">
                        <thead>
                            <tr role="row">
                                <th>Candidate ID</th>
                                <th>Candidate Name</th>
                                <th>Employee ID</th>
                                <th>Designation</th>
                                <th>Selection Terms</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="selection_table_body">
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Candidate ID</th>
                                <th>Candidate Name</th>
                                <th>Employee ID</th>
                                <th>Designation</th>
                                <th>Selection Terms</th>
                                <th>Action</th>

                            </tr>
                        </tfoot>
                    </table>
                </div>
                </div>
            </div>
            {{-- <!-- /.box-body --}}
        </div>
    </div>
</div>

@endsection



@section('css')
    <style>
        .box-title{

            align-items: center;
            font-size: bold;
            color: black;
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
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <script>
        window.addEventListener('DOMContentLoaded',function(){
            $('#addSelection').click(function(){
                getCandfrominterview()
            });

            $('#candidate_id').on('change',function(event){
                getInterviewlist(event.target.value);
            });

        });


        async function getInterviewlist(candidate_id){
            const {data:{interview}} = await axios.get(`/recruitment/getInterviewlist/${candidate_id}`);
            console.log(interview);
            addinterviewToForm(interview)

        }

        async function addinterviewToForm(interview){
            console.log(interview);

            const {candidates,designation} = interview;
            $('#candidate_name').val(candidates.candidate_name);
            $('#designation_id').val(designation.id);
            $('#designation_name').val(designation.designation_name);

        }


        async function getCandfrominterview(){
            const{data:{candidates}} = await axios.get('/recruitment/getCandfrominterview');
            console.log(candidates)
            $("#AddSelectionModal").modal('show');
            addCandidatesToModal(candidates);
        }

        function addCandidatesToModal(candidates){
            const candidate_id = document.querySelector('#candidate_id');
            candidates.forEach(candidates=>{
                //console.log(candidate.candidate_id);
                let option = document.createElement('option');
                option.value = candidates.candidates.id;
                option.textContent = candidates.candidates.candidate_id;
                candidate_id.appendChild(option); //hove?ji vaia

            })

        /*function addCandidatesToModal(candidates){
            const candidate_id = document.querySelector('#candidate_id');
            candidates.forEach(candidate=>{
                console.log(candidate.candidate_id);
                let option = document.createElement('option');
                option.value = candidate.id;
                option.textContent = candidate.candidate_name;
                candidate_id.appendChild(option); //hove?ji vaia

            })*/
        }

    </script>

    <script>

        let selection_table = null;
        $(document).ready(function () {
            //for view
            ViewSelection();


            $(document).on('click','.add_sec', function(e) {
                e.preventDefault();
                //console.log("looks good!");
                var data = {
                    'candidate_id'   : $('.candidate_id').val(),
                    'candidate_name' : $('.candidate_name').val(),
                    'designation_id' : $('.designation_id').val(),
                    'terms'          : $('.terms').val(),
                }
                //console.log(data);
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: "POST",
                    url: "/recruitment/select/store",
                    data: data,
                    dataType: "json",
                    success: function (response) {
                        destroyDataTable();
                        ViewSelection();
                        $('#AddSelectionModal').modal('hide');

                    },
                    error(xhr, ajaxOptions, thrownError){

                    }
                });
            });

            //edit
            $(document).on('click','.edit_btn', function(e) {
                e.preventDefault();

                var select_id = $(this).val();
                $('#EditSelectionModal').modal('show');
                $.ajax({
                    type: "GET",
                    url: "/recruitment/select/edit/" + select_id,
                    success: function (response) {
                        console.log(response.selection.interviews.candidate_id);
                        const {interviews,designation} = response.selection
                        $('#edit_candidate_id').val(response.selection.interviews.candidate_id);
                        $('#edit_candidate_name').val(response.selection.candidate_name);
                        //$('#edit_emp_id').val(response.selection.emp_id);
                        $('#edit_designation_id').val(response.selection.designation.designation_id);
                        $('#edit_terms').val(response.selection.terms);

                        $('#edit_select_id').val(select_id);
                    },
                    error(xhr, ajaxOptions, thrownError){
                        if(response.status == 404){
                            $('#success_message').html("");
                            $('#success_message').addClass('alert alert-danger');
                            $('#success_message').text(response.message);

                        }
                        }
                });
            });

            //update
            $(document).on('click','.update_sec', function(e) {
                e.preventDefault();

                $('#updateform_errList').html('');
                var select_id = $('#edit_select_id').val();

                var data = {
                    'candidate_id'   : $('.edit_candidate_id').val(),
                    'candidate_name' : $('.edit_candidate_name').val(),
                    'designation_id' : $('.edit_designation_id').val(),
                    'terms'          : $('.edit_terms').val(),
                }

                //crsrf_token
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: "PUT",
                    url: "/recruitment/select/update/" + select_id,
                    data: data,
                    dataType: "json",
                    success: function (response) {
                        destroyDataTable();
                        $('#selection_table_body').html("")
                        ViewSelection();
                        $('#EditSelectionModal').modal('hide');

                    },
                    error(xhr, ajaxOptions, thrownError) {
                        /*alert(xhr.status);*/
                        $('#EditSelectionModal').modal('hide');
                        let errors = xhr.responseJSON.errors;
                        if(xhr.status == 422){
                            $.each(errors, function (key, err_values) {
                                $('#updateform_errList').append('<li class="text-danger">'+err_values?.[0]+'</li>')
                            });
                        }
                        else{
                            $('#EditSelectionModal').modal('hide');
                            ViewSelection();
                        }
                  }
                });

            });

            //Delete Click
            $(document).on('click','.delete_btn', function(e) {
                e.preventDefault();
                var select_id = $(this).val();
                $('#del_select_id').val(select_id);
                $('#DeleteSelectionModal').modal('show');

            });

            $(document).on('click','.del_sec', function(e) {
                e.preventDefault();
                var select_id = $('#del_select_id').val();

                //crsrf_token
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: "DELETE",
                    url: "/recruitment/select/delete/"+select_id,
                    success: function (response) {
                        $('#success_message').addClass('alert alert-success')
                        $('#success_message').text(response.message);
                        destroyDataTable();
                        $('#selection_table_body').html("")
                        ViewSelection();
                        $('#DeleteSelectionModal').modal('hide');

                    }
                    });

            });
            // end delete


            //delete
           /* $(document).on('click','.delete_btn', function(e) {
                e.preventDefault();
                var select_id = $(this).val();
                $('#del_select_id').val(select_id);
                $('#DeleteSelectionModal').modal('show';)
            });

            $(document).on('click','.del_sec', function(e) {
                e.preventDefault();
                var select_id = $('#del_select_id').val();


                //crsrf_token
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: "DELETE",
                    url: "/recruitment/select/delete/" + select_id,
                    success: function (response) {
                        $('#success_message').addClass('alert alert-success')
                        $('#success_message').text(response.message);
                        //destroyDataTable();
                        $('#selection_table_body').html("")
                        ViewSelection();
                        $('#DeleteSelectionModal').modal('hide');
                    }
                });

            });*/



        });// main doc

        async function ViewSelection(){
            let {data:{selection}} = await axios.get('/recruitment/select/view');

            await $.each(selection,function(key,item){
                const {interviews,designation} = item;

                let data = `<tr>
                                <td>${interviews.candidate_id}</td>
                                <td>${item.candidate_name}</td>
                                <td>${item.employee_id}</td>
                                <td>${designation.designation_name}</td>
                                <td>${item.terms}</td>
                                <td>
                                    <button type="button" value="${item.id}" class="btn btn-primary btn-sm edit_btn">Edit</button>
                                    <button type="button" value="${item.id}" class="btn btn-danger btn-sm delete_btn">Delete</button>
                                </td>
                            </tr>`
                    $('#selection_table_body').append(data);
            });

            $("#selection_table").DataTable( {
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
            selection_table.destroy()
        }

    </script>



@endsection

