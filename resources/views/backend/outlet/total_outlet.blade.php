@extends('admin.main_master')

@section('content')

<div class="row form-gap">

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Total Outlet</h4>

                </div>
            </div>
         <div class="row">
              @foreach($outlet as $value)
                <div class="col-lg-3">
                    <div class="card cardcheck">
                            <div class="card-body text-center cb">
                                <img src="{{ asset('images/food/outlet.webp')}}" class="card-img-top w-100" alt="...">
                                <h3 class="title">Outlet Name :{{$value->outlet_name}}</h3>
                                <p class="outlet_code">Outlet Code :{{$value->outlet_code}}</p>
                                <h4 class="outlet_address">Address : {{$value->address}}</h4>
                                <h4 class="outlet_phone">Phone    :{{$value->phone}}</h4>
                                <h4 class="outlet_email">Email    : {{$value->email}}</h4>
                                <h4 class="outlet_email">password : {{$value->password}}</h4>

                            </div>
                            <center style="margin-bottom:15px; margin-top:-21px;">

                                <div class="btn_box button" style="    margin: 10px;">
                                    <a href="http://127.0.0.1:8000/outlett/login" type="button" class="btn btn-info" role="button">Enter</a>
                                    <a href="{{ route('outlet.edit', $value->id ) }}" class="btn btn-info" role="button">Edit</a>
                                    <form action="{{route('outlet.delete')}}" method="POST">
                                        @csrf
                                        <input type="hidden" name="p_id" id="p_id" value="{{$value->id}}">
                                        <button class="btn btn-danger"  name="archive" type="submit"  onclick="return confirm('Are you sure you want to Delete?');"
                                           id="btnDelete">DELETE</button>

                                    </form>
                                </div
                            </center>


                    </div>
                </div>
                  <!--    <div class="col-lg-3">
                    <div class="card cardcheck">
                            <div class="card-body text-center cb">
                                <img src="{{ asset('upload/food/image/1718187792787408.jpg')}}" class="card-img-top w-100" alt="...">
                                <h3 class="title">Outlet Name</h3>
                                <p class="outlet_code">Outlet Code : 000001</p>
                                <h4 class="outlet_address">Address : House 5, Road 4, Nikunja 2, Khilkhet, Dhaka</h4>
                                <h4 class="outlet_phone">Phone : 01812391633</h4>
                                <h4 class="outlet_email">Email : info@hiralugedara.com</h4>
                            </div>
                            <center style="margin-bottom:15px; margin-top:-21px;">
                                <div class="btn_box button" style="    margin: 10px;">
                                    <a href="http://127.0.0.1:8000/outlett/login" type="button" class="btn btn-info" role="button">Enter</a>
                                    <a href="#" class="btn btn-primary" role="button">Edit</a>
                                    <a href="#" class="btn btn-danger" role="button" aria-pressed="true">Delete</a>
                                </div
                            </center>


                    </div>
                     </div>
                     <div class="col-lg-3">
                    <div class="card cardcheck">
                            <div class="card-body text-center cb">
                                <img src="{{ asset('upload/food/image/1718187792787408.jpg')}}" class="card-img-top w-100" alt="...">
                                <h3 class="title">Outlet Name</h3>
                                <p class="outlet_code">Outlet Code : 000001</p>
                                <h4 class="outlet_address">Address : House 5, Road 4, Nikunja 2, Khilkhet, Dhaka</h4>
                                <h4 class="outlet_phone">Phone : 01812391633</h4>
                                <h4 class="outlet_email">Email : info@hiralugedara.com</h4>
                            </div>
                            <center style="margin-bottom:15px; margin-top:-21px;">
                                <div class="btn_box button" style="    margin: 10px;">
                                    <a href="http://127.0.0.1:8000/outlett/login" type="button" class="btn btn-info" role="button">Enter</a>
                                    <a href="#" class="btn btn-primary" role="button">Edit</a>
                                    <a href="#" class="btn btn-danger" role="button" aria-pressed="true">Delete</a>
                                </div
                            </center>


                    </div>
                     </div>
                     <div class="col-lg-3">
                    <div class="card cardcheck">
                            <div class="card-body text-center cb">
                                <img src="{{ asset('upload/food/image/1718187792787408.jpg')}}" class="card-img-top w-100" alt="...">
                                <h3 class="title">Outlet Name</h3>
                                <p class="outlet_code">Outlet Code : 000001</p>
                                <h4 class="outlet_address">Address : House 5, Road 4, Nikunja 2, Khilkhet, Dhaka</h4>
                                <h4 class="outlet_phone">Phone : 01812391633</h4>
                                <h4 class="outlet_email">Email : info@hiralugedara.com</h4>
                            </div>
                            <center style="margin-bottom:15px; margin-top:-21px;">
                                <div class="btn_box button" style="    margin: 10px;">
                                    <a href="http://127.0.0.1:8000/outlett/login" type="button" class="btn btn-info" role="button">Enter</a>
                                    <a href="#" class="btn btn-primary" role="button">Edit</a>
                                    <a href="#" class="btn btn-danger" role="button" aria-pressed="true">Delete</a>
                                </div
                            </center>


                    </div>
                     </div> -->

             @endforeach
         </div>


            <!--    <div class="row">
                     <div class="col-lg-3">
                    <div class="card cardcheck">
                            <div class="card-body text-center cb">
                                <img src="{{ asset('upload/food/image/1718187792787408.jpg')}}" class="card-img-top w-100" alt="...">
                                <h3 class="title">Outlet Name</h3>
                                <p class="outlet_code">Outlet Code : 000001</p>
                                <h4 class="outlet_address">Address : House 5, Road 4, Nikunja 2, Khilkhet, Dhaka</h4>
                                <h4 class="outlet_phone">Phone : 01812391633</h4>
                                <h4 class="outlet_email">Email : info@hiralugedara.com</h4>
                            </div>
                            <center style="margin-bottom:15px; margin-top:-21px;">
                                <div class="btn_box button" style="    margin: 10px;">
                                    <a href="http://127.0.0.1:8000/outlett/login" type="button" class="btn btn-info" role="button">Enter</a>
                                    <a href="#" class="btn btn-primary" role="button">Edit</a>
                                    <a href="#" class="btn btn-danger" role="button" aria-pressed="true">Delete</a>
                                </div
                            </center>


                    </div>
                      </div>
                     <div class="col-lg-3">
                    <div class="card cardcheck">
                            <div class="card-body text-center cb">
                                <img src="{{ asset('upload/food/image/1718187792787408.jpg')}}" class="card-img-top w-100" alt="...">
                                <h3 class="title">Outlet Name</h3>
                                <p class="outlet_code">Outlet Code : 000001</p>
                                <h4 class="outlet_address">Address : House 5, Road 4, Nikunja 2, Khilkhet, Dhaka</h4>
                                <h4 class="outlet_phone">Phone : 01812391633</h4>
                                <h4 class="outlet_email">Email : info@hiralugedara.com</h4>
                            </div>
                            <center style="margin-bottom:15px; margin-top:-21px;">
                                <div class="btn_box button" style="    margin: 10px;">
                                    <a href="http://127.0.0.1:8000/outlett/login" type="button" class="btn btn-info" role="button">Enter</a>
                                    <a href="#" class="btn btn-primary" role="button">Edit</a>
                                    <a href="#" class="btn btn-danger" role="button" aria-pressed="true">Delete</a>
                                </div
                            </center>


                    </div>
                     </div>
                     <div class="col-lg-3">
                    <div class="card cardcheck">
                            <div class="card-body text-center cb">
                                <img src="{{ asset('upload/food/image/1718187792787408.jpg')}}" class="card-img-top w-100" alt="...">
                                <h3 class="title">Outlet Name</h3>
                                <p class="outlet_code">Outlet Code : 000001</p>
                                <h4 class="outlet_address">Address : House 5, Road 4, Nikunja 2, Khilkhet, Dhaka</h4>
                                <h4 class="outlet_phone">Phone : 01812391633</h4>
                                <h4 class="outlet_email">Email : info@hiralugedara.com</h4>
                            </div>
                            <center style="margin-bottom:15px; margin-top:-21px;">
                                <div class="btn_box button" style="    margin: 10px;">
                                    <a href="http://127.0.0.1:8000/outlett/login" type="button" class="btn btn-info" role="button">Enter</a>
                                    <a href="#" class="btn btn-primary" role="button">Edit</a>
                                    <a href="#" class="btn btn-danger" role="button" aria-pressed="true">Delete</a>
                                </div
                            </center>


                    </div>
                     </div>
                     <div class="col-lg-3">
                    <div class="card cardcheck">
                            <div class="card-body text-center cb">
                                <img src="{{ asset('upload/food/image/1718187792787408.jpg')}}" class="card-img-top w-100" alt="...">
                                <h3 class="title">Outlet Name</h3>
                                <p class="outlet_code">Outlet Code : 000001</p>
                                <h4 class="outlet_address">Address : House 5, Road 4, Nikunja 2, Khilkhet, Dhaka</h4>
                                <h4 class="outlet_phone">Phone : 01812391633</h4>
                                <h4 class="outlet_email">Email : info@hiralugedara.com</h4>
                            </div>
                            <center style="margin-bottom:15px; margin-top:-21px;">
                                <div class="btn_box button" style="    margin: 10px;">
                                    <a href="http://127.0.0.1:8000/outlett/login" type="button" class="btn btn-info" role="button">Enter</a>
                                    <a href="#" class="btn btn-primary" role="button">Edit</a>
                                    <a href="#" class="btn btn-danger" role="button" aria-pressed="true">Delete</a>
                                </div
                            </center>


                    </div>
                     </div>
               </div> -->

             <!--  <div class="row">
                       <div class="col-lg-3">
                    <div class="card cardcheck">
                            <div class="card-body text-center cb">
                                <img src="{{ asset('upload/food/image/1718187792787408.jpg')}}" class="card-img-top w-100" alt="...">
                                <h3 class="title">Outlet Name</h3>
                                <p class="outlet_code">Outlet Code : 000001</p>
                                <h4 class="outlet_address">Address : House 5, Road 4, Nikunja 2, Khilkhet, Dhaka</h4>
                                <h4 class="outlet_phone">Phone : 01812391633</h4>
                                <h4 class="outlet_email">Email : info@hiralugedara.com</h4>
                            </div>
                            <center style="margin-bottom:15px; margin-top:-21px;">
                                <div class="btn_box button" style="    margin: 10px;">
                                    <a href="http://127.0.0.1:8000/outlett/login" type="button" class="btn btn-info" role="button">Enter</a>
                                    <a href="#" class="btn btn-primary" role="button">Edit</a>
                                    <a href="#" class="btn btn-danger" role="button" aria-pressed="true">Delete</a>
                                </div
                            </center>


                    </div>
                       </div>
                       <div class="col-lg-3">
                    <div class="card cardcheck">
                            <div class="card-body text-center cb">
                                <img src="{{ asset('upload/food/image/1718187792787408.jpg')}}" class="card-img-top w-100" alt="...">
                                <h3 class="title">Outlet Name</h3>
                                <p class="outlet_code">Outlet Code : 000001</p>
                                <h4 class="outlet_address">Address : House 5, Road 4, Nikunja 2, Khilkhet, Dhaka</h4>
                                <h4 class="outlet_phone">Phone : 01812391633</h4>
                                <h4 class="outlet_email">Email : info@hiralugedara.com</h4>
                            </div>
                            <center style="margin-bottom:15px; margin-top:-21px;">
                                <div class="btn_box button" style="    margin: 10px;">
                                    <a href="http://127.0.0.1:8000/outlett/login" type="button" class="btn btn-info" role="button">Enter</a>
                                    <a href="#" class="btn btn-primary" role="button">Edit</a>
                                    <a href="#" class="btn btn-danger" role="button" aria-pressed="true">Delete</a>
                                </div
                            </center>


                    </div>
                       </div>
                       <div class="col-lg-3">
                    <div class="card cardcheck">
                            <div class="card-body text-center cb">
                                <img src="{{ asset('upload/food/image/1718187792787408.jpg')}}" class="card-img-top w-100" alt="...">
                                <h3 class="title">Outlet Name</h3>
                                <p class="outlet_code">Outlet Code : 000001</p>
                                <h4 class="outlet_address">Address : House 5, Road 4, Nikunja 2, Khilkhet, Dhaka</h4>
                                <h4 class="outlet_phone">Phone : 01812391633</h4>
                                <h4 class="outlet_email">Email : info@hiralugedara.com</h4>
                            </div>
                            <center style="margin-bottom:15px; margin-top:-21px;">
                                <div class="btn_box button" style="    margin: 10px;">
                                    <a href="http://127.0.0.1:8000/outlett/login" type="button" class="btn btn-info" role="button">Enter</a>
                                    <a href="#" class="btn btn-primary" role="button">Edit</a>
                                    <a href="#" class="btn btn-danger" role="button" aria-pressed="true">Delete</a>
                                </div
                            </center>


                    </div>
                       </div>
                      <div class="col-lg-3">
                    <div class="card cardcheck">
                            <div class="card-body text-center cb">
                                <img src="{{ asset('upload/food/image/1718187792787408.jpg')}}" class="card-img-top w-100" alt="...">
                                <h3 class="title">Outlet Name</h3>
                                <p class="outlet_code">Outlet Code : 000001</p>
                                <h4 class="outlet_address">Address : House 5, Road 4, Nikunja 2, Khilkhet, Dhaka</h4>
                                <h4 class="outlet_phone">Phone : 01812391633</h4>
                                <h4 class="outlet_email">Email : info@hiralugedara.com</h4>
                            </div>
                            <center style="margin-bottom:15px; margin-top:-21px;">
                                <div class="btn_box button" style="    margin: 10px;">
                                    <a href="http://127.0.0.1:8000/outlett/login" type="button" class="btn btn-info" role="button">Enter</a>
                                    <a href="#" class="btn btn-primary" role="button">Edit</a>
                                    <a href="#" class="btn btn-danger" role="button" aria-pressed="true">Delete</a>
                                </div
                            </center>


                    </div>
                      </div>
             </div> -->


</div>
@endsection




