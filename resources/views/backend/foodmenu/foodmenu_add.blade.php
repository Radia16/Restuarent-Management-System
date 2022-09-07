@extends('admin.main_master')
@section('content')
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <div class="box">
            
                <div class="box-header with-border">
                    <h3 class="box-title">Add Food Menu</h3>
                </div>
                <!-- /.box-header -->

              
                    <div class="box-body">


                    <form action="{{ route('menu.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Outlet ID</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" value="{{old('outlet_id')}}" name="outlet_id" id="">
                                @error('outlet_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>
                           
                        </div>
                        <div class="form-group row">
                            <label for="example-search-input" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="name" id="" value="{{old('name')}}">
                                @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>
                            
                        </div>

                        <div class="form-group row">
                            <label for="example-search-input" class="col-sm-2 col-form-label">Code</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="code" id="" value="{{old('code')}}">
                                @error('code')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>
                           
                        </div>

                        <div class="form-group row">
                            <label for="example-email-input" class="col-sm-2 col-form-label">Category</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="category" id="" value="{{old('category')}}">
                               
                                    @error('category')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                           
                        </div>

                        <div class="form-group row">
                            <label for="example-search-input" class="col-sm-2 col-form-label">Ingredient Consumptions</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="ingredient_consumptions" id="" value="{{old('ingredient_consumptions')}}">
                                @error('ingredient_consumptions')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>
                            
                        </div>


                        {{-- <div class="form-group row">
                                <label for="example-search-input" class="col-sm-2 col-form-label">Sale Price</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="sale_price" id="">
                            </div> 
                            </div> --}}


                        <div class="form-group row">
                            <label for="example-search-input" class="col-sm-2 col-form-label">Vat (%)</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="number" name="vat" id="" value="{{old('vat')}}">
                                @error('vat')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>
                           
                        </div>


                        <div class="form-group row">
                            <label for="example-email-input" class="col-sm-2 col-form-label">Description</label>
                            <div class="col-sm-10">
                                <div class="form-group">
                                {{-- <textarea rows="5" class="form-control" placeholder="Description" name="description"></textarea> --}}
                                <input class="form-control" type="text" placeholder="Description"name="description" id="" value="{{old('description')}}">
                                @error('description')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror

                                </div>
                            </div>
                        </div>


                        {{-- <div class="form-group row">
                            <label for="example-email-input" class="col-sm-2 col-form-label">Description</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="description" id="" value="{{old('description')}}">
                                @error('description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>
                           
                        </div> --}}

                        <div class="form-group row">
                            <label for="example-email-input" class="col-sm-2 col-form-label">Image</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="file" name="featured_photo">
                                @error('featured_photo')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>

                            
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

            </div>
                <!-- /.box-body -->
                
            </div>
            <!-- /.box -->
         
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->



@endsection
