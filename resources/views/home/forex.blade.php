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
            <div class="wt-bnr-inr overlay-wraper" style="background-image:url(assets/images/our-work/pic2.jpg);">
            	<div class="overlay-main bg-black opacity-07"></div>
                <div class="container">
                    <div class="wt-bnr-inr-entry">
                        <h1 class="text-white">FOREX Details</h1>
                    </div>
                </div>
            </div>
            <!-- INNER PAGE BANNER END -->
            
            <!-- BREADCRUMB ROW -->                            
            <div class="bg-gray-light p-tb20">
            	<div class="container">
                    <ul class="wt-breadcrumb breadcrumb-style-2">
                        <li><a href="{{ route('app.home') }}"><i class="fa fa-home"></i> Home</a></li>
                        <li>FOREX Details</li>
                    </ul>
                </div>
            </div>
            <!-- BREADCRUMB ROW END --> 
                              
            <!-- SECTION CONTENT -->         
            <div class="section-full  p-t80 p-b50  ">
                <div class="container  bg-white ">
                    <div class="section-content ">
                        <div class="row">
                            
                            <!-- RIGHT PART -->
                            <div class="col-md-9 col-sm-9 p-tb10">
                               
                               <div class="p-lr15">
                                    <div class="section-content">
                                        <div class="wt-box p-b30">
                                            <div class="wt-media">
                                                <img src="images/latest-projects/large/pic3.jpg" alt="">
                                            </div>
                                            <div class="wt-info">
                                                <h3 class="text-uppercase">What is a Forex Investment in OPEC TRADES ?</h3>
                                                <p>
At OPEC TRADES, we provide a financial business platform which provides trading services in your broker’s accounts. Your account will be operated by a professional group of asset managers paying an agreed monthly fee. That fee will be automatically deducted of your broker’s account if the account gets profits. Let us manage your account and get profits at last in your Forex investments. Feel the peace of mind that gives having a managed account by OPEC TRADES. We’ll be getting profits for you meanwhile you are walking or sleeping. </p>
                                                <blockquote>
                                                Who needs an online forex investment? <br>
If you don’t have time to trade your funds or you think that you don’t have enough knowledge and experience, then it’s recommended that you get your funds managed by a forex investment platform. You can be an individual investor or a hedge fund company looking to diversify its savings in the Forex Market without having to be involved in direct managing of your funds.
                                                </blockquote>
                                                <p>
                                                As you can see the advantages of investing in Forex can turn against you easily if you are not a professional trader. That’s why is very important to avoid risking your funds trying to control such a complex market and better choose a professional Forex investment company in order to control, manage and make your funds grow. Keep your funds safe from the beginning and let the professional asset managers do what they know and love to do. Ensure annual steady good Forex profits every year, while you enjoy your life doing your regular work, being with friends, traveling, etc. Let Asset managers manage your Forex Investments and have the complete peace of mind that means working with a professional online investment company like OPEC TRADES. 
                                                </p>
                                            </div>
                                        </div>
                                        
                                                                    
                                    </div>
                    			</div>
                             </div>
                      
                            
                        </div>
                    </div>
                </div>
             </div>
            <!-- SECTION CONTENT END -->  
            
        <!-- CONTENT END -->
        </div>
        <!-- CONTENT END -->
        
        <!-- FOOTER START -->
            @include('include.home_footer')
        <!-- FOOTER END -->

        <!-- BUTTON TOP START -->
        <button class="scroltop"><span class=" iconmoon-house relative" id="btn-vibrate"></span>Top</button>

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


<!-- Mirrored from thewebmax.com/bitinvest/services-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 30 May 2021 13:27:16 GMT -->
</html>
