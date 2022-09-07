@extends('admin.main_master')

@section('content')
<div class="row">
    <div class="col-lg-2"></div>
    <div class="col-lg-8">
 
            <div class="card-header">
               <h2>Ingredient update</h2>
            </div>
            <section class="purches">
            <div class="card-body">

                <form action="{{route('ingredient.update')}}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{$ingredient_edit->id}}">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Outlet ID</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" value="{{$ingredient_edit->outlet_id}}" name="outlet_id" id="">
                        </div>
                        </div>        
                        <div class="form-group row">
                            <label for="example-search-input" class="col-sm-2 col-form-label">Purchase Price</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" value="{{$ingredient_edit->purchase_price}}" name="purchase_price" id="">
                        </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-email-input" class="col-sm-2 col-form-label">Alert Qty</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" value="{{$ingredient_edit->alert_qty}}" name="alert_qty" id="">
                        </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-email-input" class="col-sm-2 col-form-label">Code</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" value="{{$ingredient_edit->code}}" name="code" id="">
                        </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-email-input" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" value="{{$ingredient_edit->name}}" name="name" id="">
                        </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                </div>
            </section>
        </div>
        <div class="col-lg-2"> </div>
        </div> 
@endsection