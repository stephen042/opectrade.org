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
                <div class="nk-content nk-content-fluid">
                @include('include.tradeview')
                    <div class="container-xl wide-lg">
                        <div class="nk-content-body">
                            <div class="buysell wide-xs m-auto">
                                <div class="buysell-nav text-center">
                                    <ul class="nk-nav nav nav-tabs nav-tabs-s2">
                                        <li class="nav-item">
                                            <a class="nav-link" href="javascript:void()">WITHDRAWALS</a>
                                        </li>
                                    </ul>
                                </div><!-- .buysell-nav -->
                                <div class="buysell-title text-center">
                                    <p class="title">Withdrawal of funds from your {{ ucwords(strtolower(config("app.name"))) }} account balance is available using 5 payment systems - BTC, ETH, LTC, USDT, Perfect Money. Select the account then select the payment system to which you want to withdraw funds, enter the withdrawal amount and click the "Withdraw".</p>

                                    <p>IMPORTANT!!! Withdrawals are available only to those wallets that are saved in the "Payment  Data" section.</p>
                                </div><!-- .buysell-title -->
                                <div class="buysell-block">
                             

                                        <div class="col-md-12 error_box mt-4">
                                            <p id="error_box" class="text-danger"></p>
                                            <p id="error_box1" class="text-danger"></p>
                                        </div>

                                        <div class="buysell-field form-group">
                                            <div class="form-label-group">
                                                <label class="form-label" for="">Choose Account</label>
                                                <span class="error_box text-center text-danger"></span>
                                            </div>
                                            <div class="form-control-group">
                                                <select  name="currency" id="currency" class="charge_account  form-control  form-control-number">
                                                    <option data-balance="{{ $account->dolla_balance }}" value="USD" class="small"></i>USD</option>
                                                    <option data-balance="{{ $account->bitcoin_balance }}" value="BTC" class="small"></i>BTC</option>
                                                    <option data-balance="{{ $account->ethereum_balance }}" value="ETH" class="small"></i>ETH</option>
                                                    <option data-balance="{{ $account->referral_balance }}" value="BONUS" class="small"></i>BONUS</option>
                                                </select>
                                            </div>
                                        </div><!-- .buysell-field -->

                                        <div class="buysell-field form-group">
                                            <div class="form-label-group">
                                                <label class="form-label" for="">Payment Method</label>
                                                <span class="error_box text-danger"></span>
                                            </div>
                                            <div class="form-control-group">
                                                <select  class="payment_account form-control form-select  form-control-number">
                                                    @if (!empty($account->perfectmoney_address))
                                                    <option value="Perfect-Money">Perfect Money</option>
                                                    @endif
                                                    @if (!empty($account->bitcoin_address))
                                                    <option value="BTC">BTC</option>
                                                    @endif
                                                    @if (!empty($account->usdt_address ))
                                                    <option value="USDT">USDT</option>
                                                    @endif
                                                    @if (!empty($account->ethereum_address))
                                                    <option value="ETH">ETH</option>
                                                    @endif
                                                    @if (!empty($account->litecoin_address))
                                                    <option value="LTC">LTC</option>
                                                    @endif
                                                </select>
                                            </div>

                                        </div><!-- .buysell-field -->

                                        <div class="buysell-field form-group">
                                            <div class="form-label-group error_box">
                                                <label class="form-label" >Amount to Withdraw</label>
                                                <span class=" text-center text-danger" ></span>
                                            </div>
                                            <div class="form-control-group">
                                                <input type="text" class="form-control  form-control-number withdrawal_amount"   placeholder="Enter Amount">
                                            </div>
                                        </div><!-- .buysell-field -->

                                        <div class="buysell-field form-group">
                                            <div class="form-label-group error_box">
                                                <label class="form-label" >Transaction Pin</label>
                                                <span class=" text-center text-danger" ></span>
                                            </div>
                                            <div class="form-control-group">
                                                <input type="text" class="form-control  form-control-number transaction_pin"   placeholder="Financial Pin">
                                            </div>
                                        </div><!-- .buysell-field -->


                                        <div class="row">
                                            <div class="col-sm-12 py-2 my-1 col-md-612 col-lg-12">
                                                <div class="rounded d-flex p-2 px-3 align-items-center" style="border: 1px dashed #171a1d;">
                                                    <div class="col-sm-12 col-md-12 col-lg-12 small-p muted my-3 position-relative">
                                                        {{-- <input type="number" name="" class="form-control"> --}}
                                                        {{-- <span class="absolute">Enter amount</span> --}}
                                                        <p class="label-price">Final balance: <b class="px-2 font-weight-bold main_display" style="color: #ED8B58;"> 0 USD</b></p>
                                                    </div>
                                                </div>
                                            <div class="col-sm-12 col-md-12 col-lg-12 py-3 ">
                                                <button data-url="{{ route("user.withdraw.view") }}" class="btn btn-primary btn-block process_withdraw">
                                                    Withdraw
                                                </button>
                                            </div>
                                        </div>

                                  
                                </div><!-- .buysell-block -->
                            </div><!-- .buysell -->
                        </div>
                        <!-- table -->
                        {{-- <div class="nk-block nk-block-lg mt-5 ">
                            <div class="nk-block-head">
                                <div class="nk-block-head-content">
                                    <h4 class="nk-block-title">Recent Deposit History</h4>
                                    <p>The table contain the history of your last 10 <strong class="text-primary"> deposit </strong>
                                        transactions and thier status.</p>
                                </div>
                            </div>
                            <div class="card card-bordered card-preview">
                                <table class="table table-tranx">
                                    <thead>
                                        <tr class="tb-tnx-head">
                                            <th class="tb-tnx-id"><span class="">#</span></th>
                                            <th class="tb-tnx-info">
                                                <span class="tb-tnx-desc d-none d-sm-inline-block">
                                                    <span>Message</span>
                                                </span>
                                                <span class="tb-tnx-date d-md-inline-block d-none">
                                                    <span class="d-md-none">Date</span>
                                                    <span class="d-none d-md-block">
                                                        <span>Date</span>
                                                    </span>
                                                </span>
                                            </th>
                                            <th class="tb-tnx-amount">
                                                <span class="tb-tnx-total">Amount</span>
                                                <span class="tb-tnx-status d-none d-md-inline-block">Status</span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="tb-tnx-item">
                                            <td class="tb-tnx-id">
                                                <a href="#"><span>1</span></a>
                                            </td>
                                            <td class="tb-tnx-info">
                                                <div class="tb-tnx-desc">
                                                    <span class="title">You deposited $40000.00</span>
                                                </div>
                                                <div class="tb-tnx-date">
                                                    <span class="date">19th Dec 2020</span>
                                                </div>
                                            </td>
                                            <td class="tb-tnx-amount">
                                                <div class="tb-tnx-total">
                                                    <span class="amount">$40,000.00</span>
                                                </div>
                                                <div class="tb-tnx-status">
                                                    <span class="badge badge-dot badge-success">Completed</span>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div> --}}
                        <!-- nk-block -->
                        <!-- table -->
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


    {{-- footer --}}

        {{-- footer --}}
        @include('include.c_script')

    <!-- END PAGE CONTAINER-->
</body>

</html>