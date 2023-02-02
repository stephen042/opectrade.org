<div class="nk-sidebar nk-sidebar-fixed is-dark " data-content="sidebarMenu">
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-sidebar-brand">
            <a href="{{ route('app.home') }}" class="logo-link nk-sidebar-logo h3 text-light">
                
                {{-- {{ config("app.name") }} --}}OPEC TRADES
            
            </a>
        </div>
        <div class="nk-menu-trigger mr-n2">
            <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
        </div>
    </div><!-- .nk-sidebar-element -->
    <div class="nk-sidebar-element">
        <div class="nk-sidebar-content">
            <div class="nk-sidebar-menu" data-simplebar>
                <ul class="nk-menu">
                    <li class="nk-menu-item">
                        <a href="{{ route("admin.dashboard.view") }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-dashlite"></em></span>
                            <span class="nk-menu-text">Dashboard</span>
                        </a>
                    </li><!-- .nk-menu-item -->
  
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                        <span class="nk-menu-icon"><em class="icon ni ni-wallet-out"></em></span>
                            <span class="nk-menu-text">Deposits</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{ route("admin.deposit.view",["active"]) }}" class="nk-menu-link"><span class="nk-menu-text">Active Deposits</span></a>
                                <a href="{{ route("admin.deposit.view",["all"]) }}" class="nk-menu-link"><span class="nk-menu-text">All Deposits</span></a>
  
                            </li>
                        </ul>
                    </li>

                    <!-- <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                        <span class="nk-menu-icon"><em class="icon ni ni-help-alt"></em></span>
                            <span class="nk-menu-text">Loans</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{ route("admin.loan.view",["active"]) }}" class="nk-menu-link"><span class="nk-menu-text">Active Loans</span></a>
                                <a href="{{ route("admin.loan.view",["all"]) }}" class="nk-menu-link"><span class="nk-menu-text">All Loans</span></a>
  
                            </li>
                        </ul>
                    </li> -->

                    <!-- <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                        <span class="nk-menu-icon"><em class="icon ni ni-heart-fill"></em></span>
                            <span class="nk-menu-text">Charity</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{ route("admin.charity.view",["active"]) }}" class="nk-menu-link"><span class="nk-menu-text">Active Charity Donations</span></a>
                                <a href="{{ route("admin.charity.view",["all"]) }}" class="nk-menu-link"><span class="nk-menu-text">All Charity Donations</span></a>
  
                            </li>
                        </ul>
                    </li> -->

                    <!-- <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                        <span class="nk-menu-icon"><em class="icon ni ni-clock"></em></span>
                            <span class="nk-menu-text">Retirements</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{ route("admin.retirement.view",["active"]) }}" class="nk-menu-link"><span class="nk-menu-text">Active Retirement Accounts</span></a>
                                <a href="{{ route("admin.retirement.view",["all"]) }}" class="nk-menu-link"><span class="nk-menu-text">All Retirement Accounts</span></a>
  
                            </li>
                        </ul>
                    </li> -->

                    <!-- <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                        <span class="nk-menu-icon"><em class="icon ni ni-help-alt"></em></span>
                            <span class="nk-menu-text">Children Account</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{ route("admin.child.view",["active"]) }}" class="nk-menu-link"><span class="nk-menu-text">Active Child Investments</span></a>
                                <a href="{{ route("admin.child.view",["all"]) }}" class="nk-menu-link"><span class="nk-menu-text">All Child Investments</span></a>
  
                            </li>
                        </ul>
                    </li> -->

                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                        <span class="nk-menu-icon"><em class="icon ni ni-block-over"></em></span>
                            <span class="nk-menu-text">Withdrawals</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{ route("admin.withdraw.view",["active"]) }}" class="nk-menu-link"><span class="nk-menu-text">Active Withdrawal</span></a>
                            </li>
                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-growth"></em></span>
                            <span class="nk-menu-text">Investments</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{ route("admin.investment.view",["active"]) }}" class="nk-menu-link"><span class="nk-menu-text">Active Investments</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{ route("admin.investment.view",["all"]) }}" class="nk-menu-link"><span class="nk-menu-text">All Investments </span></a>
                            </li>
                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-wallet-alt"></em></span>
                            <span class="nk-menu-text">Wallets</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{ route("admin.wallet.view") }}" class="nk-menu-link"><span class="nk-menu-text">Customer's Wallets</span></a>
                            </li>
                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                        <span class="nk-menu-icon"><em class="icon ni ni-users"></em></span>
                            <span class="nk-menu-text">App Users</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{ route("admin.users.view",["customer"]) }}" class="nk-menu-link"><span class="nk-menu-text">Customers</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{ route("admin.users.view",["admin"]) }}" class="nk-menu-link"><span class="nk-menu-text">Administrators </span></a>
                            </li>
                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-setting-alt"></em></span>
                            <span class="nk-menu-text">App Settings</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{ route("admin.plans.view") }}" class="nk-menu-link"><span class="nk-menu-text">Plans Settings</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{ route("admin.application.view") }}" class="nk-menu-link"><span class="nk-menu-text">Application Settings </span></a>
                            </li>
                            <!-- <li class="nk-menu-item">
                              <a href="{{ route("admin.fake_transaction.view") }}" class="nk-menu-link"><span class="nk-menu-text">Fake Transaction </span></a>
                             </li>  -->
                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="{{ route("admin.profile.view") }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-user"></em></span>
                            <span class="nk-menu-text">Profile</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="{{ route("admin.logout") }}" class="nk-menu-link">
                        <span class="nk-menu-icon"><em class="icon ni ni-signin"></em></span>
                            <span class="nk-menu-text">Logout</span>
                        </a>
                    </li><!-- .nk-menu-item -->
  
                </ul><!-- .nk-menu -->
            </div><!-- .nk-sidebar-menu -->
        </div><!-- .nk-sidebar-content -->
    </div><!-- .nk-sidebar-element -->
  </div>