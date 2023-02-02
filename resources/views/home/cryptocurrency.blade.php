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
            <div class="wt-bnr-inr overlay-wraper" style="background-image:url(assets/images/our-work/pic1.jpg);">
            	<div class="overlay-main bg-black opacity-07"></div>
                <div class="container">
                    <div class="wt-bnr-inr-entry">
                        <h1 class="text-white">Cryptocurrency Details</h1>
                    </div>
                </div>
            </div>
            <!-- INNER PAGE BANNER END -->
            
            <!-- BREADCRUMB ROW -->                            
            <div class="bg-gray-light p-tb20">
            	<div class="container">
                    <ul class="wt-breadcrumb breadcrumb-style-2">
                        <li><a href="{{ route('app.home') }}"><i class="fa fa-home"></i> Home</a></li>
                        <li>Crptocurrency Details</li>
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
                                                <h3 class="text-uppercase">Cryptocurrency</h3>
                                                <p>Cryptocurrency is a form of payment that can be exchanged online for goods and services. Many companies have issued their own currencies, often called tokens, and these can be traded specifically for the good or service that the company provides. Think of them as you would arcade tokens or casino chips. You’ll need to exchange real currency for the cryptocurrency to access the good or service. Cryptocurrencies work using a technology called blockchain. </p>
                                                <blockquote>
                                                Blockchain is a decentralized technology spread across many computers that manages and records transactions. Part of the appeal of this technology is its security.
                                                </blockquote>
                                                <p>
                                                Cryptocurrencies are sets of software protocols for generating digital tokens and for tracking transactions in a way that makes it hard to counterfeit or re-use tokens. which is why at tancorpfinance we pride ourselves in ensuring you choose the right investment plan for you. More than 10,000 different cryptocurrencies are traded publicly, according to CoinMarketCap.com, a market research website. And cryptocurrencies continue to proliferate, raising money through initial coin offerings, or ICOs. The total value of all cryptocurrencies on Aug. 18, 2021, was more than $1.9 trillion — down from April high of $2.2 trillion, according to CoinMarketCap. The total value of all bitcoins, the most popular digital currency, was pegged at about $849 billion, regaining some ground from recent price lows. Still, the market value of bitcoin is down from April high of $1.2 trillion with our 24/7 support staffs present, we work round the clock to ensure smooth user experience.
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





<!-- STYLE SWITCHER  ======= --> 
<!-- <div class="styleswitcher">

    <div class="switcher-btn-bx">
        <a class="switch-btn">
            <span class="fa fa-cog fa-spin"></span>
        </a>
    </div>
    
    <div class="styleswitcher-inner">
    
        <h6 class="switcher-title">Color Skin</h6>
        <ul class="color-skins">
            <li><a class="theme-skin skin-1" href="services-detaila39b.html?theme=css/skin/skin-1" title="default Theme"></a></li>
            <li><a class="theme-skin skin-2" href="services-detail61e7.html?theme=css/skin/skin-2" title="pink Theme"></a></li>
            <li><a class="theme-skin skin-3" href="services-detailcce5.html?theme=css/skin/skin-3" title="sky Theme"></a></li>
            <li><a class="theme-skin skin-4" href="services-detail13f7.html?theme=css/skin/skin-4" title="green Theme"></a></li>
            <li><a class="theme-skin skin-5" href="services-detail19a6.html?theme=css/skin/skin-5" title="red Theme"></a></li>
            <li><a class="theme-skin skin-6" href="services-detailfe5c.html?theme=css/skin/skin-6" title="orange Theme"></a></li>
            <li><a class="theme-skin skin-7" href="services-detailab47.html?theme=css/skin/skin-7" title="purple Theme"></a></li>
            <li><a class="theme-skin skin-8" href="services-detail5f8d.html?theme=css/skin/skin-8" title="blue Theme"></a></li>
            <li><a class="theme-skin skin-9" href="services-detail5663.html?theme=css/skin/skin-9" title="gray Theme"></a></li>
            <li><a class="theme-skin skin-10" href="services-detail28ac.html?theme=css/skin/skin-10" title="brown Theme"></a></li>
            <li><a class="theme-skin skin-11" href="services-detail26b8.html?theme=css/skin/skin-11" title="gray Theme"></a></li>
            <li><a class="theme-skin skin-12" href="services-detail7f4c.html?theme=css/skin/skin-12" title="golden Theme"></a></li>
        </ul>   
        
        <h6 class="switcher-title">Nav</h6>
        <ul class="nav-view">
            <li class="nav-light active">Light</li>
            <li class="nav-dark">Dark</li>
        </ul>
        
        <h6 class="switcher-title">Nav</h6>
        <ul class="nav-width">
            <li class="nav-boxed active">Boxed</li>
            <li class="nav-wide">Wide</li>
        </ul>   
        
        <h6 class="switcher-title">Header</h6>
        <ul class="header-view">
            <li class="header-fixed active">Fixed</li>
            <li class="header-static">Static</li>
        </ul> 
        
        <h6 class="switcher-title">Layout</h6>
        <ul class="layout-view">
            <li class="wide-layout active">Wide</li>
            <li class="boxed">Boxed</li>
        </ul>   
                    
        <h6 class="switcher-title">Background Image</h6>
        <ul class="background-switcher">
            <li><img src="images/switcher/switcher-bg/thum/bg1.jpg" rel="images/switcher/switcher-bg/large/bg1.jpg" alt=""></li>
            <li><img src="images/switcher/switcher-bg/thum/bg2.jpg" rel="images/switcher/switcher-bg/large/bg2.jpg"  alt=""></li>
            <li><img src="images/switcher/switcher-bg/thum/bg3.jpg" rel="images/switcher/switcher-bg/large/bg3.jpg"  alt=""></li>
            <li><img src="images/switcher/switcher-bg/thum/bg4.jpg" rel="images/switcher/switcher-bg/large/bg4.jpg"  alt=""></li>
        </ul>
        
        <h6 class="switcher-title">Background Pattern</h6>
        <ul class="pattern-switcher">
            <li><img src="images/switcher/switcher-patterns/thum/bg1.jpg"  rel="images/switcher/switcher-patterns/large/pt1.jpg" alt=""></li>
            <li><img src="images/switcher/switcher-patterns/thum/bg2.jpg"  rel="images/switcher/switcher-patterns/large/pt2.jpg" alt=""></li>
            <li><img src="images/switcher/switcher-patterns/thum/bg3.jpg"  rel="images/switcher/switcher-patterns/large/pt3.jpg" alt=""></li>
            <li><img src="images/switcher/switcher-patterns/thum/bg4.jpg"  rel="images/switcher/switcher-patterns/large/pt4.jpg" alt=""></li>
            <li><img src="images/switcher/switcher-patterns/thum/bg5.jpg"  rel="images/switcher/switcher-patterns/large/pt5.jpg" alt=""></li>
            <li><img src="images/switcher/switcher-patterns/thum/bg6.jpg"  rel="images/switcher/switcher-patterns/large/pt6.jpg" alt=""></li>
            <li><img src="images/switcher/switcher-patterns/thum/bg7.jpg"  rel="images/switcher/switcher-patterns/large/pt7.jpg" alt=""></li>
            <li><img src="images/switcher/switcher-patterns/thum/bg8.jpg"  rel="images/switcher/switcher-patterns/large/pt8.jpg" alt=""></li>
            <li><img src="images/switcher/switcher-patterns/thum/bg9.jpg"  rel="images/switcher/switcher-patterns/large/pt9.jpg" alt=""></li>
            <li><img src="images/switcher/switcher-patterns/thum/bg10.jpg"  rel="images/switcher/switcher-patterns/large/pt10.jpg" alt=""></li>
            <li><img src="images/switcher/switcher-patterns/thum/bg11.jpg"  rel="images/switcher/switcher-patterns/large/pt11.jpg" alt=""></li>
            <li><img src="images/switcher/switcher-patterns/thum/bg12.jpg"  rel="images/switcher/switcher-patterns/large/pt12.jpg" alt=""></li>
        </ul>
        
        
    </div>    
</div> -->
<!-- STYLE SWITCHER END ==== -->


 



 


</body>


<!-- Mirrored from thewebmax.com/bitinvest/services-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 30 May 2021 13:27:16 GMT -->
</html>
