@extends('admin.main_master')
@section('css')
    <style>
        .modal{
            z-index: 1050 !important;
        }
    </style>
@endsection
@section('content')

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Purchase Report Table</h3>
                </div>

                    <!-- /.col -->
					<div class="col-md-3 col-12">
                        <div class="form-group">
                          <label class="form-label">Multiple</label>
                          <select class="form-control select2" multiple="multiple" data-placeholder="Select a State"
                                  style="width: 100%;">
                            <option>Alabama</option>
                            <option>Alaska</option>
                            <option>California</option>
                            <option>Delaware</option>
                            <option>Tennessee</option>
                            <option>Texas</option>
                            <option>Washington</option>
                          </select>
                        </div>
                        <!-- /.form-group -->
                      </div>
                      <!-- /.col -->


                <!-- /.box-header -->
                <div class="box-body">
                    <form action="{{ route('purchase.search')}}" method="GET">
                        <div class="row" style="margin-bottom: 20px">
                            <div class="col-md-2 col-12">
                                <input class="form-control" type="text" id="datepicker" placeholder="Start Date" name="start_date" autocomplete="off"  required>
                            </div>
                            <div class="col-md-2 col-12">
                                <input class="form-control" type="text" id="datepicker2" placeholder="End Date" name="end_date" autocomplete="off"  required>
                            </div>
                            <div class="col-md-2 col-12">
                                <div class="form-group">
                                    <select class="form-control select2" style="width: 100%;" name="outlet_id" required>
                                        <option value="" selected="selected" disabled>Outlet</option>
                                        @foreach ($outlets as $show_info)

                                            <option value="{{ $show_info->id }}">{{ $show_info->outlet_name }}</option>

                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2 col-12">
                                <button type="submit" class="waves-effect waves-light btn btn-secondary btn-flat mb-5">Submit</button>
                            </div>
                        </div>
                    </form>
                    <div class="table-responsive">
                        <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                            <thead>
                                <tr>
                                    <th style="width: 5%">SN</th>
                                    <th>Purchase Date</th>
                                    <th>Invoice no.</th>
                                    <th>Supplier Name</th>
                                    <th>Total Amount</th>
                                    <th>Due</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($purchase as $show_info)
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>{{ date('d-m-Y', strtotime($show_info->date)) }}</td>
                                        <td>{{ $show_info->id }}</td>
                                        <td>{{ $show_info->supplier }}</td>
                                        <td>{{ $show_info->grand_total }}</td>
                                        <td>{{ $show_info->due }}</td>
                                    </tr>
                                    @php
                                        $i++;
                                    @endphp
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </section>


@endsection

@section('script')

    <script src="{{ asset('backend/assets/vendor_components/select2/dist/js/select2.full.js')}}"></script>
    <script src="{{ asset('backend/js/pages/advanced-form-element.js')}}"></script>

@endsection