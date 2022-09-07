<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>
    @extends('admin.main_master');

<div class="container">


<h1>Laravel Modal</h1>





<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
  </button>
  
  <!--Start Add Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Tab</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          
     
          <form action="{{route('tab.store')}}" method="POST" >
            @csrf

            {{--  APATOTO  --}}

{{-- 
            <div class="form-group row">
            <label for="example-text-input" class="col-sm-2 col-form-label">Outlet_id</label>
                <div class="col-sm-10">
                    <input class="form-control" type="integer" name="outlet_id"  id="example-text-input">
                </div>
            </div> --}}


            

            <div class="mb-3">
                <label for="" class="col-form-label">Outlet_id</label>
                 {{-- <input type="text" class="form-control" id="recipient-name">  --}}
                 <select class="form-select" type="text" name="outlet_id"  id="">
                  @foreach($outletset as $outlet)
                    <option value="{{ $outlet->id }}"> {{ $outlet->id }}</option>
                @endforeach 
               </select>
              </div>  


              {{-- <div class="mb-3">
                <label for="" class="col-form-label">Payment Method Name:</label>
                {{-- <input type="text" class="form-control" id="recipient-name"> --}}
                {{-- <select class="form-select" type="text" name="payment_method_id"  id="">
                  @foreach($paymethodset as $pay)
                    <option value="{{ $pay->id }}"> {{ $pay->name }}</option>
                @endforeach
              </select>
              </div> --}}



              
            <div class="form-group row">
                <label for="example-text-input" class="col-sm-2 col-form-label">table_name</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="integer" name="table_name"  id="example-text-input">
                    </div>
                </div>













              

              {{-- $table->id();
              $table->unsignedBigInteger('outlet_id');
              $table->string('table_name');
              $table->string('capacity');
              $table->string('icon');
              $table->timestamps();
              
--}}




            <div class="form-group row">
                <label for="example-search-input" class="col-sm-2 col-form-label"> capacity</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" name="capacity"  id="" placeholder="Enter Name" required="">
                </div>
            </div>



            <div class="form-group row">
                <label for="example-search-input" class="col-sm-2 col-form-label"> icon </label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" name="icon"  id="" placeholder="Enter Name" required="">
                </div>
            </div>




            <div class="box-footer">
            <button type="submit" class="btn btn-success pull-right">Submit</button>
            </div>

    </form>
          
        </div>
        {{-- <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div> --}}
      </div>
    </div>
  </div>
 <!--End Add Modal -->










</div>

</body>
</html>