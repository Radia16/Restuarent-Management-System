@extends('admin.main_master')

@section('content')

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Customer Due Report Table</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row" style="margin-bottom: 20px">
                        
                        <div class="col-md-4 col-12">
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
                        <div class="col-md-4 col-12">
                            <button type="submit" class="waves-effect waves-light btn btn-secondary btn-flat mb-5">Submit</button>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                            <thead>
                                <tr>		
                                    <th style="width: 5%">SN</th>
                                    <th>Customer</th>
                                    <th>Payable Due</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Rhona Davidson</td>
                                    <td>Integration Specialist</td>
                                    <td>Tokyo</td>
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
