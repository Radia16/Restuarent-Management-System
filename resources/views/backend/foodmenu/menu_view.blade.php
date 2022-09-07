@extends('admin.main_master')
@section('content')

    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Foodmenu View</h3>
            <button class="btn btn-success" style="float:right"><a href="{{ route('menu.add') }}" class="text-white">
                    + ADD Foodmenu </a>
            </button>

        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="table-responsive">
                <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                    <thead>
                        <tr>
                            <th>SN</th>
                            <th>Outlet ID</th>
                            <th>Name</th>
                            <th>Code</th>
                            <th>Category</th>
                            <th>Ingredient Consumption</th>
                            {{-- <th>Sale Price</th> --}}
                            <th>Featured Photo</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>


                        @php

                            $i = 1;

                        @endphp

                        @foreach ($menu_view as $Menu)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $Menu->outlet_id }}</td>
                                <td>{{ $Menu->name }}</td>
                                <td>{{ $Menu->code }}</td>
                                <td>{{ $Menu->category }}</td>
                                <td>{{ $Menu->ingredient_consumptions }}</td>
                                {{-- <td>{{$Menu->sale_price}}</td> --}}
                                <td>
                                    <img src="{{ asset('/upload/foodmenu_image/' . $Menu->featured_photo) }}" alt=""
                                        title="">
                                    {{-- <img src="{{ asset('upload/foodmenu_image/'.$Menu->featured_photo )}}" alt="" title=""> --}}
                                </td>
                                <td>{{ $Menu->description }}</td>

                                <td>
                                    <a href="{{ route('menu.edit', $Menu->id) }}" class="btn btn-success">Edit</a>
                                    <a href="{{ route('menu.delete', $Menu->id) }}" class="btn btn-danger">Delete</a>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
