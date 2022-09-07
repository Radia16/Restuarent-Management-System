@extends('admin.main_master')
@section('content')

<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Ingredient View</h3>
        <button class="btn btn-success" style="float:right"><a href="{{route('ingredient.add')}}" class="text-white">
            + ADD Ingredient </a>
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
                        <th>Purchase Price</th>
                        <th>Alert Qty</th>
                        <th>Code</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                     $i=1;
                    @endphp

                    @foreach ($ingredient_view as $ingredient)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$ingredient->outlet_id}}</td>
                        <td>{{$ingredient->purchase_price}}</td>
                        <td>{{$ingredient->alert_qty}}</td>
                        <td>{{$ingredient->code}}</td>
                        <td>{{$ingredient->name}}</td>
                  


                        <td>
                            <a href="{{ route('ingredient.edit', $ingredient->id ) }}" class="btn btn-success">Edit</a>
                            <a href="{{ route('ingredient.destroy', $ingredient->id ) }}" class="btn btn-danger">Delete</a>

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









