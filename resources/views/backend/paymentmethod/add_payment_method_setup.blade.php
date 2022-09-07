setup




@extends('admin.main_master')
@section('content')

    <div class="box_p"  >
        <div class="box-header with-border">
          <h4 class="box-title">Add Payment Method</h4>
        </div>
        <!-- /.box-header -->

        <div class="box-body">
            <div class="row">
                <div class="col-8">
                    <form action="{{ route('payment_method_setup.store') }}" method="POST" >
                        @csrf

                        {{--  APATOTO  --}}


                        <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Outlet_id</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="outlet_id"  id="example-text-input">
                            </div>
                        </div>


                        

                        <div class="mb-3">
                            <label for="" class="col-form-label">Payment Method Name:</label>
                            {{-- <input type="text" class="form-control" id="recipient-name"> --}}
                            <select class="form-select" type="text" name="payment_method_id"  id="">
                              @foreach($paymethodset as $pay)
                                <option value="{{ $pay->id }}"> {{ $pay->name }}</option>
                            @endforeach
                          </select>
                          </div>


                          
                        <div class="form-group row">
                            <label for="example-search-input" class="col-sm-2 col-form-label"> Marchant/Application_ID </label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="marchant_id_or_application_id"  id="" placeholder="Enter Name" required="">
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="example-search-input" class="col-sm-2 col-form-label"> currency </label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="currency"  id="" placeholder="Enter Name" required="">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="example-search-input" class="col-sm-2 col-form-label"> mode </label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="mode"  id="" placeholder="Enter Name" required="">
                            </div>
                        </div>



                        <div class="mb-3">
                            <label for="" class="col-form-label">status:</label>
                            {{-- <input type="text" class="form-control" id="recipient-name"> --}}
                            <select class="form-select" type="text" name="status"  id="">
                              @foreach($paymethodset as $pay)
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
