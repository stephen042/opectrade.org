<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <title>{{ config("app.name") }}</title>
    @include('include.c_css')
    <link id="skin-default" rel="stylesheet" href="{{ asset("assets/css/dropzone.min.css") }}">


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
                <div class="nk-content nk-content-fluid">
                @include('include.tradeview')
                    <div class="container-xl wide-lg">
                        <div class="nk-content-body">
                            <div class="buysell wide-xs m-auto">
                                <div class="buysell-nav text-center">
                                    <ul class="nk-nav nav nav-tabs nav-tabs-s2">
                                        <li class="nav-item">
                                            <a class="nav-link" href="javascript:void()">Deposit Fund</a>
                                        </li>
                                    </ul>
                                </div><!-- .buysell-nav -->
                                <div class="buysell-title text-center">
                                    <h4 class="title">Top Up Your Account Balance!</h4>
                                </div><!-- .buysell-title -->
                                <div class="buysell-block">
                             
                                    {{-- <form action="/account/process-deposit" method="post">
                                        @csrf --}}
                                        <div class="col-md-12 error_box mt-4">
                                            <p id="error_box" class="text-danger"></p>
                                            <p id="error_box1" class="text-danger"></p>
                                        </div>

                                        <div class="buysell-field form-group">
                                            <div class="form-label-group">
                                                <label class="form-label" for="">Choose Currency</label>
                                                <span class="error_box text-center text-danger"></span>
                                            </div>
                                            <div class="form-control-group">
                                                <select name="currency" id="currency" class="form-control  form-control-number">
                                                    <option   {{ (request()->account == "usd") ? "selected" : ""  }}  value="usd" class="small">USD</option>
                                                </select>
                                            </div>
                                        </div><!-- .buysell-field -->
                                        <div class="buysell-field form-group">
                                            <div class="form-label-group error_box">
                                                <label class="form-label" for="buysell-amount">Amount to Deposit</label>
                                                <span class=" text-center text-danger" id="error_box"></span>
                                            </div>
                                            <div class="form-control-group">
                                                <input type="text" class="form-control  form-control-number" id="buysell-amount" name="bs-amount" placeholder="Enter Amount">
                                                <div class="form-dropdown">
                                                    <div class="text">USD</div>
                                                </div>
                                            </div>
                                        </div><!-- .buysell-field -->
                                        {{-- <div class="buysell-field form-group">
                                            <div class="form-label-group">
                                                <label class="form-label" for="buysell-amount">Select Plan</label>
                                                <span class="error_box text-center text-danger"></span>
                                            </div>
                                            <div class="form-control-group">
                                                <select name="method" id="method" class="form-control  form-control-number">
                                                    
                                                    <option value="o">Select Plan </option>
                                                    <option value="1">Beginners Plan </option>
                                                    <option value="2">Amateur Plan </option>
                                                    <option value="3">Advanced Plan </option>
                                                    <option value="4">Professional Plan </option>
                                                    
                                                </select>
                                            </div>
                                        </div> --}}
                                        <!-- .buysell-field -->

                                        <div class="buysell-field form-group">
                                            <div class="form-label-group">
                                                <label class="form-label" for="buysell-amount">Payment Method</label>
                                                <span class="error_box text-center text-danger"></span>
                                            </div>
                                            <div class="form-control-group">
                                                <select name="method" id="method" class="form-control  form-control-number">
                                                    @if ($application->bitcoin_address)
                                                    <option value="BTC">BITCOIN </option>
                                                    @endif
              
                                                    @if ($application->ethereum_address)
                                                    <option value="ETH">ETHEREUM </option>
                                                    @endif
              
                                                    @if ($application->usdt_address)
                                                    <option  value="USDT">TETHER (USDT Trc20) </option>
                                                    @endif                                                    
                                                    
                                                    @if ($application->litecoin_address)
                                                    <option value="LTC">LITCOIN </option>
                                                    @endif
              
                                                    @if ($application->btc_cash_address)
                                                    <option  value="BCH">BITCOIN CASH </option>
                                                    @endif
                                                    
                                                    @if ($application->binancecoin_address)
                                                    <option  value="BNB">BINANCE COIN </option>
                                                    @endif
                                                    
                                                    @if ($application->dodgecoin_address)
                                                    <option  value="DODGE">DODGE COIN </option>
                                                    @endif 
                                                    

                                                </select>
                                            </div>
                                        </div><!-- .buysell-field -->

                                        <div class="row">
                                            <div class="col-sm-12 py-2 my-1 col-md-6 col-lg-6">
                                                <div class="rounded d-flex p-2 px-3 align-items-center" style="border: 1px dashed #171a1d;">
                                                    <i style="font-size: 1.6rem;" class="zmdi zmdi-pocket mr-2"></i>
                                                    <p style="flex: 1; font-size: 13px;">
                                                        <span class="font-weight-light">Final balance:</span>
                                                        <b class="px-2"><span class="_display">0</span> USD</b>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-6 py-3 ">
                                                <button  data-url="{{ route("user.deposit.post") }}" class="btn btn-primary btn-block deposit_cash">
                                                    + Add funds
                                                </button>
                                            </div>
                                        </div>
                                    {{-- </form> --}}
                                  
                                </div><!-- .buysell-block -->
                            </div><!-- .buysell -->
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
    {{-- modal --}}
    <div class="modal fade" tabindex="-1" role="dialog" id="buy-coin">
        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <div class="nk-block-head nk-block-head-xs text-center">
                        <h5 class="nk-block-title">
                            <!-- <h4 class="time_counter mt-3">10min</h4> -->
                        </h5>
                        <div class="nk-block-text">
                            <div class="title-sub d-none bank text-primary">
                                Make Payment to the Account below , upload your reciept and click the confirm button.
                                <ul class="text-justify p-3 text-dark">
                                    <li>Bank Name : <strong class="text-primary">
                                            <?=ucwords($application->bank_name)?></strong></li>
                                    <li>Account Number :<strong class="text-primary">
                                            <?=ucwords($application->bank_account_no)?></strong></li>
                                    <li>Account Name :<strong class="text-primary">
                                            <?=ucwords($application->bank_account_name)?></strong></li>
                                </ul>
                            </div>
                            <div class="nk-refwg-invite d-none btc">
                                <div class="nk-refwg-head ">
                                    <div class="nk-refwg-title">
                                        <div class="title-sub text-primary">Make Payments of <strong class="converted_payment"></strong> to the wallet address below , upload your transaction screenshot and click confirm button.</div>
                                    </div>
                                </div>
                                <div class="row p-2">
                                    <div class="col-md-6 col-sm-7 p-1">
                                        <input readonly style="width:100%;" type="text" class="form-control" value="" id="btc_amount">
                                    </div>
                                    <div class="col-md-6 col-sm-5 p-1">
                                        <button style="width:100%;text-align:center !important;" class="btn btn-primary d-block " onclick="copyText('btc_amount')">Copy Amount</button>
                                    </div>
                                </div>
                                <div class="row p-2">
                                    <div class="col-md-6 col-sm-7 p-1">
                                        <input readonly style="width:100%;" type="text" class="form-control" value="<?=$application->btc_address?>" id="wallet_address">
                                    </div>
                                    <div class="col-md-6 col-sm-5 p-1">
                                        <button style="width:100%;text-align:center !important;" class="btn btn-primary d-block " onclick="copyText('wallet_address')">Copy Address</button>
                                    </div>
                                </div>
                            </div><!-- .nk-refwg-invite -->
                        </div>
                    </div>
                    <div class="dropzone"></div>
                    <div class="nk-block">
                        <div class="buysell-field form-action text-center">
                            <div>
                                <a href="#" class="btn btn-primary mt-4 btn-lg confirm_deposit" data-url="{{ route("user.deposit.confirm.post") }}">Confirm
                                    Payments</a>
                            </div>
                        </div>
                    </div><!-- .nk-block -->
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modla-dialog -->
    </div><!-- .modal -->
    {{-- modal --}}

    {{-- footer --}}
    <script>
        var $imageArray = [];
        var $site = "{{ route('app.home') }}";
        let $proof_upload = "{{ route('user.deposit.proof.post',['add']) }}";
        let $proof_delete = "{{ route('user.deposit.proof.post',['delete']) }}";
    </script>
        {{-- footer --}}
        @include('include.c_script')
        <script src="{{ asset('assets/js/dropzone.min.js') }}"></script>
        <script src="{{ asset('assets/js/custom_dropzone.js') }}"></script>
    <!-- END PAGE CONTAINER-->
</body>

</html>