@extends('admin.main_master')

@section('content')

    <div class="row">

        <div class="col-lg-12">
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">Default Basic Forms</h4>
                </div>
                    <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-12">
                            <form action="{{ route('settings.store')}}"  method="POST" enctype='multipart/form-data'>
                                @csrf
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">OutletId</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="number" name="outlet_id" id="outlet_id">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-search-input" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="resturent_name" id="resturent_name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-email-input" class="col-sm-2 col-form-label">Image</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="file" name="logo_image" id="logo_image">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-url-input" class="col-sm-2 col-form-label">WebsiteL</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="webside" id="webside">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-date-input" class="col-sm-2 col-form-label">Date</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="date" name="date" id="date">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-date-input" class="col-sm-2 col-form-label">time_zone</label>
                                    <div class="col-sm-10">
                                    <input class="form-control" type="time" name="time_zone" id="date">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-date-input" class="col-sm-2 col-form-label">currency_symbol</label>
                                    <div class="col-sm-10">
                                    <input class="form-control" type="text" name="currency_symbol" id="date">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-date-input" class="col-sm-2 col-form-label">currency_position</label>
                                    <div class="col-sm-10">
                                    <input class="form-control" type="text" name="currency_position" id="date">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-date-input" class="col-sm-2 col-form-label">precision</label>
                                    <div class="col-sm-10">
                                    <input class="form-control" type="text" name="precision" id="date">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-date-input" class="col-sm-2 col-form-label">default_customer</label>
                                    <div class="col-sm-10">
                                    <input class="form-control" type="text" name="default_customer" id="date">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-date-input" class="col-sm-2 col-form-label">default_payment_method</label>
                                    <div class="col-sm-10">
                                    <input class="form-control" type="text" name="default_payment_method" id="date">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-date-input" class="col-sm-2 col-form-label">charge_type</label>
                                    <div class="col-sm-10">
                                    <input class="form-control" type="text" name="charge_type" id="date">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-date-input" class="col-sm-2 col-form-label">percentage_amount</label>
                                    <div class="col-sm-10">
                                    <input class="form-control" type="decimel" name="percentage_amount" id="date">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-date-input" class="col-sm-2 col-form-label">export_daly</label>
                                    <div class="col-sm-10">
                                    <input class="form-control" type="text" name="export_daly" id="date">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-date-input" class="col-sm-2 col-form-label">invoice_footer</label>
                                    <div class="col-sm-10">
                                    <textarea name="invoice_footer" id="invoice_footer" cols="155" rows="5" placeholder="something write here"> something write here...</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-date-input" class="col-sm-2 col-form-label">printing_invoice</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="printing_invoice" id="date">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-date-input" class="col-sm-2 col-form-label">printing_bill</label>
                                    <div class="col-sm-10">
                                    <input class="form-control" type="text" name="printing_bill" id="date">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-date-input" class="col-sm-2 col-form-label">printing_kot</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="printing_kot" id="date">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-date-input" class="col-sm-2 col-form-label">printing_bot</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="printing_bot" id="date">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-date-input" class="col-sm-2 col-form-label">recept_printer</label>
                                    <div class="col-sm-10">
                                    <input class="form-control" type="text" name="recept_printer" id="date">
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-success pull-right"> add</button>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
                    <!-- /.row -->
            </div>
                <!-- /.box-body -->
        </div>
    </div>

@endsection
