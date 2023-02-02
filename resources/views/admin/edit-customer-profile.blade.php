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
                        <div class="nk-block-head-sub"><a class="back-to go_back" href="javascript:void(0)" onclick="history.go(-1)"><em class="icon ni ni-arrow-left"></em><span>Back</span></a></div>
                        <h2 class="nk-block-title fw-normal">Edit  {{ $user->username }} Profile Record</h2>
                       </div>
                      </div><!-- .nk-block-head -->
                      <div class="nk-block nk-block-lg">
                       <div class="card card-bordered card-preview">
                        <div class="card-inner">
                         <div class="preview-block">
                          <span class="preview-title-lg overline-title"></span>
                          <div class="">
                           <form class="" method="POST" data-post-type="edit-plan" action="{{ route("admin.users.view",["edit-customer-profile",$user->id]) }}">

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
                                 <label class="form-label" for="firstname">Firstname</label>
                                 <div class="form-control-wrap">
                                  <input required="" type="text" name="firstname" class="form-control" id="firstname" placeholder="Enter firstname" value="{{ !empty(old("firstname")) ? old("firstname") : $user->firstname   }}">
                                 </div>
                                 @error('firstname')
                                 <span class="text-danger" id="error_firstname">{{ $message }}</span>
                                 @enderror
                                </div>
                               </div>


                               <div class="col-sm-6 col-md-12 mb-2">
                                <div class="form-group">
                                 <label class="form-label" for="lastname">Lastname</label>
                                 <div class="form-control-wrap">
                                  <input required="" type="text" name="lastname" class="form-control" id="lastname" placeholder="Enter lastname" value="{{ !empty(old("lastname")) ? old("lastname") : $user->lastname   }}">
                                 </div>
                                 @error('lastname')
                                 <span class="text-danger" id="error_lastname">{{ $message }}</span>
                                 @enderror
                                </div>
                               </div>

                               <div class="col-sm-6 col-md-12 mb-2">
                                <div class="form-group">
                                 <label class="form-label" for="username">Username</label>
                                 <div class="form-control-wrap">
                                  <input required="" type="text" name="username" class="form-control" id="username" placeholder="Enter username" value="{{ !empty(old("username")) ? old("username") : $user->username   }}">
                                 </div>
                                 @error('username')
                                 <span class="text-danger" id="error_username">{{ $message }}</span>
                                 @enderror
                                </div>
                               </div>


                               <div class="col-sm-6 col-md-12 mb-2">
                                <div class="form-group">
                                 <label class="form-label" for="email">Email</label>
                                 <div class="form-control-wrap">
                                  <input required="" type="text" name="email" class="form-control" id="email" placeholder="Enter email" value="{{ !empty(old("email")) ? old("email") : $user->email   }}">
                                 </div>
                                 @error('email')
                                 <span class="text-danger" id="error_email">{{ $message }}</span>
                                 @enderror
                                </div>
                               </div>

                               <div class="col-sm-6 col-md-12 mb-2">
                                <div class="form-group">
                                 <label class="form-label" for="country">Country</label>
                                 <div class="form-control-wrap">
                                  <input required="" type="text" name="country" class="form-control" id="country" placeholder="Enter country" value="{{ !empty(old("country")) ? old("country") : $user->country   }}">
                                 </div>
                                 @error('country')
                                 <span class="text-danger" id="error_country">{{ $message }}</span>
                                 @enderror
                                </div>
                               </div>

                               <div class="col-sm-6 col-md-12 mb-2">
                                <div class="form-group">
                                 <label class="form-label" for="pin">pin</label>
                                 <div class="form-control-wrap">
                                  <input required="" type="text" name="pin" class="form-control" id="pin" placeholder="Enter pin" value="{{ !empty(old("pin")) ? old("pin") : $user->pin   }}">
                                 </div>
                                 @error('pin')
                                 <span class="text-danger" id="error_pin">{{ $message }}</span>
                                 @enderror
                                </div>
                               </div>

                               
                               <div class="col-sm-6 col-md-12 mb-2">
                                <div class="form-group">
                                 <label class="form-label" for="phone">phone</label>
                                 <div class="form-control-wrap">
                                  <input required="" type="text" name="phone" class="form-control" id="phone" placeholder="Enter phone" value="{{ !empty(old("phone")) ? old("phone") : $user->phone   }}">
                                 </div>
                                 @error('phone')
                                 <span class="text-danger" id="error_phone">{{ $message }}</span>
                                 @enderror
                                </div>
                               </div>




                            <div class="col-sm-4 mt-3">
                             <div class="form-group">
                              <div class="form-control-wrap">
                               <button type="submit"  name="edit-plan" style="text-align:center;" class="d-block form-control btn btn-primary " >Edit Profile Record</button>
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