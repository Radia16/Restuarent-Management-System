@extends('admin.main_master');

@section('content');




<!--Start Add Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Third Party Customer</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
   
        <form action="{{route('third_party_customer.store')}}" method="POST" enctype="multipart/form-data">
          @csrf

    
          
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
                <label for="example-search-input" class="col-sm-2 col-form-label"> company_name </label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" name="company_name"  id="name" placeholder="Enter Name" required="">
                </div>
            </div>


            {{-- $table->unsignedBigInteger('outlet_id');
            $table->string('company_name');
            $table->string('commission');
            $table->string('address'); --}}


            <div class="form-group row">
                <label for="example-search-input" class="col-sm-2 col-form-label"> commission </label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" name="commission"  id="name" placeholder="Enter Name" required="">
                </div>
            </div>


            <div class="form-group row">
                <label for="example-search-input" class="col-sm-2 col-form-label"> address </label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" name="address"  id="name" placeholder="Enter Name" required="">
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






{{-- Edit Model Start --}}


<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit & Update Tab</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          
     
          <form action="{{url('third_party_customer/update')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')


              <input type="text" name="third_party_customer_id" id="third_party_customer_id" value="" >
      
            
  
              <div class="mb-3">
                <label for="" class="col-form-label">Outlet_id</label>
                 {{-- <input type="text" class="form-control" id="recipient-name">  --}}
                 <select class="form-select" type="text" name="outlet_id" id="outlet_id" >
                  @foreach($outletset as $outlet)
                    <option value="{{ $outlet->id }}"> {{ $outlet->id }}</option>
                @endforeach 
               </select>
              </div>  
                
                <div class="form-group row">
                    <label for="example-search-input" class="col-sm-2 col-form-label"> Company_name </label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" name="company_name" id="company_name" placeholder="Enter Name" required="">
                    </div>
                </div>



                <div class="form-group row">
                    <label for="example-search-input" class="col-sm-2 col-form-label"> Commission </label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" name="commission" id="commission" placeholder="Enter Name" required="">
                    </div>
                </div>


                <div class="form-group row">
                    <label for="example-search-input" class="col-sm-2 col-form-label"> Address </label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" name="address" id="address" placeholder="Enter Name" required="">
                    </div>
                </div>


                {{-- $table->unsignedBigInteger('outlet_id');
                $table->string('company_name');
                $table->string('commission');
                $table->string('address'); --}}

    

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






{{-- Edit Model End --}}



{{-- *************************************Tab View************************************************************ --}}
<div class="row">

       
    <div class="col-lg-12">
        <div class="box">



            <div class="box-header with-border">
            <div class="row">
                <div class="col-lg-6">
                    <h3 class="box-title"> View Third Party Customer </h3>
                </div>
            <div class="col-lg-6" >
                <button type="submit" class="btn btn-primary" style="margin-left:500px">
               
         <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
Add third_party_customer
</button>


                </button>
            </div>
            </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="table-responsive">
                <div id="example_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                    <table id="example"
                    class="table table-bordered table-hover display nowrap margin-top-10 w-p100 dataTable" role="grid" aria-describedby="example_info">
                        <thead>
                            <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending"
                                aria-label="Name: activate to sort column descending" style="width: 187.688px;">Outlet ID</th>

                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending"
                                style="width: 293.969px;">Company_Name</th>

                                <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending"
                                aria-label="Name: activate to sort column descending" style="width: 187.688px;">Commission</th>

                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending"
                                style="width: 293.969px;">Address</th>

                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending"
                                style="width: 293.969px;">Action</th>

                             
  {{-- $table->unsignedBigInteger('outlet_id');
            $table->string('company_name');
            $table->string('commission');
            $table->string('address'); --}}

                               
                            </tr>
                        </thead>



                            <tbody>

                                @foreach ($third_party_customer_view as $third_party_customer )
                                  <tr role="row" class="odd">
                                    <td>{{ $third_party_customer['outlets']['id']}}</td>
                                    <td>{{ $third_party_customer->company_name }}</td> 
                                    <td>{{ $third_party_customer->commission }}</td> 
                                    <td>{{ $third_party_customer->address }}</td> 
                                

                         

                                   
                                    <td>
                                        <button type="button" value="{{$third_party_customer->id}}" class="btn btn-primary editbtn btn">Edit</button>
                                         <a href="{{ route('third_party_customer.delete',$third_party_customer->id) }}" class="btn btn-dark" title="Edit">Delete</a>
                                      </td> 




                                  </tr>
                                 @endforeach

                                </tbody>


                        
                    </table>
                </div>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
    </div>
{{--  main colum end for 12  --}}
</div>
    {{--  main row end  --}}

@endsection

    


{{-- **************************************Edit ****************************************************** --}}

@section('scripts');



<script>


$(document).ready(function (){


$(document).on('click','.editbtn', function (){
    var third_party_customer_id =$(this).val();
    // alert(tab_id);

    $('#editModal').modal('show');
$.ajax({


type:"GET",
url:"/third_party_customer/edit/"+third_party_customer_id,
success:function(response){
// console.log(response);


$('#third_party_customer_id').val(third_party_customer_id);
$('#outlet_id').val(response.third_party_customer_edit.outlet_id);
$('#company_name').val(response.third_party_customer_edit.company_name);
$('#commission').val(response.third_party_customer_edit.commission);
$('#address').val(response.third_party_customer_edit.address);

// $('#icon').val(response.tab.icon);




}

});

});

});

</script>


    
@endsection
