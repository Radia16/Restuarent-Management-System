@extends('admin.main_master')

@section('content')

            <div class="card">
                <div class="card-header">
                    <h4>Transfer TO Outlet</h4>
                    <a href="{{ route('transfer.view') }}" type="button" class="btn btn-primary">Back</a>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label>Referance No:</label>
                                {{ $show->reference_no }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label>Transfer Type:</label>
                                {{ $show->transfer_type }}
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label>To Outlet:</label>
                                {{ $show->to_outlet }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label>Status:</label>
                                {{ $show->status }}
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label>Quantity Amount:</label>
                                {{ $show->qty_amount }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label>Date:</label>
                                {{ $show->date }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label>About Project:</label>
                                {{ $show->aboute_project }}
                                {{-- {{ date_format($project->created_at, 'jS M Y') }} --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection


