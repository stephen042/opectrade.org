<!DOCTYPE html>

<html lang="en">

@include('include.home_css')

<body id="bg">
	
    <div class="page-wraper">
        	
        <!-- HEADER START -->
        @include('include.home_header1')
        <!-- HEADER END -->
        
         <!-- CONTENT START -->
        <div class="page-content  bg-white">
        
            <!-- INNER PAGE BANNER -->
            <div class="wt-bnr-inr overlay-wraper" style="background-image:url(assets/images/banner/about-banner.jpg);">
            	<div class="overlay-main bg-black opacity-07"></div>
                <div class="container">
                    <div class="wt-bnr-inr-entry">
                        <h1 class="text-white">Our Investment Plans </h1>
                    </div>
                </div>
            </div>
            <!-- INNER PAGE BANNER END -->
            
           <!-- BREADCRUMB ROW -->                            
            <div class="bg-gray-light p-tb20">
            	<div class="container">
                    <ul class="wt-breadcrumb breadcrumb-style-2">
                        <li><a href="{{ route('app.home') }}"><i class="fa fa-home"></i> Home</a></li>
                        <li>OUR PLANS</li>
                    </ul>
                </div>
            </div>
            <!-- BREADCRUMB ROW END -->                   
            
            <!-- SECTION CONTENT -->         
            <div class="section-full p-t80 p-b50  bg-gray">
                <div class="container">
                	<!-- TITLE START -->
                    <div class="section-head text-center">
                        <h2 class="text-uppercase">Our Plans</h2>
                        <div class="wt-separator-outer"><div class="wt-separator bg-primary"></div></div>
                        <p></p>
                    </div>
                    <!-- TITLE END -->     
                    <div class="section-content">
                        <div class="row">
                        <div class="container-fluid" style="background: linear-gradient(90deg, #00C9FF 0%, #92FE9D 100%);">
                        <div class="container p-5">
                        <div class="row">

                            <div class="col-lg-4 col-md-12 mb-4">
                                <div class="wt-separator-outer">
                                    <div class="wt-separator bg-primary"></div>
                                </div>
                            <div class="card h-100 shadow-lg">
                                <div class="card-body">
                                <div class="text-center p-3">
                                    <h5 class="card-title">Basic Plan</h5>
                                    <small>$50/min</small>
                                    <br><br>
                                    <span class="h2">$499</span>/max
                                    <br><br>
                                </div>
                                </div>
                                <ul class="list-group list-group-flush">
                                <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                    <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                                </svg>TRADE DURATION : 24hr </li>
                                <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                    <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                                </svg> 10% REFERAL BONUS</li>
                                <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                    <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                                </svg> 15.0% RIO</li>
                                <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                    <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                                </svg> INSTANT WITHDRAWAL OF FUND </li>
                                </ul>
                                <div class="card-body text-center">
                                <button class="btn btn-outline-primary btn-lg" style="border-radius:30px">Select</button>
                                </div>
                            </div>
                            </div>

                            <div class="col-lg-4 col-md-12 mb-4">
                                <div class="wt-separator-outer">
                                    <div class="wt-separator bg-primary"></div>
                                </div>
                            <div class="card h-100 shadow-lg">
                                <div class="card-body">
                                <div class="text-center p-3">
                                    <h5 class="card-title">Standard</h5>
                                    <small>$500/min</small>
                                    <br><br>
                                    <span class="h2">$4,900</span>/max 
                                    <br><br>
                                </div>
   
                                </div>
                                <ul class="list-group list-group-flush">
                                <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                    <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                                </svg> TRADE DURATION : 48hrs</li>
                                <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                    <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                                </svg> 10% REFERAL BOUNS</li>
                                <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                    <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                                </svg> 25.0% RIO</li>
                                <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                    <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                                </svg> INSTANT WITHDRAWAL OF FUND</li>
                                </ul>
                                <div class="card-body text-center">
                                <button class="btn btn-outline-primary btn-lg" style="border-radius:30px">Select</button>
                                </div>
                            </div>
                            </div>

                            <div class="col-lg-4 col-md-12 mb-4">
                                 <div class="wt-separator-outer">
                                    <div class="wt-separator bg-primary"></div>
                                </div>
                            <div class="card h-100 shadow-lg">
                                <div class="card-body">
                                <div class="text-center p-3">
                                    <h5 class="card-title">Premium</h5>
                                    <small>$5,000</small>
                                    <br><br>
                                    <span class="h2">$ Unlimited</span>
                                    <br><br>
                                </div>

                                </div>
                                <ul class="list-group list-group-flush">
                                <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                    <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                                </svg> TRADE DURATION : 4 days</li>
                                <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                    <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                                </svg> 10% REFERAL BONUS</li>
                                <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                    <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                                </svg> 50.0% RIO</li>
                                <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                    <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                                </svg> INSTANT WITHDRAWAL OF FUND</li>
                                </ul>
                                <div class="card-body text-center">
                                <button class="btn btn-outline-primary btn-lg" style="border-radius:30px">Select</button>
                                </div>
                            </div>
                            </div>
                        </div>    
                    </div>
                    
                        
                        </div>
                    </div>

                </div>
            </div>
            <hr>
            <!-- SECTION CONTENT END -->
             
             <!-- HOW IT WORK SECTION START  -->
             <div class="section-full  p-t80 p-b80 bg-gray">
                <div class="container">
                    <!-- TITLE START-->
                    <div class="section-head text-center">
                        <span class="wt-title-subline font-16 text-gray-dark m-b15">Three steps To join OPEC Trades community</span>
                        <h2 class="text-uppercase">How It Work</h2>
                        <div class="wt-separator-outer">
                            <div class="wt-separator bg-primary"></div>
                        </div>
                        <p></p>
                    </div>
                    <!-- TITLE END-->
                    <div class="section-content no-col-gap">
                        <div class="row">

                            <!-- COLUMNS 1 -->
                            <div class="col-md-4 col-sm-4 step-number-block">
                                <div class="wt-icon-box-wraper  p-a30 center bg-white m-a5">
                                    <div class="icon-lg text-primary m-b20">
                                        <a href="#" class="icon-cell"><i class="fa fa-user" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="icon-content">
                                        <div class="step-number">1</div>
                                        <h4 class="wt-tilte text-uppercase font-weight-500">Create your Account </h4>
                                        <p>Simply click on the register button to create a free account for yourself. Its quick and easy.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 2 -->
                            <div class="col-md-4 col-sm-4 step-number-block">
                                <div class="wt-icon-box-wraper  p-a30 center bg-secondry m-a5 ">
                                    <div class="icon-lg m-b20">
                                        <a href="#" class="icon-cell"><img src="{{ asset('assets/images/icon/pick-4.png') }}" alt=""></a>
                                    </div>
                                    <div class="icon-content text-white">
                                        <div class="step-number active">2</div>
                                        <h4 class="wt-tilte text-uppercase font-weight-500">Make Deposits</h4>
                                        <p>Make a deposit to your personal wallet. Pick a plan of your choice from our investment plans. </p>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 3 -->
                            <div class="col-md-4 col-sm-4 step-number-block">
                                <div class="wt-icon-box-wraper  p-a30 center bg-white m-a5">
                                    <div class="icon-lg text-primary m-b20">
                                        <a href="#" class="icon-cell"><i class="fa fa-line-chart" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="icon-content">
                                        <div class="step-number">3</div>
                                        <h4 class="wt-tilte text-uppercase font-weight-500">Financial Growth</h4>
                                        <p>Watch your daily earnings live. Be ready to place a withdrawal as soon as your investment is completed.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- HOW IT WORK  SECTION END -->
                                 
        </div>
        <!-- CONTENT END -->

        <!-- FOOTER START -->
            @include('include.home_footer')
        <!-- FOOTER END -->

        <!-- BUTTON TOP START -->
        <button class="scroltop"><span class=" iconmoon-house relative" id="btn-vibrate"></span>Top</button> 
        
    </div>
    
 
<!-- LOADING AREA START ===== -->
@include('include.loading')
<!-- LOADING AREA  END ====== -->
<!-- JAVASCRIPT  FILES ========================================= --> 
<script   src="{{ asset('assets/js/jquery-1.12.4.min.js')}}"></script><!-- JQUERY.MIN JS -->
<script   src="{{ asset('assets/js/bootstrap.min.js')}}"></script><!-- BOOTSTRAP.MIN JS -->

<script   src="{{ asset('assets/js/bootstrap-select.min.js')}}"></script><!-- FORM JS -->
<script   src="{{ asset('assets/js/jquery.bootstrap-touchspin.min.js')}}"></script><!-- FORM JS -->

<script   src="{{ asset('assets/js/magnific-popup.min.js')}}"></script><!-- MAGNIFIC-POPUP JS -->

<script   src="{{ asset('assets/js/waypoints.min.js')}}"></script><!-- WAYPOINTS JS -->
<script   src="{{ asset('assets/js/counterup.min.js')}}"></script><!-- COUNTERUP JS -->
<script   src="{{ asset('assets/js/waypoints-sticky.min.js')}}"></script><!-- COUNTERUP JS -->

<script  src="{{ asset('assets/js/isotope.pkgd.min.js')}}"></script><!-- MASONRY  -->

<script   src="{{ asset('assets/js/owl.carousel.min.js')}}"></script><!-- OWL  SLIDER  -->

<script   src="{{ asset('assets/js/stellar.min.js')}}"></script><!-- PARALLAX BG IMAGE   --> 
<script   src="{{ asset('assets/js/scrolla.min.js')}}"></script><!-- ON SCROLL CONTENT ANIMTE   --> 

<script   src="{{ asset('assets/js/custom.js')}}"></script><!-- CUSTOM FUCTIONS  -->
<script   src="{{ asset('assets/js/shortcode.js')}}"></script><!-- SHORTCODE FUCTIONS  -->
<script   src="{{ asset('assets/js/switcher.js')}}"></script><!-- SWITCHER FUCTIONS  -->
<script  src="{{ asset('assets/js/jquery.bgscroll.js')}}"></script><!-- BACKGROUND SCROLL -->
<script  src="{{ asset('assets/js/tickerNews.min.js')}}"></script><!-- TICKERNEWS-->



</body>


</html>
