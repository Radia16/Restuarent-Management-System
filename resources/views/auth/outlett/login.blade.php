

<!--
                            <div class="box">
                                <div class="box-body">
                                    <div class="d-flex align-items-start">
                                        <div>
                                            <img src="../images/food/online-order-1.png" class="w-80 me-20" alt="" />
                                        </div>
                                        <div>
                                            <h2 class="my-0 fw-700"><a href=""> 89</h2>
                                            <p class="text-fade mb-0">Total Order</p>
                                            <p class="fs-12 mb-0 text-success"><span class="badge badge-pill badge-success-light me-5"><i class="fa fa-arrow-up"></i></span>3% (15 Days)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                   {{--  end foreach --}} -->

{{-- @include('admin.body.old_admin_sidebar') --}}




<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://riday-admin-template.multipurposethemes.com/bs5/images/favicon.ico">

    <title>Riday - Restaurant Bootstrap Admin Template Webapp</title>

	<!-- Vendors Style-->
	<link rel="stylesheet" href="{{ asset('backend/css/vendors_css.css')}}">

	<!-- Style-->
	<link rel="stylesheet" href="{{ asset('backend/css/style.css')}}">
	<link rel="stylesheet" href="{{ asset('backend/css/skin_color.css')}}">

</head>

<body class="hold-transition theme-primary bg-img" style="background-image: url(../images/auth-bg/bg-1.jpg)">

	<div class="container h-p100">
		<div class="row align-items-center justify-content-md-center h-p100">

			<div class="col-12">
				<div class="row justify-content-center g-0">
					<div class="col-lg-5 col-md-5 col-12">
						<div class="bg-white rounded10 shadow-lg">
							<div class="content-top-agile p-20 pb-0">
								<h2 class="text-primary">Let's Get Started</h2>
								<p class="mb-0">Sign in to continue to WebkitX.</p>
							</div>
							<div class="p-40">
								<form action="{{ route('outlett.check') }}" method="post">
									@if (Session::get('fail'))
										<div class="alert alert-danger">
											{{ Session::get('fail') }}
										</div>
									@endif
									@csrf
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
											<input type="text" name="email"  value="{{ old('email') }}"class="form-control ps-15 bg-transparent" placeholder="email">
											<span class="text-danger">@error('email'){{ $message }}@enderror</span>
										</div>
									</div>
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text  bg-transparent"><i class="ti-lock"></i></span>
											<input type="password"  name="password" value="{{ old('password') }}" class="form-control ps-15 bg-transparent" placeholder="Password">
										</div>
									</div>
									  <div class="row">
										<div class="col-6">
										  <div class="checkbox">
											<input type="checkbox" id="basic_checkbox_1" >
											<label for="basic_checkbox_1">Remember Me</label>
										  </div>
										</div>
										<!-- /.col -->
										<div class="col-6">
										 <div class="fog-pwd text-end">
											<a href="javascript:void(0)" class="hover-warning"><i class="ion ion-locked"></i> Forgot pwd?</a><br>
										  </div>
										</div>
										<!-- /.col -->
										<div class="col-12 text-center">
										  <button type="submit" class="btn btn-danger mt-10">SIGN IN</button>
										</div>
										<!-- /.col -->
									  </div>
								</form>
								<div class="text-center">
									<p class="mt-15 mb-0">Don't have an account? <a href="auth_register.html" class="text-warning ms-5">Sign Up</a></p>
								</div>
							</div>
						</div>
						<div class="text-center">
						  <p class="mt-20 text-white">- Sign With -</p>
						  <p class="gap-items-2 mb-20">
							  <a class="btn btn-social-icon btn-round btn-facebook" href="#"><i class="fa fa-facebook"></i></a>
							  <a class="btn btn-social-icon btn-round btn-twitter" href="#"><i class="fa fa-twitter"></i></a>
							  <a class="btn btn-social-icon btn-round btn-instagram" href="#"><i class="fa fa-instagram"></i></a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Vendor JS -->
	<script src="{{asset('backend/js/vendors.min.js')}}"></script>
	<script src="{{asset('backend/js/pages/chat-popup.js')}}"></script>
	<script src="{{asset('../backend/assets/vendor_components/apexcharts-bundle/dist/apexcharts.min.js')}}"></script>
    <script src="{{asset('../backend/assets/icons/feather-icons/feather.min.js')}}"></script>

</body>


</html>



{{--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login</title>
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
</head>
<body style="background-color:#c8d9e8 !important">
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4" style="margin-top: 45px">
                 <h4>Admin Login</h4><hr>
                 <form action="{{ route('admin.check') }}" method="post">
                    @if (Session::get('fail'))
                        <div class="alert alert-danger">
                            {{ Session::get('fail') }}
                        </div>
                    @endif
                    @csrf
                     <div class="form-group">
                         <label for="email">Email</label>
                         <input type="text" class="form-control" name="email" placeholder="Enter email address" value="{{ old('email') }}">
                         <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                     </div>
                     <div class="form-group">
                         <label for="password">Password</label>
                         <input type="password" class="form-control" name="password" placeholder="Enter password" value="{{ old('password') }}">
                         <span class="text-danger">@error('password'){{ $message }}@enderror</span>
                     </div>
                     <div class="form-group">
                         <button type="submit" class="btn btn-primary">Login</button>
                     </div>
                 </form>
            </div>
        </div>
    </div>
</body>
</html> --}}


