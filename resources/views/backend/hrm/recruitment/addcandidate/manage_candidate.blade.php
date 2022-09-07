@extends('admin.main_master')

@section('content')

<div class="container">
    <div class="row" style="margin-top:100px">


    <div class="col-lg-12">
        <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title"> Manage Candidates </h3>

        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="table-responsive">
              <div id="example_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">


                <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100 dataTable" role="grid" aria-describedby="example_info">
                <thead>
                    <tr role="row">
                        <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending"
                        aria-label="Name: activate to sort column descending" style="width: 187.688px;">Candidate Name</th>

                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending"
                        style="width: 293.969px;"> Candidate ID </th>

                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending"
                        style="width: 137.969px;"> Email </th>

                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending"
                        style="width: 65.7188px;"> Contact Number </th>

                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending"
                        style="width: 129.891px;"> Alternative Contact Number </th>

                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"
                        style="width: 118.719px;"> Present Address </th>

                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"
                        style="width: 118.719px;"> Parmanent Address </th>

                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"
                        style="width: 118.719px;"> Date Of Birth </th>

                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"
                        style="width: 118.719px;"> Candidate_Image </th>

                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"
                        style="width: 118.719px;"> Obtained Degree </th>

                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"
                        style="width: 118.719px;"> University Name </th>

                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"
                        style="width: 118.719px;"> CGPA </th>

                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"
                        style="width: 118.719px;"> Out_of  </th>

                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"
                        style="width: 118.719px;"> Company Name </th>

                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"
                        style="width: 118.719px;"> Designation </th>

                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"
                        style="width: 118.719px;"> Working Period </th>

                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"
                        style="width: 118.719px;"> Particular Role </th>


                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"
                        style="width: 118.719px;">Action </th>
                    </tr>
                </thead>


                <tbody>

                    @foreach ($candidates as $candidate)


                <tr role="row" class="odd">


                        <td class="sorting_1">{{ $candidate->candidate_name }}</td>
                        <td>{{ $candidate->candidate_id }}</td>
                        <td>{{ $candidate->email }}</td>
                        <td>{{ $candidate->phone }}</td>
                        <td>{{ $candidate->alt_phone }}</td>
                        <td>{{ $candidate->present_add }}</td>
                        <td>{{ $candidate->par_add }}</td>
                        <td>{{ $candidate->dob }}</td>
                        <td>
                            <img src="{{ asset($candidate->image) }} " height="80px;" width="80px;" alt="">

                        </td>

                        <td>{{ $candidate->obtained_degree }}</td>
                        <td>{{ $candidate->university_name }}</td>
                        <td>{{ $candidate->gpa }}</td>
                        <td>{{ $candidate->outof_gpa }}</td>

                        <td>{{ $candidate->company_name }}</td>
                        <td>{{ $candidate->designation }}</td>
                        <td>{{ $candidate->working_period }}</td>
                        <td>{{ $candidate->duties }}</td>

                        <td>
                            <a href="{{ url('/recruitment/caninfo/edit' ,$candidate->id ) }}" class="btn btn-success btn-sm" title="Edit">Edit</a>

                            <a href="{{ route('recruitment.view_candidate',$candidate->id) }}" class="btn btn-info btn-sm" title="View">View</a>

                            <a href="{{ url('/recruitment/caninfo/delete' ,$candidate->id) }}" class="btn btn-danger btn-sm" title="Delete">Delete</a>
                            {{--  <a href="{{ route('employee.edit', $employee->id) }}" class="btn btn-light btn-sm" title="Edit">Edit </a>
                            <a href="{{ route('employee.delete', $employee->id) }}" class="btn btn-dark btn-sm" class="btn btn-info" title="Edit">Delete</i> </a>  --}}
                        </td>
                </tr>

                    @endforeach
                </tbody>



                <tfoot>
                    <tr>
                        <th rowspan="1" colspan="1">Candidate Name</th>
                        <th rowspan="1" colspan="1">Candidate ID</th>
                        <th rowspan="1" colspan="1">Email</th>
                        <th rowspan="1" colspan="1">Contact Number</th>
                        <th rowspan="1" colspan="1"> Alternative Contact Number</th>
                        <th rowspan="1" colspan="1">Present Address</th>
                        <th rowspan="1" colspan="1">Parmanent Address</th>
                        <th rowspan="1" colspan="1">Date of Birth</th>
                        <th rowspan="1" colspan="1">Candidate_Image</th>
                        <th rowspan="1" colspan="1">Obtained Degree</th>
                        <th rowspan="1" colspan="1">University Name</th>
                        <th rowspan="1" colspan="1">CGPA</th>
                        <th rowspan="1" colspan="1">Out_of</th>
                        <th rowspan="1" colspan="1">Comapny Name</th>
                        <th rowspan="1" colspan="1">Designation</th>
                        <th rowspan="1" colspan="1">Working Period</th>
                        <th rowspan="1" colspan="1">Particular Role</th>

                        <th rowspan="1" colspan="1">Action</th>
                    </tr>
                </tfoot>
            </table>


        </div>
            </div>
        </div>
        <!-- /.box-body -->
      </div>
    </div>
    {{--  main colum 12 end  --}}


    </div>
    {{--  main row end  --}}
</div>

@endsection
