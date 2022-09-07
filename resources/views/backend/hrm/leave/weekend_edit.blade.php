@extends('admin.main_master')

@section('content')

<div class="row" >
    <div class="col-lg-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">
                   UPDATE WEEKENDS
                </h3>
                {{--  <div class="bt">
                    <button type="button" class="btn btn-info-light btn-sm" data-bs-toggle="modal" data-bs-target="#AddLeaveAppModal">
                        Weekend Information
                      </button>

                </div>  --}}
            </div>


            <!-- /.box-header -->
            <div class="box-body">

                <form action=" #" method="POST" >
                    @csrf
                    <input type="hidden" name="id" value="{{ $weekends->id }}">

                    <div class="col-md-12">
                        <div class="form-group">

                            <div class="controls">

                                <label><strong> Weekend :</strong></label><br>
                                {{--  <label for="checkbox_7"> Friday</label>
                                <input type="checkbox" id="checkbox_7" name="weekend[]" value="Friday">
                                <label><input type="checkbox" name="weekend[]" value="Saturday"> Saturday</label>
                                <label><input type="checkbox" name="weekend[]" value="Sunday"> Sunday</label>  --}}

                                <fieldset>
                                    <input type="checkbox" id="checkbox_7" name="weekends[]" value="friday" {{ $weekends->weekends == 1 ? 'checked' : '' }}  data-validation-minchecked-message="Choose at least two" >
                                    <label for="checkbox_7">Friday</label>
                                {{--  </fieldset>
                                <fieldset>  --}}
                                    <input type="checkbox" id="checkbox_8" name="weekends[]" value="saturday" {{ $weekends->weekends }} data-validation-minchecked-message="Choose at least two" >
                                    <label for="checkbox_8">Saturday</label>
                                {{--  </fieldset>
                                <fieldset>  --}}
                                    <input type="checkbox" id="checkbox_9" name="weekends[]" value="sunday" {{ $weekends->weekends }} data-validation-minchecked-message="Choose at least two" >
                                    <label for="checkbox_9">Sunday</label>
                                </fieldset>


                            </div>

                        </div>
                    </div>
                    <div class="text-align-center" >
                        <input type="submit" class="btn btn-rounded btn-success mb-5 "  value="Update" >
                    </div>

                </form>


            </div>
            {{-- <!-- /.box-body --> --}}

        </div>


    </div>
</div>

@endsection

@section('css')
    <style>
        .text-align-center{
            float: right !important;
        }

    </style>

@endsection


@section('script')

    {{--  <script src="{{ asset('backend/js/pages/validation.js') }}"></script>
      <script src="{{ asset('backend/js/pages/form-validation.js') }}"></script>  --}}

@endsection
