@extends('admin.main_master')

@section('content')

<div class="card">
    <div class="card-header">
        <h4> {{ $candidates->candidate_name }}</h4>
        <a href="{{ route('recruitment.manage_candidate') }}" type="button" class="btn btn-primary"> Back </a>
    </div>
    <div class="card-body">
        <div class="row">
        <section>
                <h4 class="title"> Basic Information </h4>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label> Candidate Name  :</label>
                    {{ $candidates->candidate_name }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label>Candidate ID   :</label>
                    {{ $candidates->candidate_id }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label>Email   :</label>
                    {{ $candidates->email }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label>Contact Number  :</label>
                    {{ $candidates->phone  }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label>Alternative Contact Number  :</label>
                    {{ $candidates->alt_phone }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label>Present Address  :</label>
                    {{ $candidates->present_add }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label>Parmanent Address  :</label>
                    {{  $candidates->par_add }}

                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label>Date Of Birth  :</label>
                    {{  $candidates->dob }}

                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label>Candidate Image  :</label>
                    {{--  {{  $candidates->image }}  --}}
                    <img src="{{ asset($candidates->image) }} " height="100px;" width="100px;" alt="">

                </div>

            </div>
        </section>
        <br><br>
        <section>
                <h4 class="title"> Education Information </h4>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label>Obtained Degree  :</label>
                    {{  $candidates->obtained_degree }}

                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label>University Name  :</label>
                    {{  $candidates->university_name }}

                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label>CGPA  :</label>
                    {{  $candidates->gpa }}

                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label>Out Of (CGPA)  :</label>
                    {{  $candidates->outof_gpa }}

                </div>

            </div>
        </section>
        <br><br>
        <section>
            <h4 class="title"> Past Experience Information </h4>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label>Comapny Name  :</label>
                    {{  $candidates->company_name }}

                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label>Designation  :</label>
                    {{  $candidates->designation }}

                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label>Working Period  :</label>
                    {{  $candidates->working_period }}

                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label>Particular Role  :</label>
                    {{  $candidates->duties }}

                </div>
            </div>
        </section>
        </div>
    </div>
</div>

@endsection
