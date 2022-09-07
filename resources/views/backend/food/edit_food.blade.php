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
<div class="container-full">
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
                        <form action="{{ route('food.update')}}"  method="POST" enctype='multipart/form-data'>
                            @csrf
                            <input type="hidden" name="id" value="{{$food_edit->id}}">
                            <input type="hidden" name="old_image" value="{{$food_edit->image}}">

                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        <label class="fw-700 fs-16 form-label">food_category_id</label>
                                        <input type="number" name="food_category_id" value="{{$food_edit->food_category_id}}" class="form-control" placeholder="food_category_id">
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-4" style="    margin-left: 72px;">
                                        <div class="form-group">
                                        <label class="fw-700 fs-16 form-label">Offer Start date</label>
                                        <input type="date" name="start_date"  value="{{$food_edit->start_date}}" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="fw-700 fs-16 form-label">Select Kitchen</label>
                                            <select class="form-select" type="text" name="kichen"  value="{{$food_edit->kichen}}" data-placeholder="Choose a Category" tabindex="1">
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

                                        <div class="col-md-4" style="    margin-left: 72px;">
                                            <div class="form-group">
                                                <label class="fw-700 fs-16 form-label">Offer End Date</label>
                                                <input type="date" name="end_date"  value="{{$food_edit->end_date}}" class="form-control" placeholder="Lorem Ipsum Text...">

                                                </select>
                                            </div>
                                        </div>
                                </div>
                                <!--/row-->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        <label class="fw-700 fs-16 form-label">Food Name</label>
                                        <input type="text" name="food_name"  value="{{$food_edit->food_name}}" class="form-control" placeholder="Product Name">
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-4" style="    margin-left: 72px;">
                                        <div class="form-group">
                                            <label class="fw-700 fs-16 form-label">Cooking time</label>
                                            <input type="time" name="cooking_time"  value="{{$food_edit->cooking_time}}" class="form-control" placeholder="Product Name">
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        <label class="fw-700 fs-16 form-label">Component</label>
                                        <input type="text" name="component"  value="{{$food_edit->component}}" class="form-control" placeholder="Product Name">
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-4" style="    margin-left: 72px;">
                                        <div class="form-group">
                                            <label class="fw-700 fs-16 form-label">Vat</label>
                                            <input type="number" name="vat"  value="{{$food_edit->vat}}" class="form-control" placeholder="Product Name">
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        <label class="fw-700 fs-16 form-label">Notes</label>
                                        <input type="text" name="notes"  value="{{$food_edit->notes}}" class="form-control" placeholder="Product Name">
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-4" style="    margin-left: 72px;">
                                        <div class="form-group">
                                            <label class="fw-700 fs-16 form-label">Offer Rate</label>
                                            <input type="number" name="offer_rate"  value="{{$food_edit->offer_rate}}" class="form-control" placeholder="Product Name">
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        <label class="fw-700 fs-16 form-label">Description</label>
                                        <input type="text" name="description"  value="{{$food_edit->description}}" class="form-control" placeholder="Product Name">
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-4" style="    margin-left: 72px;">
                                        <div class="form-group">
                                            <label class="fw-700 fs-16 form-label">Status</label>
                                            <select class="form-select" type="text" name="status"  value="{{$food_edit->status}}" data-placeholder="Choose a Category" tabindex="1">
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
                                        <input type="text" name="outlet_id"  value="{{$food_edit->outlet_id}}" class="form-control" placeholder="Product Name">
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-4" style="margin-left: 480px; margin-left: 115px;"><br>
                                        <div class="form-group">
                                           <p>Print Formet:</p><br>
                                           <input type="radio" id="html" name="manu_type"  value="{{$food_edit->manu_type}}" value="HTML">
                                           <label for="html">No Print</label>
                                           <input type="radio" id="css" name="manu_type"  value="{{$food_edit->manu_type}}" value="CSS">
                                           <label for="css">56mm</label>
                                           <input type="radio" id="javascript" name="manu_type"  value="{{$food_edit->manu_type}}" value="JavaScript">
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
                                                <input type="file" name="image"  value="{{$food_edit->image}}" id="imgInp" class="upload">
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
