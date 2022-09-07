@extends('admin.main_master')

@section('content')

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Sell Report Cashier</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row" style="margin-bottom: 20px">
                        <div class="col-md-3 col-12">
                            <input  class="form-control" type="text" id="datepicker" placeholder="Start Date">
                        </div>
                        <div class="col-md-3 col-12">
                            <input  class="form-control" type="text" id="datepicker2" placeholder="End Date">
                        </div>
                        <div class="col-md-3 col-12">
                            <button type="submit" class="waves-effect waves-light btn btn-secondary btn-flat mb-5">Submit</button>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                            <thead>
                                <tr>
                                    <th style="width: 5%">SN</th>
                                    <th>Casher name</th>
                                    <th style="text-align: right">Total amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Rhona Davidson</td>
                                    <td style="text-align: right">Integration Specialist</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <th colspan="2" style="text-align: right">Total Sale</th>
                                <th style="text-align: right">0</th>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </section>


@endsection
