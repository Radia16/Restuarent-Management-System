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
                <h4 class="page-title">Add/Edit Food</h4>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="box">
                    <div class="box-body">
                        <form action="{{ route('food.store')}}"  method="POST" enctype='multipart/form-data'>
                            @csrf
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="fw-700 fs-16 form-label">food_category_id</label>
                                            <input type="number" name="food_category_id" class="form-control" placeholder="food_category_id">
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-4" style="margin-left: 72px;">
                                        <div class="form-group">
                                            <label class="fw-700 fs-16 form-label">Offer Start date</label>
                                            <input type="date" name="start_date" class="form-control" placeholder="">
                                            @error('start_date')
                                            <span class="text-danger">{{ $message }}</span>
                                             @enderror
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <!--/row-->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="fw-700 fs-16 form-label">Select Kitchen</label>
                                            <select class="form-select" type="text" name="kichen" data-placeholder="Choose a Category" tabindex="1">
                                                <option value="Category 1">bangladesh </option>
                                                <option value="Category 2">India </option>
                                                <option value="Category 3">Pakistan </option>
                                                <option value="Category 4">Maldib </option>
                                                <option value="Category 1">Japan </option>
                                                <option value="Category 2">Votan</option>
                                                <option value="Category 3">Duvai</option>
                                                <option value="Category 4">Sumaliya</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-4" style="margin-left: 72px;">
                                        <div class="form-group">
                                            <label class="fw-700 fs-16 form-label">Offer End Date</label>
                                            <input type="date" name="end_date" class="form-control" placeholder="Lorem Ipsum Text...">
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
                                            <label class="fw-700 fs-16 form-label">Food Name</label>
                                            <input type="text" name="food_name" class="form-control" placeholder="Product Name">
                                            @error('food_name')
                                            <span class="text-danger">{{ $message }}</span>
                                             @enderror
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-4" style="margin-left: 72px;">
                                        <div class="form-group">
                                            <label class="fw-700 fs-16 form-label">Cooking time</label>
                                            <input type="time" name="cooking_time" class="form-control" placeholder="Product Name">
                                            @error('cooking_time')
                                            <span class="text-danger">{{ $message }}</span>
                                             @enderror
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="fw-700 fs-16 form-label">Component</label>
                                            <input type="text" name="component" class="form-control" placeholder="Product Name">
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-4" style="margin-left: 72px;">
                                        <div class="form-group">
                                            <label class="fw-700 fs-16 form-label">Vat</label>
                                            <input type="number" name="vat" class="form-control" placeholder="0:00%">
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="fw-700 fs-16 form-label">Notes</label>
                                            <input type="text" name="notes" class="form-control" placeholder="Product Name">
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-4" style="margin-left: 72px;">
                                        <div class="form-group">
                                            <label class="fw-700 fs-16 form-label">Offer Rate</label>
                                            <input type="number" name="offer_rate" class="form-control" placeholder="offer rate">
                                            @error('offer_rate')
                                            <span class="text-danger">{{ $message }}</span>
                                             @enderror
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="fw-700 fs-16 form-label">Description</label>
                                            <input type="text" name="description" class="form-control" placeholder="description">
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-4" style="margin-left: 72px;">
                                        <div class="form-group">
                                            <label class="fw-700 fs-16 form-label">Status</label>
                                            <select class="form-select" type="text" name="status"
                                            data-placeholder="Choose a Category" tabindex="1">
                                                <option value="active">active</option>
                                                <option value="deactive">deactive</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        <label class="fw-700 fs-16 form-label">Outlet ID</label>
                                        <input type="text" name="outlet_id" class="form-control" placeholder="Product Name">
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-4" style="margin-left: 480px; margin-left: 115px;"><br>
                                        <div class="form-group">
                                            <p>Print Formet:</p><br>
                                            <input type="radio" id="html" name="manu_type" value="HTML">
                                            <label for="html">No Print</label>
                                            <input type="radio" id="css" name="manu_type" value="CSS">
                                            <label for="css">56mm</label>
                                            <input type="radio" id="javascript" name="manu_type" value="JavaScript">
                                            <label for="javascript">80mm</label>
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <!--/row-->
                                <div class="row">
                                    <div class="col-md-3">
                                        <h4 class="box-title mt-20">Uploaded Image</h4>
                                        <div class="product-img text-start">
                                            <img src="../images/product/product-9.png" alt="" id="blah" class="mb-15">

                                            <div class="btn btn-info mb-20">
                                                <label class="fw-700 fs-16 form-label">Image</label>
                                                <input type="file" name="image" id="imgInp" class="upload">
                                            </div>
                                            <button type="submit" class="btn btn-success">submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
