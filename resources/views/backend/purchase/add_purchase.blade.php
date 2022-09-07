@extends('admin.main_master')

@section('content')

    <div class="box_p">
        <div class="box-header with-border">
            <h4 class="box-title">Add Purchase</h4>
        </div>
        <!-- /.box-header -->


        <div class="box-body">
            <div class="row">
                <div class="col-6">

                    <form action="{{ route('purchase.store') }}" method="POST">

                        @csrf



                        <div class="form-group row">
                            <label for="example-date-input" class="col-sm-2 col-form-label">Sn</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" value="" name="sn" id="">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Outlet_Id</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" value="" name="outlet_id" id="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-search-input" class="col-sm-2 col-form-label">Reference_no</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="reference_no" id="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-email-input" class="col-sm-2 col-form-label">Supplier</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" value="" name="supplier" id="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-email-input" class="col-sm-2 col-form-label">Ingredient</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" value="" name="ingredients" id="">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="example-tel-input" class="col-sm-2 col-form-label">Date</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="date" value="" name="date" id="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-password-input" class="col-sm-2 col-form-label">Grand_Total</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" value="" name="grand_total" id="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-number-input" class="col-sm-2 col-form-label">Paid</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" value="" name="paid" id="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-datetime-local-input" class="col-sm-2 col-form-label">Due</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" value="" name="due" id="">
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
    </div>
@endsection
