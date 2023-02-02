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
                            <div class="nk-block">
                                <div class="row gy-gs">
                                    <div class="nk-content-body">
                                        <div class="nk-content-wrap">
                                            <div class="nk-block-head nk-block-head-lg">
                                                <div class="nk-block-head-sub"><span>Pricing</span></div>
                                                <div class="nk-block-between-md g-4">
                                                    <div class="nk-block-head-content mt-4 mb-1">
                                                        <h3 class="nk-block-title fw-normal text-center">Choose A Suitable Investment Plan</h3>
                                                    </div>
                                                </div>
                                            </div><!-- .nk-block-head -->
                                            <div class="nk-block">
                                              @if (!$plans->isEmpty())
                                              <div class="row g-gs">
                                                @foreach ($plans as $key => $plan)
                                                <div class="col-md-4">
                                                  <div class="price-plan card card-bordered text-center">
                                                      <div class="card-inner">
                                                          <div class="price-plan-media">
                                                              <img src="{{ asset("assets/images/plans/".random_int(1,5).".svg") }}" alt="">
                                                          </div>
                                                          <div class="price-plan-info">
                                                              <h5 class="title">{{ ucwords($plan->name) }}</h5>
                                                          </div>
                                                          <div class="price-plan-amount">
                                      

                                                            @if (ucwords(str_replace(["swap","-"],"",$plan->type)) != "Currency")
                                                            <div class="bill">Type - {{ strtoupper(str_replace(["swap","-"],"",$plan->type)) }}<span></span></div>
                                                            @endif
                                                     
                                                              <div class="bill">Min - {{ ($plan->currency == "USD") ? number_format($plan->min,0,".",",") : $plan->min }} {{ $plan->currency }}<span></span></div>

                                                              <div class="bill">ROI - {{  $plan->roi }}<span></span></div>

                                                              <div class="bill">Max - {{ ($plan->currency == "USD") ? number_format($plan->max,0,".",",") : $plan->max }} {{ $plan->currency }}<span></span></div>

                                                              <div class="bill">Duration - {{ ucwords($plan->duration) }}<span></span></div>
                                                              <div class="bill">Commission - {{ ucwords($plan->commission) }}%<span></span></div>
                                                              <div class="bill">Currency - {{ $plan->currency }}<span></span></div>


                                                            
                                                          </div>
                                                          <div class="price-plan-action">
                                                              <input style="border:2px solid #526484;border-radius:12px;"  class="form-control investment_amount" placeholder="Enter Amount " id="input{{ $key }}"  data-btn="btn{{ $key }}" type="number" name="" placeholder="0.00" >

                                                              <span class="text-danger error_box d-block mt-1 mb-1" id="error{{ $key }}"></span>

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
                                                              class="btn btn-primary p-1  invest_btn" disabled="true"  >
                                                                 Select Plan
                                                              </button>

                                                            
                                                          </div>
                                                      </div>
                                                  </div><!-- .price-item -->
                                              </div><!-- .col -->
                                                @endforeach

                                            </div><!-- .row -->
                                              @else
                                              <div class="row g-gs">
                                                <div class="col-md-12 card">
                                                     <h4 class="text-center">No Investment Plan's at the moment</h4>
                                                </div><!-- .col -->
                                            </div><!-- .row -->
                                              @endif



                                            </div><!-- .nk-block -->
                                            <!-- recent investment -->
                                        </div>
                                        <!-- footer @s -->
                                        <!-- footer @e -->
                                    </div>
                                </div><!-- .row -->
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