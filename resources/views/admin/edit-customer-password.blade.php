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
                <div class="nk-content ">
                  <div class="container-fluid">
                      <div class="nk-content-inner">
                          <div class="nk-content-body">
                              <div class="components-preview wide-md mx-auto">
                                  <div class="nk-block-head nk-block-head-lg wide-sm">
                                      <div class="nk-block-head-content">
                                          <div class="nk-block-head-sub"><a class="back-to" href="javascript:void(0)" onclick="history.go(-1)"><em class="icon ni ni-arrow-left"></em><span>Back</span></a></div>
                                          <!-- <h2 class="nk-block-title fw-normal">Change Customer Password</h2> -->
                                          <h4>Change jude1's password</h4>
                                      </div>
                                  </div><!-- .nk-block-head -->
                                  <div class="nk-block nk-block-lg">
                                      <div class="card card-bordered card-preview">
                                          <div class="card-inner">
                                              <div class="preview-block">
                                                  <span class="preview-title-lg overline-title"></span>
                                                  <div class="">
                                                      <form class="newForm" data-post-type="change-password" action="http://localhost/ghost_project/admin/customer">
                                                          <div class="col-sm-12  form-row">
                                                              <span id="info_box"></span>
                                                          </div>

                                                          <input type="hidden" name="customer_id" value="5">

                                                          <div class="col-sm-6 col-md-12 mb-2">
                                                              <div class="form-group">
                                                                  <label class="form-label" for="new_password">New Password</label>
                                                                  <div class="form-control-wrap">
                                                                      <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch" data-target="new_password">
                                                                          <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                                                          <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                                                      </a>
                                                                      <input minlength="6" require="" type="password" name="new_password" class="form-control form-control-lg" id="new_password" placeholder="Enter your new password">
                                                                  </div>
                                                                  <span class="text-danger" id="error_new_password"></span>
                                                              </div>
                                                          </div>
                                                          <div class="col-sm-4 mt-3">
                                                              <div class="form-group">
                                                                  <div class="form-control-wrap">
                                                                      <button type="submit" data-value="Change Password" name="password-change" style="text-align:center;" class="d-block form-control btn btn-primary " id="password-change">Change Password</button>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </form>
                                                  </div>
                                              </div>
                                          </div>
                                      </div><!-- .card-preview -->
                                  </div><!-- .nk-block -->
                              </div><!-- .nk-block -->
                          </div>
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