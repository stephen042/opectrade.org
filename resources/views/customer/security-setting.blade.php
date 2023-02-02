<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <title>{{ config("app.name") }}</title>
    @include('include.c_css')
</head>

<body class="nk-body npc-crypto has-sidebar has-sidebar-fat ui-clean ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- sidebar @s -->
            @include('include.c_sidebar')
            <!-- sidebar @e -->
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                @include('include.c_header')
                <!-- main header @e -->
                <!-- content @s -->
                <div class="nk-content ">
                @include('include.tradeview')
                  <div class="container-fluid">
                   <div class="nk-content-inner">
                    <div class="nk-content-body">
                        
                     <div class="components-preview wide-md mx-auto">
                      <div class="nk-block-head nk-block-head-lg wide-sm">
                       <div class="nk-block-head-content">
                        <div class="nk-block-head-sub"><a class="back-to" href="javascript:void(0)" onclick="history.go(-1)"><em class="icon ni ni-arrow-left"></em><span>Back</span></a></div>
                        <h4 class="nk-block-title fw-normal text-center">YOUR SECURITY DETAILS</h4>

                        <p class="text-center small-p mt-2 mb-2" style="line-height: 20px;">Your Security Details are required to perform most transactions in our platform and it is advised to keep it secret.</p>
                    </div>
                       </div>
                      </div><!-- .nk-block-head -->
                      <div class="nk-block nk-block-lg">
                       <div class="card card-bordered card-preview">
                        <div class="card-inner">
                         <div class="preview-block">
                          <span class="preview-title-lg overline-title"></span>
                          <div class="">
                            <h5 class="text-center">Transaction Pin Reset Section </h5>

                           <form action="{{ route("user.setting.view",["security"]) }}" method="POST">
                            @csrf
                            <div class="col-sm-12  form-row">
                                @if (!empty($success))
                                <span class="info_box text-success">{{ $success }}</span>
                                @endif
                            </div>
                            <div class="col-sm-12  form-row">
                                @if (!empty($error))
                                <span class="info_box text-danger">{{ $error }}</span>
                                @endif
                            </div>
            
                            <div class="col-sm-6 col-md-12 mb-2">
                             <div class="form-group">
                              <label class="form-label" for="current_pin">Current Pin</label>
                              <div class="form-control-wrap">
                               <input  type="text"  class="form-control" name="current_pin"  value="{{ old("current_pin") }}" placeholder="Enter Current Pin">
                              </div>
                              @error('current_pin')
                              <span class="text-danger" id="error_name">{{ $message }}</span>
                              @enderror
                             </div>
                            </div>

                            <div class="col-sm-6 col-md-12 mb-2">
                                <div class="form-group">
                                 <label class="form-label" for="new_pin">New Pin</label>
                                 <div class="form-control-wrap">
                                  <input  type="text"  class="form-control" name="new_pin"  value="{{ old("new_pin") }}" placeholder="Enter new Pin">
                                 </div>
                                 @error('new_pin')
                                 <span class="text-danger" id="error_name">{{ $message }}</span>
                                 @enderror
                                </div>
                               </div>

                            <div class="col-sm-4 mt-3">
                             <div class="form-group">
                              <div class="form-control-wrap">
                               <button type="submit"  style="text-align:center;" class="d-block form-control btn btn-primary " id="edit-plan">Change Pin</button>
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

                     {{-- second --}}

                     <div class="components-preview wide-md mx-auto">
                        <div class="nk-block-head nk-block-head-lg wide-sm">
                         <div class="nk-block-head-content mt-5">

                          {{-- <h4 class="nk-block-title fw-normal text-center">PERSONAL PAYMENT  DATA</h4> --}}
                         </div>
                        </div><!-- .nk-block-head -->
                        <div class="nk-block nk-block-lg">
                         <div class="card card-bordered card-preview">
                          <div class="card-inner">
                           <div class="preview-block">
                            <span class="preview-title-lg overline-title"></span>
                            <div class="">
                                <h5 class="text-center">Password Reset Section </h5>
                                <form action="{{ route("user.setting.view",["security"]) }}" method="POST">
                                    @csrf
                                    <div class="col-sm-12  form-row">
                                        @if (!empty($success_p))
                                        <span class="info_box text-success">{{ $success_p }}</span>
                                        @endif
                                    </div>
                                    <div class="col-sm-12  form-row">
                                        @if (!empty($error_p))
                                        <span class="info_box text-danger">{{ $error_p }}</span>
                                        @endif
                                    </div>
                    
                                    <div class="col-sm-6 col-md-12 mb-2">
                                     <div class="form-group">
                                      <label class="form-label" for="current_password">Current Password</label>
                                      <div class="form-control-wrap">
                                       <input  type="password"  class="form-control" name="current_password"  value="{{ old("current_password") }}" placeholder="Enter Current Password">
                                      </div>
                                      @error('current_password')
                                      <span class="text-danger" id="error_name">{{ $message }}</span>
                                      @enderror
                                     </div>
                                    </div>
        
                                    <div class="col-sm-6 col-md-12 mb-2">
                                        <div class="form-group">
                                         <label class="form-label" for="new_password">New Password</label>
                                         <div class="form-control-wrap">
                                          <input  type="password"  class="form-control" name="new_password"  value="{{ old("new_password") }}" placeholder="Enter New Password">
                                         </div>
                                         @error('new_password')
                                         <span class="text-danger" id="error_name">{{ $message }}</span>
                                         @enderror
                                        </div>
                                       </div>
        
                                    <div class="col-sm-4 mt-3">
                                     <div class="form-group">
                                      <div class="form-control-wrap">
                                       <button type="submit"  style="text-align:center;" class="d-block form-control btn btn-primary " id="edit-plan">Change Password</button>
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
                @include('include.c_footer')
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    {{-- footer --}}
    @include('include.c_script')
    <!-- END PAGE CONTAINER-->
</body>

</html>