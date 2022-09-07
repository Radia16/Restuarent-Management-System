@extends('admin.main_master')

@section('content')
    <div class="box">
        <!-- /.box-header -->
        <div class="row">
            <div class="col-lg-12">
              <div class="box-header with-border">
                <h4 class="box-title">Outlet View</h4>
              </div>
                <div class="box-body">
                    <div class="table-responsive">
                    <table class="table table-striped mb-0">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">outlet_code</th>
                            <th scope="col">outlet_name</th>
                            <th scope="col">address</th>
                            <th scope="col">phone</th>
                            <th scope="col">email</th>
                            <th scope="col">password</th>
                            <th scope="col">collect_vat</th>                           
                            <th scope="col">action</th>

                            </tr>
                        </thead>

                        <tbody>

                            @foreach ($outlet_view as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->outlet_code }}</td>
                                <td>{{ $item->outlet_name }}</td>
                                <td>{{ $item->address }}</td>
                                <td>{{ $item->phone }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->password }}</td>
                                <td>{{ $item->collect_vat }}</td>
                             

                                <td style="display: flex">
                                <a style="width: 55px;height: 38px;margin-right: 10px;" href="{{ route('outlet.edit', $item->id ) }}" class="btn btn-success">Edit</a>



                                    {{-- <a href="{{ route('outlet.delete', $item->id ) }}" class="btn btn-danger" id="#">Delete</a> --}}



                                    <form action="{{route('outlet.delete')}}" method="POST">
                                    @csrf
                                    <input type="hidden" name="p_id" id="p_id" value="{{$item->id}}">
                                    {{-- <button class="btn btn-danger deleteButton" name="archive" type="submit">Delete</button> --}}
                                    <button class="btn btn-danger"  name="archive" type="submit"  onclick="return confirm('Are you sure you want to Delete?');"
                                       id="btnDelete">DELETE</button>

                                     </form>



                                </td>

                            </tr>
                            @endforeach


                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.box-body -->
    </div>
@endsection




  @section('script')
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
  @endsection
