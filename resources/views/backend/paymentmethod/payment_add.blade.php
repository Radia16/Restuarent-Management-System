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
                    <form action="{{ route('payment.store') }}" method="POST" >
                        @csrf
                        {{--  APATOTO  --}}
                        <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Outlet_id</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="outlet_id"  id="example-text-input">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="example-search-input" class="col-sm-2 col-form-label"> Payment Method Name </label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="name"  id="name" placeholder="Enter Name" required="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-email-input" class="col-sm-2 col-form-label">Status</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" type="text" name="status" id="status" placeholder=" Write here.." required=""
                                    rows="3" required="" style="margin-top: 0px; margin-bottom: 0px; height: 55px;">
                                </textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-tel-input" class="col-sm-2 col-form-label">Added by</label>
                            <div class="col-sm-10">
                                <select class="form-select"  name = 'added_by' required="">
                                    <option value="">Select</option>
                                    <option value="admin">Admin</option>
                                    <option value="super_admin">Super-Admin</option>
                                </select>
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
