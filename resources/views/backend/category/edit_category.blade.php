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
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="me-auto">
                <h4 class="page-title">Add/Edit Category</h4>

            </div>

        </div>
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="row">
          <div class="col-12">
            <div class="box">
              <div class="box-body">
                {{-- <form action="#"> --}}
                    <form action="{{ route('category.update') }}" method="POST" enctype="multipart/form-data">

                        @csrf

                        <input type="hidden" name="id" value="{{$category_edit->id}}">
                        <input type="hidden" name="old_image" value="{{$category_edit->category_image}}">


                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                  <label class="fw-700 fs-16 form-label">Category Name</label>
                                  <input type="text" name="category_name" value="{{$category_edit->category_name}}" class="form-control" placeholder="category_name">
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-4" style="    margin-left: 72px;">
                                <div class="form-group">
                                   <label class="fw-700 fs-16 form-label">Offer Start date</label>
                                   <input type="date" name="start_date" value="{{$category_edit->start_date}}" class="form-control" placeholder="">
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <!--/row-->
                        <!--/row-->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="fw-700 fs-16 form-label">Parents Category</label>
                                    <select class="form-select" type="text" name="parent_name" value="{{$category_edit->parent_name}}"  data-placeholder="Choose a Category" tabindex="1">
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
                                        <input type="date" name="end_date" value="{{$category_edit->end_date}}" class="form-control" placeholder="Lorem Ipsum Text...">

                                        </select>
                                    </div>
                                </div>


                        </div>
                        <!--/row-->


                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                  <label class="fw-700 fs-16 form-label">Outlet ID</label>
                                  <input type="number" name="outlet_id" value="{{$category_edit->outlet_id}}" class="form-control" placeholder="Product Name">
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-4" style="    margin-left: 72px;">
                                <div class="form-group">
                                    <label class="fw-700 fs-16 form-label">Status</label>
                                    <select class="form-select" type="text" name="status" value="{{$category_edit->status}}" data-placeholder="Choose a Category" tabindex="1">
                                        <option value="active">select</option>
                                        <option value="active">active</option>
                                        <option value="deactive">deactive</option>

                                    </select>
                                </div>
                            </div>
                            <!--/span-->
                        </div>

                        <div class="row">

                        </div>
                        <!--/row-->
                        <div class="row">

                            <div class="col-md-3">
                                <h4 class="box-title mt-20">Uploaded Image</h4>
                                <div class="product-img text-start">
                                    <img src="../images/product/product-9.png" alt="" id="blah" class="mb-15">

                                    <div class="btn btn-info mb-20">
                                        <label class="fw-700 fs-16 form-label">category image</label>
                                        <input type="file" name="category_image" value="{{$category_edit->category_image}}" id="imgInp" class="upload">
                                    </div>
                                    <button type="submit" class="btn btn-success">submit</button>

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
