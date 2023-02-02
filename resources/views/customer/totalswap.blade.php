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

      <section class="statistic mb-4 pt-4">
        <div class="section__content section__content--p30 resize">
            <div class="container-fluid">
                <div class="row p-3 py-4 bg-white rounded">
                    <div class="col-sm-12 col-md-12 col-lg-7 py-3 pb-md-4 pb-lg-3">
                        <div class="row align-items-center">
                            <div class="col-sm-12 text-center col-md-12 col-lg-3 px-1 my-2">
                                <button class="leads py-1" style="border-radius: 20px; width: 100%;  border: 1px solid #353535; font-size: 12px;">
                                    TOTAL RETURN SWAP
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if (!empty($plans))
    <section class="statistic mb-4 pt-4">
        <div class="section__content section__content--p30 resize">
            <div class="container-fluid">
                <div class="row pb-4 lead-blocks">
                    <h4 class="col-12 mb-3">TOTAL RETURN SWAPS</h4>
                    @foreach ($plans as $key => $plan)

                    <div class="col-sm-12 col-md-12 col-lg-6 my-2 py-2">
                        <div style="display:flex; width: 100%;">
                            <div class="percent ">
                                <?php 
                                  $v1 = str_replace("days","",$plan->duration);
                                  $v1 = intval($v1);
                                  $v1 = 100/$v1;
                                ?>
                                <span class="text-white">{{ round($v1,1) }} %</span>
                            </div>
                            <div class="p-2 linear">
                                <p class="p-1 my-1"
                                   style="font-family:
                               'Open Sans Light',
                               sans-serif; font-size: 15px;">
                                    {{ ucwords(str_replace("-"," ",$plan->type)) }} {{ ($key+1) }} <b>({{ ($plan->currency) }})</b>
                                </p>
                                <p class="my-1 p-1 d-flex rounded">
                                    <span style="flex: 1; ">Min:</span>
                                    <b>{{ ($plan->currency == "USD") ? number_format($plan->min,0,".",",") : $plan->min }} {{ $plan->currency }}</b>
                                </p>
                                <p class="my-1 p-1 d-flex rounded">
                                    <span style="flex: 1; ">Max:</span>
                                    <b>{{ ($plan->currency == "USD") ? number_format($plan->max,0,".",",") : $plan->max }} {{ $plan->currency }}</b>
                                </p>
                                <p class="my-1 p-1 d-flex rounded">
                                    <span style="flex: 1; ">Days:</span>
                                    <b>{{ ucwords($plan->duration) }}</b>
                                </p>
                                <p class="my-1 p-1 d-flex rounded">
                                    <span style="flex: 1; ">Accruals days:</span>
                                    <b>Working days</b>
                                </p>
                                <p class="my-1 p-1 d-flex align-items-center rounded">
                                    <span style="flex: 1; ">Profit $:</span>
                                    <b class="text-white text-center mr-2" style="border-radius: 20px; padding: 2px 12px; background-color: #CACDD3;">
                                        DAILY {{ $plan->duration }} %
                                    </b>
                                    <b class="text-white text-center" style="border-radius: 20px; padding: 2px 12px; background-color: #7AA530;">
                                        TOTAL {{ $plan->commission }}%
                                    </b>
                                </p>

                                <p class="my-1 p-1 pt-3" style="font-size: 14px;">
                                    Enter amount to invest
                                </p>
                                <div class="flex:2">
                                    <span id="error{{ $key }}" class="text-danger"></span>
                                 </div>
                                <div class="mb-2 py-2 d-flex">

                                    
                                    <div style="flex:1;">
                                        
                                        <input id="input{{ $key }}"  data-btn="btn{{ $key }}" type="number" name="" placeholder="0.00" class="rounded form-control py-2 investment_amount">
                                    </div>
                                    <div class="ml-2">
                                        <button 
                                        disabled="true"
                                        data-key="{{ $key }}" 
                                        data-error="error{{ $key }}" 
                                        id="btn{{ $key }}" 
                                        data-currency="{{ $plan->currency }}" 
                                        data-min="{{ ($plan->currency == "USD") ? number_format(round($plan->min,2),0,".","") : $plan->min }}" 
                                        data-max="{{ ($plan->currency == "USD") ? number_format(round($plan->max,2),0,".","") : $plan->max }}" 
                                        data-plan-url="{{ route("user.plan.view",["currency"]) }}"  
                                        data-plan-id="{{ $plan->id }}" 
                                        class="btn btn-primary p-2 px-5 invest_btn" disabled="true"  style="border-radius: 20px; background-color: #8BB9CD; border-color: #8BB9CD;">
                                            Invest
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        
                    @endforeach

                </div>

            </div>
        </div>
    </section>
    @else
     <section>
         <h4 class="text-center">No current plan for total return swap</h4>
     </section>
    @endif


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
