
@extends('admin.main_master')
@section('content')

<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Ingredient Units</h3>
 
        
        <a href="{{route('ingredientunit.add')}}" type="button" class="btn btn-success text-white" style="float:right">
            + Add Units </a>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <div class="table-responsive">
            <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                <thead>
                    <tr>
                        <th>SN</th>
                        <th>Outlet ID</th>
                        <th>Unit Name</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    @php
                    $i=1;   
                    @endphp
                    
                    @foreach ($ingredientunit_view as $Ingredientunit)


                    <tr>
                    <td>{{$i++ }}</td>
                    <td>{{$Ingredientunit->outlet_id}}</td>
                    <td>{{$Ingredientunit->unit_name}}</td>
                    <td>{{$Ingredientunit->description}}</td>

                    <td>
                        <a href="{{ route('ingredientunit.edit', $Ingredientunit->id ) }}" class="btn btn-success">Edit</a>
                        <a href="{{ route('ingredientunit.delete', $Ingredientunit->id ) }}" class="btn btn-danger">Delete</a>

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



