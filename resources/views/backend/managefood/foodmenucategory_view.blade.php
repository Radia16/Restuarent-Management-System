@extends('admin.main_master')
@section('content')
    

<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Foodmenu Category View</h3>
        <button class="btn btn-success" style="float:right"><a href="{{route('foodmenucategory.add')}}" class="text-white">
            + ADD Foodmenu Categories </a>
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
                        <th>Category Name</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    @php
                    $i=1;
                        
                    @endphp
                    @foreach ($foodmenu_view as $FoodMenuCategory)
                    <tr>
                        <td>{{ $i++ }}</td>
                       
                        <td>{{ $FoodMenuCategory->outlet_id }}</td>
                       <td>
                          {{ optional($FoodMenuCategory->foodMenu)->category}}
                        </td> 
                        <td>{{ $FoodMenuCategory->description }}</td>

                    <td>
                        <a href="{{ route('foodmenucategory.edit', $FoodMenuCategory->id ) }}" class="btn btn-success">Edit</a>
                        <a href="{{ route('foodmenucategory.delete', $FoodMenuCategory->id ) }}" class="btn btn-danger">Delete</a>
                    </td>

                </tr>
                   
                   

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
















