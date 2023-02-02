<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <title>{{ config('app.name') }}</title>
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
                            <div class="nk-block-head">
                                <div class="nk-block-head-sub"><span>Account Balance</span></div>
                                <div class="nk-block-between-md g-4">
                                    <div class="nk-block-head-content">
                                        <h2 class="nk-block-title fw-normal">My Account</h2>
                                        <div class="nk-block-des">
                                            <p>At a glance summary of your account. Have fun!</p>
                                        </div>
                                    </div>
                                    <div class="nk-block-head-content">
                                        <ul class="nk-block-tools gx-3">
                                            <li class="btn-wrap"><a
                                                    href="{{ route('user.deposit.view', ['usd']) }}"
                                                    class="btn btn-icon btn-xl btn-success"><em
                                                        class="icon ni ni-wallet-in"></em></a><span
                                                    class="btn-extext">Deposit</span></li>
                                            <li class="btn-wrap"><a href="{{ route('user.plan.view', ['all']) }}"
                                                    class="btn btn-icon btn-xl btn-dim btn-outline-light"><em
                                                        class="icon ni ni-arrow-from-right"></em></a><span
                                                    class="btn-extext">Reinvest</span></li>
                                            <li class="btn-wrap"><a href="{{ route('user.withdraw.view') }}"
                                                    class="btn btn-icon btn-xl btn-warning"><em
                                                        class="icon ni ni-wallet-out"></em></a><span
                                                    class="btn-extext">Withdraw</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- .nk-block-head -->
                            <div class="nk-block">
                                <div class="card card-bordered is-dark ">
                                    <div class="card-inner">
                                        <div class="nk-wg1 mb-3">
                                            <div class="nk-wg1-group g-2">
                                                <div class="nk-wg1-item mr-xl-4">
                                                    <div class="nk-wg1-title text-light">Dollar Balance / <div
                                                            class="dropdown">
                                                            <a class="text-light" data-offset="0,10"
                                                                href="javascript:void(0)">USD</a>
                                                        </div>
                                                    </div>
                                                    <div class="nk-wg1-amount">
                                                        <div class="amount text-light">
                                                            ${{ number_format($wallet->dolla_balance, 0, '.', ',') }}
                                                        </div>
                                                    </div>
                                                </div><!-- .nk-wg1-item -->
                                                <div class="nk-wg1-item mr-xl-4">
                                                    <div class="nk-wg1-title text-light">Bitcoin Balance / <div
                                                            class="dropdown">
                                                            <a class="text-light" data-offset="0,10"
                                                                href="javascript:void(0)">BTC</a>
                                                        </div>
                                                    </div>
                                                    <div class="nk-wg1-amount">
                                                        <div class="amount text-light">{{ $wallet->bitcoin_balance }}
                                                        </div>
                                                    </div>

                                                </div><!-- .nk-wg1-item -->
                                                <div class="nk-wg1-item mr-xl-4">
                                                    <div class="nk-wg1-title text-light">Usdt Balance / <div
                                                            class="dropdown">
                                                            <a class="text-light" data-offset="0,10"
                                                                href="javascript:void(0)">usdt</a>
                                                        </div>
                                                    </div>
                                                    <div class="nk-wg1-amount">
                                                        <div class="amount text-light">{{ $wallet->usdt_balance }}
                                                        </div>
                                                    </div>
                                                </div><!-- .nk-wg1-item -->
                                                <div class="nk-wg1-item mr-xl-4">
                                                    <div class="nk-wg1-title text-light">Referral Balance / <div
                                                            class="dropdown">
                                                            <a class="text-light" data-offset="0,10"
                                                                href="javascript:void(0)">USD</a>
                                                        </div>
                                                    </div>
                                                    <div class="nk-wg1-amount">
                                                        <div class="amount text-light">
                                                            ${{ number_format($wallet->referral_balance, 0, '.', ',') }}
                                                        </div>
                                                    </div>
                                                </div><!-- .nk-wg1-item -->

                                                <div class="nk-wg1-item ml-lg-auto">
                                                    <div class="nk-wg1-title text-light">DETAILS</div>
                                                    <div class="nk-wg1-group g-2">
                                                        <div class="nk-wg1-sub">
                                                            <div class="sub-text"><span>USD Deposit</span>
                                                                <div class="dot" data-bg="#9cabff"
                                                                    style="background: rgb(156, 171, 255) none repeat scroll 0% 0%;">
                                                                </div>
                                                            </div>
                                                            <div class="lead-text  text-light">
                                                                ${{ number_format($wallet->deposits, 0, '.', ',') }}
                                                            </div>
                                                        </div>

                                                        <div class="nk-wg1-sub">
                                                            <div class="sub-text"><span>USD Withdrawn</span>
                                                                <div class="dot" data-bg="#9cabff"
                                                                    style="background: rgb(156, 171, 255) none repeat scroll 0% 0%;">
                                                                </div>
                                                            </div>
                                                            <div class="lead-text  text-light">
                                                                ${{ number_format($wallet->dolla_withdrawals, 0, '.', ',') }}
                                                            </div>
                                                        </div>

                                                        <div class="nk-wg1-sub">
                                                            <div class="sub-text"><span>BTC Withdrawn</span>
                                                                <div class="dot" data-bg="#9cabff"
                                                                    style="background: rgb(156, 171, 255) none repeat scroll 0% 0%;">
                                                                </div>
                                                            </div>
                                                            <div class="lead-text  text-light">
                                                                {{ $wallet->bitcoin_withdrawals }}</div>
                                                        </div>

                                                        <div class="nk-wg1-sub">
                                                            <div class="sub-text"><span>ETH Withdrawn</span>
                                                                <div class="dot" data-bg="#9cabff"
                                                                    style="background: rgb(156, 171, 255) none repeat scroll 0% 0%;">
                                                                </div>
                                                            </div>
                                                            <div class="lead-text  text-light">
                                                                {{ $wallet->ethereum_withdrawals }}</div>
                                                        </div>

                                                        <div class="nk-wg1-sub">
                                                            <div class="sub-text"><span>USD Invested</span>
                                                                <div class="dot" data-bg="#9cabff"
                                                                    style="background: rgb(156, 171, 255) none repeat scroll 0% 0%;">
                                                                </div>
                                                            </div>
                                                            <div class="lead-text  text-light">
                                                                ${{ number_format($wallet->dolla_invested, 0, '.', ',') }}
                                                            </div>
                                                        </div>

                                                        <div class="nk-wg1-sub">
                                                            <div class="sub-text"><span>BTC Invested</span>
                                                                <div class="dot" data-bg="#9cabff"
                                                                    style="background: rgb(156, 171, 255) none repeat scroll 0% 0%;">
                                                                </div>
                                                            </div>
                                                            <div class="lead-text  text-light">
                                                                {{ $wallet->bitcoin_invested }}</div>
                                                        </div>

                                                        <div class="nk-wg1-sub">
                                                            <div class="sub-text"><span>ETH Invested</span>
                                                                <div class="dot" data-bg="#9cabff"
                                                                    style="background: rgb(156, 171, 255) none repeat scroll 0% 0%;">
                                                                </div>
                                                            </div>
                                                            <div class="lead-text  text-light">
                                                                {{ $wallet->ethereum_invested }}</div>
                                                        </div>

                                                        <div class="nk-wg1-sub">
                                                            <div class="sub-text"><span>USD Earned</span>
                                                                <div class="dot" data-bg="#9cabff"
                                                                    style="background: rgb(156, 171, 255) none repeat scroll 0% 0%;">
                                                                </div>
                                                            </div>
                                                            <div class="lead-text  text-light">
                                                                ${{ number_format($wallet->dolla_earned, 0, '.', ',') }}
                                                            </div>
                                                        </div>

                                                        <div class="nk-wg1-sub">
                                                            <div class="sub-text"><span>BTC Earned</span>
                                                                <div class="dot" data-bg="#9cabff"
                                                                    style="background: rgb(156, 171, 255) none repeat scroll 0% 0%;">
                                                                </div>
                                                            </div>
                                                            <div class="lead-text  text-light">
                                                                {{ $wallet->ethereum_earned }}</div>
                                                        </div>

                                                        <div class="nk-wg1-sub">
                                                            <div class="sub-text"><span>ETH Earned</span>
                                                                <div class="dot" data-bg="#9cabff"
                                                                    style="background: rgb(156, 171, 255) none repeat scroll 0% 0%;">
                                                                </div>
                                                            </div>
                                                            <div class="lead-text  text-light">
                                                                {{ $wallet->ethereum_earned }}</div>
                                                        </div>

                                                    </div>
                                                </div><!-- .nk-wg1-item -->

                                            </div><!-- .nk-wg1-group -->
                                        </div><!-- .nk-wg1 -->

                                    </div><!-- .card-inner -->
                                </div><!-- .card -->

                            </div><!-- .nk-block -->
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
