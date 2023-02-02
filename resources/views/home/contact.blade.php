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
        
             <!-- BREADCRUMB ROW -->                            
            <div class="bg-gray-light p-tb20">
            	<div class="container">
                    <ul class="wt-breadcrumb breadcrumb-style-2">
                        <li><a href="{{ route('app.home') }}"><i class="fa fa-home"></i> Home</a></li>
                        <li>Contact </li>
                    </ul>
                </div>
            </div>
            <!-- BREADCRUMB ROW END --> 
            
            <!-- INNER PAGE BANNER -->
            <div class="wt-bnr-inr overlay-wraper" style="background-image:url(assets/images/banner/contact.jpg);">
                <div class="overlay-main bg-black opacity-07"></div>
                <div class="container">
                    <div class="wt-bnr-inr-entry">
                        <h1 class="text-white">Contact Us </h1>
                    </div>
                </div>
            </div>
            <!-- INNER PAGE BANNER END --> 
                        
            <!-- SECTION CONTENT --> 
            <div class="section-full p-t80 p-b50">
                <div class="container" >
                    <div class="wt-box col-md-6">
                        <h4 class="text-uppercase">Contact Detail </h4>
                        <div class="wt-separator-outer m-b30">
                           <div class="wt-separator bg-primary"></div>
                       </div>
                        
                            <div class="m-b30">
                                <div class="wt-icon-box-wraper bx-style-1 p-a15 left clearfix bg-gray">
                                    <div class="icon-sm">
                                        <span class="icon-cell text-primary">
                                            <i class="fa fa-phone"></i>
                                        </span>
                                    </div>
                                    <div class="icon-content text-black">
                                        <h5 class="wt-tilte text-uppercase">Phone</h5>
                                        <p>+1 (564) 548 4854</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="m-b30">
                                <div class="wt-icon-box-wraper bx-style-1 p-a15 left clearfix bg-gray">
                                    <div class="icon-sm">
                                        <span class="icon-cell text-primary">
                                            <i class="fa fa-envelope"></i>
                                        </span>
                                    </div>
                                    <div class="icon-content text-black">
                                        <h5 class="wt-tilte text-uppercase">Email</h5>
                                        <p>support@opectrade.com</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="m-b30">
                                <div class="wt-icon-box-wraper bx-style-1 p-a15 left clearfix bg-gray">
                                    <div class="icon-sm">
                                        <span class="icon-cell text-primary">
                                            <i class="fa fa-comments"></i>
                                        </span>
                                    </div>
                                    <div class="icon-content text-black">
                                        <h5 class="wt-tilte text-uppercase">chat</h5>
                                        <p>Contact Us swiftly from our 24/7 Live Chat support</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="m-b30">
                                <div class="wt-icon-box-wraper bx-style-1 p-a15 left clearfix bg-gray">
                                    <div class="icon-sm">
                                        <span class="icon-cell text-primary">
                                            <i class="fa fa-map-marker"></i>
                                        </span>
                                    </div>
                                    <div class="icon-content text-black">
                                        <h5 class="wt-tilte text-uppercase">Address</h5>
                                        <p>252 W 43rd St New York, NY</p>
                                    </div>
                                </div>
                            </div>
                       
                    </div>
                    <div class="wt-box col-md-6">
                        <h4 class="text-uppercase">Contact Form </h4>
                        <div class="wt-separator-outer m-b30">
                           <div class="wt-separator bg-primary"></div>
                        </div>
                        <div class="p-a50 p-b60 bg-gray">
                        	<form class="cons-contact-form" method="post" action="">
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input name="username" type="text" required class="form-control" placeholder="Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                        <input name="email" type="text" class="form-control" required placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon v-align-t"><i class="fa fa-pencil"></i></span>
                                        <textarea name="message" rows="5" class="form-control Message" required placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <button name="submit" type="" value="" class="site-button-secondry  m-r15" disabled>Submit</button>
                                    <button name="Resat" type="reset" value="Reset"  class="site-button " >Reset</button>
                                </div>
                            </form>
                        </div>
                  </div>
            </div>
            <!-- SECTION CONTENT END -->
           

            
       </div>
        <!-- CONTENT END -->
        </div>
        
        @include('include.home_footer')
  
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

<script src="https://maps.google.com/maps/api/js?key=AIzaSyCz6xX2nI6cMkePba_DHQcs0MkR7m2IuvE&amp;callback=initMap"  ></script><!-- GOOGLE MAP -->
<script   src="{{ asset('assets/js/map.script.js')}}"></script><!-- MAP FUCTIONS [ this file use with google map]  -->

<script   src="{{ asset('assets/js/custom.js')}}"></script><!-- CUSTOM FUCTIONS  -->
<script   src="{{ asset('assets/js/shortcode.js')}}"></script><!-- SHORTCODE FUCTIONS  -->
<script   src="{{ asset('assets/js/switcher.js')}}"></script><!-- SWITCHER FUCTIONS  -->
<script  src="{{ asset('assets/js/jquery.bgscroll.js')}}"></script><!-- BACKGROUND SCROLL -->
<script  src="{{ asset('assets/js/tickerNews.min.js')}}"></script><!-- TICKERNEWS-->



</body>


</html>
