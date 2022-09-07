
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

                    <form action="{{route('payment_method_setup.update')}}" method="POST">
                        @csrf
                   <input type="hidden" name="id" value="{{$payment_setup_edit->id}}">
                   

                        <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Outlet_id</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" value="{{$payment_setup_edit->outlet_id}}" name="outlet_id"  id="example-text-input">
                            </div>
                        </div>



                        <div class="mb-3">
                            <label for="" class="col-form-label">Payment Method Name:</label>
                            {{-- <input type="text" class="form-control" id="recipient-name"> --}}
                            <select class="form-select" type="text" value="{{$payment_setup_edit->payment_method_id}}" name="payment_method_id"  id="">
                              @foreach($payments as $pays)
                                <option value="{{ $pays->id }}"> {{ $pays->name }}</option>
                            @endforeach
                          </select>
                          </div> 


                          {{-- <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Outlet ID:</label>
                            {{-- <input type="text" class="form-control" id="recipient-name"> --}}
                            {{-- <select class="form-select" type="text" name="outlet_id"  id="recipient-name">
                              @foreach($outlets as $item)
                                <option value="{{ $item->id }}"> {{ $item->outlet_name }}</option>
                            @endforeach
                          </select>
                          </div> --}} 


                          <div class="form-group row">
                            <label for="example-search-input" class="col-sm-2 col-form-label"> Marchant/Application_ID </label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" value="{{$payment_setup_edit->marchant_id_or_application_id}}" name="marchant_id_or_application_id"  id="" placeholder="Enter Name" required="">
                            </div>
                        </div>


                        {{-- <div class="form-group row">
                            <label for="example-email-input" class="col-sm-2 col-form-label">Marchant/Application_ID</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" type="text" value="" name="marchant_id_or_application_id" id="" placeholder=" Write here.." required=""
                                    rows="3" required="" style="margin-top: 0px; margin-bottom: 0px; height: 55px;">
                                    {{$payment_setup_edit->marchant_id_or_application_id}}
                                </textarea>
                            </div>
                        </div> --}}


                        <div class="form-group row">
                            <label for="example-search-input" class="col-sm-2 col-form-label"> currency </label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" value="{{$payment_setup_edit->currency}}" name="currency"  id="" placeholder="Enter Name" required="">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="example-search-input" class="col-sm-2 col-form-label"> mode </label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" value="{{$payment_setup_edit->mode}}" name="mode"  id="" placeholder="Enter Name" required="">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="example-search-input" class="col-sm-2 col-form-label"> status </label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" value="{{$payment_setup_edit->status}}" name="status"  id="" placeholder="Enter Name" required="">
                            </div>
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
