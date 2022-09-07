
@extends('admin.main_master')

@section('content')
<div class="row" >
    <div class="col-lg-12">
        <div class="box">
            <div class="box-header with-border">
               <h3 class="box-title">All Customer </h3>
            </div>

            <div class="col-sm-12 col-md-6" style="margin-left: 750px">
                <div id="datatable-buttons_filter" class="dataTables_filter">
                    {{-- <label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="datatable-buttons"></label> --}}
                    <a href="{{ route('customer2.add') }}"
                    class="btn btn-success">Add Customer</a>

                </div>
            </div>

            {{--  <!-- /.box-header -->  --}}
            <div class="box-body">
                <div class="table-responsive">
                <div id="example_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                    <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100 dataTable" role="grid" aria-describedby="example_info">
                        <thead>
                            <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending"
                                aria-label="Name: activate to sort column descending" style="width: 187.688px;">Outlet_id</th>

                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending"
                                style="width: 293.969px;"> Name </th>

                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending"
                                style="width: 137.969px;"> Email </th>

                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"
                                style="width: 118.719px;"> Address </th>

                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending"
                                style="width: 65.7188px;"> Date of Birth </th>

                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending"
                                style="width: 129.891px;"> Phone Number </th>

                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending"
                                style="width: 129.891px;"> Action </th>


  {{-- $table->id();
                $table->unsignedBigInteger('outlet_id');
                $table->string('name');
                $table->string('email')->unique();
                $table->string('address');
                $table->date('dob');
                $table->string('phone');
                $table->rememberToken(); --}}

                               
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($customers as $customer)
                                <tr role="row" class="odd">
                                    <td class="sorting_1">{{ optional($customer->outlets)->id }}</td>
                                    <td>{{ $customer->name }}</td>
                                    <td>{{ $customer->email }}</td>
                                    <td>{{ $customer->address }}</td>
                                   <td>{{ $customer->dob }}</td>
                                    <td>{{ $customer->phone }}</td>
                                    
                                    {{-- <td>{{ $paymentshipping_setup->payment_shipping_set->status }}</td> --}}

                                   <td>
                                        <a href="{{ route('customer2.edit',$customer->id) }}" class="btn btn-info" title="Edit">Edit </a>
                                        <a href="{{ route('customer2.delete',$customer->id) }}" class="btn btn-danger" title="Edit">Delete</i> </a>

                                     </td> 
                                </tr>
                            @endforeach
                        </tbody>
                        {{-- <tfoot>
                            <tr>
                                <th rowspan="1" colspan="1">Outlet_id</th>
                                <th rowspan="1" colspan="1">Name</th>
                                <th rowspan="1" colspan="1">Date of Birth</th>
                                <th rowspan="1" colspan="1">Email</th>
                                <th rowspan="1" colspan="1">Contact_no</th>
                                <th rowspan="1" colspan="1">Address</th>
                                <th rowspan="1" colspan="1">Action</th>
                            </tr>
                    </tfoot> --}}
                    </table>
                </div>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
    </div>

</div>
{{--  main row end  --}}
@endsection



