@extends('admin.main_master')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="box">

                <div class="box-header">

                        <h3 >
                            WEEKLY HOLIDAY
                        </h3>


                </div>




            {{--  // for viewing weekend  --}}
                <div class="box-body">
                    <div class="table-responsive">
                    <div id="example_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                        <table id="holiday_table" class="table table-bordered table-hover display nowrap margin-top-10 w-p100 dataTable" role="grid" aria-describedby="example_info">
                            <thead>
                                <tr role="row">
                                    <th>Weekend Days</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody >
                                @foreach ($days as $day)

                                    <td>{{ $day->weekends }}</td>
                                    <td>
                                        <a href="{{ url('/weekend/edit' ,$day->id ) }}" class="btn btn-success btn-sm" title="edit">Edit</a>
                                    </td>

                                @endforeach

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Weekend Days</th>
                                    <th>Action</th>

                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    </div>
                </div>

        </div>
    </div>
</div>



@endsection
