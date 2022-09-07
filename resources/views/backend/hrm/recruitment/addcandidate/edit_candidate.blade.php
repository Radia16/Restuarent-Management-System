@extends('admin.main_master')

    @section('content')
    <!-- Step wizard -->
    <div class="box">
    <div class="box-header with-border">
        <h4 class="box-title">Candidate Update</h4>

    <!-- /.box-header -->
    <div class="box-body wizard-content">
        <form action="#" id="tab_wizard" class="tab-wizard wizard-circle" method="POST" enctype="multipart/form-data">
            @csrf

            <input type="hidden" name="id" value="{{$candidate_edit->id}}">
            <input type="hidden" name="previous_img" value="{{ $candidate_edit->image  }}">

            <!-- Step 1 -->
            <h6>Basic Information</h6>
            <section>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="candidate_name" class="form-label">Candidate Name</label>
                            <input type="text" name="candidate_name" value="{{ $candidate_edit->candidate_name }}" class="form-control" id="candidate_name">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" value="{{ $candidate_edit->email }}" class="form-control" id="email">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="phone" class="form-label">Contact no:</label>
                            <input type="tel" name="phone" value="{{ $candidate_edit->phone }}" class="form-control" id="phone">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="alt_phone" class="form-label">Alter Contact</label>
                            <input type="tel" name="alt_phone" value="{{ $candidate_edit->alt_phone }}"  class="form-control" id="alt_phone">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="present_add" class="form-label">Address Line 1 :</label>
                            <input type="text" name="present_add" value="{{ $candidate_edit->present_add }}" class="form-control" id="present_add">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="par_add" class="form-label">Address Line 2 :</label>
                            <input type="text" name="par_add" value="{{ $candidate_edit->par_add }}" class="form-control" id="par_add">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="dob" class="form-label">Date of Birth :</label>
                            <input type="date" name="dob" value="{{ $candidate_edit->dob }}" class="form-control" id="dob">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="image" class="form-label">Image :</label>
                            <input type="file" name="image" value="{{ $candidate_edit->image }}" class="form-control" id="image">
                        </div>
                    </div>
                </div>
            </section>


            <!-- Step 2 -->
            <h6>Education</h6>
                <section>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="obtained_degree" class="form-label">Obtained degree</label>
                                <input type="text" name="obtained_degree" value="{{ $candidate_edit->obtained_degree }}" class="form-control" id="obtained_degree">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="university_name" class="form-label">University Name</label>
                                <input type="text" name="university_name" value="{{ $candidate_edit->university_name }}" class="form-control" id="university_name">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="gpa" class="form-label">GPA:</label>
                                <input type="number" name="gpa" value="{{ $candidate_edit->gpa }}" class="form-control" id="gpa">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="outof_gpa" class="form-label">outof_gpa</label>
                                <input type="number" name="outof_gpa" name="gpa" value="{{ $candidate_edit->outof_gpa }}" class="form-control" id="outof_gpa">
                            </div>
                        </div>
                    </div>

                </section>


            <!-- Step 3 -->
            <h6>Past Experience</h6>
                <section>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="company_name" class="form-label">Company Name</label>
                                <input type="text" name="company_name" value="{{ $candidate_edit->company_name }}" class="form-control" id="company_name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="designation" class="form-label">Designation</label>
                                <input type="text" name="designation" value="{{ $candidate_edit->designation }}" class="form-control" id="designation">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="working_period" class="form-label">working_period:</label>
                                <input type="text" name="working_period" value="{{ $candidate_edit->working_period }}" class="form-control" id="working_period">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="duties" class="form-label">duties</label>
                                <input type="text" name="duties" value="{{ $candidate_edit->duties }}" class="form-control" id="duties">
                            </div>
                        </div>
                    </div>

                </section>



        </form>
    </div>
    <!-- /.box-body -->
    </div>
    <!-- /.box -->

    @endsection


    @section('script')
        <script src="{{ asset('backend/assets/vendor_components/jquery-steps-master/build/jquery.steps.js ') }}"></script>
        <script src="{{ asset('backend/assets/vendor_components/jquery-validation-1.17.0/dist/jquery.validate.min.js ') }}"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        {{--  <script src="{{ asset('backend/js/pages/steps.js ') }}"></script>  --}}
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>



        <script>
            $(".tab-wizard").steps({
                headerTag: "h6"
            , bodyTag: "section"
            , transitionEffect: "none"
            , titleTemplate: '<span class="step">#index#</span> #title#'
            , labels: {
                finish: "Update"
            }
            , onFinished: function (event, currentIndex) {
                console.log("this is running")
                addCandidate(event.target)
            }
        });

        async function addCandidate(target){

            try{
                    let formData = new FormData(target);
                    const {data:{message}} = await axios.post(`/recruitment/caninfo/update/{{ $candidate_edit->id }}`,formData);
                    Swal.fire({
                        title: 'Success!',
                        text: message,
                        icon: 'success',
                    })
            }catch(error){
                Swal.fire({
                    title: 'Error!',
                    text: error,
                    icon: 'error',
                })
            }

        }

        </script>


    @endsection
