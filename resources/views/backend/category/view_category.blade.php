@extends('admin.main_master')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="box" >
            <div class="box-header with-border">
            <h3 class="box-title">Hover Export Data Table</h3>
            <h6 class="box-subtitle">Export data to Copy, CSV, Excel, PDF &amp; Print</h6>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="table-responsive">
                <div id="example_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4"><div class="dt-buttons btn-group">          <button class="btn btn-secondary buttons-copy buttons-html5" tabindex="0" aria-controls="example"><span>Copy</span></button> <button class="btn btn-secondary buttons-csv buttons-html5" tabindex="0" aria-controls="example"><span>CSV</span></button> <button class="btn btn-secondary buttons-excel buttons-html5" tabindex="0" aria-controls="example"><span>Excel</span></button> <button class="btn btn-secondary buttons-pdf buttons-html5" tabindex="0" aria-controls="example"><span>PDF</span></button> <button class="btn btn-secondary buttons-print" tabindex="0" aria-controls="example"><span>Print</span></button> </div><div id="example_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example"></label></div><table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100 dataTable" role="grid" aria-describedby="example_info">
                    <thead>
                        <th>id</th>
                        <th>category_image</th>
                        <th>outlet_id</th>
                        <th>category_name</th>
                        <th>parent_name</th>
                        <th>start_date</th>
                        <th>end_date</th>
                        <th>status</th>
                        <th>action</th>
                    </thead>
                    <tbody>
                            @foreach ($category_view as $item)
                                <tr role="row" class="odd">
                                <td class="sorting_1">{{ $item->id }}</td>
                                <td><img style="hight:100px;width:100px"
                                    src="{{asset($item->category_image)}}" alt="">
                                </td>
                                <td>{{ $item->outlet_id }}</td>
                                <td>{{ $item->category_name }}</td>
                                <td>{{ $item->parent_name }}</td>
                                <td>{{ $item->start_date }}</td>
                                <td>{{ $item->end_date }}</td>
                                <td>{{ $item->status }}</td>
                                <td style="display: flex" >
                                    <a style="width: 55px;height: 38px;margin-right: 10px; margin-top: 63px;" href="{{ route('category.edit', $item->id ) }}" class="btn btn-success">Edit</a>
                                    <form action="{{route('category.delete')}}" method="POST">
                                        @csrf
                                        <input type="hidden" name="p_id" id="p_id" value="{{$item->id}}">
                                        <button style=" margin-top: 63px;" class="btn btn-danger deleteButton" name="archive" type="submit">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach

                    </tbody>

                </table>
                <div class="dataTables_info" id="example_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div><div class="dataTables_paginate paging_simple_numbers" id="example_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="example_previous"><a href="#" aria-controls="example" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="example" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="example_next"><a href="#" aria-controls="example" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
    </div>
</div>
@endsection
