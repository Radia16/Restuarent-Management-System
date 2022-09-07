@extends('admin.main_master')

@section('content')

<section class="content">

         <div class="box">
            <div class="box-header with-border">
                 <h4 class="box-title">Add Transfer To Outlet Iteam</h4>

            </div>
            <!-- /.box-header -->
            <form action="{{route('transfer.update')}}" class="form" method="POST" enctype='multipart/form-data'>
                @csrf
                <input type="hidden" name="id" value="{{$transferoutlet_edit->id}}">
                <div class="box-body">

                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label">Reference No</label>
                                <input type="number" name="reference_no" value="{{$transferoutlet_edit->reference_no}}" class="form-control" placeholder="Reference No">

                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label">Date *</label>
                                <input type="date" name="date" value="{{$transferoutlet_edit->date}}" class="form-control" placeholder="date">

                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                            <label class="form-label">To Outlet *</label>
                            <select class="form-select" type="number" name="to_outlet" value="{{$transferoutlet_edit->to_outlet}}" >
                                <option>Select</option>
                                <option value="less than 5000$">less than 5000$</option>
                                <option value="5000$ - 10000$">5000$ - 10000$</option>
                                <option value="10000$ - 20000$">10000$ - 20000$</option>
                                <option value="more than 20000$">more than 20000$</option>
                            </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                            <label class="form-label">Status *</label>
                            <select class="form-select" type="text" name="status" value="{{$transferoutlet_edit->status}}" >
                                <option>select</option>
                                <option value="Send">Send</option>
                                <option value="Draft">Draft</option>
                                <option value="Received">Received</option>

                            </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                        <div class="form-group">
                            <label class="form-label">Transfer Type   ?</label>
                            <select name="transfer_type" value="{{$transferoutlet_edit->transfer_type}}" type="text" id="transfer_type"  class="form-select">
                                <option disabled selected>select</option>
                                <option vlaue="food">food</option>
                                <option value="ingredients">ingredients</option>
                            </select>
                        </div>
                        </div>
                        <div class="col-md-3">
                        <div class="form-group">

                            <label class="form-label" id="trans_item_type_label">Food Menus *</label>
                               <select id="transferItemTypeSelectBox"  class="form-select">
                            </select>
                        </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label">About Project</label>
                                <textarea rows="5" type="text" name="aboute_project" value="{{$transferoutlet_edit->aboute_project}}" class="form-control" placeholder="About Project"></textarea>
                            </div>
                        </div>
                        <div class="col-md-3" style=" margin-top: 29px;">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">First Read Me  modal</button>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-hovered">
                               <thead>
                                 <tr>
                                     <th>SN</th>
                                     <th>Transfer Item</th>
                                     <th>Transfer Item Type</th>
                                     <th>Quantity/Amount</th>
                                     <th>Actions</th>
                                 </tr>
                               </thead>
                               <tbody id="ingredient_inputs_tbody" class="ingredient_tbody">

                               </tbody>
                            </table>
                        </div>
                     </div>
                     <!-- /.box-body -->
                    <div class="row">
                        <div class="col-md-4">
                            <div class="box-footer">
                                <button type="button" class="btn btn-warning me-1">
                                <i class="ti-trash"></i> Cancel
                                </button>
                                <button type="submit" class="btn btn-primary">
                                <i class="ti-save-alt"></i> Save
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
               </div>
            </form>
        </div>

</section>



{{-- modal section  --}}
 <!-- Modal -->
 <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        ....dgfhdgfhjds jhsgcdfhjasgfcds jdtewyudgedc sgxcsdghcdfvcg ghfdjfgfryfgr.
            dgfdhcvgbdhbcdhj hjsdgesyfuchbchxdbcv hjdgesdfyusbcdct sdgfsdcghjv.
            gfdhvgfbdhjbvg dte yufdeydge dgehcd cdydutgeds cxdedgesctyec ddteydcd.
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
        </div>
    </div>
    </div>
</div>
@endsection



@section('script')
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>

//global variable
let transferItemTypeSelectBox = document.querySelector('#transferItemTypeSelectBox');
let ingredient_inputs_tbody = document.querySelector('#ingredient_inputs_tbody');


transferItemTypeSelectBox.addEventListener('change',function(event){
      let food_menu_id = event.target.value;
      addFoodMenusToFoodMenusTableInput(food_menu_id)
      getDeleteFoodMenuSelectors();
});

function getDeleteFoodMenuSelectors(){
    let delete_food_menus = document.querySelectorAll('.delete_food_menu');
    delete_food_menus.forEach(food_menu=>{
        food_menu.addEventListener('click',function(event){
            let id = this.dataset.id;
            let parentElement = food_menu.parentElement.parentElement.parentElement;
            let rawParent = food_menu.parentElement.parentElement;
            if(parentElement && rawParent.classList.contains('table_row')){
                parentElement.removeChild(rawParent);
            }

        });
    })
}


function addFoodMenusToFoodMenusTableInput(food_menu_id){
    let idColumns = document.querySelectorAll('.id_column');
    let idColumnArray = [];
    idColumns.forEach(idColumn=>{
        let id = idColumn.dataset.id;
        idColumnArray.push(id);
    })
    if(idColumnArray.findIndex(singleId=>singleId == food_menu_id) == -1){
        ingredientsText(food_menu_id)
    }
    else{
        alert("already added");
    }
}

async function ingredientsText(id){
    ///get data via ajax request
    let type = document.querySelector('#transfer_type').value;
    let {data:{item}}  = await axios.get(`/transfer/transferType/${type}/${id}`);
    if(type === 'food'){
        item = {
            id:item.id,
            name:item.food_name
        }
    }
    else if(type =='ingredients'){
        item = {
            id:item.id,
            name:item.name
        }
    }
    let tr = document.createElement('tr');
    tr.classList.add('table_row');
    tr.setAttribute('data-id',id);
    tr.innerHTML = `
                <td class="id_column" data-id="${id}">${id}</td>
                <td>${item.name}</td>
                <td>${type}</td>
                <td><input type="number" class="form-control" name="qty_amount" value="{{$transferoutlet_edit->qty_amount}}" placeholder="Qty/Amount"/></td>
                <td><button type="button" class="btn btn-danger btn-sm delete_food_menu" data-id="${id}"><i class="fas fa-trash"></i></button></td>
                `;
    ingredient_inputs_tbody.appendChild(tr);

}
</script>


<script>
    let transfer_type = document.querySelector('#transfer_type');
    let transfer_items  = null;
    let trans_item_type_label = document.querySelector('#trans_item_type_label');
    transfer_type.addEventListener('change',function(event){
        let type = this.value;
        //change transferitem_type label
        changeTransferItemTypeLabel(type)
        // end of changing transferitem type label

        if(type){
            axios.get(`/transfer/transferType/${type}`)
                .then(({data:{items}})=>{
                    if(type ==='ingredients')
                        transfer_items = items.map(item=>({id:item.id,name:item.name}));

                    else if(type == 'food')
                        transfer_items = items.map(item=>({id:item.id,name:item.food_name}));
                    console.log(transfer_items);
                    addItemsToTransferItemSelectBox(transfer_items)
                })
        }


    });

    function addItemsToTransferItemSelectBox(transfer_items){
        let food_menusSelectBox = document.querySelector('#transferItemTypeSelectBox');
        food_menusSelectBox.innerHTML="";
        transfer_items.forEach(item=>{
            let option = document.createElement('option');
            console.dir(option);
            option.value = item.id;
            option.innerText = item.name;
            food_menusSelectBox.appendChild(option);
        })
    }

    function changeTransferItemTypeLabel(type){
        if(type === 'food')
        {
            trans_item_type_label.innerText="Food";
        }
        else if(type =='ingredients'){
            trans_item_type_label.innerText="Ingredient";
        }
    }
</script>
@endsection



{{-- name="transferItemTypeSelectBox" --}}
