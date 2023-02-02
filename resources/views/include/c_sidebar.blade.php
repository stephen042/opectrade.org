<div class="nk-sidebar nk-sidebar-fat nk-sidebar-fixed" data-content="sidebarMenu">
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-sidebar-brand">
            <a href="{{ route('user.pages.view', ['index']) }}" class="logo-link nk-sidebar-logo h3" style="font-size:2em">
                {{-- {{ config("app.name") }}   --}}OPEC TRADE
            </a>
        </div>
        <div class="nk-menu-trigger mr-n2">
            <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em
                    class="icon ni ni-arrow-left"></em></a>
        </div>
    </div><!-- .nk-sidebar-element -->
    <div class="nk-sidebar-element">
        <div class="nk-sidebar-body" data-simplebar>
            <div class="nk-sidebar-content">
                <div class="nk-sidebar-widget nk-sidebar-widget-full d-xl-none pt-0">
                    <a class="nk-profile-toggle toggle-expand" data-target="sidebarProfile" href="#">
                        <div class="user-card-wrap">
                            <div class="user-card">
                                <div class="user-avatar">
                                    <span>AB</span>
                                </div>
                                <div class="user-info">
                                    <span class="lead-text">
                                        {{ auth()->user()->username }}
                                    </span>
                                    <span class="sub-text">
                                        {{ auth()->user()->email }}
                                    </span>
                                </div>
                                <div class="user-action">
                                    <em class="icon ni ni-chevron-down"></em>
                                </div>
                            </div>
                        </div>
                    </a>
                    <div class="nk-profile-content toggle-expand-content" data-content="sidebarProfile">
                        <ul class="link-list">
                            <li><a href="{{ route("user.logout.view") }}"><em class="icon ni ni-signout"></em><span>Sign out</span></a>
                            </li>
                        </ul>
                    </div>
                </div><!-- .nk-sidebar-widget -->
                <div class="nk-sidebar-menu">
                    <!-- Menu -->
                    <ul class="nk-menu">
                        <li class="nk-menu-heading">
                            <h6 class="overline-title">Menu</h6>
                        </li>
                        <li class="nk-menu-item">
                            <a href="{{ route("user.dashboard.view") }}" class="nk-menu-link">
                                <span class="nk-menu-icon"><em class="icon ni ni-dashboard"></em></span>
                                <span class="nk-menu-text">Dashboard</span>
                            </a>
                        </li>

                        <li class="nk-menu-item">
                            <a href="{{ route('user.wallet.view') }}" class="nk-menu-link">
                                <span class="nk-menu-icon"><em class="icon ni ni-wallet-alt"></em></span>
                                <span class="nk-menu-text">Wallet</span>
                            </a>
                        </li>

                        <li class="nk-menu-item">
                            <a 
                            href="{{ route('user.deposit.view', ['usd']) }}" class="nk-menu-link">
                                <span class="nk-menu-icon"><em class="icon ni ni-wallet-in"></em></span>
                                <span class="nk-menu-text">Deposit</span>
                            </a>
                        </li>

                        <!-- {{-- <li class="nk-menu-item">
                            <a href="{{ route('user.conversion.view') }}" class="nk-menu-link">
                                <span class="nk-menu-icon"><em class="icon ni ni-meter"></em></span>
                                <span class="nk-menu-text">Conversion</span>
                            </a>
                        </li> --}} -->
<!-- 
                        <li class="nk-menu-item">
                            <a href="{{ route('user.loan') }}" class="nk-menu-link">
                                <span class="nk-menu-icon"><em class="icon ni ni-user-alt"></em></span>
                                <span class="nk-menu-text">Apply for Loan</span>
                            </a>
                        </li> -->

                        <li class="nk-menu-item">
                            <a href="{{ route('user.plan.view', ['all']) }}" class="nk-menu-link">
                                <span class="nk-menu-icon">
                                    <em class="icon ni ni-growth-fill"></em></span>
                                <span class="nk-menu-text">Investment Plans</span>
                            </a>
                        </li>


                        <li class="nk-menu-item">
                            <a href="{{ route('user.withdraw.view') }}" class="nk-menu-link">
                                <span class="nk-menu-icon"><em class="icon ni ni-wallet-out"></em></span>
                                <span class="nk-menu-text">Withdraw</span>
                            </a>
                        </li>

                        <!-- {{-- <li class="nk-menu-item">
                            <a 
                            href="{{ route('user.retirement_account') }}"
                             class="nk-menu-link">
                                <span class="nk-menu-icon"><em class="icon ni ni-clock"></em></span>
                                <span class="nk-menu-text">Retirement account</span>
                            </a>
                        </li> --}} -->

                        <!-- {{-- <li class="nk-menu-item">
                            <a 
                            href="{{ route('user.charity') }}"
                             class="nk-menu-link">
                                <span class="nk-menu-icon"><em class="icon ni ni-heart-fill"></em></span>
                                <span class="nk-menu-text">Charity</span>
                            </a>
                        </li>  -->

                        <!-- <li class="nk-menu-item">
                            <a 
                            href="{{ route('user.children_account') }}"
                             class="nk-menu-link">
                                <span class="nk-menu-icon"><em class="icon ni ni-trend-up"></em></span>
                                <span class="nk-menu-text">Children account</span>
                            </a>
                        </li>  --}} -->


                        <li class="nk-menu-item has-sub">
                            <a href="#" class="nk-menu-link nk-menu-toggle">
                                <span class="nk-menu-icon"><em class="icon ni ni-activity-alt"></em></span>
                                <span class="nk-menu-text">Your Activity</span>
                            </a>
                            <ul class="nk-menu-sub">
                                <li class="nk-menu-item">
                                    <a href="{{ route('user.history.view', ['add']) }}" class="nk-menu-link">
                                        <span class="nk-menu-text">Deposit History</span>
                                    </a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="{{ route('user.history.view', ['withdraw']) }}" class="nk-menu-link">
                                        <span class="nk-menu-text">Withdrawal History</span>
                                    </a>
                                </li>
                                {{-- <li class="nk-menu-item">
                                    <a href="{{ route('user.history.view', ['exchange']) }}" class="nk-menu-link">
                                        <span class="nk-menu-text">Exchange History</span>
                                    </a>
                                </li> --}}

                            </ul>
                        </li>

                        
                        <li class="nk-menu-item has-sub">
                            <a href="#" class="nk-menu-link nk-menu-toggle">
                                <span class="nk-menu-icon"><em class="icon ni ni-user"></em></span>
                                <span class="nk-menu-text">Profile Settings</span>
                            </a>
                            <ul class="nk-menu-sub">
                                <li class="nk-menu-item">
                                    <a href="{{ route('user.setting.view', ['general']) }}" class="nk-menu-link">
                                        <span class="nk-menu-text">General Setting</span>
                                    </a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="{{ route('user.setting.view', ['payment']) }}" class="nk-menu-link">
                                        <span class="nk-menu-text">Payment Data</span>
                                    </a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="{{ route('user.setting.view', ['security']) }}" class="nk-menu-link">
                                        <span class="nk-menu-text">Account Security</span>
                                    </a>
                                </li>

                            </ul>
                        </li>

                        <li class="nk-menu-item">
                            <a href="{{ route("user.logout.view") }}" class="nk-menu-link">
                                <span class="nk-menu-icon"><em class="icon ni ni-signout"></em></span>
                                <span class="nk-menu-text">Sign Out</span>
                            </a>
                        </li>

                    </ul><!-- .nk-menu -->
                </div><!-- .nk-sidebar-menu -->


            </div><!-- .nk-sidebar-contnet -->
        </div>
        <!-- .nk-sidebar-body -->
    </div><!-- .nk-sidebar-element -->
</div>
