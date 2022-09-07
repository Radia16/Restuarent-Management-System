@extends('admin.main_master')

@section('content')



    <div class="row" >
        <div class="col-lg-12">
            <div class="box">
                <div class="box-header with-border">
                <h3 class="box-title">Employee Attendance </h3>
                {{-- <input  id="currentTime"> --}}
                <div style="text-align:center">
                    <a href="https://logwork.com" class="digital-clock "   data-size="400" data-timezone="Asia/Dhaka" data-language="en">Time in Bangladesh</a>
                </div>
                {{-- <a href="https://logwork.com/current-time-in-singapore-singapore" class="clock-widget-text" data-style="round" data-size="200" style="height: 50px" data-timezone="Asia/Dhaka" data-language="en">Bangladesh</a> --}}
                </div>
                <div style="text-align: right">
                    <a  data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-success">Add Check In</a>
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
                                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 0px;"
                                    aria-label="Action: activate to sort column ascending">Action</th>
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
                                        <td style="display:flex">
                                            @if ($attendance->check_out==NULL)
                                            <a style="margin: 0px 6px" href="{{ route('attendance.checkout',$attendance->id) }}"   class="btn btn-success">Check Out   </a>
                                        @endif
                                        <button style="margin: 0px 6px" type="button" data-attendance_id="{{$attendance->id}}" class="btn btn-success edit_attendance">Edit
                                        </button>
                                        <form action="{{route('attendance.delete')}}" method="POST">
                                            @csrf
                                            <input type="hidden" name="a_id" id="a_id" value="{{$attendance->id}}">
                                            <button class="btn btn-danger deleteButton" name="archive" type="submit">Delete</button>
                                        </form>
                                            {{-- <a class="btn btn-danger deleteButton" name="archive" type="submit">Delete</a> --}}
                                    </td>
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












    {{-- attendance checking add modal  --}}
    <div class="row">
        {{-- add modal --}}
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Employee Check in </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('attendance.add') }}" method="POST" enctype='multipart/form-data' >
                            <div class="modal-body">

                                    @csrf
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Employee Name:</label>
                                        <select name="employee_id" class="form-control"  >
                                            <option value="" selected="" disabled="">Select Employee Name </option>
                                             @foreach($employees as $emp)
                                            <option value="{{$emp->employee_id}}"> {{ $emp->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Check In</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    {{-- attendance checking add modal  --}}
    <div class="row">
        {{-- add modal --}}
        <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Employee</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form method="POST" id="updateAttendance_form" enctype='multipart/form-data' >
                        <input type="hidden" id="employee_id" name="employee_id">
                        <input type="hidden"  id="attendance_id" name="attendance_id">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="employee_name">Employee Name</label>
                                <input type="text" disabled class="form-control" id="employee_name" name="employee_name">
                            </div>
                            <div class="form-group">
                                <label for="date">Date</label>
                                <input disabled type="text" id="date" class="form-control" name="date">
                            </div>
                            <div class="form-group">
                                <label for="check_in">Check In</label>
                                <input type="time"  class="form-control" id="check_in" name="check_in">
                            </div>
                            <div class="form-group">
                                <label for="check_out">Check Out</label>
                                <input type="time" class="form-control" id="check_out" name="check_out">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" id="update_attendance" class="btn btn-primary ">Update Attendance</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

@endsection



@section('script')
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://cdn.logwork.com/widget/digital.js"></script>
<script src="https://cdn.logwork.com/widget/text.js"></script>

<script>
    $('.deleteButton').on('click',function(e)
    {
      event.preventDefault(); // prevent form submit
      var form = event.target.form; // storing the form
      swal({
      title: "Are you sure?",
      text: "Once deleted, you will not be able to recover this imaginary file!",
      icon: "warning",
      buttons: true,
      dangerMode: true,
      })
      .then((willDelete) => {
      if (willDelete) {
          swal("Poof! Your imaginary file has been deleted!", {
          icon: "success",
          });
          form.submit();
      } else {
          swal("Your imaginary file is safe!");
      }
      });
    });


</script>



<script>
  //edit attendance
    let edit_attendances  =  document.querySelectorAll('.edit_attendance');
    console.log(edit_attendances);
    edit_attendances.forEach(edit_attendance=>{
        edit_attendance.addEventListener('click',function(event){
            let attendance_id = this.dataset.attendance_id;
            $("#editModal").modal('show');
            getEditAttendanceData(attendance_id);
        })
    })

    //update global variable
    const UPDATE_ATTENDANCE_FORM = document.querySelector('#updateAttendance_form');
    const EMPLOYEE_NAME = document.querySelector('#employee_name');
    const EMPLOYEE_ID   = document.querySelector('#employee_id');
    const ATTENDANCE_ID = document.querySelector('#attendance_id');
    const DATE          = document.querySelector('#date');
    const CHECK_IN      = document.querySelector('#check_in');
    const CHECK_OUT     = document.querySelector('#check_out');


    // CHECK_IN.addEventListener('change',function(){
    //      console.log(CHECK_IN.value)
    //     console.log("this is running")
    // })
    UPDATE_ATTENDANCE_FORM.addEventListener('submit',function(event){
        event.preventDefault();
        updateAttendance();

    });

    function updateAttendance(){
        const formData  = new FormData();
        formData.append('employee_id',EMPLOYEE_ID.value)
        formData.append('employee_name', EMPLOYEE_NAME.value)
        formData.append('id', ATTENDANCE_ID.value)
        formData.append('day', DATE.value)
        formData.append('check_in',CHECK_IN.value)

        formData.append('check_out',CHECK_OUT.value)
        axios.post(`/attendance/update-attendance/${ATTENDANCE_ID.value}`,formData)
            .then(response=>{
                console.log(response);
                toastr.options =
                {
                    "closeButton" : true,
                    "progressBar" : true
                }
				toastr.success(response.data.success);
                $("#editModal").modal('hide');
            }).catch(error=>{
                console.log(error.response);
               if(error.response.status === 404){

               }
            })


    }


    async function getEditAttendanceData(id){
        let {data:{attendanceEditData}}  = await axios.get(`/attendance/edit-attendance/${id}`);
        EMPLOYEE_NAME.value = attendanceEditData.employee_name;
        EMPLOYEE_ID.value   = attendanceEditData.employee_id;
        ATTENDANCE_ID.value = attendanceEditData.id;
        DATE.value          = attendanceEditData.day;
        CHECK_IN.value      = attendanceEditData.check_in;
        CHECK_OUT.value     = attendanceEditData.check_out;
        // return attendanceEditData;
    }

</script>

{{-- current time show script --}}

<<script>
    var today = new Date();
    var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
      document.getElementById("currentTime").value = time;
    </script>



@endsection
