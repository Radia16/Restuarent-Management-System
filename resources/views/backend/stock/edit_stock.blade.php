@extends('admin.main_master')
@section('content')

    <div class="box_p"  >
        <div class="box-header with-border">
            <h2 class="box-title">Update Stock</h2>
        </div>
        <!-- /.box-header -->


        <div class="box-body">
          <div class="row">
            <div class="col-6">
              <form action="{{route('stock.update')}}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{$stock_edit->id}}">


                    
                <div class="mb-3">
                  <label for="" class="col-form-label">Outlet_id</label>
                   {{-- <input type="text" class="form-control" id="recipient-name">  --}}
                   <select class="form-select" type="text" name="outlet_id"  >
                    @foreach($outlet_edit as $outlet_e)
                      <option value="{{ $outlet_e->id }}"> {{ $outlet_e->id }}</option>
                  @endforeach 
                 </select>
                </div> 
                 
                <div class="form-group row">
                  <label for="example-text-input" class="col-sm-2 col-form-label">Ingredient (Code)</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="text" value="{{$stock_edit->code}}" name="code" id="">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="example-search-input" class="col-sm-2 col-form-label">Category</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="text" value="{{$stock_edit->category}}" name="category" id="">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="example-email-input" class="col-sm-2 col-form-label">Stock Amount</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="text" value="{{$stock_edit->unit}}" name="unit" id="">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="example-email-input" class="col-sm-2 col-form-label">Alert Amount</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="text" value="{{$stock_edit->alert_qty}}" name="alert_qty" id="">
                  </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>

            </form>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
      </div>

@endsection



















































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































