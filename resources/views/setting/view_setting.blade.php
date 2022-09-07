@extends('admin.main_master')

@section('content')
<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="box">
                <div class="box-header">
                    <h4 class="box-title">Complex headers (rowspan and colspan)</h4>
                </div>
                <div class="col-lg 8">
                    <div class="box-body">
                        <div class="table-responsive">
                            <div id="complex_header_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                                <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="dataTables_length" id="complex_header_length">
                                        <label>Show
                                        <select name="complex_header_length" aria-controls="complex_header" class="form-select form-control-sm">
                                            <option value="10">10</option><option value="25">25</option>
                                            <option value="50">50</option><option value="100">100</option>
                                        </select> entries</label>
                                            </div>
                                        </div>
                                            <div class="col-sm-12 col-md-6"><div id="complex_header_filter" class="dataTables_filter">
                                                <label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="complex_header"></label>
                                            </div></div></div>
                                            <div class="row">
                                                <div class="col-sm-12"><table id="complex_header" class="table table-striped table-bordered display dataTable" style="width: 100%;" role="grid" aria-describedby="complex_header_info">
                                <thead>
                                    <th>id</th>
                                    <th>outlet_id</th>
                                    <th>resturent_name</th>
                                    <th>logo_image</th>
                                    <th>webside</th>
                                    <th>date</th>
                                    <th>time_zone</th>
                                    <th>currency_symbol</th>
                                    <th>currency_position</th>
                                    <th>precision</th>
                                    <th>stutas</th>
                                    <th>default_customer</th>
                                    <th>default_payment_method</th>
                                    <th>charge_type</th>
                                    <th>percentage_amount</th>
                                    <th>export_daly</th>
                                    <th>invoice_footer</th>
                                    <th>printing_invoice</th>
                                    <th>printing_bill</th>
                                    <th>printing_kot</th>
                                    <th>printing_bot</th>
                                    <th>recept_printer</th>


                                </thead>
                                <tbody>

                                    @foreach ($setting_view as $item)
                                <tr role="row" class="odd">
                                        <td> {{ $item->id }}</td>
                                        <td>{{ $item->outlet_id }}</td>
                                        <td>{{ $item->resturent_name }}</td>

                                        <td>
                                            <img src="{{asset($item->logo_image)}}" alt="">
                                        </td>

                                        <td>{{ $item->webside }}</td>
                                        <td>{{ $item->date }}</td>
                                        <td>{{ $item->time_zone }}</td>
                                        <td>{{ $item->currency_symbol }}</td>
                                        <td>{{ $item->currency_position }}</td>
                                        <td>{{ $item->precision }}</td>
                                        <td>{{ $item->status }}</td>
                                        <td>{{ $item->default_customer }}</td>
                                        <td>{{ $item->default_payment_method }}</td>
                                        <td>{{ $item->charge_type }}</td>
                                        <td>{{ $item->percentage_amount }}</td>
                                        <td>{{ $item->export_daly }}</td>
                                        <td>{{ $item->invoice_footer }}</td>
                                        <td>{{ $item->printing_invoice }}</td>
                                        <td>{{ $item->printing_bill }}</td>
                                        <td>{{ $item->printing_kot }}</td>
                                        <td>{{ $item->printing_bot }}</td>
                                        <td>{{ $item->recept_printer }}</td>

                                    </tr>
                                    @endforeach
                                    </tbody>
                                {{-- <tfoot>
                                    <tr><th rowspan="1" colspan="1">Name</th><th rowspan="1" colspan="1">Position</th><th rowspan="1" colspan="1">Salary</th><th rowspan="1" colspan="1">Office</th><th rowspan="1" colspan="1">Extn.</th><th rowspan="1" colspan="1">E-mail</th></tr>
                                </tfoot> --}}
                            </table></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-5">
                                <div class="dataTables_info" id="complex_header_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="complex_header_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="complex_header_previous"><a href="#" aria-controls="complex_header" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="complex_header" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="complex_header" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="complex_header" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="complex_header" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="complex_header" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="complex_header" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="complex_header_next"><a href="#" aria-controls="complex_header" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

