@extends('admin.main_master')

@section('content')
<div class="container">
    <div class="row" style="margin-top:100px">
        {{--  <div class="col-lg-2"></div>  --}}

    <div class="col-lg-12">
        <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title"> Managge Employee </h3>

        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="table-responsive">
              <div id="example_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">


                <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100 dataTable" role="grid" aria-describedby="example_info">
                <thead>
                    <tr role="row">
                        <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending"
                        aria-label="Name: activate to sort column descending" style="width: 187.688px;">Employee Name</th>

                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending"
                        style="width: 293.969px;"> E-mail </th>

                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending"
                        style="width: 137.969px;"> Contact Number </th>

                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending"
                        style="width: 65.7188px;"> Emergency Contact Number </th>

                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending"
                        style="width: 129.891px;"> Father Name </th>

                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"
                        style="width: 118.719px;"> Mother Name </th>

                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"
                        style="width: 118.719px;"> Present Address </th>

                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"
                        style="width: 118.719px;"> Parmanent Address </th>

                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"
                        style="width: 118.719px;"> Gender </th>

                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"
                        style="width: 118.719px;"> Maritial Status </th>

                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"
                        style="width: 118.719px;"> Date of Birth </th>

                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"
                        style="width: 118.719px;"> Employee Photo </th>

                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"
                        style="width: 118.719px;"> Outlet ID </th>

                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"
                        style="width: 118.719px;"> Employee_id </th>

                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"
                        style="width: 118.719px;"> Designation </th>

                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"
                        style="width: 118.719px;"> Department </th>

                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"
                        style="width: 118.719px;"> Date of Joining </th>

                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"
                        style="width: 118.719px;"> Salary </th>

                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"
                        style="width: 118.719px;"> Eperience </th>

                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"
                        style="width: 118.719px;"> National ID </th>

                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"
                        style="width: 118.719px;"> Academic Qualification </th>

                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"
                        style="width: 118.719px;"> Professional Qualification </th>


                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"
                        style="width: 118.719px;"> Account Holder Name </th>

                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"
                        style="width: 118.719px;"> Account Nmuber </th>

                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"
                        style="width: 118.719px;"> Bank Name </th>

                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"
                        style="width: 118.719px;"> Branch Name </th>

                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"
                        style="width: 118.719px;"> Pan Code </th>

                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"
                        style="width: 118.719px;"> CV </th>

                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"
                        style="width: 118.719px;"> Agreement/Offer Letter </th>

                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"
                        style="width: 118.719px;">Action </th>
                    </tr>
                </thead>


                <tbody>

                    @foreach ($employees as $employee)


                <tr role="row" class="odd">


                        <td class="sorting_1">{{ $employee->name }}</td>
                        <td>{{ $employee->email }}</td>
                        <td>{{ $employee->phone }}</td>
                        <td>{{ $employee->e_phone }}</td>
                        <td>{{ $employee->father_name }}</td>
                        <td>{{ $employee->mother_name }}</td>
                        <td>{{ $employee->address }}</td>
                        <td>{{ $employee->par_address }}</td>
                        <td>{{ $employee->gender }}</td>
                        <td>{{ $employee->maritial_status }}</td>
                        <td>{{ $employee->dob }}</td>


                        <td>
                            <img src="{{ asset($employee->image) }} " height="80px;" width="80px;" alt="">

                        </td>

                        <td >{{ $employee->outlet_id }}</td>
                        <td>{{ $employee->employee_id }}</td>
                        <td>{{ $employee->designation }}</td>
                        <td>{{ $employee['dep']['dep_name'] }}</td>

                        <td>{{ $employee->doj }}</td>
                        <td>{{ $employee->salary }}</td>
                        <td>{{ $employee->experience }}</td>
                        <td>{{ $employee->nid }}</td>
                        <td>{{ $employee->a_qua }}</td>
                        <td>{{ $employee->p_qua }}</td>

                        <td>{{ $employee->acc_name }}</td>
                        <td>{{ $employee->acc_num }}</td>
                        <td>{{ $employee->bank_name }}</td>
                        <td>{{ $employee->branch }}</td>
                        <td>{{ $employee->code }}</td>
                        <td>
                            {{$employee->file }}
                        </td>
                        <td>
                            {{ $employee->agfile }}
                        </td>



                        <td>
                            <a href="{{ route('employee.edit', $employee->id) }}" class="btn btn-light btn-sm" title="Edit">Edit </a>
                            <a href="{{ route('employee.delete', $employee->id) }}" class="btn btn-dark btn-sm" class="btn btn-info" title="Edit">Delete</i> </a>
                        </td>
                </tr>

                    @endforeach
                </tbody>



                <tfoot>
                    <tr>
                        <th rowspan="1" colspan="1">Employee Name</th>
                        <th rowspan="1" colspan="1">E-mail</th>
                        <th rowspan="1" colspan="1">Contact Number</th>
                        <th rowspan="1" colspan="1">Emergency Contact Number</th>
                        <th rowspan="1" colspan="1">Father Name</th>
                        <th rowspan="1" colspan="1">Mother Name</th>
                        <th rowspan="1" colspan="1">Present Address</th>

                        <th rowspan="1" colspan="1">Parmanent Address</th>
                        <th rowspan="1" colspan="1">Gender</th>
                        <th rowspan="1" colspan="1">Maritial Status</th>
                        <th rowspan="1" colspan="1">Date of Birth</th>
                        <th rowspan="1" colspan="1">Employee Photo</th>
                        <th rowspan="1" colspan="1">Outlet ID</th>
                        <th rowspan="1" colspan="1">Employee_id</th>

                        <th rowspan="1" colspan="1">Designation</th>
                        <th rowspan="1" colspan="1">Department</th>
                        <th rowspan="1" colspan="1">Date of Joining</th>
                        <th rowspan="1" colspan="1">Salary</th>
                        <th rowspan="1" colspan="1">Eperience</th>
                        <th rowspan="1" colspan="1">National ID</th>
                        <th rowspan="1" colspan="1">Academic Qualification</th>

                        <th rowspan="1" colspan="1">Professional Qualification</th>
                        <th rowspan="1" colspan="1">Account Holder Name</th>
                        <th rowspan="1" colspan="1">Account Nmuber</th>
                        <th rowspan="1" colspan="1">Bank Name</th>
                        <th rowspan="1" colspan="1">Branch Name</th>
                        <th rowspan="1" colspan="1">Pan Code</th>
                        <th rowspan="1" colspan="1">CV</th>
                        <th rowspan="1" colspan="1">Agreement/Offer Letter</th>
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

      {{--  <div class="col-lg-2"></div>  --}}
    </div>
    {{--  main row end  --}}
</div>
@endsection
