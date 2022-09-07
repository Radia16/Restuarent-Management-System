@extends('admin.main_master')

@section('content')

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Profit Loss Report Table</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row" style="margin-bottom: 20px">
                        <div class="col-md-3 col-12">
                            <input class="form-control" type="text" id="datepicker" placeholder="Start Date">
                        </div>
                        <div class="col-md-3 col-12">
                            <input class="form-control" type="text" id="datepicker2" placeholder="End Date">
                        </div>
                        <div class="col-md-3 col-12">
                            <div class="form-group">
                                <select class="form-control select2" style="width: 100%;">
                                    <option selected="selected" disabled>Outlet Name</option>
                                    <option>Alaska</option>
                                    <option>California</option>
                                    <option>Delaware</option>
                                    <option>Tennessee</option>
                                    <option>Texas</option>
                                    <option>Washington</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 col-12">
                            <button type="submit"
                                class="waves-effect waves-light btn btn-secondary btn-flat mb-5">Submit</button>
                        </div>
                    </div>

                    <div class="box-body no-padding">
                        <div class="table-responsive">

                            <table class="table table-hover">
                                <tr>
                                    <th class="text-center" rowspan="1" colspan="2">
                                        <h4 class="text-center">Profit Loss Report </h4>
                                        <h4> Outlet: DS New Shop, Date: 05/12/2021 - 09/12/2021</h4>
                                    </th>
                                </tr>
                                <tr>
                                    <td>Total Transfers Out (Incl. Tax)</td>
                                    <td style="text-align: right">Lorem Ipsum</td>
                                </tr>
                                <tr>
                                    <td>Total Cost Of Goods Sold</td>
                                    <td style="text-align: right">Lorem Ipsum</td>
                                </tr>
                                <tr>
                                    <td>Total Cost Of Transferred Item</td>
                                    <td style="text-align: right">Lorem Ipsum</td>
                                </tr>
                                <tr>
                                    <td>Gross Profit (1+2) - (3+4)</td>
                                    <td style="text-align: right">Lorem Ipsum</td>
                                </tr>
                                <tr>
                                    <td>Total Tax</td>
                                    <td style="text-align: right">Lorem Ipsum</td>
                                </tr>
                                <tr>
                                    <td>Total Waste</td>
                                    <td style="text-align: right">Lorem Ipsum</td>
                                </tr>
                                <tr>
                                    <td>Total Expenses</td>
                                    <td style="text-align: right">Lorem Ipsum</td>
                                </tr>
                                <tr>
                                    <td>Net Profit (5) - (6+7+8)</td>
                                    <td style="text-align: right">Lorem Ipsum</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </section>


@endsection
