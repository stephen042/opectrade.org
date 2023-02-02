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
                        <h3 class="nk-block-title fw-normal text-center">General Profile</h3>
                       </div>
                      </div><!-- .nk-block-head -->
                      <div class="nk-block nk-block-lg">
                       <div class="card card-bordered card-preview">
                        <div class="card-inner">
                         <div class="preview-block">
                          <span class="preview-title-lg overline-title"></span>
                          <div class="">
                           <form action="{{ route("user.setting.view",["general"]) }}" method="POST">
                            @csrf
                            <div class="row">
      
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
                              <label class="form-label" for="firstname">Firstname</label>
                              <div class="form-control-wrap">
                               <input required="" type="text"  class="form-control" name="firstname"  value="{{ !empty(old("firstname")) ? old("firstname") : $user->firstname }}" placeholder="Enter firstname">
                              </div>
                              @error('firstname')
                              <span class="text-danger" id="error_name">{{ $message }}</span>
                              @enderror
                             </div>
                            </div>

                                        
                            <div class="col-sm-6 col-md-12 mb-2">
                              <div class="form-group">
                               <label class="form-label" for="lastname">Lastname</label>
                               <div class="form-control-wrap">
                                <input required="" type="text"  class="form-control" name="lastname"  value="{{ !empty(old("lastname")) ? old("lastname") : $user->lastname }}" placeholder="Enter lastname">
                               </div>
                               @error('lastname')
                               <span class="text-danger" id="error_name">{{ $message }}</span>
                               @enderror
                              </div>
                             </div>
             
            
            
                             <div class="col-sm-6 col-md-12 mb-2">
                              <div class="form-group">
                               <label class="form-label" for="username">Username</label>
                               <div class="form-control-wrap">
                                <input readonly required="" type="text"  class="form-control" name="username"  value="{{ !empty(old("username")) ? old("username") : $user->username }}" placeholder="Enter username">
                               </div>
                               @error('username')
                               <span class="text-danger" id="error_name">{{ $message }}</span>
                               @enderror
                              </div>
                             </div>

                             <div class="col-sm-6 col-md-12 mb-2">
                              <div class="form-group">
                               <label class="form-label" for="email">Email</label>
                               <div class="form-control-wrap">
                                <input required="" type="email"  class="form-control" name="email"  value="{{ !empty(old("email")) ? old("email") : $user->email }}" placeholder="Enter email">
                               </div>
                               @error('email')
                               <span class="text-danger" id="error_name">{{ $message }}</span>
                               @enderror
                              </div>
                             </div>

                             <div class="col-sm-6 col-md-12 mb-2">
                              <div class="form-group">
                               <label class="form-label" for="phone">Phone</label>
                               <div class="form-control-wrap">
                                <input required="" type="phone"  class="form-control" name="phone"  value="{{ !empty(old("phone")) ? old("phone") : $user->phone }}" placeholder="Enter phone">
                               </div>
                               @error('phone')
                               <span class="text-danger" id="error_name">{{ $message }}</span>
                               @enderror
                              </div>
                             </div>
             
  
                            <div class="col-sm-4 mt-3">
                             <div class="form-group">
                              <div class="form-control-wrap">
                               <button type="submit"  style="text-align:center;" class="d-block form-control btn btn-primary " id="edit-plan">Update General Data</button>
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