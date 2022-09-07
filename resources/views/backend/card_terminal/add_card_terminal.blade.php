card Ter


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
        
   
        <form action="{{route('card_terminal.store')}}" method="POST" enctype="multipart/form-data">
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
                <label for="example-search-input" class="col-sm-2 col-form-label"> card_terminal_name </label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" name="card_terminal_name"  id="name" placeholder="Enter Name" required="">
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







{{-- Edit Terminal Start --}}




<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit & Update Tab</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          
     
          <form action="{{url('card_terminal/update')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')


              <input type="text" name="card_terminal_id" id="card_terminal_id" value="" >
      
            
  
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
                        <input class="form-control" type="text" name="card_terminal_name" id="card_terminal_name" placeholder="Enter Name" required="">
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












{{-- Edit Terminal End --}}




















{{-- *************************************Tab View************************************************************ --}}
<div class="row">

       
    <div class="col-lg-12">
        <div class="box">



            <div class="box-header with-border">
            <div class="row">
                <div class="col-lg-6">
                    <h3 class="box-title"> View Terminal </h3>
                </div>
            <div class="col-lg-6" >
                <button type="submit" class="btn btn-primary" style="margin-left:500px">
               
         <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
Add Terminal Name
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
                                style="width: 293.969px;">Termial Name</th>

                              

                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending"
                                style="width: 293.969px;">Action</th>

                             
  {{-- $table->unsignedBigInteger('outlet_id');
            $table->string('company_name');
            $table->string('commission');
            $table->string('address'); --}}

                               
                            </tr>
                        </thead>



                            <tbody>

                                @foreach ($card_terminal_view as $card_terminal )
                                  <tr role="row" class="odd">
                                    <td>{{ $card_terminal['outlets']['id']}}</td>
                                    <td>{{ $card_terminal->card_terminal_name }}</td> 
                                  
                                

                         

                                   
                                    <td>
                                        <button type="button" value="{{$card_terminal->id}}" class="btn btn-primary editbtn btn">Edit</button>
                                         <a href="{{ route('card_terminal.delete',$card_terminal->id) }}" class="btn btn-dark" title="Edit">Delete</a>
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
    var card_terminal_id =$(this).val();
    // alert(tab_id);

    $('#editModal').modal('show');
$.ajax({


type:"GET",
url:"/card_terminal/edit/"+card_terminal_id,
success:function(response){
// console.log(response);


 $('#card_terminal_id').val(card_terminal_id);
$('#outlet_id').val(response.card_terminal_edit.outlet_id);
$('#card_terminal_name').val(response.card_terminal_edit.card_terminal_name);

// $('#icon').val(response.tab.icon);




}

});

});

});

</script>


    
@endsection
