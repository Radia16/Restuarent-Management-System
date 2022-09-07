@extends('admin.main_master')

@section('content')
<div class="row">
    <div class="col-lg-3"></div>
        <div class="col-lg-6">
        <section class="purches">
        <div class="card-header">
            <h2>Ingredient Units Update</h2>
        </div>
    <div class="card-body">
                <form action="{{route('ingredientunit.update')}}" method="POST">
                    @csrf
                  <input type="hidden" name="id" value="{{$ingredientunit_edit->id}}"> 
                    <div class="form-group row">
                       <label for="example-text-input" class="col-sm-2 col-form-label">Outlet ID</label> 
                        <div class="col-sm-10">
                        <input class="form-control" type="integer" value="{{$ingredientunit_edit->outlet_id}}" name="outlet_id" id="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-search-input" class="col-sm-2 col-form-label">Unit Name</label>
                        <div class="col-sm-10">
                        <input class="form-control" type="text" value="{{$ingredientunit_edit->unit_name}}" name="unit_name" id="">
                        </div>
                    </div>
                   
                    <div class="form-group row">
                        <label for="example-email-input" class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-10">
                          <textarea rows="5" class="form-control" placeholder="Description" name="description">{{$ingredientunit_edit->description}}</textarea>
                        </div>
                      </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

                <div class="col-lg-3"></div>
    </div>
        </section>         
    
    </div>
</div>

@endsection




