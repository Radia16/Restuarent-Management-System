@extends('admin.main_master')
@section('content')

<div class="row">
  <div class="col-lg-2"></div>
  <div class="col-lg-8">
    <div class="box" >
        <div class="box-header with-border">
            <h3 class="box-title">Add Ingredient</h3>
        </div>
        <!-- /.box-header -->

        <div class="box-body">
          
              <form action="{{route('ingredient.store')}}" method="POST">

                    @csrf


                    <div class="form-group row">
                      <label for="example-search-input" class="col-sm-2 col-form-label">Outlet ID</label>
                      <div class="col-sm-10">
                        <input class="form-control" type="integer" name="outlet_id" id="">
                      </div>
                    </div>



                <div class="form-group row">
                  <label for="example-search-input" class="col-sm-2 col-form-label">Purchase Price</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="integer" name="purchase_price" id="">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="example-email-input" class="col-sm-2 col-form-label">Alert Qty</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="number" value="" name="alert_qty" id="">
                  </div>
                </div>




{{-- 
                $table->id();
                $table->unsignedBigInteger('outlet_id');
                $table->decimal('purchase_price');
                $table->unsignedBigInteger('alert_qty');
               // $table->string('unit');
                $table->string('code')->unique();
                $table->string('name');
                $table->unsignedBigInteger('added_by') --}}

                <div class="form-group row">
                    <label for="example-email-input" class="col-sm-2 col-form-label">Code</label>
                    <div class="col-sm-10">
                      <input class="form-control" type="text" value="" name="code" id="">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="example-email-input" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                      <input class="form-control" type="text" value="" name="name" id="">
                    </div>
                </div>

                  
                <div class="form-group row">
                  <label for="example-email-input" class="col-sm-2 col-form-label">Added By</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="text" value="" name="added_by" id="">
                  </div>
              </div>



                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
          <!-- /.box-body -->
          </div>
            
          <!-- /.col -->
          
      
      </div>
    </div>
    <!-- /.row -->
    <div class="col-lg-2"></div>

@endsection











