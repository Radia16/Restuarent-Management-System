@extends('admin.main_master')

@section('content')
<div class="container">
    <div class="box_p" >
        <div class="box-header with-border">
          <h4 class="box-title">Add Users</h4>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-8">
                <form action="{{ route('customer2.store') }}" method="POST" >
                    @csrf

       
                    <div class="form-group row">
                      <label for="example-search-input" class="col-sm-2 col-form-label">Outlet Id </label>
                      <div class="col-sm-10">
                        <select type="text" name="outlet_id" id="outlet_id"  class="form-control"  placeholder="outlet id">
                          @foreach($outletset as $outlet)
                          <option value="{{ $outlet->id }}"> {{ $outlet->id }}</option>
                          @endforeach 
                        </select>
                      </div>
                    </div>

                <div class="form-group row">
                  <label for="example-search-input" class="col-sm-2 col-form-label">Customer Name </label>
                  <div class="col-sm-10">
                    <input class="form-control" type="text" name="name"  id="name" placeholder="Enter Name" required="">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="example-email-input" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="email" name="email"  id="email" placeholder="Enter Email" required="">
                  </div>
                </div>

                {{-- $table->id();
                $table->unsignedBigInteger('outlet_id');
                $table->string('name');
                $table->string('email')->unique();
                $table->string('address');
                $table->date('dob');
                $table->string('phone');
                $table->rememberToken(); --}}


                <div class="form-group row">
                  <label for="example-url-input" class="col-sm-2 col-form-label">Address</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="text" name="address"  id="address" placeholder="Enter Address" required="">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="example-url-input" class="col-sm-2 col-form-label">Date of Birth</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="date" name="dob"  id="dob" placeholder="Enter Birthdate" required="">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="example-tel-input" class="col-sm-2 col-form-label">Phone no</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="text" name="phone"  id="phone" placeholder="Enter Phone no" required="">
                  </div>
                </div>

                

                <div class="box-footer">
                    <button type="submit" class="btn btn-success pull-right">Submit</button>
                </div>
            </form>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
    </div>
</div>
@endsection
