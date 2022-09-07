@extends('admin.main_master')

@section('content')
    <div class="box_p"  >
        <div class="box-header with-border">
          <h4 class="box-title">Edit Customer Info</h4>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-12">

                <form action="{{ route('customer2.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <input type="hidden" name="id" value="{{$customer_edit->id}}">







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
                  <label for="example-search-input" class="col-sm-2 col-form-label"> Customer Name</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="text" name="name" value="{{$customer_edit->name}}" id="example-search-input">
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
                  <label for="example-email-input" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="email" name="email" value="{{$customer_edit->email}}" id="example-email-input">
                  </div>
                </div>


                <div class="form-group row">
                  <label for="example-email-input" class="col-sm-2 col-form-label">address</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="text" name="address" value="{{$customer_edit->address}}" id="example-email-input">
                  </div>
                </div>


                <div class="form-group row">
                  <label for="example-url-input" class="col-sm-2 col-form-label">Date of Birth</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="date" name="dob" value="{{$customer_edit->dob}}" id="example-url-input">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="example-tel-input" class="col-sm-2 col-form-label">Contact_no</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="text" name="phone" value="{{$customer_edit->phone}}" id="example-tel-input">
                  </div>
                </div>

               


                <div class="box-footer">
                    <button type="submit" class="btn btn-success pull-right">Update</button>
                </div>
            </form>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
    </div>
@endsection
