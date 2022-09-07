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

                       <table width="100%" class="table table-striped table-bordered table-hover">
                           <thead>
                               <tr class="center bg-success">

                                   <th>Status</th>
                                   <th>User Name </th>
                                   <th>Password  </th>
                                   <th>From </th>
                                   <th>Action </th>
                               </tr>
                           </thead>
                           <tbody>
                            @foreach ($smsconfigs as $smsconfig)
                                   <tr>
                                       <td><input type="text" name="name" class="form-control" value="{{$smsconfig->name}}"></td>
                                       <td><input type="text" name="usernsme" class="form-control" value="{{$smsconfig->username}}"></td>
                                       <td><input type="text" name="password" class="form-control" value="{{$smsconfig->password}}"></td>
                                       <td><input type="text" name="from" class="form-control" value="{{$smsconfig->from}}"></td>
                                       <td>
                                           @if ($smsconfig->active == 0 )
                                           <a href="{{ route('sms.config.active',$smsconfig->id) }}" class="btn btn-primary">Active</a>
                                           @endif

                                           <a href="{{ route('sms.config.edit',$smsconfig->id) }}" class="btn btn-primary">Edit</a>
                                       </td>
                                  </tr>
                                  @endforeach
                           </tbody>
                       </table>
                        <div class="form-group text-right">
                               {{-- <button type="submit" class="btn btn-success w-md m-b-5" autocomplete="off">Update</button> --}}
                               {{-- <button type="button" onclick="return confirm('Update Korar dhanda bad de,vag saala!')" class="btn btn-success w-md m-b-5" autocomplete="off">Update</button> --}}
                        </div>

               </div>
           </div>
       </div>
       </div>
    </div>
@endsection
