<!doctype html>
<html lang="en">
  <head>
  	<title>Reset Password</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.png') }} " />

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="{{ asset('assets/asset/css/home/style.css') }}"> 

	</head>
	<body>
	<!-- <section class="ftco-section"> -->
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section"><a href="{{ route('app.home') }}">
					<img src="{{ asset('assets/images/logo-light.jpg') }}" alt="">
					</a></h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="login-wrap p-4 p-md-5">

		      	<h3 class="text-center mb-4">Reset Password</h3>
				 <form id="registerForm1" action="{{ route('admin.reset.password',[$email,$token]) }}" method="POST" class="login-form">

                    @csrf
       
                    @if (!empty($noMatch))
                    <p class="text-danger" style="text-align: center">{{ $noMatch }}</p>
                    @endif

					@if (!empty($trueMatch))
                    <p class="text-success" style="text-align: center">{{ $trueMatch }}</p>
                    @endif
   
 
                    @error('password')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
	            <div class="form-group d-flex">

	              <input name="password" type="password" class="form-control rounded-left" placeholder="Password" required>
	            </div>
							@error('password_confirmation')
							<p class="text-danger">{{ $message }}</p>
							@enderror
							<div class="form-group d-flex">

						<input name="password_confirmation" type="Password" class="form-control rounded-left" placeholder="Confirm password" required>
					</div>


	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary rounded submit px-3">Change Password</button>
	            </div>
	            <div class="form-group d-md-flex">


	            </div>
	          </form>
	        </div>
				</div>
			</div>
		</div>
	<!-- </section> -->

	<script src="{{ asset('assets/asset/js/jquery.js') }}"></script>

  <script src="{{ asset('assets/asset/js/customer.js') }}"></script>

	</body>
</html>

