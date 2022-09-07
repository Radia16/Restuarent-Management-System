@extends('admin.main_master')
@section('content')


<div class="row">
  <div class="col-lg-2"></div>
  <div class="col-lg-8">
    <div class="box"  >
        <div class="box-header with-border">
            <h3 class="box-title">Add Food Menu Category</h3>
        </div>
        <!-- /.box-header -->

        <div class="box-body">
       
            

              <form action="{{route('foodmenucategory.store')}}" method="POST">

                    @csrf
{{-- 
                <div class="form-group row">
                  <label for="example-text-input" class="col-sm-2 col-form-label">I</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="text" value="" name="id" id="">
                  </div>
                </div>  --}}
                
                <div class="form-group row">
                  <label for="example-search-input" class="col-sm-2 col-form-label">Outlet ID</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="text" name="outlet_id" id="">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="example-email-input" class="col-sm-2 col-form-label">Category Name</label>
                  <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" name="food_menu_id">
                      <option selected disable>Select Menu</option>
                      @foreach ($foodMenus as $foodMenu)
                        <option value="{{$foodMenu->id}}">{{$foodMenu->name}}</option>
                      @endforeach
                      
                    </select>
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

        </div>
        <!-- /.box-body -->

        </div>
            <!-- /.col -->
          <div class="col-lg-2"></div>
          
      </div>
      <!-- /.row --> 

@endsection
