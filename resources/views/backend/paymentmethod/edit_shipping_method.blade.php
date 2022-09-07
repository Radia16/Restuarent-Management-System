
@extends('admin.main_master')
@section('content')

    <div class="box_p"  >
        <div class="box-header with-border">
          <h4 class="box-title">Update Shipping Method Setting</h4>
        </div>
        <!-- /.box-header -->

        <div class="box-body">
            <div class="row">
                <div class="col-8">

                     <form action="" method="POST">
                        @csrf
                   <input type="hidden" name="id" value="{{$paymentshipping_setup_edit->id}}">

                        {{--  APATOTO  --}}


                        <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Outlet_id</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" value="{{$paymentshipping_setup_edit->outlet_id}}" name="outlet_id"  id="example-text-input">
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="example-search-input" class="col-sm-2 col-form-label"> shipping_method_name </label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" value="{{$paymentshipping_setup_edit->shipping_method_name}}" name="shipping_method_name"  id="" placeholder="Enter Name" required="">
                            </div>
                        </div>


{{-- 
                        $table->id();
            $table->string('outlet_id');//foreign key
            $table->string('shipping_method_name');
            $table->string('shipping_rate');
            $table->string('payment_method_id');//foreign key --}}
                        

                        


                          
                        <div class="form-group row">
                            <label for="example-search-input" class="col-sm-2 col-form-label"> Shipping_Rate </label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" value="{{$paymentshipping_setup_edit->shipping_rate}}" name="shipping_rate"  id="" placeholder="Enter Name" required="">
                            </div>
                        </div>




                        <div class="mb-3">
                            <label for="" class="col-form-label">status:</label>
                            {{-- <input type="text" class="form-control" id="recipient-name"> --}}
                            <select class="form-select" type="text" value="{{$paymentshipping_setup_edit->payment_method_id}}" name="payment_method_id"  id="">
                              @foreach($payments as $pay)
                                <option value="{{ $pay->id }}"> {{ $pay->status }}</option>
                            @endforeach
                          </select>
                          </div>




                        <div class="box-footer">
                        <button type="submit" class="btn btn-success pull-right">Submit</button>
                        </div>

                </form>
                </div>
           </div>
        </div>
        <!-- /.box-body -->
    </div>

@endsection
