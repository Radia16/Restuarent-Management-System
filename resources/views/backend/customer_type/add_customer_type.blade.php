@extends('admin.main_master');

@section('content');




<!--Start Add Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Tab</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
   
        <form action="{{route('customer_type_list.store')}}" method="POST" enctype="multipart/form-data">
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
                <label for="example-search-input" class="col-sm-2 col-form-label"> Customer Type </label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" name="customer_type"  id="name" placeholder="Enter Name" required="">
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





<!--Start Edit Modal -->



<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit & Update Tab</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          
     
          <form action="{{url('customer_type_list/update')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')


              <input type="text" name="customer_type_id" id="customer_type_id" value="" >
      
            
  
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
                    <label for="example-search-input" class="col-sm-2 col-form-label"> Customer Type </label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" name="customer_type" id="customer_type" placeholder="Enter Name" required="">
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



<!--End Edit Modal -->






{{-- *************************************Tab View************************************************************ --}}
<div class="row">

       
    <div class="col-lg-12">
        <div class="box">



            <div class="box-header with-border">
            <div class="row">
                <div class="col-lg-6">
                    <h3 class="box-title"> View Customer Type </h3>
                </div>
            <div class="col-lg-6" >
                <button type="submit" class="btn btn-primary" style="margin-left:500px">
               
         <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
Add Customer Type
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
                                style="width: 293.969px;">Customer Type</th>


                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending"
                                style="width: 293.969px;">Action</th>

                             

                               
                            </tr>
                        </thead>



                            <tbody>

                                @foreach ($customer_type_view as $customer_type )
                                  <tr role="row" class="odd">
                                    <td>{{ $customer_type['outlets']['id']}}</td>
                                    <td>{{ $customer_type->customer_type }}</td> 
                                

                         

                                  
                                    <td>
                                        <button type="button" value="{{$customer_type->id}}" class="btn btn-primary editbtn btn">Edit</button>
                                        <a href="{{ route('customer_type_list.delete',$customer_type->id) }}" class="btn btn-dark" title="Edit">Delete</a>
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
    var customer_type_id =$(this).val();
    // alert(tab_id);

    $('#editModal').modal('show');
$.ajax({


type:"GET",
url:"/customer_type_list/edit/"+customer_type_id,
success:function(response){
// console.log(response);


$('#customer_type_id').val(customer_type_id);
$('#outlet_id').val(response.customer_type.outlet_id);
$('#customer_type').val(response.customer_type.customer_type);

// $('#icon').val(response.tab.icon);




}

});

});

});

</script>


    
@endsection
