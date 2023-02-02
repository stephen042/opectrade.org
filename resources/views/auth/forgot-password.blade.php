<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.png') }} " />
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/asset/vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/asset/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/asset/vendor/animate/animate.css') }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/asset/vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/asset/vendor/animsition/css/animsition.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/asset/vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/asset/vendor/daterangepicker/daterangepicker.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/asset/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/asset/css/main.css') }}">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="logo-header mostion text-center mx-auto" style="width: 200px;margin-top:30px;">
            <a href="{{ route('app.home') }}" style="display: flex; padding:2px;">
            <img src="{{ asset('assets/images/logo-light.jpg')}}" style="height:65px;width:100%;background-color:lightblue;"  alt="">
            </a>
        </div>
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form p-l-55 p-r-55 p-t-178">
					<span class="login100-form-title">
						Forgort Password
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter email">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
					</div>

					{{-- <div class="wrap-input100 validate-input" data-validate = "Please enter password">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
					</div> --}}

					<div class="text-right p-t-13 p-b-23">
						{{-- <span class="txt1">
							Forgot
						</span>

						<a href="#" class="txt2">
							Password?
						</a> --}}
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Send Mail
						</button>
					</div>

					<div class="flex-col-c p-t-170 p-b-40">
						<span class="txt1 p-b-9">
							Remember Your Details?
						</span>

						<a href="{{ route('user.pages.view', ['login']) }}" class="txt3">
							Login
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	
<!--===============================================================================================-->
	<script src="{{ asset('assets/asset/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('assets/asset/vendor/animsition/js/animsition.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('assets/asset/vendor/bootstrap/js/popper.js') }}"></script>
	<script src="{{ asset('assets/asset/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('assets/asset/vendor/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('assets/asset/vendor/daterangepicker/moment.min.js') }}"></script>
	<script src="{{ asset('assets/asset/vendor/daterangepicker/daterangepicker.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('assets/asset/vendor/countdowntime/countdowntime.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('assets/asset/js/main.js') }}"></script>

</body>
</html>