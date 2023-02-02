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
                        <h4 class="nk-block-title fw-normal text-center">PERSONAL PAYMENT  DATA</h4>
                       </div>
                      </div><!-- .nk-block-head -->
                      <div class="nk-block nk-block-lg">
                       <div class="card card-bordered card-preview">
                        <div class="card-inner">
                         <div class="preview-block">
                          <span class="preview-title-lg overline-title"></span>
                          <div class="">
                           <form action="{{ route("user.setting.view",["payment"]) }}" method="POST">
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
                              <label class="form-label" for="bitcoin_address">Bitcoin Address</label>
                              <div class="form-control-wrap">
                               <input  type="text"  class="form-control" name="bitcoin_address"  value="{{ $account->bitcoin_address }}" placeholder="Enter bitcoin address">
                              </div>
                              @error('bitcoin_address')
                              <span class="text-danger" id="error_name">{{ $message }}</span>
                              @enderror
                             </div>
                            </div>

                            <div class="col-sm-6 col-md-12 mb-2">
                                <div class="form-group">
                                 <label class="form-label" for="ethereum_address">Ethereum Address</label>
                                 <div class="form-control-wrap">
                                  <input  type="text"  class="form-control" name="ethereum_address"  value="{{ $account->ethereum_address }}" placeholder="Enter ethereum address">
                                 </div>
                                 @error('ethereum_address')
                                 <span class="text-danger" id="error_name">{{ $message }}</span>
                                 @enderror
                                </div>
                               </div>

                               <div class="col-sm-6 col-md-12 mb-2">
                                <div class="form-group">
                                 <label class="form-label" for="litecoin_address">Litecoin Address</label>
                                 <div class="form-control-wrap">
                                  <input  type="text"  class="form-control" name="litecoin_address"  value="{{ $account->litecoin_address }}" placeholder="Enter litecoin address">
                                 </div>
                                 @error('litecoin_address')
                                 <span class="text-danger" id="error_name">{{ $message }}</span>
                                 @enderror
                                </div>
                               </div>

                               {{-- <div class="col-sm-6 col-md-12 mb-2">
                                <div class="form-group">
                                 <label class="form-label" for="perfectmoney_address">Perfectmoney Address</label>
                                 <div class="form-control-wrap">
                                  <input  type="text"  class="form-control" name="perfectmoney_address"  value="{{ $account->perfectmoney_address }}" placeholder="Enter perfectmoney address">
                                 </div>
                                 @error('perfectmoney_address')
                                 <span class="text-danger" id="error_name">{{ $message }}</span>
                                 @enderror
                                </div>
                               </div> --}}

                               <div class="col-sm-6 col-md-12 mb-2">
                                <div class="form-group">
                                 <label class="form-label" for="usdt_address">USDT Address</label>
                                 <div class="form-control-wrap">
                                  <input  type="text"  class="form-control" name="usdt_address"  value="{{ $account->usdt_address }}" placeholder="Enter usdt address">
                                 </div>
                                 @error('usdt_address')
                                 <span class="text-danger" id="error_name">{{ $message }}</span>
                                 @enderror
                                </div>
                               </div>

                               <div class="col-sm-6 col-md-12 mb-2">
                                <div class="form-group">
                                 <label class="form-label" for="transaction_pin">Transaction Pin</label>
                                 <div class="form-control-wrap">
                                  <input  type="text"  class="form-control" name="transaction_pin"  value="{{ $account->transaction_pin }}" placeholder="Enter Transaction Pin">
                                 </div>
                                 @error('transaction_pin')
                                 <span class="text-danger" id="error_name">{{ $message }}</span>
                                 @enderror
                                </div>
                               </div>



                                        
                          
                            <div class="col-sm-4 mt-3">
                             <div class="form-group">
                              <div class="form-control-wrap">
                               <button type="submit"  style="text-align:center;" class="d-block form-control btn btn-primary " id="edit-plan">Update Payment Data</button>
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