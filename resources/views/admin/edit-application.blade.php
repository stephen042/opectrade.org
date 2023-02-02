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
                        <h2 class="nk-block-title fw-normal">Edit  Application Info</h2>
                       </div>
                      </div><!-- .nk-block-head -->
                      <div class="nk-block nk-block-lg">
                       <div class="card card-bordered card-preview">
                        <div class="card-inner">
                         <div class="preview-block">
                          <span class="preview-title-lg overline-title"></span>
                          <div class="">
                           <form class="" method="POST" data-post-type="edit-plan" action="{{ route("admin.application.view",["edit-application",$app->id]) }}">

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
                                 <label class="form-label" for="bitcoin_address">App Bitcoin Address</label>
                                 <div class="form-control-wrap">
                                  <input required="" type="text" name="bitcoin_address" class="form-control" id="bitcoin_address" placeholder="Enter bitcoin_address" value="{{ !empty(old("bitcoin_address")) ? old("bitcoin_address") : $app->bitcoin_address   }}">
                                 </div>
                                 @error('bitcoin_address')
                                 <span class="text-danger" id="error_bitcoin_address">{{ $message }}</span>
                                 @enderror
                                </div>
                               </div>

                               <!-- <div class="col-sm-6 col-md-12 mb-2">
                                <div class="form-group">
                                 <label class="form-label" for="ethereum_address">App Ethereum Address</label>
                                 <div class="form-control-wrap">
                                  <input required="" type="text" name="ethereum_address" class="form-control" id="ethereum_address" placeholder="Enter ethereum_address" value="{{ !empty(old("ethereum_address")) ? old("ethereum_address") : $app->ethereum_address   }}">
                                 </div>
                                 @error('ethereum_address')
                                 <span class="text-danger" id="error_ethereum_address">{{ $message }}</span>
                                 @enderror
                                </div>
                               </div> -->

                               <div class="col-sm-6 col-md-12 mb-2">
                                <div class="form-group">
                                 <label class="form-label" for="btc_cash_address">App Bitcoin Cash Address</label>
                                 <div class="form-control-wrap">
                                  <input required="" type="text" name="btc_cash_address" class="form-control" id="btc_cash_address" placeholder="Enter btc_cash_address" value="{{ !empty(old("btc_cash_address")) ? old("btc_cash_address") : $app->btc_cash_address   }}">
                                 </div>
                                 @error('btc_cash_address')
                                 <span class="text-danger" id="error_btc_cash_address">{{ $message }}</span>
                                 @enderror
                                </div>
                               </div>

                               <div class="col-sm-6 col-md-12 mb-2">
                                <div class="form-group">
                                 <label class="form-label" for="litecoin_address">App Litcoin  Address</label>
                                 <div class="form-control-wrap">
                                  <input required="" type="text" name="litecoin_address" class="form-control" id="litecoin_address" placeholder="Enter litecoin_address" value="{{ !empty(old("litecoin_address")) ? old("litecoin_address") : $app->litecoin_address   }}">
                                 </div>
                                 @error('litecoin_address')
                                 <span class="text-danger" id="error_litecoin_address">{{ $message }}</span>
                                 @enderror
                                </div>
                               </div>

                               
                               <div class="col-sm-6 col-md-12 mb-2">
                                <div class="form-group">
                                 <label class="form-label" for="binancecoin_address">App binancecoin Address</label>
                                 <div class="form-control-wrap">
                                  <input required="" type="text" name="binancecoin_address" class="form-control" id="binancecoin_address" placeholder="Enter binancecoin_address" value="{{ !empty(old("binancecoin_address")) ? old("binance_address") : $app->binancecoin_address   }}">
                                 </div>
                                 @error('binancecoin_address')
                                 <span class="text-danger" id="error_binancecoin_address">{{ $message }}</span>
                                 @enderror
                                </div>
                               </div>
                               
                               <!-- <div class="col-sm-6 col-md-12 mb-2">
                                <div class="form-group">
                                 <label class="form-label" for="dodgecoin_address">App dodgecoin Address</label>
                                 <div class="form-control-wrap">
                                  <input required="" type="text" name="dodgecoin_address" class="form-control" id="dodgecoin_address" placeholder="Enter dodgecoin_address" value="{{ !empty(old("dodgecoin_address")) ? old("dodge_address") : $app->dodgecoin_address   }}">
                                 </div>
                                 @error('dodgecoin_address')
                                 <span class="text-danger" id="error_dodgecoin_address">{{ $message }}</span>
                                 @enderror
                                </div>
                               </div> -->
                               
                               <div class="col-sm-6 col-md-12 mb-2">
                                <div class="form-group">
                                 <label class="form-label" for="usdt_address">App Usdt-Trc20 Address</label>
                                 <div class="form-control-wrap">
                                  <input required="" type="text" name="usdt_address" class="form-control" id="usdt_address" placeholder="Enter usdt_address" value="{{ !empty(old("usdt_address")) ? old("usdt_address") : $app->usdt_address   }}">
                                 </div>
                                 @error('usdt_address')
                                 <span class="text-danger" id="error_usdt_address">{{ $message }}</span>
                                 @enderror
                                </div>
                               </div>
                               
                               



                            <div class="col-sm-4 mt-3">
                             <div class="form-group">
                              <div class="form-control-wrap">
                               <button type="submit"  name="edit-plan" style="text-align:center;" class="d-block form-control btn btn-primary " >Edit App Record</button>
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