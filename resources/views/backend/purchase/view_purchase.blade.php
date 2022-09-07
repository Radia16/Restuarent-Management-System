@extends('admin.main_master')

@section('content')
<div class="row form-gap" >
    <div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">View Purchase</h4>
            <div id="datatable-buttons_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="dt-buttons btn-group flex-wrap">
                            <button class="btn btn-secondary buttons-copy buttons-html5" tabindex="0" aria-controls="datatable-buttons" type="button">
                                <span>Copy</span></button>
                                <button class="btn btn-secondary buttons-excel buttons-html5" tabindex="0" aria-controls="datatable-buttons" type="button">
                                    <span>Excel</span></button>
                                <button class="btn btn-secondary buttons-pdf buttons-html5" tabindex="0" aria-controls="datatable-buttons" type="button">
                                    <span>PDF</span></button>
                                    <div class="btn-group">
                                        <button class="btn btn-secondary buttons-collection dropdown-toggle buttons-colvis" tabindex="0" aria-controls="datatable-buttons" type="button"
                                        aria-haspopup="true" aria-expanded="false"><span>Column visibility</span>
                                    </button>
                                </div>
                             </div>
                            </div>
                            <div class="col-sm-12 col-md-6"><div id="datatable-buttons_filter" class="dataTables_filter">
                                <label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="datatable-buttons"></label>
                                <a href="{{ route('purchase.add') }}" class="btn btn-success">Add Purchase</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap dataTable no-footer dtr-inline"
                            style="border-collapse: collapse; border-spacing: 0px; width: 100%;" role="grid" aria-describedby="datatable-buttons_info">
                <thead>
                    <tr role="row">
                      <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 0px;"
                     aria-label="Phone: activate to sort column ascending">sn</th>
                    <th class="sorting_asc" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 0px;" aria-sort="ascending"
                    aria-label="Name: activate to sort column descending">outlet_id</th>
                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 0px;"
                    aria-label="Address: activate to sort column ascending">reference_no</th>
                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 0px;"
                     aria-label="Contact_Person: activate to sort column ascending">supplier</th>
                     <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 0px;"
                      aria-label="Phone: activate to sort column ascending">ingredients</th>
                      <th class="sorting_asc" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 0px;" aria-sort="ascending"
                    aria-label="Name: activate to sort column descending">date</th>
                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 0px;"
                    aria-label="Address: activate to sort column ascending">grand_total</th>
                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 0px;"
                     aria-label="Contact_Person: activate to sort column ascending">paid</th>
                     <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 0px;"
                      aria-label="Phone: activate to sort column ascending">due</th>
                      <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 0px;"
                      aria-label="Action: activate to sort column ascending">Action</th>
  </thead>
 <tbody>
        @foreach ($purchase_view as $purchase)
                <tr>
                    <td>{{ $purchase->outlet_id }}</td>
                    <td>{{ $purchase->reference_no }}</td>
                    <td>{{ $purchase->supplier }}</td>
                    <td>{{ $purchase->ingredients }}</td>
                    <td>{{ $purchase->date }}</td>
                    <td>{{ $purchase->grand_total }}</td>
                    <td>{{ $purchase->paid }}</td>
                    <td>{{ $purchase->due }}</td>
                    <td>{{ $purchase->sn }}</td>
                     <td style="display:flex">
                        <a style="margin: 0px 6px" href="{{ route('purchase.edit', $purchase->id ) }}" class="btn btn-success">Edit</a>
                        {{-- <a href="javascript:void(0)" class="btn btn-danger" id="#">Delete</a> --}}
                        <form action="{{route('purchase.delete')}}" method="POST">
                          @csrf
                          <input type="hidden" name="p_id" id="p_id" value="{{$purchase->id}}">
                          <button class="btn btn-danger deleteButton" name="archive" type="submit">Delete</button>
                      </form>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
        </div>
    </div>
</div>
    <div class="col-sm-3"></div>
</div>
    <!-- /.box-body -->
  </div>
@endsection



@section('script')
  <script>
      $('.deleteButton').on('click',function(e)
      {
        event.preventDefault(); // prevent form submit
        var form = event.target.form; // storing the form
        swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover this imaginary file!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        })
        .then((willDelete) => {
        if (willDelete) {
            swal("Poof! Your imaginary file has been deleted!", {
            icon: "success",
            });
            form.submit();
        } else {
            swal("Your imaginary file is safe!");
        }
        });
      });
  </script>
  @endsection
