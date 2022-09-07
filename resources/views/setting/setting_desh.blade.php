@extends('admin.main_master')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="container-full">
                <!-- Main content -->
                <section class="content">

                    <div class="row">
                        <div class="col-12">
                            <div class="box">
                                <div class="box-header with-border">
                                <h4 class="box-title"> Outlet Information </h4>
                                </div>
                                <form action="{{ route('settings.store')}}"  method="POST" enctype='multipart/form-data'>
                                        @csrf
                                    <div class="box-body">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <h4 class="box-title text-info mb-0"><i class="ti-user me-15"></i> Personal Info</h4>
                                                <div class="form-group">
                                                    <label class="form-label">Resturent Name</label>
                                                    <select class="form-select" type="text" name ='resturent_name' required="">
                                                    <option value="">Select</option>
                                                    <option value="single">single</option>
                                                    <option value="married">married</option>
                                                    </select>
                                                </div>
                                                    <div class="form-group">
                                                    <label class="form-label">Logo Image</label>
                                                    <input type="file" name="logo_image" class="form-control" placeholder="Choose Image">
                                                    </div>

                                                    <div class="form-group">
                                                    <label class="form-label">Outlet ID</label>
                                                    <input type="number" name="outlet_id" class="form-control" placeholder="outlet id">


                                                    </div>
                                                    <div>
                                                        <p>Post Or Pre-Payment:</p>
                                                          <input type="radio" id="status" name="status" value="HTML">
                                                          <label for="html">Post Payment</label>
                                                          <input type="radio" id="status" name="status" value="CSS">
                                                          <label for="css">Pre-payment</label>
                                                         
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-label"> Webside </label>
                                                        <input type="text" name="webside" class="form-control" placeholder="Webside">
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="form-label">Precision</label>

                                                        <input type="text" name="precision" class="form-control" placeholder="precision">
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="form-label">Invoice_Footer</label>
                                                        <textarea name="invoice_footer" id="invoice_footer" type="text" cols="166" rows="5" placeholder="something write here"> something write here...</textarea>
                                                    </div>


                                            </div>
                                            <div class="col-lg-3">
                                                <h4 class="box-title text-info mb-0"><i class="ti-user me-15"></i> Personal Info</h4>
                                                <div class="form-group">
                                                    <label class="form-label">Time Zone</label>
                                                    <input type="time" name="time_zone" class="form-control" placeholder="First Name">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Currency Symbol</label>

                                                    <select class="form-select" type="text" name ='currency_symbol' required="">
                                                    <option value="">Select</option>
                                                    <option value="single">single</option>
                                                    <option value="married">married</option>
                                                </select>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Currency Position</label>

                                                    <select class="form-select" type="text"  name ='currency_position' required="">
                                                    <option value="">Select</option>
                                                    <option value="single">single</option>
                                                    <option value="married">married</option>
                                                </select>
                                                </div>

                                            </div>

                                            <div class="col-lg-3">
                                                <h4 class="box-title text-info mb-0"><i class="ti-user me-15"></i> Personal Info</h4>
                                                <div class="form-group">
                                                    <label class="form-label"> Date </label>
                                                    <input type="date" name="date" class="form-control" placeholder="father_name">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Default Customer</label>
                                                    <input type="text" name="default_customer" class="form-control" placeholder="default customer">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Default Payment Method</label>
                                                    <select class="form-select" type="text"  name ='default_payment_method' required="">
                                                        <option value="">Select</option>
                                                        <option value="single">single</option>
                                                        <option value="married">married</option>
                                                </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <h4 class="box-title text-info mb-0"><i class="ti-user me-15"></i> Personal Info</h4>
                                                    <div class="form-group">
                                                    <label class="form-label">Charge Type</label>

                                                    <select class="form-select" type="text"  name ='charge_type' required="">
                                                        <option value="">Select</option>
                                                        <option value="single">single</option>
                                                        <option value="married">married</option>
                                                    </select>
                                                    </div>
                                                    <div class="form-group">
                                                    <label class="form-label">Percentage Amount</label>

                                                    <select class="form-select" type="text"  name ='percentage_amount' required="">
                                                        <option value="">Select</option>
                                                        <option value="single">single</option>
                                                        <option value="married">married</option>
                                                    </select>
                                                    </div>
                                                    <div class="form-group">
                                                    <label class="form-label">Export Daly</label>
                                                    <input type="text" name="export_daly" class="form-control" placeholder="export daly">
                                                    </div>

                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <h4 class="box-title text-info mb-0"><i class="ti-user me-15"></i> Personal Info</h4>
                                                <div class="form-group">
                                                    <label class="form-label">Printing Invoice</label>
                                                    <select class="form-select" type="text"  name ='printing_invoice' required="">
                                                    <option value="">Select</option>
                                                    <option value="single">single</option>
                                                    <option value="married">married</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Printing Bill</label>
                                                    <select class="form-select" type="text" name ='printing_bill' required="">
                                                    <option value="">Select</option>
                                                    <option value="single">single</option>
                                                    <option value="married">married</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Printing Kot</label>
                                                    <select class="form-select" type="text" name ='printing_kot' required="">
                                                    <option value="">Select</option>
                                                    <option value="single">single</option>
                                                    <option value="married">married</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label class="form-label">Printing Bot</label>
                                                    <select class="form-select" type="text"  name ='printing_bot' required="">
                                                        <option value="">Select</option>
                                                        <option value="single">single</option>
                                                        <option value="married">married</option>
                                                        </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <h4 class="box-title text-info mb-0"><i class="ti-user me-15"></i> Personal Info</h4>
                                                <div class="form-group">
                                                    <label class="form-label">Recept Printer</label>
                                                    <select class="form-select" type="text"  name ='recept_printer' required="">
                                                    <option value="">Select</option>
                                                    <option value="single">single</option>
                                                    <option value="married">married</option>
                                                    </select>
                                                </div>
                                                <div>
                                                    <p>Print Formet:</p>
                                                      <input type="radio" id="html" name="status" value="No Print">
                                                      <label for="html">No Print</label>
                                                      <input type="radio" id="css" name="status" value="56mm">
                                                      <label for="css">56mm</label>
                                                      <input type="radio" id="javascript" name="status" value="80mm">
                                                      <label for="javascript">80mm</label>
                                                </div>
                                                <div>
                                                    <p>Print Formet:</p>
                                                      <input type="radio" id="html" name="fav_language" value="HTML">
                                                      <label for="html">No Print</label>
                                                      <input type="radio" id="css" name="fav_language" value="CSS">
                                                      <label for="css">56mm</label>
                                                      <input type="radio" id="javascript" name="fav_language" value="JavaScript">
                                                      <label for="javascript">80mm</label>
                                                </div>
                                                <div>
                                                    <p>Print Formet:</p>
                                                      <input type="radio" id="html" name="fav_language" value="HTML">
                                                      <label for="html">No Print</label>
                                                      <input type="radio" id="css" name="fav_language" value="CSS">
                                                      <label for="css">56mm</label>
                                                      <input type="radio" id="javascript" name="fav_language" value="JavaScript">
                                                      <label for="javascript">80mm</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box-footer">
                                            <button type="submit" class="btn btn-warning me-1"> Submit </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

@endsection
