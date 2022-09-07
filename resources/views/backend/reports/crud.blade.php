@extends('admin.main_master')

@section('content')

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">CRUD</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                   
                    <form action="{{ route('store')}}" method="POST">
                        @csrf
                        <div class="row" style="margin-bottom: 20px">
                            <div class="col-md-4 col-12">
                                <input  class="form-control" type="text" id="name"  placeholder="Enter Your Name" name="name">
                            </div>
                            <div class="col-md-4 col-12">
                                <button type="submit" id="done" class="waves-effect waves-light btn btn-secondary btn-flat mb-5">Submit</button>
                            </div>
                        </div>
                    </form>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                            <thead>
                                <tr>		
                                    <th style="width: 5%">SN</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Rhona Davidson</td>
                                    <td>
                                        <button class="btn btn-danger">Delete</button>
                                    </td>
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
