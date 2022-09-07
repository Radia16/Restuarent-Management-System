@extends('admin.main_master')
@section('content')

<div class="row">
    {{-- add modal --}}
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Sms Send</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('sms.send.sms') }}" method="POST" enctype='multipart/form-data' >
                        <div class="modal-body">

                                @csrf
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Name</label>
                                    <select class="form-control" name="receiverNumber" id="">
                                        <option value="01780882914">nuhash</option>
                                        <option value="01521119051">Mesba</option>
                                        <option value=""></option>
                                        <option value=""></option>
                                    </select>
                                    <label for="recipient-name" class="col-form-label">Template Name</label>
                                    <select class="form-control" name="template_id" id="">
                                        @foreach ($smstemplates as $smstemplate)
                                        <option value="{{$smstemplate->id}}">{{$smstemplate->template_name}}</option>
                                        @endforeach
                                    </select>

                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Send</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>

    <div class="row" >
        <div class="col-lg-12">
            <div class="box">
                <div class="box-header with-border">
                <h3 class="box-title"> Send Sms </h3>
                </div>
                <div style="text-align: center">
                    {{-- <a  href="{{ route('sms.send.sms') }}" class="btn btn-success">Send Sms</a> --}}
                    <a  data-bs-toggle="modal" data-bs-target="#exampleModal1" class="btn btn-success">Send Sms</a>

                </div>
                <!-- /.box-header -->
                {{-- <div class="box-body">
                    <div class="table-responsive">
                    <div id="example_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                        <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100 dataTable" role="grid" aria-describedby="example_info">
                            <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 0px;" aria-sort="ascending"
                                    aria-label="Name: activate to sort column descending">Serial</th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 0px;"
                                    aria-label="Address: activate to sort column ascending">Employee Name</th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 0px;"
                                    aria-label="Contact_Person: activate to sort column ascending">Employee Id</th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 0px;"
                                    aria-label="Address: activate to sort column ascending">Status</th>

                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $serial="1";
                                @endphp

                                    <tr role="row" class="odd">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>

                            </tbody>
                        </table>
                    </div>
                    </div>
                </div>
                <!-- /.box-body --> --}}
            </div>
        </div>
    </div>
@endsection
