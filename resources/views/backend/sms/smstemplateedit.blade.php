@extends('admin.main_master')
@section('css')
<style>
    #blah
    {
        width: 100px;
        height: 100px;
    }
</style>

@endsection

@section('content')
<div class="container-full" >
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="me-auto">
                <h4 class="page-title">Sms Templete</h4>
            </div>
        </div>
    </div>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="box">
                    <div class="box-body">
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <div class="panel-body">
            <div class="portlet-body form">
            <form  class="form-horizontal" action="{{route('sms.template.update',$smstemplate->id)}}" method="post"  enctype="multipart/form-data" accept-charset="utf-8" autocomplete="off">
              @csrf
            <div class="form-body">
               <input type="hidden" name="id" id="id" value="" autocomplete="off">
                    <div class="form-group">
                        <label >Template Name  : </label>
                            <input type="text"  class="form-control" value="{{$smstemplate->template_name}}" required="1" name="template_name" placeholder="Template Name " autocomplete="off">
                    </div>

                    <div class="form-group">
                        <label >Type  : </label>
                            <select name="type" class="form-control dont-select-me" id="type">
                            <option value="{{$smstemplate->type}}" >{{$smstemplate->type}}</option>
                            <option value="Cancel">Cancel</option>
                            <option value="Neworder">New Order</option>
                            <option value="CompleteOrder">Complete Order</option>
                            <option value="Processing">Processing</option>
                            </select>
                    </div>

                    <div class="form-group">
                        <label >SMS Description : </label>
                             <textarea name="description" id="message" value="" class="form-control" required="1" rows="6">{{$smstemplate->description}}</textarea>
                    </div>
                </div>

                   <div class="form-group row">
                        <div class="col-sm-offset-4 col-sm-8">
                            <button type="reset" class="btn btn-danger">Reset </button>
                            <button  type="submit"  class="btn btn-success sav_btn">Update </button>
                            {{-- <button type="submit" onclick="return confirm('It is disabled only at demo mode!')" class="btn btn-success sav_btn">Submit </button> --}}
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <div class="col-md-3"></div>
</div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
@endsection
@section('script')

@endsection
