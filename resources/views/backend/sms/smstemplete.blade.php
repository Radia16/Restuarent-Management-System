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
            <form  class="form-horizontal" action="{{route('sms.template.store')}}" method="post"  enctype="multipart/form-data" accept-charset="utf-8" autocomplete="off">
              @csrf
            <div class="form-body">
               <input type="hidden" name="id" id="id" value="" autocomplete="off">
                    <div class="form-group">
                        <label >Template Name  : </label>
                            <input type="text"  class="form-control" value="" required="1" name="template_name" placeholder="Template Name " autocomplete="off">
                    </div>

                    <div class="form-group">
                        <label >Type  : </label>
                            <select name="type" class="form-control dont-select-me" id="type" required="required">
                            <option value="" selected="selected">Select Option</option>
                            <option value="Cancel">Cancel</option>
                            <option value="Neworder">New Order</option>
                            <option value="CompleteOrder">Complete Order</option>
                            <option value="Processing">Processing</option>
                            </select>
                    </div>

                    <div class="form-group">
                        <label >SMS Description : </label>
                             <textarea name="description" id="message" value="" class="form-control" required="1" rows="6"></textarea>
                    </div>
                </div>

                   <div class="form-group row">
                        <div class="col-sm-offset-4 col-sm-8">
                            <button type="reset" class="btn btn-danger">Reset </button>
                            <button  type="submit"  class="btn btn-success sav_btn">Submit </button>
                            {{-- <button type="submit" onclick="return confirm('It is disabled only at demo mode!')" class="btn btn-success sav_btn">Submit </button> --}}
                        </div>
                    </div>
                    <input type="hidden" name="" id="base_url" value="https://restaurant.bdtask.com/demo-classic/" autocomplete="off">
                    <input type="hidden" name="" id="update" value="Update" autocomplete="off">
                    <input type="hidden" name="" id="sms_template_setup" value="" autocomplete="off">
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-3"></div>
</div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <table width="100%" class="table table-striped table-bordered table-hover">
                                            <thead>
                                                <tr class="center">
                                                    {{-- <th class="all">  </th> --}}
                                                    <th class="all">Template Name </th>
                                                    <th class="all">Type </th>
                                                    <th class="all">SMS Description </th>
                                                    <th class="all">Action  </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($smstemplates as $smstemplate)
                                                     <tr>
                                                    {{-- <td>
                                                        <a class="btn btn-info" href=""><span class="glyphicon glyphicon-remove"></span></a>
                                                    </td> --}}
                                                    <td id="t_8">{{$smstemplate->template_name}}</td>
                                                    <td id="ts_Neworder">{{$smstemplate->type}}</td>
                                                    <td id="td_8">{{$smstemplate->description}}</td>
                                                    <td width="70">
                                                        <a href="{{route('sms.edit',$smstemplate->id)}}" class="edit btn btn-primary">
                                                        <i  class="fa fa-edit"></i> </a>
                                                        <form action="{{route('sms.delete')}}" method="POST">
                                                            @csrf
                                                            <input type="hidden" name="s_id" id="s_id" value="{{$smstemplate->id}}">
                                                            <button  class="btn btn-danger fa fa-trash"  name="archive" type="submit"  onclick="return confirm('Are you sure you want to Delete?');"
                                                            id="btnDelete"></button>
                                                        </form>
                                                    </td>
                                                </tr>
                                                @endforeach
                                         </tbody>
                                    </table>
                                    </div>
                                </div>
                            </div>
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
<script>
    $('.deleteButton').on('click',function(e)
    {
      event.preventDefault(); // prevent form submit
      var form = event.target.form; // storing the form
      swal({
      title: "Are you sure?",
      text: "Once deleted, you will not be able to recover this imaginary file!",
      icon: "warning",
      buttons: true,
      dangerMode: true,
      })
      .then((willDelete) => {
      if (willDelete) {
          swal("Poof! Your imaginary file has been deleted!", {
          icon: "success",
          });
          form.submit();
      } else {
          swal("Your imaginary file is safe!");
      }
      });
    });


</script>
<script>
    imgInp.onchange = evt => {
    const [file] = imgInp.files
    if (file) {
    blah.src = URL.createObjectURL(file)
    }
}
</script>
@endsection
