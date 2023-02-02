<!DOCTYPE html>

<html lang="en">

@include('include.home_css')

<body id="bg">

	<div class="page-wraper">
        	
    @include('include.home_header1')
        
        <!-- CONTENT START -->
        <div class="page-content">
        
        <!-- INNER PAGE BANNER -->
             <div class="wt-bnr-inr overlay-wraper" style="background-image:url(assets/images/banner/faq.jpg);">
                <div class="overlay-main bg-black opacity-07"></div>
                <div class="container">
                    <div class="wt-bnr-inr-entry">
                        <h1 class="text-white">FAQ </h1>
                    </div>
                </div>
            </div>
            <!-- INNER PAGE BANNER END --> 
            
            <!-- BREADCRUMB ROW -->                            
            <div class="bg-gray-light p-tb20">
            	<div class="container">
                    <ul class="wt-breadcrumb breadcrumb-style-2">
                        <li><a href="{{ route('app.home') }}"><i class="fa fa-home"></i> Home</a></li>
                        <li>Frequently Asked Questions </li>
                    </ul>
                </div>
            </div>
            <!-- BREADCRUMB ROW END -->                   
            
            <!-- SECTION CONTENT -->
            <div class="section-full p-t80 p-b50">
            	<div class="container">
                   <div class="row">
                        <div class="col-md-9">
                            <!-- TITLE  START -->
                            <div class="p-b30">
                                <h2 class="text-uppercase">FAQ</h2>
                                <div class="wt-separator-outer">
                                   <div class="wt-separator bg-primary"></div>
                                </div>
                            </div>
                            <!-- TITLE START -->
                            
                            <!-- ACCORDION START -->
                            <div class="wt-accordion acc-bg-gray" id="accordion5">
                            
                                <div class="panel wt-panel">
                                    <div class="acod-head acc-actives">
                                         <h3 class="acod-title">
                                            <a data-toggle="collapse" href="#collapseOne5" data-parent="#accordion5" >
                                                What is this company all about ? is this an ICO ?
                                                <span class="indicator"><i class="fa fa-plus"></i></span>
                                            </a>
                                         </h3>
                                    </div>
                                    <div id="collapseOne5" class="acod-body collapse in">
                                        <div class="acod-content p-tb15">
                                        No. This is not an Initial Coin Offering. We believe that ICO's should be approached with caution as the majority of "Alt coins" do not offer any benefits to more established crypto currencies such as Bitcoin, Ethereum, etc. AccurateOption247 is a managed cryptocurrency trading platform with user friendly interface and attractive offer.
                                      
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="panel wt-panel">
                                    <div class="acod-head">
                                         <h3 class="acod-title">
                                            <a data-toggle="collapse" href="#collapseTwo5" class="collapsed" data-parent="#accordion5">
                                             What do you use our funds to trade ?
                                            <span class="indicator"><i class="fa fa-plus"></i></span>
                                            </a>
                                         </h3>
                                    </div>
                                    <div id="collapseTwo5" class="acod-body collapse">
                                        <div class="acod-content p-tb15">We invest the funds in : FOREX , Stock, Crypto Trading, RealEstate, Currency Exchange and more .. </div>
                                    </div>
                                </div>
                                
                                <div class="panel wt-panel">
                                    <div class="acod-head">
                                        <h3 class="acod-title">
                                        <a data-toggle="collapse"  href="#collapseThree5" class="collapsed"  data-parent="#accordion5">
                                        What is the risk of my investment
                                        <span class="indicator"><i class="fa fa-plus"></i></span>
                                        </a>
                                     </h3>
                                    </div>
                                    <div id="collapseThree5" class="acod-body collapse">
                                        <div class="acod-content p-tb15">With our insurance policy there's zero risk .</div>
                                    </div>
                                </div>
                                
                                <div class="panel wt-panel">
                                    <div class="acod-head">
                                         <h3 class="acod-title">
                                            <a data-toggle="collapse" href="#collapseFour5" data-parent="#accordion5" >
                                                How can i access my account ? 
                                                <span class="indicator"><i class="fa fa-plus"></i></span>
                                            </a>
                                         </h3>
                                    </div>
                                    <div id="collapseFour5" class="acod-body collapse">
                                        <div class="acod-content p-tb15">If you are a registered user of OPEC Trades, please enter your email and password in the appropriate fields. At the top of the website and click the "Login" button "That is where the appropriate fields are located . You will be redirected to your account automatically as soon as you have done the above.</div>
                                    </div>
                                </div>
                                
                                <div class="panel wt-panel">
                                    <div class="acod-head">
                                         <h3 class="acod-title">
                                            <a data-toggle="collapse" href="#collapseFive5" class="collapsed" data-parent="#accordion5">
                                                Are there limits to what i can invest ? 
                                            <span class="indicator"><i class="fa fa-plus"></i></span>
                                            </a>
                                         </h3>
                                    </div>
                                    <div id="collapseFive5" class="acod-body collapse">
                                        <div class="acod-content p-tb15">The appropriate answer is NO! With our Premium plan you can invest limitlessly</div>
                                    </div>
                                </div>
                
                            </div>
                            <!-- ACCORDION END -->  
                        </div>                                      
						<!-- <div class="col-md-3 col-sm-3 p-tb15"> -->
                            <!-- BROCHURES -->
                            <!-- <div class="wt-box m-b30">
                                <div class="text-left m-b20">
                                         <h4>Brochures</h4>
                                         <div class="wt-separator-outer">
                                             <div class="wt-separator bg-primary"></div>
                                        </div>
                                     </div>
                                <div class="wt-icon-box-wraper left bdr-1 bdr-gray p-a15 m-b15">
                                    <a href="#" class="btn-block">
                                        <span class="text-black m-r10"><i class="fa fa-file-pdf-o"></i></span>
                                        <strong class="text-uppercase text-black">Download .PDF</strong>
                                    </a>
                                </div>
                                <div class="wt-icon-box-wraper left bdr-1 bdr-gray p-a15 m-b15">
                                    <a href="#" class="btn-block">
                                        <span class="text-black m-r10"><i class="fa fa-file-word-o"></i></span>
                                        <strong class="text-uppercase text-black"> Download .DOC</strong>
                                    </a>
                                </div>
                                <div class="wt-icon-box-wraper left bdr-1 bdr-gray p-a15 m-b15">
                                    <a href="#" class="btn-block">
                                        <span class="text-black m-r10"><i class="fa fa-file-powerpoint-o"></i></span>
                                        <strong class="text-uppercase text-black">Download .PPT</strong>
                                    </a>
                                </div>
                            </div> -->
                                                         
                            <!-- CONTACT US -->
                            <!-- <div class="widget bg-white  widget_getintuch">
                                <h4 class="widget-title">Contact us</h4>
                                <ul>
                                  <li><i class="fa fa-map-marker"></i><strong>Address</strong> Street No:4 , Robert villsan road  </li>
                                  <li><i class="fa fa-fax"></i><strong>FAX</strong>(082) 634-3456</li>
                                  <li><i class="fa fa-phone"></i><strong>phone</strong>0800-987654 (help 24/7 )</li>
                                  <li><i class="fa fa-envelope"></i><strong>email</strong>thewebmaxmail@gmail.com</li>
                                </ul>
                            </div> -->
                        
                        <!-- </div> -->
                  </div>
                </div>
            </div>
            <!-- SECTION CONTENT END -->
        
        </div>
        <!-- CONTENT END -->
        
        @include('include.home_footer')
        
        <!-- BUTTON TOP START -->
        <button class="scroltop"><span class=" iconmoon-house relative" id="btn-vibrate"></span>Top</button>   
        
    </div>
    

    @include('include.loading')

<!-- JAVASCRIPT  FILES ========================================= --> 
<script   src="{{ asset('assets/js/jquery-1.12.4.min.js') }}"></script><!-- JQUERY.MIN JS -->
<script   src="{{ asset('assets/js/bootstrap.min.js') }}"></script><!-- BOOTSTRAP.MIN JS -->

<script   src="{{ asset('assets/js/bootstrap-select.min.js') }}"></script><!-- FORM JS -->
<script   src="{{ asset('assets/js/jquery.bootstrap-touchspin.min.js') }}"></script><!-- FORM JS -->

<script   src="{{ asset('assets/js/magnific-popup.min.js') }}"></script><!-- MAGNIFIC-POPUP JS -->

<script   src="{{ asset('assets/js/waypoints.min.js') }}"></script><!-- WAYPOINTS JS -->
<script   src="{{ asset('assets/js/counterup.min.js') }}"></script><!-- COUNTERUP JS -->
<script   src="{{ asset('assets/js/waypoints-sticky.min.js') }}"></script><!-- COUNTERUP JS -->

<script  src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script><!-- MASONRY  -->

<script   src="{{ asset('assets/js/owl.carousel.min.js') }}"></script><!-- OWL  SLIDER  -->

<script   src="{{ asset('assets/js/stellar.min.js') }}"></script><!-- PARALLAX BG IMAGE   --> 
<script   src="{{ asset('assets/js/scrolla.min.js') }}"></script><!-- ON SCROLL CONTENT ANIMTE   --> 

<script   src="{{ asset('assets/js/custom.js') }}"></script><!-- CUSTOM FUCTIONS  -->
<script   src="{{ asset('assets/js/shortcode.js') }}"></script><!-- SHORTCODE FUCTIONS  -->
<script   src="{{ asset('assets/js/switcher.js') }}"></script><!-- SWITCHER FUCTIONS  -->
<script  src="{{ asset('assets/js/jquery.bgscroll.js') }}"></script><!-- BACKGROUND SCROLL -->
<script  src="{{ asset('assets/js/tickerNews.min.js') }}"></script><!-- TICKERNEWS-->



</body>


<!-- Mirrored from thewebmax.com/bitinvest/faq-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 30 May 2021 13:26:00 GMT -->
</html>
