
@extends('admin.main_master')


@section('content')
<div class="row">
  <div class="col-lg-2"></div>    
  <div class="col-lg-8">
  
        <div class="col-lg-3">
          <h3>Food Menu Update</h3>
        </div>

        <section class="purches">
          <div class="card-body">
                <form action="{{route('menu.update')}}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{$menu_edit->id}}">
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Outlet ID</label>
                       <div class="col-sm-10">
                          <input class="form-control" type="integer" value="{{$menu_edit->outlet_id}}" name="outlet_id" id="">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="example-search-input" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                          <input class="form-control" type="text" value="{{$menu_edit->name}}" name="name" id="">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="example-search-input" class="col-sm-2 col-form-label">Category</label>
                        <div class="col-sm-10">
                          <input class="form-control" type="text" value="{{$menu_edit->category}}" name="category" id="">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="example-search-input" class="col-sm-2 col-form-label">Code</label>
                        <div class="col-sm-10">
                          <input class="form-control" type="text" value="{{$menu_edit->code}}" name="code" id="">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="example-email-input" class="col-sm-2 col-form-label">Ingredient Consumption</label>
                        <div class="col-sm-10">
                          <input class="form-control" type="text" value="{{$menu_edit->ingredient_consumptions}}" name="ingredient_consumptions" id="">
                        </div>
                      </div>

                      {{-- <div class="form-group row">
                        <label for="example-email-input" class="col-sm-2 col-form-label">Sale Price</label>
                        <div class="col-sm-10">
                          <input class="form-control" type="text" value="{{$foodmenu_edit->sale_price}}" name="sale_price" id="">
                        </div>
                      </div> --}}

                      <div class="form-group row">
                        <label for="example-datetime-local-input" class="col-sm-2 col-form-label">Image</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="file" value="{{$menu_edit->image}}" name="image" id="">
                        </div>
                      </div>
                      
                      <div class="form-group row">
                        <label for="example-email-input" class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-10">
                          <input class="form-control" type="text" value="{{$menu_edit->description}}" name="description" id="">
                        </div>
                      </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                     </form>
                     </div>
                    </section>
                    </div>
                  </div>
              <div class="col-lg-3"> </div>
           
     
   

@endsection




