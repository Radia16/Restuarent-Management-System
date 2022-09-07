@extends('admin.main_master')

@section('content')

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Stock Report</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-2 col-12">
                            <div class="form-group">
                                <select class="form-control select2" style="width: 100%;">
                                  <option selected="selected" disabled>Category</option>
                                  <option>Alaska</option>
                                  <option>California</option>
                                  <option>Delaware</option>
                                  <option>Tennessee</option>
                                  <option>Texas</option>
                                  <option>Washington</option>
                                </select>
                              </div>
                        </div>
                        <div class="col-md-2 col-12">
                            <div class="form-group">
                                <select class="form-control select2" style="width: 100%;">
                                  <option selected="selected" disabled>Ingredient</option>
                                  <option>Alaska</option>
                                  <option>California</option>
                                  <option>Delaware</option>
                                  <option>Tennessee</option>
                                  <option>Texas</option>
                                  <option>Washington</option>
                                </select>
                              </div>
                        </div>
                        <div class="col-md-2 col-12">
                            <div class="form-group">
                                <select class="form-control select2" style="width: 100%;">
                                  <option selected="selected" disabled>Food Menu</option>
                                  <option>Alaska</option>
                                  <option>California</option>
                                  <option>Delaware</option>
                                  <option>Tennessee</option>
                                  <option>Texas</option>
                                  <option>Washington</option>
                                </select>
                              </div>
                        </div>
                        <div class="col-md-2 col-12">
                            <div class="form-group">
                                <select class="form-control select2" style="width: 100%;">
                                  <option selected="selected" disabled>Outlet</option>
                                  <option>Alaska</option>
                                  <option>California</option>
                                  <option>Delaware</option>
                                  <option>Tennessee</option>
                                  <option>Texas</option>
                                  <option>Washington</option>
                                </select>
                              </div>
                        </div>
                        <div class="col-md-2 col-12 mb-2">
                            <button type="submit" class="waves-effect waves-light btn btn-secondary btn-flat mb-5">Submit</button>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-3 col-12">
                            <button type="button" class="waves-effect waves-light btn btn-info mb-5" style="width: 100%">Ingredients in Alert <span class="badge badge-danger" style="margin-left: 10px">150</span></button>
                        </div>
                        <div class="col-md-5 col-12">
                            <h3>Stock Value: 475675298.00</h3>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                            <thead>
                                <tr>
                                    <th style="width: 5%">SN</th>
                                    <th>Ingredient(Code)</th>
                                    <th>Category</th>
                                    <th>Stock Qty/Amount</th>
                                    <th>Total Cost</th>
                                    <th>Alert Qty/Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </section>


@endsection
