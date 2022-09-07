@extends('admin.main_master')

@section('content')



<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Availablity</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{ route('foodavailablity.store')}}"  method="POST" enctype='multipart/form-data'>
          @csrf
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Outlet ID:</label>
            {{-- <input type="text" class="form-control" id="recipient-name"> --}}
            <select class="form-select" type="text" name="outlet_id"  id="recipient-name">
                @foreach($outlets as $item)
                    <option value="{{ $item->id }}"> {{ $item->outlet_name }}</option>
                @endforeach
          </select>

          </div>

          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Food Name:</label>
            {{-- <input type="text" class="form-control" id="recipient-name"> --}}
            <select class="form-select" type="text" name="food_id"  id="recipient-name">
            @foreach($foods as $item)
            <option value="{{ $item->id }}"> {{ $item->food_name }}</option>
            @endforeach
          </select>

          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Available Day:</label>
            <select class="form-select" type="text" name="available_day"  id="available_day">
                <option value="Friday">Friday</option>
                <option value="Saturday">Saturday</option>
                <option value="Sunday">Sunday</option>
                <option value="Monday">Monday</option>
                <option value="Tuesday">Tuesday</option>
                <option value="Wednesday">Wednesday</option>
                <option value="Thursday">Thursday</option>

            </select>
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">From Time:</label>
            <input type="time" name="frome_time" class="form-control" id="recipient-name">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">End Time:</label>
            <input type="time" name="end_time" class="form-control" id="recipient-name">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Status:</label>
            <select class="form-select" type="text" name="status"  id="recipient-name">
                <option value="active">active</option>
                <option value="deactive">deactive</option>

            </select>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Add Food</button>
          </div>

        </form>
      </div>

    </div>
  </div>
</div>


{{-- ///////////////////////////////////////////////////// view page  /////////////////////////////////// --}}



<div class="box">
 <div class="box-header with-border">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Add Availablity Food </button>

    </div>
            <!-- /.box-header -->
                <div class="box-body">
                   <div class="table-responsive">
                <div id="example_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4"><div class="dt-buttons btn-group">  <button class="btn btn-secondary buttons-copy buttons-html5" tabindex="0" aria-controls="example"><span>Copy</span></button> <button class="btn btn-secondary buttons-csv buttons-html5" tabindex="0" aria-controls="example"><span>CSV</span></button> <button class="btn btn-secondary buttons-excel buttons-html5" tabindex="0" aria-controls="example"><span>Excel</span></button> <button class="btn btn-secondary buttons-pdf buttons-html5" tabindex="0" aria-controls="example"><span>PDF</span></button> <button class="btn btn-secondary buttons-print" tabindex="0" aria-controls="example"><span>Print</span></button> </div><div id="example_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example"></label></div><table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100 dataTable" role="grid" aria-describedby="example_info">
                <thead>
                    <th>ID</th>
                    <th>Outlet ID</th>
                    <th>food_name</th>
                    <th>Avalable Day</th>
                    <th>Frome Time</th>
                    <th>End Time </th>
                    <th>Status </th>
                    <th>action</th>
                </thead>
                <tbody>

                @foreach($availablefood_view as $availableitem)
                    <tr role="row" class="odd">
                    <td class="sorting_1">{{ $availableitem->id }}</td>
                    <td>{{ $availableitem->outlets->outlet_name }}</td>
                    <td>{{ $availableitem->foods->food_name }}</td>
                    <td>{{ $availableitem->available_day }}</td>
                    <td>{{ $availableitem->frome_time }}</td>
                    <td>{{ $availableitem->end_time }}</td>
                    <td>{{ $availableitem->status }}</td>
                    <td>
                        <a style=" width:78px;" href="{{ route('food.edit', $item->id ) }}"class="btn btn-success">Edit</a><br><br>
                        <form action="{{route('foodavailablity.delete',$availableitem->id)}}" method="POST">
                            @csrf
                            <input type="hidden" name="p_id" id="p_id" value="{{$availableitem->id}}">
                            <button class="btn btn-danger deleteButton" name="archive" type="submit">Delete</button>
                        </form>
                    </td>

                    </tr>
                @endforeach
                </tbody>

            </table><div class="dataTables_info" id="example_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div><div class="dataTables_paginate paging_simple_numbers" id="example_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="example_previous"><a href="#" aria-controls="example" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="example" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="example_next"><a href="#" aria-controls="example" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div>
            </div>
            </div>
            <!-- /.box-body -->

</div>


{{-- ///////////////////////////////////////////////////////////////// --}}

{{-- <!-- Modal for add Edit Diagnosis -->
<div class="modal fade bd-example-modal-lg" id="EditDiagnosis" tabindex="-1"
aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Diagnosis</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"
                aria-label="Close"></button>
        </div>
        <form action="{{ route('foodavailablity.update') }}" method="POST"
            enctype="multipart/form-data">
            @csrf

            <div class="modal-body">
                <input type="hidden" id="diagnosis_id" name="diagnosis_id">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Outlet ID</label>
                            <select name="patient_id" class="form-control" required=""
                                id="patient_id">
                                <option value="" selected="" disabled="">Select Patient Name
                                </option>
                                @foreach ($outlets as $ouletitem)
                                    <option value="{{ $ouletitem->id }}">{{ $ouletitem->outlet_name }}

                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Food Name</label>
                            <select  id="doctor_id" class="form-control"
                                required="">
                                <option value="" selected="" disabled="">Select Doctor Name
                                </option>
                                @foreach ($foods as $item)
                                    <option value="{{ $item->id }}">{{ $item->food_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Available Day:</label>
                        <select class="form-select" type="text" name="available_day" value="{{$foodavailable_id->available_day}}"  id="available_day">
                            <option value="Friday">Friday</option>
                            <option value="Saturday">Saturday</option>
                            <option value="Sunday">Sunday</option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>

                        </select>
                      </div>

                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">From Time:</label>
                        <input type="time" name="frome_time" value="{{$foodavailable_id->frome_time}}" class="form-control" id="recipient-name">
                      </div>
                      <div class="mb-3">
                        <label for="message-text" class="col-form-label">End Time:</label>
                        <input type="time" name="end_time" value="{{$foodavailable_id->end_time}}" class="form-control" id="recipient-name">
                      </div>
                      <div class="mb-3">
                        <label for="message-text" class="col-form-label">Status:</label>
                        <select class="form-select" type="text" name="status" value="{{$foodavailable_id->status}}"  id="recipient-name">
                            <option value="active">active</option>
                            <option value="deactive">deactive</option>

                        </select>
                      </div>

                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary"
                    data-bs-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-rounded btn-info" value="Update Diagnosis">
            </div>
        </form>
    </div>
</div>
</div> --}}

@endsection







