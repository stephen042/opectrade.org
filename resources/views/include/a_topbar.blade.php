<div class="nk-header nk-header-fixed is-light">
    <div class="container-fluid">
        <div class="nk-header-wrap">
            <div class="nk-menu-trigger d-xl-none ml-n1">
                <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
            </div>
            <div class="nk-header-brand d-xl-none">
                <a href="{{ route("app.home") }}" class="logo-link h3">
                    {{ config("app.name") }}
                </a>
            </div><!-- .nk-header-brand -->
  
            <div class="nk-header-tools">
                <ul class="nk-quick-nav">
                    <li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <div class="user-toggle">
                                <div class="user-avatar sm">
                                    <em class="icon ni ni-user-alt"></em>
                                </div>
                                <div class="user-info d-none d-md-block">
                                    <div class="user-status">Administrator</div>
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
                                            {{ substr(auth()->user()->username,0,2) }}
                                        </span>
                                    </div>
                                    <div class="user-info">
                                        <span class="lead-text">
                                            {{ auth()->user()->username }}
                                        </span>
                                        <span class="sub-text">
                                            {{ auth()->user()->email }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown-inner">
                                <ul class="link-list">
                                    <li><a href="{{ route("admin.profile.view") }}"><em class="icon ni ni-user-alt"></em><span>View Profile</span></a></li>
                                    <li><a href="{{ route("admin.plans.view") }}"><em class="icon ni ni-setting-alt"></em><span>App Plan</span></a></li>
                                </ul>
                            </div>
                            <div class="dropdown-inner">
                                <ul class="link-list">
                                    <li><a href="{{ route("admin.logout") }}"><em class="icon ni ni-signout"></em><span>Log out</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </li><!-- .dropdown -->
  
                </ul><!-- .nk-quick-nav -->
            </div><!-- .nk-header-tools -->
        </div><!-- .nk-header-wrap -->
    </div><!-- .container-fliud -->
  </div>