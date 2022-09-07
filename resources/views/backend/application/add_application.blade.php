
My application

@extends('admin.main_master')
@section('css')
<style>
    #blah
    {
        width: 100px;
        height: 100px;
    }
</style>

@endsection


@section('content')
<div class="container-full" >
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="me-auto">
                <h4 class="page-title">Adding Application</h4>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="box">
                    <div class="box-body">
                        <form action="{{ route('application.store')}}"  method="POST" enctype='multipart/form-data'>
                            @csrf
                            <div class="form-body">
                                <div class="row">


                                    <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="" class="col-form-label">Outlet_id</label>
                                         {{-- <input type="text" class="form-control" id="recipient-name">  --}}
                                         <select class="form-select" type="text" name="outlet_id"  >
                                          @foreach($outletset as $outlet)
                                            <option value="{{ $outlet->id }}"> {{ $outlet->id }}</option>
                                        @endforeach 
                                       </select>
                                      </div>  
                                    </div>

                                    {{-- <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="fw-700 fs-16 form-label">Outlet ID</label>
                                            <input type="text" name="outlet_id" class="form-control" placeholder="outlet_id">
                                     
                                       </div>

                                    </div> --}}

                                    <div class="col-md-4" style="margin-left: 72px;">
                                        <div class="form-group">
                                            <label class="fw-700 fs-16 form-label">appliaction_title</label>
                                            <input type="text" name="appliaction_title" class="form-control" placeholder="Lorem Ipsum Text...">
                                            @error('end_date')
                                            <span class="text-danger">{{ $message }}</span>
                                             @enderror
                                        </div>
                                    </div>

                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="fw-700 fs-16 form-label">Store Name</label>
                                            <input type="text" name="store_name" class="form-control" placeholder="store_name">
                                        </div>
                                    </div>

                                    <div class="col-md-4" style="margin-left: 72px;">
                                        <div class="form-group">
                                            <label class="fw-700 fs-16 form-label">phone</label>
                                            <input type="text" name="phone" class="form-control" placeholder="Lorem Ipsum Text...">
                                        </div>
                                    </div>

                                </div>
                                <!--/row-->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="fw-700 fs-16 form-label">address</label>
                                            <input type="text" name="address" class="form-control" placeholder="category_name">
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-4" style="margin-left: 72px;">
                                        <div class="form-group">
                                            <label class="fw-700 fs-16 form-label">email_address</label>
                                            <input type="email" name="email_address" class="form-control" placeholder="Lorem Ipsum Text...">
                                            @error('end_date')
                                            <span class="text-danger">{{ $message }}</span>
                                             @enderror
                                        </div>
                                    </div>
                                </div>
                                  <!--/row-->
                                  <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="fw-700 fs-16 form-label">opening_time</label>
                                            <input type="time" name="opening_time" class="form-control" placeholder="category_name">
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-4" style="margin-left: 72px;">
                                        <div class="form-group">
                                            <label class="fw-700 fs-16 form-label">close_time</label>
                                            <input type="time" name="close_time" class="form-control" placeholder="Lorem Ipsum Text...">
                                            @error('end_date')
                                            <span class="text-danger">{{ $message }}</span>
                                             @enderror
                                        </div>
                                    </div>
                                </div>

                                      <!--/row-->
                                        <div class="row">

                                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="fw-700 fs-16 form-label">Discount Type</label>
                                                <select class="form-select" type="text" name="discount_type"
                                                     data-placeholder="Choose a Category" tabindex="1">
                                                    <option value="active">Amount</option>
                                                    <option value="deactive">Percent</option>
                                                </select>
                                            </div>
                                        </div>
                                            <!--/span-->
                                            <div class="col-md-4" style="margin-left: 72px;">
                                                <div class="form-group">
                                                    <label class="fw-700 fs-16 form-label">discount_rate</label>
                                                    <input type="number" name="discount_rate" class="form-control" placeholder="Lorem Ipsum Text...">
                                                    @error('end_date')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>


                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="fw-700 fs-16 form-label">service_charge</label>
                                                    <input type="number" name="service_charge" class="form-control" placeholder="category_name">
                                                </div>
                                            </div>

                                            <div class="col-md-4" style="margin-left: 72px" >
                                                <div class="form-group">
                                                    <label class="fw-700 fs-16 form-label">service_charge_type</label>
                                                    <select class="form-select" type="text" name="service_charge_type"
                                                    data-placeholder="Choose a Category" tabindex="1">
                                                        <option value="active">Amount</option>
                                                        <option value="deactive">Percent</option>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                        </div>

                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="fw-700 fs-16 form-label">vat_setting</label>
                                                    <input type="number" name="vat_setting" class="form-control" placeholder="category_name">
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-4" style="margin-left: 72px;">
                                                <div class="form-group">
                                                    <label class="fw-700 fs-16 form-label">gst_vat</label>
                                                    <input type="number" name="gst_vat" class="form-control" placeholder="Lorem Ipsum Text...">
                                                    @error('end_date')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="fw-700 fs-16 form-label">payment_setup_id</label>
                                                    <input type="number" name="payment_setup_id" class="form-control" placeholder="category_name">
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-4" style="margin-left: 72px;">
                                                <div class="form-group">
                                                    <label class="fw-700 fs-16 form-label">min_delivery_time</label>
                                                    <input type="text" name="min_delivery_time" class="form-control" placeholder="Lorem Ipsum Text...">
                                                    @error('end_date')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="fw-700 fs-16 form-label">language_id</label>
                                                    <input type="number" name="language_id" class="form-control" placeholder="category_name">
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-4" style="margin-left: 72px;">
                                            <div class="form-group">
                                                <label class="fw-700 fs-16 form-label">Date Format</label>
                                                <select class="form-select" type="text" name="date_format"
                                                data-placeholder="Choose a Category" tabindex="1">
                                                    <option value="active">dd/mm/yyyy</option>
                                                    <option value="deactive">yyyy/mm/dd</option>
                                                    <option value="active">dd-mm-yyyy</option>
                                                    <option value="deactive">mm/dd/yyyy</option>
                                                    <option value="deactive">dd M,yyyy</option>
                                                    
                                                </select>
                                            </div>

                                        </div>
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="fw-700 fs-16 form-label">Time Zone</label>
                                                    <select class="form-select" type="text" name="time_zone"
                                                    data-placeholder="Choose a Category" tabindex="1">
                                                        <option value="active">dd/mm/yyyy</option>
                                                        <option value="deactive">yyyy/mm/dd  </option>
                                                        <option value="active">dd-mm-yyyy</option>
                                                        <option value="deactive">mm/dd/yyyy</option>
                                                        <option value="deactive">dd M,yyyy</option>
                                                        
                                                    </select>
                                                </div>
                                            
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-4" style="margin-left: 72px;">
                                            <div class="form-group" >
                                                <label class="fw-700 fs-16 form-label">Application Allignment</label>
                                                <select class="form-select" type="text" name="application_alignment"
                                                data-placeholder="Choose a Category" tabindex="1">
                                                    <option value="active">Left to Right</option>
                                                    <option value="deactive">Right to Left</option>
                                                </select>
                                            </div>

                                        </div>
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="fw-700 fs-16 form-label">powered_by_text</label>
                                                    <input type="text" name="powered_by_text" class="form-control" placeholder="category_name">
                                                </div>
                                            </div>



                                            <!--/span-->
                                            <div class="col-md-4" style="margin-left: 72px;">
                                                <div class="form-group">
                                                    <label class="fw-700 fs-16 form-label">footer_text</label>
                                                    <input type="text" name="footer_text" class="form-control" placeholder="Lorem Ipsum Text...">
                                                    @error('end_date')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>


                                <div class="row">

                                    <div class="col-md-3">
                                        <h4 class="box-title mt-20">Uploaded Image</h4>
                                        <div class="product-img text-start">
                                            <img src="../images/product/product-9.png" alt="" id="blah" class="mb-15">
    
                                            <div class="btn btn-info mb-20" >
                                                <label class="fw-700 fs-16 form-label">Image</label>
                                                <input type="file" name="image1" id="" class="upload">
                                            </div>
                                            {{-- <button type="submit" class="btn btn-success">submit</button> --}}

                                            
                                        </div>
                                    </div>

                                    <div class="col-md-3" style="margin-left: 150px">
                                        <h4 class="box-title mt-20">Uploaded Logo</h4>
                                        <div class="product-img text-start">
                                            <img src="../images/product/product-9.png" alt="" id="blah" class="mb-15">

                                            <div class="btn btn-info mb-20">
                                                <label class="fw-700 fs-16 form-label">Logo</label>
                                                <input type="file" name="image2" id="" class="upload">
                                            </div>

                                        </div>
                                    </div> 

                                </div> 
                            </div>
                            <button type="submit" class="btn btn-success">submit</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>

@endsection

@section('script')
<script>
    imgInp.onchange = evt => {
    const [file] = imgInp.files
    if (file) {
    blah.src = URL.createObjectURL(file)
    }
}
</script>


@endsection
