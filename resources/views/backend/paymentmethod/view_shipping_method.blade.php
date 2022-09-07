


@extends('admin.main_master')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="box">

                <div class="box-header with-border">
                <div class="row">
                    <div class="col-lg-6">
                        <h3 class="box-title"> Shipping View Method </h3>
                    </div>
                <div class="col-lg-6" >
                    <button type="submit" class="btn btn-primary" style="margin-left:500px">
                    <a href="{{ route('shipping_method_setting.add') }}"> <strong style="font-color:white"> + Add Shipping Method Setting</strong> </a>

                    </button>
                </div>
                </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="table-responsive">
                    <div id="example_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                        <table id="example"
                        class="table table-bordered table-hover display nowrap margin-top-10 w-p100 dataTable" role="grid" aria-describedby="example_info">
                            <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending"
                                    aria-label="Name: activate to sort column descending" style="width: 187.688px;">SI</th>

                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending"
                                    style="width: 293.969px;">shipping_method_name</th>

                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending"
                                    style="width: 293.969px;">shipping_rate</th>

{{-- 
                                    $table->id();
                                    $table->string('outlet_id');//foreign key
                                    $table->string('shipping_method_name');
                                    $table->string('shipping_rate');
                                    $table->string('payment_method_id');//foreign key --}}



                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending"
                                    style="width: 293.969px;">payment_method_id</th>

                                   


                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending"
                                    style="width: 129.891px;">Action</th>



                                   
                                </tr>
                            </thead>

{{--                           

                            $table->id();
                            $table->string('outlet_id');//foreign key
                            $table->string('shipping_method_name');
                            $table->string('shipping_rate');
                            $table->string('payment_method_id');//foreign key --}}


                                <tbody>

                                    @foreach($paymentshipping_setup_view as $paymentshipping_setup)
                                      <tr role="row" class="odd">
                                        <td class="sorting_1">{{ $paymentshipping_setup->id }}</td>
                                        <td>{{ $paymentshipping_setup->shipping_method_name }}</td>
                                        <td>{{ $paymentshipping_setup->shipping_rate }}</td>
                                        <td>{{ $paymentshipping_setup->payment_shipping_set->status }}</td>
                                      
                                     
                                        <td>
                                            <a href="{{ route('shipping_method_setting.edit',$paymentshipping_setup->id) }}" class="btn btn-light" title="Edit">Edit </a> 
                                            <a href="{{ route('shipping_method_setting.delete',$paymentshipping_setup->id) }}" class="btn btn-dark" title="Edit">Delete</a>
                                        </td> 

                                      </tr>
                                     @endforeach

                                    </tbody>




                            
                        </table>
                    </div>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
    {{--  main colum end for 12  --}}
    </div>
        {{--  main row end  --}}

@endsection
