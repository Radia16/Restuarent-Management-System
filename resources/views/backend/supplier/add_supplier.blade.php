
@extends('admin.main_master')

@section('content')
    <div class="box_p">
        <div class="box-header with-border">
            <h2 class="box-title">Add Supplier</h2>
        </div>
        <!-- /.box-header -->


        <div class="box-body">
          <div class="row">
            <div class="col-6">

              <form action="{{route('supplier.store')}}" method="POST" enctype="multipart/form-data" >
                    @csrf
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Outlet_Id</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" value="" name="outlet_id" id="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-search-input" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="name" id="">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-email-input" class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" value="" name="address" id="">
                        </div>
                    </div>

                   <div class="form-group row">
                        <label for="example-email-input" class="col-sm-2 col-form-label">Contact Person</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" value="" name="contact_person" id="">
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="example-tel-input" class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" value="" name="description" id="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-password-input" class="col-sm-2 col-form-label">Phone</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" value="" name="phone" id="">
                        </div>
                    </div>

                    <div class="form-group row">
                       <label for="example-number-input" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" value="" name="email" id="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-datetime-local-input" class="col-sm-2 col-form-label">Image</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="file" value="" name="image" id="">
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

