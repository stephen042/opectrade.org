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
            <div class="wt-bnr-inr overlay-wraper" style="background-image:url(assets/images/banner/services.jpg);">
            	<div class="overlay-main bg-black opacity-07"></div>
                <div class="container">
                    <div class="wt-bnr-inr-entry">
                        <h1 class="text-white">Services </h1>
                    </div>
                </div>
            </div>
            <!-- INNER PAGE BANNER END -->
            
           <!-- BREADCRUMB ROW -->                            
            <div class="bg-gray-light p-tb20">
            	<div class="container">
                    <ul class="wt-breadcrumb breadcrumb-style-2">
                        <li><a href="{{ route('app.home') }}"><i class="fa fa-home"></i> Home</a></li>
                        <li>Services</li>
                    </ul>
                </div>
            </div>
            <!-- BREADCRUMB ROW END -->                   
            
            <!-- SECTION CONTENT -->         
            <div class="section-full p-t80 p-b50  bg-gray">
                <div class="container">
                	<!-- TITLE START -->
                    <div class="section-head text-center">
                        <h2 class="text-uppercase">Our Services</h2>
                        <div class="wt-separator-outer"><div class="wt-separator bg-primary"></div></div>
                        <p></p>
                    </div>
                    <!-- TITLE END -->     
                    <div class="section-content">
                        <div class="row">
                        
                            <!-- COLUMNS 1 --> 
                            <div class="col-md-4 col-sm-4 p-tb15">
                                <div class="wt-box bg-white p-a20">
                                    <div class="wt-media">
                                        <a href="{{ route('cryptocurrency') }}"><img src="{{ asset('assets/images/our-work/pic1.jpg') }}" alt=""></a>
                                    </div>
                                    <div class="wt-info p-t30">
                                        <h4 class="wt-title m-t0"><a href="{{ route('cryptocurrency') }}" class="text-primary">Cryptocurrency</a></h4>
                                        <p>Cryptocurrency is a form of payment that can be exchanged online for goods and services. Many companies</p>
                                        <a href="{{ route('cryptocurrency') }}" class="site-button">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 2 -->
                            <div class="col-md-4 col-sm-4 p-tb15">
                                <div class="wt-box bg-white p-a20">
                                    <div class="wt-media">
                                        <a href="{{ route('forex') }}"><img src="{{ asset('assets/images/our-work/pic2.jpg') }}" alt=""></a>
                                    </div>
                                    <div class="wt-info p-t30">
                                        <h4 class="wt-title m-t0"><a href="{{ route('forex') }}" class="text-primary">FOREX</a></h4>
                                        <p>If you don’t have time to trade your funds or you think that you don’t have enough knowledge and experience, then it’s</p>
                                        <a href="{{ route('forex') }}" class="site-button">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 3 -->
                            <div class="col-md-4 col-sm-4 p-tb15">
                                <div class="wt-box bg-white p-a20">
                                    <div class="wt-media">
                                        <a href="{{ route('stocks') }}"><img src="{{ asset('assets/images/our-work/pic3.jpg') }}" alt=""></a>
                                    </div>
                                    <div class="wt-info p-t30">
                                        <h4 class="wt-title m-t0"><a href="{{ route('stocks') }}" class="text-primary">stocks</a></h4>
                                        <p> Units of stock are called "shares." Stocks are bought and sold predominantly on stock exchanges, though there can </p>
                                        <a href="{{ route('stocks') }}" class="site-button">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 4 -->
                            <div class="col-md-4 col-sm-4 p-tb15">
                                <div class="wt-box bg-white p-a20">
                                    <div class="wt-media">
                                        <a href="{{ route('realEstate') }}"> <img src="{{ asset('assets/images/our-work/pic4.jpg') }}" alt=""></a>
                                    </div>
                                    <div class="wt-info p-t30">
                                        <h4 class="wt-title m-t0"><a href="{{ route('realEstate') }}" class="text-primary">RealEstate</a></h4>
                                        <p>OPEC Trade is a different way to invest online. We help you lay a foundation for you to accumulate and build wealth. Earning money </p>
                                        <a href="{{ route('realEstate') }}" class="site-button">Read More</a>
                                    </div>
                                </div>
                            </div>
                           
                            <!-- COLUMNS 5 
                            <div class="col-md-4 col-sm-4 p-tb15">
                                <div class="wt-box bg-white p-a20">
                                    <div class="wt-media">
                                        <a href="javascript:void(0);"><img src="{{ asset('assets/images/our-work/pic5.jpg')}}" alt=""></a>
                                    </div>
                                    <div class="wt-info p-t30">
                                        <h4 class="wt-title m-t0"><a href="javascript:void(0);" class="text-primary">Box Title</a></h4>
                                        <p>Lorem ipsum dolor consectetur adipiscing Fusce varius euismod lacus eget feugiat. </p>
                                        <a href="javascript:void(0);" class="site-button">Read More</a>
                                    </div>
                                </div>
                            </div>
                            COLUMNS 6 
                            <div class="col-md-4 col-sm-4 p-tb15">
                                <div class="wt-box bg-white p-a20">
                                    <div class="wt-media">
                                        <a href="javascript:void(0);"><img src="{{ asset('assets/images/our-work/pic6.jpg')}}" alt=""></a>
                                    </div>
                                    <div class="wt-info p-t30">
                                        <h4 class="wt-title m-t0"><a href="javascript:void(0);" class="text-primary">Box Title</a></h4>
                                        <p>Lorem ipsum dolor consectetur adipiscing Fusce varius euismod lacus eget feugiat. </p>
                                        <a href="javascript:void(0);" class="site-button">Read More</a>
                                    </div>
                                </div>
                            </div>-->

                        
                        </div>
                    </div>

                </div>
            </div>
            <!-- SECTION CONTENT END -->
              
             <!-- COMPANY DETAIL SECTION START -->
            <div class="section-full p-t50 p-b50 overlay-wraper bg-parallax"  data-stellar-background-ratio="0.5" style="background-image:url(assets/images/background/bg4.jpg);">
                <div class="overlay-main opacity-07 bg-black"></div>
                <div class="container ">
                    <div class="row">
                        <div class="col-md-6">
                        	<div class="text-left text-white">
                                <h1>A New Money Cryptocurrency</h1>
                                <p>Invest Safely your Cryptocurrency with US</p>
                            </div>
                         </div>
                        <div class="col-md-6">
                        <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="status-marks  text-white m-tb10">
                                <div class="status-value text-right">
                                	<span class="counter">750</span>
                                    <i class="flaticon-network-1 font-26 m-l15"></i>
                                </div>
                                <h6 class="text-uppercase text-white text-right">Countries Accepted</h6>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="status-marks  text-white m-tb10">
                                <div class="status-value text-right">
                                	<span class="counter">200</span>
                                    <i class="flaticon-bitcoin-2 font-26 m-l15"></i>
                                </div>
                                <h6 class="text-uppercase text-white text-right">Million Wallets</h6>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-">
                            <div class="status-marks  text-white m-tb10">
                                <div class="status-value text-right">
                                	<span class="counter">4522</span>
                                    <i class="flaticon-profits font-26 m-l15"></i>
                                </div>
                                <h6 class="text-uppercase text-white text-right">Transactions</h6>
                            </div>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <hr>
            <!-- COMPANY DETAIL SECTION End -->   
                                 
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
