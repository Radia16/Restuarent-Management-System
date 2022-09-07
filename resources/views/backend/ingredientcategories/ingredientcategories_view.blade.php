@extends('admin.main_master')
@section('content')
    

<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Ingredient Categories View</h3>
        <button class="btn btn-success" style="float:right">
            <a href="{{route('ingredient.category.add')}}" class="text-white">
            + ADD Categories </a>
        </button>
    </div>
    <!-- /.box-header -->



    {{-- @if(Session::has('success'))
    <div class="col-lg-4 col-12">
        <div class="box">
          <div class="box-body">
            <h4 class="box-title">{{Session::get('success')}}  </h4>
             <p class="m-0">(Click on image)</p> 
            <img src="../images/alert/alert3.png" alt="alert" class="model_img img-fluid" id="sa-success">              
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      @endif --}}


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

                    @foreach ($ingredientcategory_view as $IngredientCategory)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $IngredientCategory->outlet_id }}</td>
                            <td>{{ $IngredientCategory->category_name}}</td>
                            <td>{{ $IngredientCategory->description }}</td>
                            <td>
                                <a href="{{ route('ingredient.category.edit', $IngredientCategory->id ) }}" class="btn btn-success">Edit</a>
                                <a href="{{ route('ingredient.category.delete', $IngredientCategory->id ) }}" class="btn btn-danger">Delete</a>
                            </td>

                    </tr>
                    @endforeach
                </tbody>				  
              
            </table>
        </div>              
    </div>
    <!-- /.box-body -->
</div>

@endsection












