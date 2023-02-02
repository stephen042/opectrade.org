<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    @include('include.a_css')
    <!-- Page Title  -->
    <title>{{ config("app.name") }} Admin</title>
</head>

<body class="nk-body bg-lighter npc-general has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- sidebar @s -->
            @include('include.a_sidebar')
            <!-- sidebar @e -->
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                @include('include.a_topbar')
                <!-- main header @e -->
                <!-- content @s -->
                <div class="nk-content nk-content-fluid">
                  <div class="container-xl wide-lg">
                      <div class="nk-content-body">
                          <div class="nk-block-head">
                              <div class="nk-block-head-content">
                                  <div class="nk-block-head-sub"><span>Account Setting</span></div>
                                  <h2 class="nk-block-title fw-normal">My Profile</h2>
                                  <div class="nk-block-des">
                                      <p>You have full control to manage your own account setting. <span class="text-primary"><em class="icon ni ni-info" data-toggle="tooltip" data-placement="right" title="" data-original-title="Tooltip on right"></em></span></p>
                                  </div>
                              </div>
                          </div><!-- .nk-block-head -->
                          <ul class="nk-nav nav nav-tabs">
                              <li class="nav-item">
                                  <a class="nav-link" href="html/crypto/profile.html">Personal</a>
                              </li>

                          </ul><!-- .nk-menu -->
                          <!-- NK-Block @s -->
                          <div class="nk-block">
                              <div class="alert alert-warning">
                                  <div class="alert-cta flex-wrap flex-md-nowrap">
                                      <div class="alert-text">
                                          <p>You can edit any of your  profile detail by clicking on the edit button.</p>
                                      </div>
                                      <ul class="alert-actions gx-3 mt-3 mb-1 my-md-0">
                                          <li class="order-md-last">
                                              <a href="{{ route("admin.users.view",["edit-customer-profile",$user->id]) }}" class="btn btn-sm btn-warning">Edit Profile</a>
                                          </li>
                                          <li class="order-md-last">
                                              <a href="{{ route("admin.users.view",["change-customer-password",$user->id]) }}" class="btn btn-sm btn-warning">Change Password</a>
                                          </li>
                                      </ul>
                                  </div>
                              </div><!-- .alert -->
                              <div class="nk-block-head">
                                  <div class="nk-block-head-content">
                                      <h5 class="nk-block-title">Personal Information</h5>
                                      <div class="nk-block-des">
                                          <p>Basic info, like your name and address etc.</p>
                                      </div>
                                  </div>
                              </div><!-- .nk-block-head -->
                              <div class="nk-data data-list">
                                  <div class="data-head">
                                      <h6 class="overline-title">Basics</h6>
                                  </div>
                                  <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                      <div class="data-col">
                                          <span class="data-label">Full Name</span>
                                          <span class="data-value">{{ $user->firstname }} {{ $user->lastname }}</span>
                                      </div>
                                      <div class="data-col data-col-end"></div>
                                  </div><!-- .data-item -->
                                  <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                      <div class="data-col">
                                          <span class="data-label">Username</span>
                                          <span class="data-value">{{ $user->username }}</span>
                                      </div>
                                      <div class="data-col data-col-end"></div>
                                  </div><!-- .data-item -->
                                  <div class="data-item">
                                      <div class="data-col">
                                          <span class="data-label">Email</span>
                                          <span class="data-value">{{ $user->email }}</span>
                                      </div>
                                      <div class="data-col data-col-end"><span class="data-more disable"><em class="icon ni ni-lock-alt"></em></span></div>
                                  </div><!-- .data-item -->
                                  <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                      <div class="data-col">
                                          <span class="data-label">Phone Number</span>
                                          <span class="data-value text-soft">{{ $user->phone }}</span>
                                      </div>
                                      <div class="data-col data-col-end"></div>
                                  </div><!-- .data-item -->

                                  <div class="data-item" data-toggle="modal" data-target="#profile-edit" data-tab-target="#address">
                                      <div class="data-col">
                                          <span class="data-label">Pin</span>
                                          <span class="data-value">{{ $user->pin }}</span>
                                      </div>
                                      <div class="data-col data-col-end"></div>
                                  </div><!-- .data-item -->
                              </div><!-- .nk-data -->

                          </div>
                          <!-- NK-Block @e -->
                          <!-- //  Content End -->
                      </div>
                  </div>
              </div>
                <!-- content @e -->
                <!-- footer @s -->
                @include('include.a_footer')
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    @include('include.a_scripts')
</body>

</html>