<div class="nk-header nk-header-fluid nk-header-fixed is-light">
    <div class="container-fluid">
        <div class="nk-header-wrap">
            <div class="nk-menu-trigger d-xl-none ml-n1">
                <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
            </div>
            <div class="nk-header-brand d-xl-none">
                <a href="{{ route('user.pages.view', ['index']) }}" class="logo-link h3">
                    {{ config("app.name") }}
                </a>
            </div>
            <div class="nk-header-tools">
                <ul class="nk-quick-nav">
                    <li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <div class="user-toggle">
                                <div class="user-avatar sm">
                                    <em class="icon ni ni-user-alt"></em>
                                </div>
                                <div class="user-info d-none d-md-block">
                                    <div class="user-status user-status-unverified">Customer</div>
                                    <div class="user-name dropdown-indicator">
                                        {{ auth()->user()->username }}
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right dropdown-menu-s1">
                            <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                <div class="user-card">
                                    <div class="user-avatar">
                                        <span>
                                            {{ strtoupper(substr(auth()->user()->username,0,2)) }}
                                        </span>
                                    </div>
                                    <div class="user-info">
                                        <span class="lead-text">
                                            {{ auth()->user()->username }}
                                        </span>
                                        <span class="sub-text">
                                            {{ auth()->user()->email }}
                                        </span>
                                        @if (!empty($user->referral))
                                            <span class="sub-text">
                                                Referred by : {{ $user->referral }}
                                            </span>    
                                        @endif
                                       
                                    </div>
                                </div>
                            </div>

                            <div class="dropdown-inner">
                                <ul class="link-list">
                                    <li><a href="{{ route("user.setting.view",["general"]) }}"><em class="icon ni ni-user-alt"></em><span>View Profile</span></a></li>
                                    {{-- <li><a href="{{ route("user.history.view",["deposit"]) }}"><em class="icon ni ni-activity-alt"></em><span>Your Activity</span></a></li> --}}
                                </ul>
                            </div>
                            <div class="dropdown-inner">
                                <ul class="link-list">
                                    <li><a href="{{ route("user.logout.view") }}"><em class="icon ni ni-signout"></em><span>Sign out</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</div>
