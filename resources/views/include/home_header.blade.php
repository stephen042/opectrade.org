
<header class="site-header header-style-3 topbar-transparent">

<div class="top-bar">
    <div class="container">
        <div class="row">
            <div class="clearfix">
                <div class="wt-topbar-left">
                    <ul class="list-unstyled e-p-bx pull-left">
                        <li><i class="fa fa-envelope"></i>support@opectrade.org</li>
                        <li><i class="fa fa-phone"></i>+1 (564) 548 4854</li>
                    </ul>
                </div>
                <div id="google_translate_element"
                    style="position:fixed;margin-top:10px; left:20px; bottom: 20px">
                </div>
        
                    <script type="text/javascript">
                        var duplicate_google_translate_counter = 0; //this stops google adding button multiple times

                        function googleTranslateElementInit() {
                            if (duplicate_google_translate_counter == 0) {
                                new google.translate.TranslateElement({
                                    pageLanguage: 'en'
                                }, 'google_translate_element');
                            }
                            duplicate_google_translate_counter++;
                        }
                    </script>
                    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
                    </script>

                <div class="wt-topbar-right">
                    <!-- to show logged in or not  -->
                    <?php //if (!Auth::logged_in()) : ?>
                    <ul class="list-unstyled e-p-bx pull-right">
                        <li><a href="{{ route('user.login') }}"><i class="fa fa-user"></i>Login</a></li>
                        <li><a href="{{ route('user.register') }}"><i class="fa fa-sign-in"></i>Register</a></li>
                    <?php //else:?>
                    </ul>    
                        <!-- <div class="btn btn-sm btn-primary" style="border-radius:5px;">
                            <a href="{{ route('admin.dashboard.view') }}" style="color:white;" role="button">
                                <i class="fa fa-user"></i>
                                 Profile
                            </a>
                        </div>
                        <div class="btn btn-sm btn-primary" style="border-radius:5px;">
                            <a href="{{ route('user.logout.view') }}" style="color:white;"  role="button">
                            <i class="fa fa-sign-out"></i>Logout
                            </a>
                        </div>  -->
                    <?php //endif; ?>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<div class="sticky-header main-bar-wraper">
    <div class="main-bar">
        <div class="container">

            <div class="logo-header mostion text-center">
                <a href="{{ route('app.home') }}" style="display: flex; padding:2px;">
                <img src="{{ asset('assets/images/logo-dark.png')}}" style="height:65px;width:100%;background-color:#1D2833;"  alt="">
                </a>
            </div>

            <!-- NAV Toggle Button -->
            <button data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggle collapsed">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>


            <!-- SITE Search -->
            <div id="search">
                <span class="close"></span>
                <form role="search" id="searchform" action="http://thewebmax.com/search" method="get" class="radius-xl">
                    <div class="input-group">
                        <input value="" name="q" type="search" placeholder="Type to search" />
                        <span class="input-group-btn"><button type="button" class="search-btn"><i class="fa fa-search"></i></button></span>
                    </div>
                </form>
            </div>

            <!-- MAIN Vav -->
            <div class="header-nav navbar-collapse collapse ">
                <ul class=" nav navbar-nav">
                    <li class="">
                        <a href="{{ route('app.home') }}">Home</a>
                    </li>

                    <li>
                        <a href="{{ route('about') }}">About</a>
                    </li>

                    <li>
                        <a href="{{ route('contact') }}">Contact</a>
                    </li>

                    <li>
                        <a href="{{ route('user.faq') }}">FAQ </a>
                    </li>
                    <!-- add our service details @para take investment plans page-->
                    <li class="hover">
                        <a href=" {{ route('services') }}">Our Services</a>
                    </li>

                    <li class="hover">
                        <a href="{{ route('investment_plan')}}">investment Plans</a>
                    </li>

                </ul>
            </div>

        </div>
    </div>
</div>

</header>
<!-- HEADER END
