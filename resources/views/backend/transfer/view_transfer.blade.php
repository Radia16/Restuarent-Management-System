@extends('admin.main_master')

@section('content')

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">View Transfer List</h3>
                    <a style="margin-left: 1411px;" href="{{route('transfer.add')}}"class="btn btn-success">Add Stock</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">

                    <div class="table-responsive">
                        <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                            <thead>
                                <tr>
                                    <th>SN</th>
                    <th>Reference Number</th>
                    <th>Date</th>
                    <th>To Outlet</th>
                    <th>Status</th>
                    <th>Receive Date</th>
                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $sn=1
                            @endphp
                            @foreach ($transfer_view as $item)
                            <tr>
                                <td>{{ $sn++ }}</td>
                                <td>{{ $item->reference_no}}</td>
                                <td>{{ date('F j, Y,', strtotime($item->date))}}</td>

                                <td>{{ $item->to_outlet}}</td>
                                <td>{{ $item->status}}</td>
                                <td>{{date('F j, Y,', strtotime($item->date)) }}</td>
                                <td>
                                    <a style="width: 75px;height: 43px;margin-right: 10px;" href="{{ route('transfer.edit', $item->id ) }}" class="btn btn-success">Edit</a>

                                    <a style="font-size: 26px;" href="{{ route('transfer.show', $item->id) }}" title="show">
                                        <i class="fas fa-eye text-success  fa-lg"></i>
                                    </a><br><br>
                                    <form action="{{route('transfer.delete', $item->id)}}" method="POST">
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
                <!-- /.box-body -->
            </div>
        </div>
    </section>


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



