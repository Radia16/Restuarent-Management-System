@extends('admin.main_master')
@section('content')

    <div class="row" >
        <div class="row">
            <div class="col-md-12">
               <div class="panel panel-default">
                   <div class="panel-body">
                    <div class="col-md-4" ><br>
                        <div class="form-group">




                        </div>
                    </div>

                    <form action="{{route('sms.config.update',$smsconfigs->id)}}" method="post" role="form" accept-charset="utf-8" autocomplete="off">
                        @csrf
                       <table width="100%" class="table table-striped table-bordered table-hover">
                           <thead>
                               <tr class="center bg-success">

                                   <th>Status</th>
                                   <th>User Name </th>
                                   <th>Password  </th>
                                   <th>From </th>

                               </tr>
                           </thead>
                           <tbody>

                                   <tr>
                                       <td><input type="text" name="name" class="form-control" value="{{$smsconfigs->name}}"></td>
                                       <td><input type="text" name="username" class="form-control" value="{{$smsconfigs->username}}"></td>
                                       <td><input type="text" name="password" class="form-control" value="{{$smsconfigs->password}}"></td>
                                       <td><input type="text" name="from" class="form-control" value="{{$smsconfigs->from}}"></td>


                                  </tr>

                           </tbody>
                       </table>
                        <div class="form-group text-center">
                               <button type="submit" class="btn btn-success w-md m-b-5" autocomplete="off">Update</button>
                               {{-- <button type="button" onclick="return confirm('Update Korar dhanda bad de,vag saala!')" class="btn btn-success w-md m-b-5" autocomplete="off">Update</button> --}}
                        </div>
                    </form>
               </div>
           </div>
       </div>
       </div>
    </div>
@endsection
