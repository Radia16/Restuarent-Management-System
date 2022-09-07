@extends('admin.main_master')

@section('content')

    <div class="row form-gap" >
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">View Food</h4>
                    <div id="datatable-buttons_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="dt-buttons btn-group flex-wrap">
                                    <button class="btn btn-secondary buttons-copy buttons-html5" tabindex="0" aria-controls="datatable-buttons" type="button">
                                        <span>Copy</span>
                                    </button>
                                        <button class="btn btn-secondary buttons-excel buttons-html5" tabindex="0" aria-controls="datatable-buttons" type="button">
                                            <span>Excel</span>
                                        </button>
                                        <button class="btn btn-secondary buttons-pdf buttons-html5" tabindex="0" aria-controls="datatable-buttons" type="button">
                                            <span>PDF</span>
                                        </button>
                                        <div class="btn-group">
                                            <button class="btn btn-secondary buttons-collection dropdown-toggle buttons-colvis" tabindex="0" aria-controls="datatable-buttons" type="button"
                                                aria-haspopup="true" aria-expanded="false"><span>Column visibility</span>
                                            </button>
                                        </div>
                                </div>
                            </div>
                                <div class="col-sm-12 col-md-6">
                                    <div id="datatable-buttons_filter" class="dataTables_filter">
                                        <label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="datatable-buttons"></label>
                                        <a href="{{ route('food.add') }}" class="btn btn-success">Add Food</a>

                                    </div>
                                </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">

                                        <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100 dataTable"
                                        role="grid" aria-describedby="example_info">
                                            <thead>

                                                <th>id</th>
                                                <th>Image</th>
                                                <th>outlet_id</th>
                                                <th>food_category_id</th>
                                                <th>kichen</th>
                                                <th>food_name</th>
                                                <th>component</th>
                                                <th>notes</th>
                                                <th>description</th>
                                                <th>start_date</th>
                                                <th>end_date</th>
                                                <th>cooking_time</th>
                                                <th>vat</th>
                                                <th>offer_rate</th>
                                                <th>status</th>
                                                <th>manu_type</th>
                                                <th>action</th>
                                            </thead>
                                            <tbody>
                                            @foreach ($food_view as $item)
                                                <tr role="row" class="odd">
                                                    <td class="sorting_1">{{ $item->id }}</td>
                                                    <td><img style="hight:100px;width:100px" src="{{asset($item->image)}}" alt=""></td>
                                                    <td>{{ $item->outlet_id }}</td>
                                                    <td>{{ $item->food_category_id }}</td>
                                                    <td>{{ $item->kichen }}</td>
                                                    <td>{{ $item->food_name }}</td>
                                                    <td>{{ $item->component }}</td>
                                                    <td>{{ $item->notes }}</td>
                                                    <td>{{ $item->description }}</td>
                                                    <td>{{ $item->start_date }}</td>
                                                    <td>{{ $item->end_date }}</td>
                                                    <td>{{ $item->cooking_time }}</td>
                                                    <td>{{ $item->vat }}</td>
                                                    <td>{{ $item->offer_rate }}</td>
                                                    <td>{{ $item->status }}</td>
                                                    <td>{{ $item->manu_type }}</td>
                                                    <td style="display: flex" >
                                                        <a style="width: 55px;height: 38px;margin-right: 10px; margin-top: 63px;" href="{{ route('food.edit', $item->id ) }}"
                                                        class="btn btn-success">Edit</a>
                                                        <form action="{{route('food.delete')}}" method="POST">
                                                                @csrf
                                                                <input type="hidden" name="p_id" id="p_id" value="{{$item->id}}">
                                                                <button style=" margin-top: 63px;" class="btn btn-danger deleteButton" name="archive" type="submit">Delete</button>
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
            <div class="row">
                <div class="col-sm-12 col-md-5">
                    <div class="dataTables_info" id="datatable-buttons_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
                </div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="datatable-buttons_paginate">
                    <ul class="pagination">
                        <li class="paginate_button page-item previous disabled" id="datatable-buttons_previous">
                        <a href="#" aria-controls="datatable-buttons" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                    </li>
                    <li class="paginate_button page-item active">
                        <a href="#" aria-controls="datatable-buttons" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                    </li>
                    <li class="paginate_button page-item ">
                        <a href="#" aria-controls="datatable-buttons" data-dt-idx="2" tabindex="0" class="page-link">2</a>
                    </li>
                    <li class="paginate_button page-item ">
                        <a href="#" aria-controls="datatable-buttons" data-dt-idx="3" tabindex="0" class="page-link">3</a>
                    </li>
                    <li class="paginate_button page-item ">
                        <a href="#" aria-controls="datatable-buttons" data-dt-idx="4" tabindex="0" class="page-link">4</a>
                    </li>
                    <li class="paginate_button page-item ">
                        <a href="#" aria-controls="datatable-buttons" data-dt-idx="5" tabindex="0" class="page-link">5</a>
                    </li>
                        <li class="paginate_button page-item ">
                            <a href="#" aria-controls="datatable-buttons" data-dt-idx="6" tabindex="0" class="page-link">6</a>
                        </li>
                            <li class="paginate_button page-item next" id="datatable-buttons_next">
                                <a href="#" aria-controls="datatable-buttons" data-dt-idx="7" tabindex="0" class="page-link">Next</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection




