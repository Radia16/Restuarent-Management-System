@extends('admin.main_master')

@section('content')

    <div class="row">
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Varient</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                    </div>
                    <form action="{{ route('foodvarient.store') }}" method="POST" enctype='multipart/form-data' >
                        <div class="modal-body">
                            @csrf
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Food Name:</label>
                                <select type="text" name="food_name" class="form-control"  >
                                    <option value="" selected="" disabled="">Select Food Name </option>
                                    @foreach($foodvarient as $item)
                                    <option value="{{ $item->id }}"> {{ $item->id }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="message-text" class="col-form-label">Varient Name:</label>
                                <input type="text" name="food_varient" class="form-control" id="recipient-name">
                            </div>
                            <div class="mb-3">
                                <label for="message-text" class="col-form-label">Price:</label>
                                <input type="text" name="price" class="form-control" id="recipient-name">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
{{-- //////////////////////////////////////////////////////////////edite////////////////////////////////////////////////////////// --}}
<div class="row">
    <div class="modal fade" id="edit_food_variant" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Varient</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                </div>
                <form action="{{url('food/varient/update')}}" method="POST" enctype='multipart/form-data' >
                        <div class="modal-body">
                                @csrf

                                @method('PUT')
                                <input type="text" name="tab_id" id="tab_id" value="" >


                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Food Name:</label>
                                    <select type="text" name="food_name" id="edit_food_name" class="form-control"  >
                                        <option value="" selected="" disabled="">Select Food Name </option>
                                        @foreach($foodvarient as $item)
                                            <option value="{{ $item->id }}"> {{ $item->id }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="message-text" class="col-form-label">Varient Name:</label>
                                    <input type="text"  id="edit_food_varient" name="food_varient" class="form-control" >
                                </div>
                                <div class="mb-3">
                                    <label for="message-text" class="col-form-label">Price:</label>
                                    <input type="text" id="edit_price" name="price" class="form-control" >
                                </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>

    {{-- /////////////////////////////////////////////////////////////view///////////////////////////////////////////////////// --}}
    <div class="row">
            <div class="col-lg-12">
                <div class="box">
                    <div class="box-header with-border">
                            <h3 class="box-title">Hover Export Data Table</h3>
                            <button style="margin-left: 1052px;" type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal" data-bs-whatever="@mdo">Add Food Varient</button>
                    </div>
                         <div class="box-body">
                            <div class="table-responsive">
                                <div id="example_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                                    <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100 dataTable"
                                    role="grid" aria-describedby="example_info">
                                        <thead>
                                           <tr>
                                            <th>id</th>
                                            <th>food_name</th>
                                            <th>food_varient</th>
                                            <th>price</th>
                                            <th>action</th>
                                           </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($foodvar as $item)
                                            <tr role="row" class="odd">
                                                <td class="sorting_1">{{ $item->id }}</td>
                                                <td>{{ $item->expense->food_name }}</td>
                                                <td>{{ $item->food_varient }}</td>
                                                <td>{{ $item->price }}</td>
                                                <td style="display: flex" >


                                                            <button style=" margin-top: 63px; width:65px" type="button" value="{{$item->id}}" class="btn btn-primary editbtn btn-sm">Edit</button>

                                                            <form action="{{route('foodvarient.delete')}}" method="POST">
                                                                @csrf
                                                                <input type="hidden" name="p_id" id="p_id" value="{{$item->id}}">
                                                                <button style=" margin-top: 63px;" class="btn btn-danger deleteButton" name="archive" type="submit">Delete</button>
                                                            </form>



                                                </td>

                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                </div>
            </div>
    </div>

@endsection

{{-- **************************************Edit ****************************************************** --}}
@section('scripts');
        <script>
            $(document).ready(function (){
                    $(document).on('click','.editbtn', function (){
                    var tab_id =$(this).val();
                    // alert(tab_id);
                    $('#edit_food_variant').modal('show');
                        $.ajax({
                            type:"GET",
                            url:"/food/varient/edit/"+tab_id,
                              success:function(response){
                                let {tab}  = response

                                    $('#tab_id').val(tab_id);
                                    $('#edit_food_name').val(tab.food_name);
                                    $('#edit_food_varient').val(tab.food_varient);

                                    $('#edit_price').val(tab.price);

                                   }
                               });
                            });
                         });
        </script>
     @endsection


