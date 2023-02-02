    <!-- HEADER START -->
    <header class="site-header header-style-6">

        <div class="top-bar bg-primary">
            <div class="container">
                <div class="row">
                    <div class="clearfix">
                        <div class="wt-topbar-left">
                            <ul class="list-unstyled e-p-bx pull-left">
                                <li><i class="fa fa-envelope"></i>support@opectrade.org</li>
                                <li><i class="fa fa-phone"></i>+1 (564) 548 4854</li>
                            </ul>
                        </div>

                        <div class="wt-topbar-right">
                            <div class=" language-select pull-right">
                                <!-- <div class="dropdown"> -->
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


                                    <!-- </button> -->
                                    <!-- <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="#"><img src="{{ asset('assets/images/united-states.png')}}" alt="">English</a></li>
                                        <li><a href="#"><img src="{{ asset('assets/images/france.png')}}" alt="">French</a></li>
                                        <li><a href="#"><img src="{{ asset('assets/images/germany.png')}}" alt="">German</a></li>
                                    </ul> -->
                                <!-- </div> -->
                            </div>

                            
                                <ul class="list-unstyled e-p-bx pull-right">
                                    <li><a href="{{ route('user.login')}}"><i class="fa fa-user"></i>Login</a></li>
                                    <li><a href="{{ route('user.register')}}"><i class="fa fa-sign-in"></i>Register</a></li>
                                </ul>
                                
                                <!-- <div class="btn btn-sm btn-primary" style="border-radius:5px;">
                                <a href="{{ route('user.dashboard.view')}}" style="color:white;" role="button">
                                    <i class="fa fa-user"></i>
                                     Profile
                                </a>
                                </div>
                                <div class="btn btn-sm btn-primary" style="border-radius:5px;">
                                    <a href="{{ route('user.logout.view')}}" style="color:white;" role="button">
                                    <i class="fa fa-sign-out"></i>Logout
                                    </a>
                                </div>     -->
                                
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search Link -->

        <!-- Search Form -->
        <div class="main-bar header-middle bg-white">
            <div class="container">
                <div class="logo-header text-center" style="height:80px ;">
                    <a href="{{ route('app.home') }}" style="display: flex; padding:2px;">
                    <img src="{{ asset('assets/images/logo-light.jpg')}}" style="height:70px;"  alt="">
                    </a>
                </div>
                <div class="header-info">
                    <ul>
                        <li>
                            <div>
                                <div class="icon-sm">
                                    <span class="icon-cell  text-primary"><i class="iconmoon-travel"></i></span>
                                </div>
                                <div class="icon-content">
                                    <strong>Our Location </strong>
                                    <span>252 W 43rd St New York, NY</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div>
                                <div class="icon-sm">
                                    <span class="icon-cell  text-primary"><i class="iconmoon-smartphone-1"></i></span>
                                </div>
                                <div class="icon-content">
                                    <strong>Phone Number</strong>
                                    <span> +1 (564) 548 4854</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Search Form -->
        <div class="sticky-header main-bar-wraper">
            <div class="main-bar header-botton nav-bg-secondry">
                <div class="container">
                    <!-- NAV Toggle Button -->
                    <button data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggle collapsed">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- MAIN Vav -->
                    <div class="header-nav navbar-collapse collapse ">
                        <ul class=" nav navbar-nav">
                            <li class="hover">
                                <a href="{{ route('app.home')}}">Home</a>
                            </li>

                            <li class="hover">
                                <a href="{{ route('about')}}">About</a>

                            </li>

                            <li class="hover">
                                <a href="{{ route('contact')}}">contact</a>
                            </li>

                            <li class="hover">
                                <a href="{{ route('user.faq')}}">Faq</a>
                            </li>

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
    <!-- HEADER END -->