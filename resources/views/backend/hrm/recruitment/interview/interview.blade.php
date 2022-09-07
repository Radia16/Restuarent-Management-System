@extends('admin.main_master')

@section('content')
{{--  // AddInterviewModal start //  --}}
<!-- Modal -->
<div class="modal center-modal fade" id="AddInterviewModal" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Interview Add</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <ul id="saveform_errList"></ul>

            <div class="form-group md-3">
                <label for="candidate_id"> Candidates</label>
                <select name="candidate_id" id="candidate_id" class="candidate_id form-control "  style="width: 100%;">
                    <option selected="selected" >Select Candidates</option>
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
                <label for="interview_date"> Interview Date </label>
                <input type="date" name="interview_date" id="interview_date" class="interview_date form-control">
            </div>

            <div class="form-group md-3">
                <label for="interviewr_name"> Interviewr Name </label>
                <input type="text"  name="interviewr_name"  id="interviewr_name" class="interviewr_name form-control">
            </div>


            <div class="form-group md-3">
                <label for="viva"> Viva Marks </label>
                <input type="number" name="viva" id="viva" class="viva form-control">
            </div>

            <div class="form-group md-3">
                <label for="written"> Written Marks </label>
                <input type="number" name="written" id="written" class="written form-control">
            </div>


            <div class="form-group md-3">
                <label for="mcq"> Mcq Marks </label>
                <input type="number" name="mcq" id="mcq" class="mcq form-control">
            </div>

            <div class="form-group md-3">
                <label for="total_mark"> Total Marks </label>
                <input type="number" name="total_mark" id="total_mark" class="total_mark form-control">
            </div>


            <div class="form-group md-3">
                <label for="selection"> Selection </label>
                <input type="text" name="selection" id="selection" class="selection form-control">
                {{--  <select name="selection" id="selection" class="selection form-select"  style="width: 100%;">
                    <option selected="selected" > Selection </option>
                    <option> YES </option>
					<option> NO  </option
                </select>  --}}
            </div>

        </div>
        <div class="modal-footer modal-footer-uniform">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary float-end add_Int">Save changes</button>
        </div>
      </div>
    </div>
</div>
<!-- /.modal -->
{{--  // AddInterviewModal End //  --}}


{{--  // EditInterviewModal start //  --}}
<!-- Modal -->
<div class="modal center-modal fade" id="EditInterviewModal" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Interview Update</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <ul id="updateform_errList"></ul>
            <input type="hidden"  id="edit_interview_id">

            <div class="form-group md-3">
                <label for="candidate_id"> Candidates</label>
                <select name="candidate_id" id="edit_candidate_idddd" class="candidate_id form-control "  style="width: 100%;">
                    <option selected="" >Select Candidates</option>
                    @foreach ($shortlist as $shortlists)
                     <option value="">{{ $shortlists['candidates']['candidate_id'] }}</option>
                    @endforeach
                </select>
                {{--  <input type="text" name="candidate_id" id="edit_candidate_id" class="candidate_id form-control ">  --}}
                <span class="text-danger candidate_id_error" ></span>
            </div>


            <div class="form-group md-3">
                <label for="candidate_name"> Candidate Name </label>
                <input type="text"  name="candidate_name" id="edit_candidate_name" class="candidate_name form-control">
            </div>

            <div class="form-group md-3">
                <label for="designation_id"> Job Position </label>
                <input type="hidden" name="designation_id"  id="edit_designation_id" class="designation_id form-control">
                <input type="text" name="designation_name"  id="designation_name" class=" form-control">
            </div>

            <div class="form-group md-3">
                <label for="interview_date"> Interview Date </label>
                <input type="date" name="interview_date" id="edit_interview_date" class="interview_date form-control">
            </div>

            <div class="form-group md-3">
                <label for="interviewr_name"> Interviewr Name </label>
                <input type="text"  name="interviewr_name"  id="edit_interviewr_name" class="interviewr_name form-control">
            </div>


            <div class="form-group md-3">
                <label for="viva"> Viva Marks </label>
                <input type="number" name="viva" id="edit_viva" class="viva form-control">
            </div>

            <div class="form-group md-3">
                <label for="written"> Written Marks </label>
                <input type="number" name="written" id="edit_written" class="written form-control">
            </div>


            <div class="form-group md-3">
                <label for="mcq"> Mcq Marks </label>
                <input type="number" name="mcq" id="edit_mcq" class="mcq form-control">
            </div>

            <div class="form-group md-3">
                <label for="total_mark"> Total Marks </label>
                <input type="number" name="total_mark" id="edit_total_mark" class="total_mark form-control">
            </div>


            <div class="form-group md-3">
                <label for="selection"> Selection </label>
                <input type="text" name="selection" id="edit_selection" class="selection form-control">
                {{--  <select name="selection" id="selection" class="selection form-select"  style="width: 100%;">
                    <option selected="selected" > Selection </option>
                    <option> YES </option>
					<option> NO  </option
                </select>  --}}
            </div>

        </div>
        <div class="modal-footer modal-footer-uniform">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary float-end update_Int"> Update </button>
        </div>
      </div>
    </div>
</div>
<!-- /.modal -->
{{--  // EditInterviewModal End //  --}}


{{--  // DeleteInterviewModal start //  --}}
<!-- Modal -->
<div class="modal center-modal fade" id="DeleteInterviewModal" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Interview Delete</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <ul id="updateform_errList"></ul>
            <input type="hidden"  id="del_interview_id">
            <h4> Are you want to delete it?? </h4>

        </div>
        <div class="modal-footer modal-footer-uniform">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary float-end del_btn"> yah deletee </button>
        </div>
      </div>
    </div>
</div>
<!-- /.modal -->
{{--  // DeleteInterviewModal End //  --}}




<div class="row" >
    <div class="col-lg-12">
        <div class="box">
            <div class="box-header with-border">
            <h3 class="box-title">
                INTERVIEW SESSION
                <div class="bt">
                    {{--  data-bs-toggle="modal" data-bs-target="#AddInterviewModal"  --}}
                    <button type="button" class="btn btn-info-light btn-sm" id="addInterview" >
                        +  Add Interview
                    </button>
                </div>
            </h3>
            </div>


            <!-- /.box-header -->
            <div class="box-body">
                <div class="table-responsive">
                <div id="example_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                    <table id="interview_table" class="table table-bordered table-hover display nowrap margin-top-10 w-p100 dataTable" role="grid" aria-describedby="example_info">
                        <thead>
                            <tr role="row">
                                <th>Candidate ID</th>
                                <th>Candidate Name</th>
                                <th>Job Positon</th>
                                <th>Interview Date</th>
                                <th>Interviewr Name</th>
                                <th>Viva Marks</th>
                                <th>Written Marks</th>
                                <th>MCQ Marks</th>
                                <th>Total Marks</th>
                                <th >Selection</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="interview_table_body">
                        </tbody>
                        <tfoot>
                            <tr>
                                <th >Candidate ID</th>
                                <th >Candidate Name</th>
                                <th >Job Positon</th>
                                <th >Interview Date</th>
                                <th >Interviewr Name</th>
                                <th >Viva Marks</th>
                                <th >Written Marks</th>
                                <th >MCQ Marks </th>
                                <th >Total Marks</th>
                                <th >Selection</th>
                                <th >Action</th>

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
    <style >
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
            margin-left: 83rem;
        }

    </style>
@endsection



@section('script')
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
    window.addEventListener('DOMContentLoaded',function(){
            $("#addInterview").click(function(){
                getCandidates()
            });
            $("#candidate_id").on('change',function(event){
                console.log(event.target.value);
                getShortListViaCandidate(event.target.value);
            });



    });


        async function getShortListViaCandidate(candidate_id){
            const {data:{shortList}}   =  await axios.get(`/recruitment/getShortListViaCandidate/${candidate_id}`);
            addShortListToForm(shortList)
        }


        function addShortListToForm(shortList){
            console.log(shortList);
            const {candidate,designation}  = shortList;
            $("#candidate_name").val(candidate.candidate_name);
            $("#designation_id").val(designation.id);
            $("#designation_name").val(designation.designation_name);
            $("#interview_date").val(shortList.interview_date);

        }

        async function getCandidates(){
            const {data:{candidates}}   =  await axios.get('/recruitment/getCandiates');
            $("#AddInterviewModal").modal('show');
            addCandidatesToModal(candidates);
        }


        function addCandidatesToModal(candidates){
            const candidate_id  = document.querySelector('#candidate_id');
            candidates.forEach(candidate=>{
                console.log(candidate.candidate.candidate_id)
                let option = document.createElement('option');
                option.value = candidate.candidate.id;
                option.textContent=candidate.candidate.candidate_id;
                candidate_id.appendChild(option);
            })
        }
    </script>

    <script>
        let interview_table = null;
        $(document).ready(function () {

            // for auto calculating values using ajax
            $('#viva, #written, #mcq').keyup(function () {

                var total = 0;
                var viva_mark    = Number($('#viva').val());
                var written_mark = Number($('#written').val());
                var mcq_mark     = Number($('#mcq').val());

                var total = viva_mark + written_mark + mcq_mark ;
                $('#total_mark').val(total)
            });

            //view
            ViewInterview();

            // Store interview list
            $(document).on('click','.add_Int', function(e) {
                e.preventDefault();
                console.log(" looks good");

                var data = {
                    'candidate_id'    : $('.candidate_id').val(),
                    'candidate_name'  : $('.candidate_name').val(),
                    'designation_id'  : $('.designation_id').val(),
                    'interview_date'  : $('.interview_date').val(),
                    'interviewr_name' : $('.interviewr_name').val(),
                    'viva'            : $('.viva').val(),
                    'mcq'             : $('.mcq').val(),
                    'written'         : $('.written').val(),
                    'total_mark'      : $('.total_mark').val(),
                    'selection'       : $('.selection').val(),
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
                    url: "/recruitment/interview/store",
                    data: data,
                    dataType: "json",
                    success: function (response) {
                        const {success} = response.data;
                        destroyDataTable();
                        ViewInterview();
                        $('#AddInterviewModal').modal('hide');

                    },
                    error(xhr, ajaxOptions, thrownError){
                        /*if(error.response.status === 422){
                            let errors = error.response.data.errors;
                            setErrorinshortlistAddForm(errors)
                        }*/
                   }
                });

            });// end store


            //edit
           $(document).on('click','.edit_btn', function(e) {
            e.preventDefault();
            var interview_id = $(this).val();
            $('#EditInterviewModal').modal('show');
            $.ajax({
                type: "GET",
                url: "/recruitment/interview/edit/"+interview_id,
                success: function (response) {
                    console.log(response.interview.candidates.candidate_id);
                    const {candidates,designation} = response.interview
                    $('#edit_candidate_idddd').val(response.interview.candidates.candidate_id);
                    $('#edit_candidate_name').val(response.interview.candidate_name);
                    $('#edit_designation_id').val(response.interview.designation.designation_id);
                    $('#edit_interview_date').val(response.interview.interview_date);
                    $('#edit_interviewr_name').val(response.interview.interviewr_name);
                    $('#edit_viva').val(response.interview.viva);
                    $('#edit_written').val(response.interview.written);
                    $('#edit_mcq').val(response.interview.mcq);
                    $('#edit_total_mark').val(response.interview.total_mark);
                    $('#edit_selection').val(response.interview.selection);
                    $('#edit_interview_id').val(interview_id);
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

        //updating function for auto calculation
        $('#edit_viva, #edit_written, #edit_mcq').keyup(function () {

            var result = 0;
            var viva_mark    = Number($('#edit_viva').val());
            var written_mark = Number($('#edit_written').val());
            var mcq_mark     = Number($('#edit_mcq').val());

            var result = viva_mark + written_mark + mcq_mark ;
            $('#edit_total_mark').val(result)
        });



        // Update award click event
        $(document).on('click','.update_Int', function(e) {
            $('#updateform_errList').html('');
            e.preventDefault();
            var interview_id = $('#edit_interview_id').val();
            var data = {
              'candidate_id'      : $('#edit_candidate_id').val(),
              'candidate_name'    : $('#edit_candidate_name').val(),
              'designation_id'    : $('#edit_designation_id').val(),
              'interview_date'    : $('#edit_interview_date').val(),
              'interviewr_name'   : $('#edit_interviewr_name').val(),
              'viva'              : $('#edit_viva').val(),
              'written'           : $('#edit_written').val(),
              'mcq'               : $('#edit_mcq').val(),
              'total_mark'        : $('#edit_total_mark').val(),
              'selection'         : $('#edit_selection').val(),

            }

            //crsrf_token
            $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
            });

            $.ajax({
              type: "PUT",
              url: "/recruitment/interview/update/"+interview_id,
              data: data,
              dataType: "json",
              success: function (response) {
                //console.log(response);

                destroyDataTable();
                $('#interview_table_body').html("")
                ViewInterview();

                $('.update_Int').text("Updated");
                $('#EditInterviewModal').modal('hide');

              },
              error(xhr, ajaxOptions, thrownError) {
                    /*alert(xhr.status);*/
                    $('#EditInterviewModal').modal('hide');
                    let errors = xhr.responseJSON.errors;
                    if(xhr.status == 422){
                        $.each(errors, function (key, err_values) {
                            $('#updateform_errList').append('<li class="text-danger">'+err_values?.[0]+'</li>')
                        });
                    }
                    else{
                        $('#EditInterviewModal').modal('hide');
                        ViewInterview();
                    }
              }
            });
        }); // end update


        //Delete Click
        $(document).on('click','.delete_btn', function(e) {
            e.preventDefault();
            var interview_id = $(this).val();
            $('#del_interview_id').val(interview_id);
            $('#DeleteInterviewModal').modal('show');

           });

          $(document).on('click','.del_btn', function(e) {
            e.preventDefault();
            var interview_id = $('#del_interview_id').val();

            //crsrf_token
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "DELETE",
                url: "/recruitment/interview/delete/"+interview_id,
                success: function (response) {
                    $('#success_message').addClass('alert alert-success')
                    $('#success_message').text(response.message);
                    destroyDataTable();
                    $('#interview_table_body').html("")
                    ViewInterview();
                    $('#DeleteInterviewModal').modal('hide');

                }
                });

          });
        // end delete


        });//main doc end

        async function ViewInterview(){
            let {data:{interview}}  = await axios.get('/recruitment/interview/view');
            //console.log(leave,'datrfa gettin');

            await $.each(interview, function (key, item) {
               const {candidates,designation}  = item;

                let data  =  `<tr>
                               <td>${candidates.candidate_id}</td>
                               <td>${item.candidate_name}</td>
                               <td>${designation.designation_name}</td>
                               <td>${item.interview_date}</td>
                               <td>${item.interviewr_name}</td>
                               <td>${item.viva}</td>
                               <td>${item.written}</td>
                               <td>${item.mcq}</td>
                               <td>${item.total_mark}</td>
                               <td>${item.selection}</td>
                               <td>
                                   <button type="button" value="${item.id}" class="btn btn-primary btn-sm edit_btn">Edit</button>
                                   <button type="button" value="${item.id}" class="btn btn-danger btn-sm delete_btn">Delete</button>
                               </td>
                           </tr>`
                $('#interview_table_body').append(data);
            });

           $("#interview_table").DataTable( {
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
            interview_table.destroy()
        }


    </script>




@endsection
