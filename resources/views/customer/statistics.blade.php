<!DOCTYPE html>
<html lang="en">

<head>

    <title>{{ config("app.name") }}</title>
    @include('include.c_css')
</head>

<body class="animsition" style="font-family: 'Open Sans', sans-serif, Verdana;">
<div class="page-wrapper pb-0">
    <!-- MENU SIDEBAR-->
      @include('include.c_sidebar')
    <!-- END MENU SIDEBAR-->

    <!-- PAGE CONTAINER-->
    <div class="page-container2">
        <!-- HEADER DESKTOP-->
        @include('include.c_header')
        <!-- END HEADER DESKTOP-->

        <!-- STATISTIC-->
        <section class="statistic mb-1 mt-2 faded">
          <div class="section__content section__content--p30 resize">
              <div class="container-fluid">
                  <div class="row">
                    <h3 class="text-dark col-12 pl-0 head-text pb-3 px-1" style="font-weight: 500;">YOUR BALANCE</h3>
                      <div class="col-sm-12 col-lg-4 my-2 px-1">
                          <div class="special rounded">
                              <h2 class="text-center text-white color-bg-green">{{ number_format($account->dolla_balance,0,".",",") }}</h2>
                              <div class="container__options bg-white justify-content-center">
                                  <h2 class="color-green">USD</h2>
                              </div>
                          </div>
                      </div>
                      <div class="col-sm-12 col-lg-4 my-2 px-1">
                          <div class="special">
                              <h2 class="color-bg-orange text-center text-white">{{ $account->bitcoin_balance }}</h2>
                              <div class="container__options bg-white justify-content-center">
                                  <h2 class="color-orange">BTC</h2>
                              </div>
                          </div>
                      </div>
                      <div class="col-sm-12 col-lg-4 my-2 px-1">
                          <div class="special">
                              <h2 class="text-center text-white color-bg-purple">{{ $account->ethereum_balance }}</h2>
                              <div class="container__options bg-white justify-content-center">
                                  <h2 class="color-purple">ETH</h2>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>

      <section class="statistic mb-1 faded pt-3" style="margin-bottom: 150px !important;">
        <div class="section__content section__content--p30 resize">
            <div class="container-fluid">
                <div class="row">
                    <h3 class="text-dark col-12 pl-0 text-uppercase head-text pb-3 px-1">Your Statistics</h3>
                    <div class="col-sm-12 my-2 col-lg-4 px-1">
                        <div class="statical rounded">
                            <h2>INVESTED</h2>
                            <div class="items">
                                <span>|</span>
                                <span>USD</span>
                                <span>{{ number_format($account->dolla_invested,0,".",",") }}</span>
                            </div>
                            <div class="items">
                                <span>|</span>
                                <span>BTC</span>
                                <span>{{ $account->bitcoin_invested }}</span>
                            </div>
                            <div class="items">
                                <span>|</span>
                                <span>ETH</span>
                                <span>{{ $account->ethereum_invested }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 my-2 col-lg-4 px-1">
                        <div class="statical rounded">
                            <h2 class="text-uppercase" style="color:#7AA530;">Earned</h2>
                            <div class="items">
                                <span>|</span>
                                <span>USD</span>
                                <span>{{ number_format($account->dolla_earned,0,".",",") }}</span>
                            </div>
                            <div class="items">
                                <span>|</span>
                                <span>BTC</span>
                                <span>{{ $account->bitcoin_earned }}</span>
                            </div>
                            <div class="items">
                                <span>|</span>
                                <span>ETH</span>
                                <span>{{ $account->ethereum_earned }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 my-2 col-lg-4 px-1">
                        <div class="statical rounded">
                            <h2 class="text-uppercase" style="color:#6F6EAA;">Withdrawn</h2>
                            <div class="items">
                                <span>|</span>
                                <span>USD</span>
                                <span>{{ number_format($account->dolla_withdrawals,0,".",",") }}</span>
                            </div>
                            <div class="items">
                                <span>|</span>
                                <span>BTC</span>
                                <span>{{ $account->bitcoin_withdrawals }}</span>
                            </div>
                            <div class="items">
                                <span>|</span>
                                <span>ETH</span>
                                <span>{{ $account->ethereum_withdrawals }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
       <section class="mb-5"></section>
        {{-- footer --}}
         @include('include.c_footer')
        <!-- END PAGE CONTAINER-->
    </div>

</div>




                  {{-- footer --}}
        @include('include.c_script')


        <!-- END PAGE CONTAINER-->


</body>

</html>
<!-- end document-->
