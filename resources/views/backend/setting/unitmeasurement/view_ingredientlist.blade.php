@extends('admin.main_master')

@section('content')



    <!--Start Add Modal -->
    <div class="modal fade" id="ingredientlistmodal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Add Ingredient</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">


                    <form action="{{ route('ingredient-list.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="card-body">
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="example-search-input"> Ingredient Name </label>
                                </div>
                                <div class="col-md-9">
                                    <select class="form-select col-sm-8" type="text" name="ingredient_id">
                                        <option disabled selected>Select One</option>
                                        @foreach ($ingredient  as $name)
                                            <option value="{{ $name->id }}"> {{ $name->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="example-search-input">  Unit Name</label>
                                </div>
                                <div class="col-md-9">
                                    <select class="form-select col-sm-8" type="text" name="ingredient_unit_id">
                                        <option disabled selected>Select One</option>
                                        @foreach ($unit_name as $name)
                                            <option value="{{ $name->id }}"> {{ $name->unit_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="example-search-input">Stock Limit </label>
                                </div>
                                <div class="col-md-9">
                                    <input class="form-control" type="number" name="stock_limit"
                                    placeholder="Enter Stock Limit" required="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="example-search-input">Status</label>
                                </div>
                                <div class="col-md-9">
                                    <select class="form-select col-sm-8" type="text" name="status" data-placeholder="Choose a Category" tabindex="1">
                                        <option disabled selected>Select One</option>
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>
                            </div>
                            <div class="box-footer">
                                <button type="submit" class="btn btn-success pull-right">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
                 {{-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> --}}
            </div>
        </div>
    </div>


    <!--End Add Modal -->

<!---------------------- Start Edit Modal ---------------------------->


  
  <!-- Modal -->
  <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Update Ingredientlist</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">


            
       
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>


<!---------------------- End Edit Modal ------------------------------>















    <!-------------- Start add ingredient view ----------------->




    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Ingredient List</h3>
            <a href="" style="float: right" class="btn btn-success text-white" data-bs-toggle="modal"
                data-bs-target="#ingredientlistmodal">
                + ADD Ingredient </a>

        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="table-responsive">
                <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                    <thead>
                        <tr>
                            <th>SN</th>
                            <th>Ingredient Name</th>
                            <th>Unit Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @php
                            $i = 1;
                            
                        @endphp
                       @foreach ($ingredientlist_view as $ingredientlist)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $ingredientlist->ingredient->name}}</td>
                                <td>{{ $ingredientlist->units->unit_name}}</td>
                               
                               
                                <td>
                                    <a href="{{ route('ingredient-list.edit', $ingredientlist->id) }}" type="button" class="btn btn-primary editbtn btn">Edit</a>
                                    {{-- <a href="{{ route('ingredientlist_edit', $ingredientlist_edit->id) }}"class="btn btn-success">Edit</a> --}}
                                    {{-- <a href="{{ route('foodmenucategory.delete', $FoodMenuCategory->id) }}" class="btn btn-danger">Delete</a> --}}  
                                </td>

                            </tr>



                        @endforeach  
                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection





