@extends('admin.main_master')
@section('content')


<div class="row">
  <div class="col-2"></div>
  <div class="col-8">
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Add Ingredient Category</h3>
        </div>
        <!-- /.box-header -->

        <div class="box-body">
          
              <form action="{{route('ingredient.category.store')}}" method="POST">
                @csrf
                <div class="form-group row">
                  <label for="example-search-input" class="col-sm-2 col-form-label">Outlet ID</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="integer" name="outlet_id" id="">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="example-email-input" class="col-sm-2 col-form-label">Category Name</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="text" value="" name="category_name" id="">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="example-email-input" class="col-sm-2 col-form-label">Description</label>
                  <div class="col-sm-10">
                    <div class="form-group">
                      <textarea rows="5" class="form-control" placeholder="Description" name="description"></textarea>
                    </div>
                   
                  </div>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
           
        </div>
        <!-- /.box-body -->
      </div>
    </div>
    <!-- /.col -->
  </div>
  <div class="col-2"></div>
  <!-- /.row -->
@endsection
