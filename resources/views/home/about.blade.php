<!DOCTYPE html>

<html lang="en">

@include('include.home_css')

<body id="bg">

    <div class="page-wraper">
        	
        <!-- HEADER START -->
        @include('include.home_header1')
        <!-- HEADER END -->
            
        <!-- CONTENT START -->
        <div class="page-content">
            
            <!-- INNER PAGE BANNER -->
            <div class="wt-bnr-inr overlay-wraper" style="background-image:url(assets/images/banner/aboutus.jpg);">
                <div class="overlay-main bg-black opacity-07"></div>
                <div class="container">
                    <div class="wt-bnr-inr-entry">
                        <h1 class="text-white">About </h1>
                    </div>
                </div>
            </div>
            <!-- INNER PAGE BANNER END --> 
                
            <!-- BREADCRUMB ROW -->                            
            <div class="bg-gray-light p-tb20">
                <div class="container">
                    <ul class="wt-breadcrumb breadcrumb-style-2">
                        <li><a href="{{ route('app.home') }}"><i class="fa fa-home"></i> Home</a></li>
                        <li>About Us</li>
                    </ul>
                </div>
            </div>
            <!-- BREADCRUMB  ROW END --> 
            
            <!-- ABOUT COMPANY SECTION START -->
            <div class="section-full p-tb100">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="section-head text-left">
                                <span class="wt-title-subline text-gray-dark font-16 m-b15">Who are we ?</span>
                                <h2 class="text-uppercase">More About Us </h2>
                                <div class="wt-separator-outer"><div class="wt-separator bg-primary"></div></div>
                                <span><strong>OPEC TRADE innovative platforms and tools provide the power and reliability you need to feel more confident in your investment, trading and loan access. </strong></span>
                                <p>
                                OPEC TRADE was established in 2013 and it initially began trading stocks, shares and bonds, it got involved in forex in 2015 and was among the pioneer traders of Cryptocurrencies in the advent of Bitcoin in 2014. OPEC TRADE is currently managed by a senior team which has extensive experience in the development and implementation of systematic investment strategies. The company emphasises strong corporate governance and the provision of first class investor service to a client base which includes many of the world’s leading institutional investors. At OPEC TRADE, we deliver strategic advice and solutions, including capital raising, risk management, and trade OPEC TRADE services to corporations, institutions and individuals, We also offer-long term and short-term investment opportunities.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6" style="padding:1px;">
                            <div class="wt-media" style="height: 100%;">
                                <img src="{{ asset('assets/images/gallery/pic3.jpg')}}" alt="" class="img-responsive"/>
                                <!-- <img src="{{ asset('assets/images/gallery/pic3.jpg')}}" alt="" class="img-responsive"/> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>   
            <!-- ABOUT COMPANY SECTION END --> 
                    
        </div>
        <!-- CONTENT END -->
        
        <!-- FOOTER START -->
        @include('include.home_footer')
        <!-- FOOTER END -->
        
        <!-- BUTTON TOP START -->
        <button class="scroltop"><span class=" iconmoon-house relative" id="btn-vibrate"></span>Top</button>
        
    </div>
    
    @include('include.loading')
    
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
