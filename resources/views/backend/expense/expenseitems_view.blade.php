@extends('admin.main_master')

@section('content')

{{--  <!-- AddExpenseItemModal Start -->  --}}
<div class="modal fade" id="AddExpenseItemModal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title"> Add Expense Items </h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            {{--  <ul id="saveform_errList"></ul>  --}}

                    <div class="form-group md-3">
                        <label for="">  Expense Item Name </label>
                        <input type="text" class="expense_item_name form-control" >
                    </div>

                    <div class="form-group md-3">
                        <label for="">  Quantity </label>
                        <input type="number" class="quantity form-control" >
                    </div>

                    <div class="form-group md-3">
                        <label for="">  Price </label>
                        <input type="number" class="price form-control" >
                    </div>

            </div>
            {{--  Modal body end  --}}
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary float-end add_expen_item">Save </button>
            </div>
      </div>
      {{--  <!-- /.modal-content -->  --}}
    </div>
    {{--  <!-- /.modal-dialog -->  --}}
</div>
{{--  <!-- AddExpenseItemModal End -->  --}}

{{--  <!-- EditExpenseItemModal Start -->  --}}
<div class="modal fade" id="EditExpenseItemModal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title"> Update Expense Items </h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <ul id="updateform_errList"></ul>
            <input type="hidden" id="edit_exp_item_id">


                    <div class="form-group md-3">
                        <label for="">  Expense Item Name </label>
                        <input type="text" id="edit_expense_item_name" class="expense_item_name form-control" >
                    </div>

                    <div class="form-group md-3">
                        <label for="">  Quantity </label>
                        <input type="number" id="edit_quantity" class="quantity form-control" >
                    </div>

                    <div class="form-group md-3">
                        <label for="">  Price </label>
                        <input type="number" id="edit_price" class="price form-control" >
                    </div>

            </div>
            {{--  Modal body end  --}}
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary float-end update_expen_item">Update </button>
            </div>
      </div>
      {{--  <!-- /.modal-content -->  --}}
    </div>
    {{--  <!-- /.modal-dialog -->  --}}
</div>
{{--  <!-- EditExpenseItemModal End -->  --}}


{{--  DeleteExpenseItemModal Start  --}}
<div class="modal fade" id="DeleteExpenseItemModal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title"> Delete Info </h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">


            <input type="hidden" id="delete_exp_item_id">

                <h4> Are you sure want to delete??</h4>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary float-end del_btn">Yes Delete</button>
        </div>
      </div>
      {{--  <!-- /.modal-content -->  --}}
    </div>
    {{--  <!-- /.modal-dialog -->  --}}
</div>
{{--  DeleteExpenseItemModal Start  --}}



<div class="row" >
    <div class="col-lg-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">
                    EXPENSE ITEM DETAILS
                </h3>
                <div class="bt">
                    <button type="button" class="btn btn-info-light btn-sm" data-bs-toggle="modal" data-bs-target="#AddExpenseItemModal">
                        Add Expense Items
                      </button>

                </div>
            </div>


            <!-- /.box-header -->
           <div class="box-body">
                <div class="table-responsive">
                <div id="example_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                    <table id="expense_item_table" class="table table-bordered table-hover display nowrap margin-top-10 w-p100 dataTable" role="grid" aria-describedby="example_info">
                        <thead>
                            <tr role="row">

                                <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending"
                                aria-label="Name: activate to sort column descending" style="width: 187.688px;">Expense Item Name</th>

                                <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending"
                                aria-label="Name: activate to sort column descending" style="width: 187.688px;">Quantity</th>

                                <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending"
                                aria-label="Name: activate to sort column descending" style="width: 187.688px;">Price</th>


                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"
                                style="width: 118.719px;">Edit </th>
                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"
                                style="width: 118.719px;">Delete </th>
                            </tr>
                        </thead>
                        <tbody id="expense_item_table_body">
                        </tbody>
                        <tfoot>
                            <tr>
                                <th rowspan="1" colspan="1">Expense Item Name</th>
                                <th rowspan="1" colspan="1">Quantity</th>
                                <th rowspan="1" colspan="1">Price</th>
                                <th rowspan="1" colspan="1">Edit</th>
                                <th rowspan="1" colspan="1">Delete</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                </div>
        </div>
        {{-- <!-- /.box-body --> --}}
        </div>
    </div>
</div>


@endsection

@section('css')
    <style>
        .box-title{

            align-items: center;

        }
        .bt{
            align-items: center;
            float: right !important;
            display: flex;
            justify-content: flex-end;
            margin-left: 80rem;
        }
    </style>
@endsection

@section('script')

    <script>

        let expense_item_table = null;

        $(document).ready(function () {

              // view expense item
               ExpenseItemView();

               // add/store click
               $(document).on('click','.add_expen_item', function(e) {
                e.preventDefault();

                var data ={

                    'expense_item_name'  :$('.expense_item_name').val(),
                    'quantity'           :$('.quantity').val(),
                    'price'              :$('.price').val(),

                }

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: "POST",
                    url: "/expenseitem/store",
                    data: data,
                    dataType: "json",
                    success: function (response) {
                        destroyDataTable();
                        $('#expense_item_table_body').html("")
                        ExpenseItemView();
                        $('#AddExpenseItemModal').modal('hide');

                    },
                    error(xhr, ajaxOptions, thrownError){

                    }
                });
            }); // end add


        // Edit  Click
        $(document).on('click','.edit_expitem', function(e) {
            e.preventDefault();
            var exp_item_id = $(this).val();
            $('#EditExpenseItemModal').modal('show'); // Edit Modal
            $.ajax({
                type: "GET",
                url: "/expenseitem/edit/"+exp_item_id, // must add prefix in url
                success: function (response) {

                    $('#edit_expense_item_name').val(response.expense_item.expense_item_name);
                    $('#edit_quantity').val(response.expense_item.quantity);
                    $('#edit_price').val(response.expense_item.price);
                    $('#edit_exp_item_id').val(exp_item_id);
                },
                error(xhr, ajaxOptions, thrownError){
                    if(response.status == 404){
                        $('#success_message').html("");
                        $('#success_message').addClass('alert alert-danger');
                        $('#success_message').text(response.message);

                    }
               }
            });

        }); // end edit

        // Update  click event
        $(document).on('click','.update_expen_item', function(e) {
            $('#updateform_errList').html('');
            e.preventDefault();
            var exp_item_id = $('#edit_exp_item_id').val();

            var data = {
                'expense_item_name'    : $('#edit_expense_item_name').val(),
                'quantity'             : $('#edit_quantity').val(),
                'price'                : $('#edit_price').val(),


            }

            //crsrf_token
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "PUT",
                url: "/expenseitem/update/"+exp_item_id,
                data: data,
                dataType: "json",
                success: function (response) {
                //console.log(response);
                $('.update_expen_item').text("Updated"); //pore
                destroyDataTable();
                $('#expense_item_table_body').html("")
                ExpenseItemView();

                $('.update_expen_item').text("Updated");
                $('#EditExpenseItemModal').modal('hide');

                },
                error(xhr, ajaxOptions, thrownError) {
                    /*alert(xhr.status);*/
                    $('#EditExpenseItemModal').modal('hide');
                    let errors = xhr.responseJSON.errors;
                    if(xhr.status == 422){
                        $.each(errors, function (key, err_values) {
                            $('#updateform_errList').append('<li class="text-danger">'+err_values?.[0]+'</li>')
                        });
                    }
                    else{
                        $('#EditExpenseItemModal').modal('hide');
                        ExpenseItemView();
                    }
                }
            });

        }); // end update


        //Delete Click
        $(document).on('click','.delete_expitem', function(e) {
            e.preventDefault();
            var exp_item_id = $(this).val();
            $('#delete_exp_item_id').val(exp_item_id);
            $('#DeleteExpenseItemModal').modal('show');

        });

        $(document).on('click','.del_btn', function(e) {
            e.preventDefault();
            var exp_item_id = $('#delete_exp_item_id').val();

            //crsrf_token
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "DELETE",
                url: "/expenseitem/delete/"+exp_item_id,
                success: function (response) {
                    $('#success_message').addClass('alert alert-success')
                    $('#success_message').text(response.message);
                    destroyDataTable();
                    $('#expense_item_table_body').html("")
                    ExpenseItemView();
                    $('#DeleteExpenseItemModal').modal('hide');


                }
            });

        });
        // end delete


        });// main doc end

        // View ajax
        async function ExpenseItemView(){
            //console.log("wokring");

            let {data:{expense_item}}  = await axios.get('/expenseitem/view');

            //console.log("working");
         await $.each(expense_item, function (key, item) {
            console.log(item);
             let data  =  `<tr >

                <td>${item.expense_item_name}</td>
                <td>${item.quantity}</td>
                <td>${item.price}</td>

                <td><button type="button" value="${item.id}" class="btn btn-primary btn-sm edit_expitem">Edit</button></td>
                <td><button type="button" value="${item.id}" class="btn btn-danger btn-sm delete_expitem">Delete</button></td></tr>`
             $('#expense_item_table_body').append(data);
         });

         expense_item_table =  $("#expense_item_table").DataTable( {
             dom: 'Bfrtip',
             buttons: [
                 'copyHtml5',
                 'excelHtml5',
                 'csvHtml5',
                 'pdfHtml5'
             ]
         });
        }

        function destroyDataTable(){
            expense_item_table.destroy()
         }


    </script>

@endsection
