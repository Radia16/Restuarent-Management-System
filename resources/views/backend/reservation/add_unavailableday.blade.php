
@extends('admin.main_master')

@section('content')
<div class="box_p"  >
    <div class="box-header with-border">

    </div>
    <!-- /.box-header -->


    <div class="box-body">
      <div class="row">
        <div class="col-6">

          <form action="{{route('unavailable_day.store')}}" method="POST">

                @csrf
                <h2 class="box-title">Add Unavailable Day</h2>

                <div class="mb-3">
                  <label for="" class="col-form-label">Outlet_id</label>
                   {{-- <input type="text" class="form-control" id="recipient-name">  --}}
                   <select class="form-select" type="text" name="outlet_id"  >
                    @foreach($outletset as $outlet)
                      <option value="{{ $outlet->id }}"> {{ $outlet->id }}</option>
                  @endforeach 
                 </select>
                </div>  


            <div class="form-group row">
              <label for="example-search-input" class="col-sm-2 col-form-label">unavailable_date</label>
              <div class="col-sm-10">
                <input class="form-control" type="date" name="unavailable_date" id="">
              </div>
            </div>



            <div class="form-group row">
              <label for="example-email-input" class="col-sm-2 col-form-label">available_time</label>
              <div class="col-sm-10">
                <input class="form-control" type="time" value="" name="available_time" id="">
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
@endsection




















































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































