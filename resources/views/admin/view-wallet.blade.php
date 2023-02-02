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
                <div class="nk-content nk-content-fluid">
                  <div class="container-xl wide-lg">
                      <div class="nk-content-body">
                          <div class="nk-block-head">
                              <div class="nk-block-head-content">
                                  <div class="nk-block-head-sub"><span>Wallet Info</span></div>
                                  <h2 class="nk-block-title fw-normal">{{ ucwords($account->username)  }} Wallet</h2>
                                  <div class="nk-block-des">

                                  </div>
                              </div>
                          </div><!-- .nk-block-head -->
                          <ul class="nk-nav nav nav-tabs">
                              <li class="nav-item">
                                  <a class="nav-link" href=""></a>
                              </li>

                          </ul><!-- .nk-menu -->
                          <!-- NK-Block @s -->
                          <div class="nk-block">
                              <div class="nk-data data-list">
                                  <div class="data-head">
                                      <h6 class="overline-title">Account  Info  </h6>
                                  </div>
                                  <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                      <div class="data-col">
                                          <span class="data-label">Full Name</span>
                                          <span class="data-value">{{ $account->firstname }} {{ $account->lastname }}</span>
                                      </div>
                                      <div class="data-col data-col-end"></div>
                                  </div><!-- .data-item -->
                                  <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                      <div class="data-col">
                                          <span class="data-label">Username</span>
                                          <span class="data-value">{{ $account->username }}</span>
                                      </div>
                                      <div class="data-col data-col-end"></div>
                                  </div><!-- .data-item -->
                                  <div class="data-item">
                                      <div class="data-col">
                                          <span class="data-label">Email</span>
                                          <span class="data-value">{{ $account->email }}</span>
                                      </div>
                                      <div class="data-col data-col-end"><span class="data-more disable"><em class="icon ni ni-lock-alt"></em></span></div>
                                  </div><!-- .data-item -->


                                  <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                      <div class="data-col">
                                          <span class="data-label">Dolla Balance</span>
                                          <span class="data-value text-soft">{{ $account->dolla_balance }}</span>
                                      </div>
                                      <div class="data-col data-col-end"></div>
                                  </div><!-- .data-item -->

                                  <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                    <div class="data-col">
                                        <span class="data-label">Ethereum Balance</span>
                                        <span class="data-value text-soft">{{ $account->ethereum_balance }}</span>
                                    </div>
                                    <div class="data-col data-col-end"></div>
                                </div><!-- .data-item -->


                                <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                  <div class="data-col">
                                      <span class="data-label">Bitcoin Balance</span>
                                      <span class="data-value text-soft">{{ $account->bitcoin_balance }}</span>
                                  </div>
                                  <div class="data-col data-col-end"></div>
                              </div><!-- .data-item -->


                              <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                <div class="data-col">
                                    <span class="data-label">Referral Balance</span>
                                    <span class="data-value text-soft">{{ $account->referral_balance }}</span>
                                </div>
                                <div class="data-col data-col-end"></div>
                            </div><!-- .data-item -->

                            <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                              <div class="data-col">
                                  <span class="data-label">Dolla Withdrawn</span>
                                  <span class="data-value text-soft">{{ $account->dolla_withdrawals }}</span>
                              </div>
                              <div class="data-col data-col-end"></div>
                          </div><!-- .data-item -->


                          <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                            <div class="data-col">
                                <span class="data-label">Bitcoin Withdrawn</span>
                                <span class="data-value text-soft">{{ $account->bitcoin_withdrawals }}</span>
                            </div>
                            <div class="data-col data-col-end"></div>
                        </div><!-- .data-item -->

                        <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                          <div class="data-col">
                              <span class="data-label">Ethereum Withdrawn</span>
                              <span class="data-value text-soft">{{ $account->ethereum_withdrawals }}</span>
                          </div>
                          <div class="data-col data-col-end"></div>
                      </div><!-- .data-item -->


                      <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                        <div class="data-col">
                            <span class="data-label">Dolla Invested</span>
                            <span class="data-value text-soft">{{ $account->dolla_invested }}</span>
                        </div>
                        <div class="data-col data-col-end"></div>
                    </div><!-- .data-item -->


                    <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                      <div class="data-col">
                          <span class="data-label">Bitcoin Invested</span>
                          <span class="data-value text-soft">{{ $account->bitcoin_invested }}</span>
                      </div>
                      <div class="data-col data-col-end"></div>
                  </div><!-- .data-item -->


                  <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                    <div class="data-col">
                        <span class="data-label">Ethereum Invested</span>
                        <span class="data-value text-soft">{{ $account->ethereum_invested }}</span>
                    </div>
                    <div class="data-col data-col-end"></div>
                </div><!-- .data-item -->

                <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                  <div class="data-col">
                      <span class="data-label">Dolla Earned</span>
                      <span class="data-value text-soft">{{ $account->dolla_earned }}</span>
                  </div>
                  <div class="data-col data-col-end"></div>
              </div><!-- .data-item -->



              <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                <div class="data-col">
                    <span class="data-label">Ethereum Earned</span>
                    <span class="data-value text-soft">{{ $account->ethereum_earned }}</span>
                </div>
                <div class="data-col data-col-end"></div>
            </div><!-- .data-item -->

            <div class="data-item" data-toggle="modal" data-target="#profile-edit">
              <div class="data-col">
                  <span class="data-label">Bitcoin Earned</span>
                  <span class="data-value text-soft">{{ $account->bitcoin_earned }}</span>
              </div>
              <div class="data-col data-col-end"></div>
          </div><!-- .data-item -->


          <div class="data-item" data-toggle="modal" data-target="#profile-edit">
            <div class="data-col">
                <span class="data-label">Total Deposits</span>
                <span class="data-value text-soft">{{ $account->bitcoin_earned }}</span>
            </div>
            <div class="data-col data-col-end"></div>
        </div><!-- .data-item -->


        <div class="data-item" data-toggle="modal" data-target="#profile-edit">
          <div class="data-col">
              <span class="data-label">Perfect Money Address</span>
              <span class="data-value text-soft">{{ $account->perfectmoney_address }}</span>
          </div>
          <div class="data-col data-col-end"></div>
      </div><!-- .data-item -->

      <div class="data-item" data-toggle="modal" data-target="#profile-edit">
        <div class="data-col">
            <span class="data-label">Bitcoin Address</span>
            <span class="data-value text-soft">{{ $account->bitcoin_address }}</span>
        </div>
        <div class="data-col data-col-end"></div>
    </div><!-- .data-item -->


    <div class="data-item" data-toggle="modal" data-target="#profile-edit">
      <div class="data-col">
          <span class="data-label">USDT Address</span>
          <span class="data-value text-soft">{{ $account->usdt_address }}</span>
      </div>
      <div class="data-col data-col-end"></div>
  </div><!-- .data-item -->

  <div class="data-item" data-toggle="modal" data-target="#profile-edit">
    <div class="data-col">
        <span class="data-label">Ethereum Address</span>
        <span class="data-value text-soft">{{ $account->ethereum_address }}</span>
    </div>
    <div class="data-col data-col-end"></div>
</div><!-- .data-item -->

<div class="data-item" data-toggle="modal" data-target="#profile-edit">
  <div class="data-col">
      <span class="data-label">Litcoin Address</span>
      <span class="data-value text-soft">{{ $account->litecoin_address }}</span>
  </div>
  <div class="data-col data-col-end"></div>
</div><!-- .data-item -->







                          </div>
                          <!-- NK-Block @e -->
                          <!-- //  Content End -->
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