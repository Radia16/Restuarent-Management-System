@extends('admin.main_master')

@section('content')
    <section class="purches">
        <div class="card-body">
            <h1>Update Purchase</h1>
            <div class="row">
              <div class="col-lg-12">

                <form action="{{route('purchase.update')}}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{$purchase_edit->id}}">
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Outlet_Id</label>
                        <div class="col-sm-10">
                          <input class="form-control" type="text" value="{{$purchase_edit->outlet_id}}" name="outlet_id" id="">
                        </div>
                    </div>
                    <div class="form-group row">
                    <label for="example-search-input" class="col-sm-2 col-form-label">Reference_no</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" value="{{$purchase_edit->reference_no}}" name="reference_no" id="">
                    </div>
                    </div>

                    <div class="form-group row">
                    <label for="example-email-input" class="col-sm-2 col-form-label">Supplier</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" value="{{$purchase_edit->supplier}}" name="supplier" id="">
                    </div>
                    </div>

                    <div class="form-group row">
                    <label for="example-email-input" class="col-sm-2 col-form-label">Ingredient</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" value="{{$purchase_edit->ingredients}}" name="ingredients" id="">
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="example-tel-input" class="col-sm-2 col-form-label">Date</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="date" value="{{$purchase_edit->date}}" name="date" id="">
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="example-password-input" class="col-sm-2 col-form-label">Grand_Total</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" value="{{$purchase_edit->grand_total}}" name="grand_total" id="">
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="example-number-input" class="col-sm-2 col-form-label">Paid</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" value="{{$purchase_edit->paid}}" name="paid" id="">
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="example-datetime-local-input" class="col-sm-2 col-form-label">Due</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" value="{{$purchase_edit->due}}" name="due" id="">
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="example-date-input" class="col-sm-2 col-form-label">Sn</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" value="{{$purchase_edit->sn}}" name="sn" id="">
                    </div>
                    </div>
                     <button type="submit" class="btn btn-primary">Submit</button>
                </form>
             </div>
            </div>
        </div>
    </section>
@endsection



