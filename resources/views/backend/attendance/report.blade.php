@extends('admin.main_master')
@section('content')

<div class="row">
    {{-- add modal --}}
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Report By Id</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('attendance.id') }}" method="POST" enctype='multipart/form-data' >
                        <div class="modal-body">

                                @csrf
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Id:</label>
                                    <input class="form-control" type="text" name="employee_id">
                                    {{-- <label for="recipient-name" class="col-form-label">Form:</label>
                                    <input class="form-control" type="date" name="form">
                                    <label for="recipient-name" class="col-form-label">To:</label>
                                    <input class="form-control" type="date" name="to"> --}}
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Search</button>
                        </div>
                </form>
            </div>
        </div>
    </div>




    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Report</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form  method="POST"  action="{{ route('attendance.day') }}" enctype='multipart/form-data' >
                        <div class="modal-body">

                                @csrf
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Select Date</label>
                                    <input type="date" name="date" class="form-control">
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Search</button>
                        </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Attendance Report</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form  method="POST" action="{{ route('attendance.month') }}" enctype='multipart/form-data' >
                        <div class="modal-body">

                                @csrf
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Attendance Search</label>
                                    <select  name="month" class="form-control"  >
                                        <option value="" selected="" disabled="">Select Month </option>
                                        <option value="1" >January</option>
                                        <option value="2" >February</option>
                                        <option value="3" >March</option>
                                        <option value="4" >April </option>
                                        <option value="5" >May </option>
                                        <option value="6" >June </option>
                                        <option value="7" >July</option>
                                        <option value="8" >Aguest </option>
                                        <option value="9" >September </option>
                                        <option value="10" >October </option>
                                        <option value="11" >November</option>
                                        <option value="12" >December</option>

                                    </select>
                                    <label for="recipient-name" class="col-form-label">Year</label>
                                   <input type="text" name="year" class="form-control" placeholder="Select Year">


                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Search</button>
                        </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Attendace Report</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form  method="POST" action="{{ route('attendance.year') }}" enctype='multipart/form-data' >
                        <div class="modal-body">

                                @csrf
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Input Year</label>
                                    <input type="text" name="year" class="form-control">
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Search</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>



    <div class="row" >
        <div class="col-lg-12">
            <div class="box">
                <div class="box-header with-border">
                <h3 class="box-title"> Attendance Report </h3>
                </div>
                <div style="text-align: right">
                  <a style="font-size: larger"> Search : </a>
                    <a  data-bs-toggle="modal" data-bs-target="#exampleModal1" class="btn btn-success">Id</a>
                    <a  data-bs-toggle="modal" data-bs-target="#exampleModal2" class="btn btn-success">Day</a>
                    <a  data-bs-toggle="modal" data-bs-target="#exampleModal3" class="btn btn-success">Month</a>
                    <a  data-bs-toggle="modal" data-bs-target="#exampleModal4" class="btn btn-success">Year</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="table-responsive">
                    <div id="example_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                        <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100 dataTable" role="grid" aria-describedby="example_info">
                            <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 0px;" aria-sort="ascending"
                                    aria-label="Name: activate to sort column descending">Serial</th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 0px;"
                                    aria-label="Address: activate to sort column ascending">Employee Name</th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 0px;"
                                    aria-label="Contact_Person: activate to sort column ascending">Employee Id</th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 0px;"
                                    aria-label="Phone: activate to sort column ascending">Date</th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 0px;"
                                    aria-label="Address: activate to sort column ascending">Check IN</th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 0px;"
                                    aria-label="Address: activate to sort column ascending">Check Out</th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 0px;"
                                    aria-label="Address: activate to sort column ascending">Stay</th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 0px;"
                                    aria-label="Address: activate to sort column ascending">Status</th>

                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $serial="1";
                                @endphp
                            @foreach ($attendaces as $attendance)
                                    <tr role="row" class="odd">
                                        <td>{{$serial++}}</td>
                                        <td>{{$attendance->employee_name}}</td>
                                        <td>{{$attendance->employee_id}}</td>
                                        <td>{{$attendance->day}}</td>
                                        <td>{{$attendance->covertToTime($attendance->check_in)}}</td>
                                        <td>{{$attendance->covertToTime($attendance->check_out)}}</td>
                                        <td>{{$attendance->getDiffernceOfState($attendance->check_in,$attendance->check_out)}}</td>
                                        @if ($attendance->check_out==NULL)
                                          <td>{{"Check in Now"}}</td>
                                        @else
                                        <td>{{"Check Out Now"}}</td>
                                        @endif

                                    </tr>
                                    @endforeach
                            </tbody>
                        </table>
                    </div>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>
@endsection
