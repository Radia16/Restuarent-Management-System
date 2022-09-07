
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
        
   
        <form action="{{route('tab.store')}}" method="POST" enctype="multipart/form-data">
          @csrf

    
          

          <div class="mb-3">
              <label for="" class="col-form-label">Outlet_id</label>
               {{-- <input type="text" class="form-control" id="recipient-name">  --}}
               <select class="form-select" type="text" name="outlet_id"  >
                @foreach($outlet_view as $outlet)
                  <option value="{{ $outlet->id }}"> {{ $outlet->id }}</option>
              @endforeach 
             </select>
            </div>  




            
          <div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">table_name</label>
                  <div class="col-sm-10">
                      <input class="form-control" type="integer" name="table_name"  id="example-text-input">
                  </div>
              </div>



          <div class="form-group row">
              <label for="example-search-input" class="col-sm-2 col-form-label"> capacity</label>
              <div class="col-sm-10">
                  <input class="form-control" type="text" name="capacity"  id="" placeholder="Enter Name" required="">
              </div>
          </div>


          
          <div class="form-group row">
            <label for="example-search-input" class="col-sm-2 col-form-label"> position</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="position"  id="" placeholder="Enter Name" required="">
            </div>
        </div>


          <div class="form-group row">
              <label for="example-search-input" class="col-sm-2 col-form-label"> icon </label>
              <div class="col-sm-10">
                  <input class="form-control" type="file" name="icon"  id="" placeholder="Enter Name" required="">
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
          
     
          <form action="{{url('tab/update')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')


              <input type="text" name="tab_id" id="tab_id" value="" >
      
            
  
            <div class="mb-3">
                <label for="" class="col-form-label">Outlet_id</label>
                 {{-- <input type="text" class="form-control" id="recipient-name">  --}}
                 <select class="form-select" type="text" id="outlet_id" name="outlet_id"  >
                  @foreach($outlet_view as $outlet)
                    <option value="{{ $outlet->id }}"> {{ $outlet->id }}</option>
                @endforeach 
               </select>
              </div>  
  
  
  
  
              
            <div class="form-group row">
                <label for="example-text-input" class="col-sm-2 col-form-label">table_name</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="integer" name="table_name"  id="table_name">
                    </div>
                </div>
  
  
  
            <div class="form-group row">
                <label for="example-search-input" class="col-sm-2 col-form-label"> capacity</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" name="capacity"  id="capacity" placeholder="Enter Name" required="">
                </div>
            </div>



            
            <div class="form-group row">
                <label for="example-search-input" class="col-sm-2 col-form-label"> position</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" name="position"  id="position" placeholder="Enter Name" required="">
                </div>
            </div>
  
  
  
 
            <div class="form-group row">
                <label for="example-search-input" class="col-sm-2 col-form-label"> icon </label>
                <div class="col-sm-10">
                    <input class="form-control" type="file" name="icon"  id="icon" placeholder="Enter Name" required="">
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
                        <h3 class="box-title"> View Table </h3>
                    </div>
                <div class="col-lg-6" >
                    <button type="submit" class="btn btn-primary" style="margin-left:500px">
                   
             <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Add Table
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
                                    aria-label="Name: activate to sort column descending" style="width: 187.688px;">outlet_id</th>

                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending"
                                    style="width: 293.969px;">table_name</th>

                                
                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending"
                                    style="width: 293.969px;">capacity</th>

                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending"
                                    style="width: 293.969px;">Position</th>

                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending"
                                    style="width: 293.969px;">icon</th>

                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending"
                                    style="width: 293.969px;">Action</th>

                                 

                                   
                                </tr>
                            </thead>



                                <tbody>

                                    @foreach($tab_view as $tab)
                                      <tr role="row" class="odd">
                                        <td>{{ $tab['outlets']['id']}}</td>
                                        <td>{{ $tab->table_name }}</td> 
                                        <td>{{ $tab->capacity }}</td>
                                        <td>{{ $tab->position }}</td>

                                        {{-- <td>{{ $tab->icon }}</td> --}}
                                        <td><img src="{{asset($tab->icon)}}" alt=""></td>
                                        

                                        <td>
                                           <button type="button" value="{{$tab->id}}" class="btn btn-primary editbtn btn-sm">Edit</button>
                                         
                                             <a href="" class="btn btn-dark" title="Edit">Delete</a>
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
    var tab_id =$(this).val();
    // alert(tab_id);

    $('#editModal').modal('show');
$.ajax({


type:"GET",
url:"/tab/edit/"+tab_id,
success:function(response){
// console.log(response);


$('#tab_id').val(tab_id);
$('#outlet_id').val(response.tab.outlet_id);
$('#table_name').val(response.tab.table_name);
$('#capacity').val(response.tab.capacity);
$('#position').val(response.tab.position);

// $('#icon').val(response.tab.icon);




}

});

});

});

</script>


    
@endsection