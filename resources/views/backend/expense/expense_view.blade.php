@extends('admin.main_master')



@section('content')

{{--  <!-- AddExpenseModal Start -->  --}}
<div class="modal fade bs-example-modal-lg" id="AddExpenseModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"  id="myLargeModalLabel"> Add Expense Info</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form id="AddExpenseFORM" method="POST" enctype="multipart/form-data">

                <div class="modal-body">
                    {{--  <ul id="saveform_errList"></ul>  --}}
                    <div class="row">
                        <div class="col-lg-6">

                            <div class="form-group md-3">
                                <label for="">  Outlet ID </label>
                                <input type="text" name="outlet_id" class="form-control">
                                <span class="text-danger outlet_id_error" ></span>
                            </div>
                            <div class="form-group md-3">
                                <label for="">  Vouchar </label>
                                <input type="file" name="image" class="form-control">
                                <span class="text-danger image_error" ></span>
                            </div>

                            <div class="form-group md-3">
                                <label for=""> Short Note </label>
                                <textarea name="note" class="form-control" cols="5" rows="3"> Write Here...</textarea>
                                <span class="text-danger note_error" ></span>
                            </div>

                        </div>
                        {{--  // 1st col end  --}}
                        <div class="col-lg-6">

                            <div class="form-group md-3">
                                <label for=""> Employee Name </label>
                                <select name="employee_id" class="form-control"  >

                                    <option value="" selected="" disabled="">Select Employee Name</option>

                                    @foreach($employee as $emp)
                                    <option value="{{ $emp->id }}"> {{ $emp->name }}</option>
                                    @endforeach

                                </select>
                                <span class="text-danger employee_id_error" ></span>
                            </div>

                            <div class="form-group md-3">
                                <label for="">  Total Amount </label>
                                <input type="number" name="amount" min="0.00" max="10000.00" step="0.01" class="form-control" >
                                <span class="text-danger amount_error" ></span>
                            </div>

                            <div class="form-group md-3">
                                <label for=""> Added By </label>
                                <input type="text" name="added_by" class="form-control" >
                                <span class="text-danger added_by_error" ></span>
                            </div>

                        </div>

                        {{--  // 2nd col end  --}}
                        <div class="col-md-12" id="expenseItemsContainer">
                                <div class="singleitems">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group md-3">
                                                <label for=""> Expense Items </label>
                                                <input type="text" class="form-control" name="expense_items[]"  />
                                                <span class="text-danger expense_items_error expense_items_0"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for=""> Expense Quantity </label>
                                                <input type="text" class="form-control" name="expense_items_quantity[]"  />
                                                <span class="text-danger expense_items_quantity_error expense_items_quantity_0"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for=""> Expense Price </label>
                                                <input type="text" class="form-control" name="expense_items_price[]"  />
                                                <span class="text-danger expense_items_price_error expense_items_price_0"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-3 mt-5">
                                            <div style="padding-top:1rem !important;">
                                            <button type="button" class="btn btn-success btn-sm" id="addNewItem">Add</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                        </div>
                    </div>
                    {{--  // row end  --}}

                </div>
                {{--  Modal body end  --}}
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary float-end "> Save </button>
                </div>

            </form>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
{{--  <!-- AddExpenseModal End -->  --}}



{{--  <!-- EditExpenseModal Start -->  --}}
<div class="modal fade bs-example-modal-lg" id="EditExpenseModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"  id="myLargeModalLabel"> Edit Expense Info</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form id="UpdateExpenseFORM" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="modal-body">
                    <ul id="updateform_errList"></ul>
                    <input type="hidden" id="edit_expense_id">

                    <div class="row">
                        <div class="col-lg-6">

                            <div class="form-group md-3">
                                <label for="">  Outlet ID </label>
                                <input type="text" name="outlet_id" id="edit_outlet_id" class="form-control">
                                <span class="text-danger outlet_id_error" ></span>
                            </div>
                            <div class="form-group md-3">
                                <label for="">  Vouchar </label>
                                <input type="file" name="image" class="form-control">
                                <span class="text-danger image_error" ></span>
                            </div>

                            <div class="form-group md-3">
                                <label for=""> Short Note </label>
                                <textarea name="note" id="edit_note" class="form-control" cols="5" rows="3"> Write Here...</textarea>
                                <span class="text-danger note_error" ></span>
                            </div>

                        </div>
                        {{--  // 1st col end  --}}
                        <div class="col-lg-6">

                            <div class="form-group md-3">
                                <label for=""> Employee Name </label>
                                <select name="employee_id" id="edit_employee_id" class="form-control"  >

                                    <option value="" selected="" disabled="">Select Employee Name</option>

                                    @foreach($employee as $emp)
                                    <option value="{{ $emp->id }}"> {{ $emp->name }}</option>
                                    @endforeach

                                </select>
                                <span class="text-danger employee_id_error" ></span>
                            </div>

                            <div class="form-group md-3">
                                <label for="">  Total Amount </label>
                                <input type="number" name="amount" id="edit_amount" min="0.00" max="10000.00" step="0.01" class="form-control" >
                                <span class="text-danger amount_error" ></span>
                            </div>

                            <div class="form-group md-3">
                                <label for=""> Added By </label>
                                <input type="text" name="added_by" id="edit_added_by" class="form-control" >
                                <span class="text-danger added_by_error" ></span>
                            </div>

                        </div>

                        {{--  // 2nd col end  --}}
                        <div class="col-md-12" id="expenseItemsContainer_edit">



                        </div>
                    </div>
                    {{--  // row end  --}}

                </div>
                {{--  Modal body end  --}}
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary float-end "> Update </button>
                </div>

            </form>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
{{--  <!-- EditExpenseModal End -->  --}}



{{--  <!-- DeleteExpenseModal Start -->  --}}
<div class="modal fade bs-example-modal-lg" id="DeleteExpenseModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"  id="myLargeModalLabel"> Delete Expense Info</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

                <div class="modal-body">

                    <input type="hidden" id="delete_expense_id">
                    <h4 style="text-align: center"> Are you sure! <br> Want to delete your data?? </h4>



                </div>
                {{--  Modal body end  --}}
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary float-end del_btn"> Yes Delete </button>
                </div>

            </form>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
{{--  <!-- DeleteExpenseModal End -->  --}}



<div class="row" >
    <div class="col-lg-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">
                    EXPENSE DETAILS
                </h3>
                <div class="bt">
                    <button type="button" class="btn btn-info-light btn-sm" data-bs-toggle="modal" data-bs-target="#AddExpenseModal">
                        Add Expense Information
                      </button>

                </div>
            </div>


            <!-- /.box-header -->
            <div class="box-body">
                <div class="table-responsive">
                <div id="example_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                    <table id="expense_table" class="table table-bordered table-hover display nowrap margin-top-10 w-p100 dataTable" role="grid" aria-describedby="example_info">
                        <thead>
                            <tr role="row">

                                <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending"
                                aria-label="Name: activate to sort column descending" style="width: 187.688px;">Outlet ID</th>

                                <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending"
                                aria-label="Name: activate to sort column descending" style="width: 187.688px;">Employee Name</th>

                                <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending"
                                aria-label="Name: activate to sort column descending" style="width: 187.688px;">Expense Items</th>

                                <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending"
                                aria-label="Name: activate to sort column descending" style="width: 187.688px;"> Total Amount </th>

                                <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending"
                                aria-label="Name: activate to sort column descending" style="width: 187.688px;"> Note </th>

                                <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending"
                                aria-label="Name: activate to sort column descending" style="width: 187.688px;"> Vouchar </th>

                                <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending"
                                aria-label="Name: activate to sort column descending" style="width: 187.688px;"> added by </th>

                                <th rowspan="1" colspan="1">Actions</th>
                            </tr>
                        </thead>
                        <tbody id="expense_table_body">
                        </tbody>
                        <tfoot>
                            <tr>
                                <th rowspan="1" colspan="1">Outlet ID</th>
                                <th rowspan="1" colspan="1">Employee Name</th>
                                <th rowspan="1" colspan="1">Total Expense Item</th>
                                <th rowspan="1" colspan="1">Total Amount </th>
                                <th rowspan="1" colspan="1">Note </th>
                                <th rowspan="1" colspan="1">Vouchar  </th>
                                <th rowspan="1" colspan="1">added by</th>
                                <th rowspan="1" colspan="1">Actions</th>
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

        .modal{
            z-index:1050 !important;
        }
        .modal-body{
            max-width:1000px !important;
        }
    </style>
@endsection


@section('script')
 <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>

        let expense_table = null;

        $(document).ready(function () {

            // View data
            ExpenseView();

            // Add submit
            $(document).on('submit','#AddExpenseFORM', function(e) {
                e.preventDefault();
                let formData = new FormData($('#AddExpenseFORM')[0]);
                axios.post('/expense/store',formData)
                .then(response=>{
                    toastr.options =
                    {
                        "closeButton" : true,
                        "progressBar" : true
                    }
                    toastr.success(response.data.message);
                    destroyDataTable();
                    $('#expense_table_body').html("")
                    ExpenseView();
                    $('#AddExpenseModal').modal('hide');
                })
                .catch(error=>{
                    console.log(error);
                    console.log(error.response.status);
                    console.log(error.response.data.errors);
                    if(error.response.status === 422){
                        let errors = error.response.data.errors;
                        setErrorinExpenseAddForm(errors)
                    }
                })
            }); // end store/add


             //Delete Click
            $(document).on('click','.delete_expense', function(e) {
                e.preventDefault();
                var expense_id = $(this).val();
                $('#delete_expense_id').val(expense_id);
                $('#DeleteExpenseModal').modal('show');

            });

            $(document).on('click','.del_btn', function(e) {
                e.preventDefault();
                var expense_id = $('#delete_expense_id').val();

                //crsrf_token
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: "DELETE",
                    url: "/expense/delete/"+expense_id,
                    success: function (response) {
                        $('#success_message').addClass('alert alert-success')
                        $('#success_message').text(response.message);
                        destroyDataTable();
                        $('#expense_table_body').html("")
                        ExpenseView();
                        $('#DeleteExpenseModal').modal('hide');

                    }
                    });

            });
            // end delete


        });// main doc end


        // view by axios
         async function ExpenseView(){
            console.log('workking');

             let {data:{expenses}}  = await axios.get('/expense/view');
             //console.log(leave,'datrfa gettin');

             await $.each(expenses, function (key, item) {
                const {employee,expenseitem}  = item;

                 console.log(item,'this is i');
                 let data  =  `<tr>
                                <td>${item.outlet_id}</td>
                                <td>${employee.name}</td>
                                <td>${expenseitem.length}</td>
                                <td>${item.total_amount}</td>
                                <td>${item.note}</td>
                                <td> <img src="${item.image}" height="50px" width="50px" alt="Image"></td>
                                <td>${item.added_by}</td>
                                <td>
                                    <button type="button" value="${item.id}" class="btn btn-info btn-sm view_expense">View</button>
                                    <button type="button" value="${item.id}" class="btn btn-primary btn-sm edit_expense">Edit</button>
                                    <button type="button" value="${item.id}" class="btn btn-danger btn-sm delete_expense">Delete</button>
                                </td>
                            </tr>`
                 $('#expense_table_body').append(data);
             });

            $("#expense_table").DataTable( {
                 dom: 'Bfrtip',
                 buttons: [
                     'copyHtml5',
                     'excelHtml5',
                     'csvHtml5',
                     'pdfHtml5'
                 ]
             });
             /*expense_table = */
            /*setExpenseEditButtonsForUpdate();*/
         } // view end

         function destroyDataTable(){
            expense_table.destroy()
         }





    function setErrorinExpenseAddForm(errors){

          let added_by_error = document.querySelector('.added_by_error');
          added_by_error.innerText = errors['added_by'][0];
          let amount_error = document.querySelector('.amount_error');
          amount_error.innerText = errors['amount'][0];

          let employee_id_error = document.querySelector('.employee_id_error');
          employee_id_error.innerText = errors['employee_id'][0];

          let expense_items_error = document.querySelectorAll('.expense_items_error');
          console.log(expense_items_error);

          let expense_items_quantity_error = document.querySelectorAll('.expense_items_quantity_error');
          let expense_items_price_error = document.querySelectorAll('.expense_items_price_error');

          let expense_items_error_length = expense_items_error.length;
          let expense_items_quantity_error_length = expense_items_quantity_error.length;
          let expense_items_price_error_length = expense_items_price_error.length;

          //for expense items error
          expense_items_error.forEach((item,index)=>{
              if(item.classList.contains(`expense_items_${index}`)){
                  item.innerText = errors[`expense_items.${index}`][0];
              }
          });

        //for expense quantity error
        expense_items_quantity_error.forEach((qty,index)=>{
            if(qty.classList.contains(`expense_items_quantity_${index}`)){
                qty.innerText = errors[`expense_items_quantity.${index}`][0];
            }
        });

        //for expense quantity error
        expense_items_price_error.forEach((priceNode,index)=>{
            if(priceNode.classList.contains(`expense_items_price_${index}`)){
                priceNode.innerText = errors[`expense_items_price.${index}`][0];
            }
        });
    }


    /*function setExpenseEditButtonsForUpdate(){
        //show data in expense edit form
        let edit_expenseButtons  = document.querySelectorAll('.edit_expense');
        edit_expenseButtons.forEach(expenseButton=>{
            expenseButton.addEventListener('click',function(event){
                event.preventDefault();
                const expense_id =  this.value;
                console.log(expense_id);
            })
        })
    }*/


    </script>

    <script src="{{ asset('backend/assets/vendor_components/bootstrap-select/dist/js/bootstrap-select.js ')}}"></script>
    <script src="{{ asset('backend/assets/vendor_components/select2/dist/js/select2.full.js ')}}"></script>
    <script src="{{ asset('backend/js/pages/advanced-form-element.js') }}"></script>


    <script >

    ///.........................for add expense items ...................................////
    let expenseItemsContainer = document.querySelector('#expenseItemsContainer');
    let addNewItem = document.querySelector('#addNewItem');
    addNewItem.addEventListener('click',function(event){
        const singleitems = document.querySelectorAll('.singleitems');
        const index       = singleitems.length  ;
        const html        = addExpenseItems(index);
        expenseItemsContainer.appendChild(html);
    });




    $(document).on('click','.removeItem',function(event){
        console.log('this is running')
        let parentElement = event.target.parentElement.parentElement.parentElement.parentElement;
        console.log(parentElement)
        if(parentElement && parentElement.classList.contains('singleitems')){
            expenseItemsContainer.removeChild(parentElement);
        }

       })



    function addExpenseItems(index){
        const singleItem = document.createElement('div');
        singleItem.classList.add('singleitems');

         let html = `
             <div class="row">
                 <div class="col-md-3">
                     <div class="form-group md-3">
                         <label for=""> Expense Items </label>
                         <input type="text" class="form-control" name="expense_items[]"  />
                         <span class="text-danger expense_items_error expense_items_${index}"></span>
                     </div>
                 </div>
                 <div class="col-md-3">
                     <div class="form-group">
                         <label for=""> Expense Quantity </label>
                         <input type="text" class="form-control" name="expense_items_quantity[]"  />
                         <span class="text-danger expense_items_quantity_error expense_items_quantity_${index}"></span>
                     </div>
                 </div>
                 <div class="col-md-3">
                     <div class="form-group">
                         <label for=""> Expense Price </label>
                         <input type="text" class="form-control" name="expense_items_price[]"  />
                         <span class="text-danger expense_items_price_error  expense_items_price_${index}"></span>
                     </div>
                 </div>
                 <div class="col-md-3 mt-5">
                     <div style="padding-top:1rem !important;">
                         <button type="button" class="btn btn-danger btn-sm removeItem">remove</button>
                     </div>
                 </div>
             </div>`;

         singleItem.innerHTML = html;
         return singleItem;
    }
    ///.........................end for add expense items .........................////



    ////........................for edit expense item ......................................///
    function setAddExpenseButton(){
        const expenseItemsContainer_edit = document.querySelector('#expenseItemsContainer_edit');
        const addeditexpense = document.querySelector('.addeditexpense');
        addeditexpense.addEventListener('click',function(event){
            const singleitems = document.querySelectorAll('.singleitems');
            const index       = singleitems.length  ;
            const html        = addEditExpenseItems(index);
            expenseItemsContainer_edit.appendChild(html);
        });
    }


    // Edit  Click
    $(document).on('click','.edit_expense', function(e) {
        e.preventDefault();
        //console.log("working");
        var expense_id = $(this).val();
        //console.log(expense_id);
        $('#EditExpenseModal').modal('show'); // Edit Modal
        $.ajax({
            type: "GET",
            url: "/expense/edit/"+expense_id, // must add prefix in url
            success: function (response) {
                console.log(response);
                const {expenseitem,employee}   = response.expense
                $('#edit_outlet_id').val(response.expense.outlet_id);
                $('#edit_note').val(response.expense.note);
                $('#edit_employee_id').val(response.expense.employee_id);
                $('#edit_amount').val(response.expense.amount);
                $('#edit_added_by').val(response.expense.added_by);
                $('#edit_expense_id').val( );

                
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


    // update
    $(document).on('submit','#UpdateExpenseFORM', function(e) {
        e.preventDefault();

        var expense_id = $('#edit_expense_id').val();

        let EditFormData = new FormData($('#UpdateExpenseFORM')[0]);

        // Axios Update
        axios.post('/expense/update/'+expense_id,EditFormData)
        .then(response=>{
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }

            toastr.success(response.data.message);
            destroyDataTable();
            ('#expense_table_body').html("")
            ExpenseView();
            $('#EditExpenseModal').modal('hide');
        })
        .catch(error=>{


            console.log(error);
            if(error?.response?.status === 422){
                let errors = error.response.data.errors;
                setErrorinExpenseAddForm(errors)
            }
        })

    }); //update end


    function editExpenseitems(items){
        items.forEach((item,index)=>{
            addItemInEditExpenseContainer(item,index)
        });
        setAddExpenseButton();
    }


    function addItemInEditExpenseContainer(item,index){
        const expenseItemsContainer_edit = document.querySelector('#expenseItemsContainer_edit')

        const singleItem = document.createElement('div');
        singleItem.classList.add('singleitems');
        let html = `
        <div class="row">
            <div class="col-md-3">
                <div class="form-group md-3">
                    <label for=""> Expense Items </label>
                    <input type="text" class="form-control" value="${item.expense_item_name}" name="expense_items[]"  />
                    <span class="text-danger expense_items_error expense_items_${index}"></span>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for=""> Expense Quantity </label>
                    <input type="text" class="form-control" value="${item.quantity}" name="expense_items_quantity[]"  />
                    <span class="text-danger expense_items_quantity_error expense_items_quantity_${index}"></span>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for=""> Expense Price </label>
                    <input type="text" class="form-control" value="${item.price}" name="expense_items_price[]"  />
                    <span class="text-danger expense_items_price_error  expense_items_price_${index}"></span>
                </div>
            </div>
            <div class="col-md-3 mt-5">
                <div style="padding-top:1rem !important;">
                    <button type="button" class="btn btn-sm ${index === 0 ? 'addeditexpense btn-success ':'removeItemEdit  btn-danger'} ">${index === 0 ? 'Add':'remove' }</button>
                </div>
            </div>
        </div>`;

        singleItem.innerHTML = html;
        expenseItemsContainer_edit.appendChild(singleItem);

    }

    $(document).on('click','.removeItemEdit',function(event){
        const expenseItemsContainer_edit = document.querySelector('#expenseItemsContainer_edit')
        console.log('this is running')
        let parentElement = event.target.parentElement.parentElement.parentElement.parentElement;
        console.log(parentElement)
        if(parentElement && parentElement.classList.contains('singleitems')){
            expenseItemsContainer_edit.removeChild(parentElement);
        }

    })

    ///.................end of for edit expense item ............./////////




        function addEditExpenseItems(index){
            const singleItem = document.createElement('div');
            singleItem.classList.add('singleitems');

             let html = `
                 <div class="row">
                     <div class="col-md-3">
                         <div class="form-group md-3">
                             <label for=""> Expense Items </label>
                             <input type="text" class="form-control" name="expense_items[]"  />
                             <span class="text-danger expense_items_error expense_items_${index}"></span>
                         </div>
                     </div>
                     <div class="col-md-3">
                         <div class="form-group">
                             <label for=""> Expense Quantity </label>
                             <input type="text" class="form-control" name="expense_items_quantity[]"  />
                             <span class="text-danger expense_items_quantity_error expense_items_quantity_${index}"></span>
                         </div>
                     </div>
                     <div class="col-md-3">
                         <div class="form-group">
                             <label for=""> Expense Price </label>
                             <input type="text" class="form-control" name="expense_items_price[]"  />
                             <span class="text-danger expense_items_price_error  expense_items_price_${index}"></span>
                         </div>
                     </div>
                     <div class="col-md-3 mt-5">
                         <div style="padding-top:1rem !important;">
                             <button type="button" class="btn btn-danger btn-sm removeItemEdit">remove</button>
                         </div>
                     </div>
                 </div>`;

             singleItem.innerHTML = html;
             return singleItem;
        }

    </script>

@endsection

