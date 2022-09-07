@extends('admin.main_master')


@section('content')

    <div class="box_p">
        <div class="box-header with-border">
          <h4 class="box-title">Edit Payment Method Info</h4>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-12">
                <form action="{{ route('payment.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <input type="hidden" name="id" value="{{$payment_edit->id}}">

                    <div class="form-group row">
                       <label for="example-text-input" class="col-sm-2 col-form-label">Outlet_id</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="outlet_id" value="{{$payment_edit->outlet_id}}" id="example-text-input">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-search-input" class="col-sm-2 col-form-label"> Payment Method Name</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="name" value="{{$payment_edit->name}}" id="example-search-input">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-email-input" class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="status" value="{{$payment_edit->status}}" id="example-email-input">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-url-input" class="col-sm-2 col-form-label">Added by</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="added_by" value="{{$payment_edit->added_by}}" id="example-url-input">
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
