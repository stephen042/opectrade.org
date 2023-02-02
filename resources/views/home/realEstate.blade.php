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
                        <h1 class="text-white">RealEstate Details</h1>
                    </div>
                </div>
            </div>
            <!-- INNER PAGE BANNER END -->
            
            <!-- BREADCRUMB ROW -->                            
            <div class="bg-gray-light p-tb20">
            	<div class="container">
                    <ul class="wt-breadcrumb breadcrumb-style-2">
                        <li><a href="{{ route('app.home') }}"><i class="fa fa-home"></i> Home</a></li>
                        <li>RealEstate Details</li>
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
                                                <h3 class="text-uppercase">Real Estate Investment</h3>
                                                <p>tancorp Finance is a different way to invest online. We help you lay a foundation for you to accumulate and build wealth.
</p>
                                                <blockquote>
                                                Earning money from long-term multi-million dollar real estate assets can set your family up for a better future.
                                                </blockquote>
                                                <p>
                                                In order to build true wealth, you have to invest. You don’t build generational wealth by putting everything in the stock market or into a savings account, you do it by diversifying your portfolio into alternatives here at Atlantic mutuals.
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
