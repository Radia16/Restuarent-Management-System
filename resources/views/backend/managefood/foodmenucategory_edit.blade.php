@extends('admin.main_master')

@section('content')

    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <section class="purches">

                <div class="card-header">
                    <h2>Add Foodmenu Category Update</h2>
                </div>
                <div class="card-body">

                    <form action="{{ route('foodmenucategory.update') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $foodmenu_edit->id }}">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Outlet ID</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" value="{{ $foodmenu_edit->outlet_id }}"
                                    name="outlet_id" id="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-email-input" class="col-sm-2 col-form-label">Description</label>
                            <div class="col-sm-10">
                                <div class="form-group">
                                  <textarea rows="5" class="form-control" placeholder="Description" name="description"></textarea>
                                </div>
                               
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>
            </section>
        </div>

    </div>

@endsection
