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
        @include('include.tradeview')
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

      <section class="statistic mb-1 faded pt-3">
        <div class="section__content section__content--p30 resize">
            <div class="container-fluid">
                <div class="row mt-2">
                    <div class="col-12 px-1">
                        <h3 class="text-dark col-12 pl-0 head-text pb-4 px-1 bold">MY PARTNERS</h3>
                        <div class="table-responsive m-b-20">
                            <table class="table table-borderless table-data3">
                                <thead style="background-color:#fff; color: #3A3C40;">
                                <tr>
                                    <th style="color: #969AA1; font-size: 14px;">DATE & TIME</th>
                                    <th style="color: #969AA1; font-size: 14px;">NAME</th>
                                    <th style="color: #969AA1; font-size: 14px;">EMAIL</th>
                                    <th style="color: #969AA1; font-size: 14px;">COUNTRY</th>
                                    <th style="color: #969AA1; font-size: 14px;">INSTRUMENT</th>
                                    <th style="color: #969AA1; font-size: 14px;">EARNED</th>
                                    <th style="color: #969AA1; font-size: 14px;">LINE</th>
                                </tr>
                                </thead>
                                <tbody class="tbody bigger">
                                <tr>
                                    <td>2018-09-29 05:57</td>
                                    <td>Mobile</td>
                                    <td>Mobile</td>
                                    <td>Mobile</td>
                                    <td>Mobile</td>
                                    <td>iPhone X</td>
                                    <td class="process">Processed</td>
                                </tr>
                                <tr>
                                    <td>2018-09-29 05:57</td>
                                    <td>Mobile</td>
                                    <td>Mobile</td>
                                    <td>Mobile</td>
                                    <td>Mobile</td>
                                    <td>iPhone X</td>
                                    <td class="process">Processed</td>
                                </tr>
                                <tr>
                                    <td>2018-09-29 05:57</td>
                                    <td>Mobile</td>
                                    <td>Mobile</td>
                                    <td>Mobile</td>
                                    <td>Mobile</td>
                                    <td>iPhone X</td>
                                    <td class="process">Processed</td>
                                </tr>
                                <tr>
                                    <td>2018-09-29 05:57</td>
                                    <td>Mobile</td>
                                    <td>Mobile</td>
                                    <td>Mobile</td>
                                    <td>Mobile</td>
                                    <td>iPhone X</td>
                                    <td class="process">Processed</td>
                                </tr>
                                <tr>
                                    <td>2018-09-29 05:57</td>
                                    <td>Mobile</td>
                                    <td>Mobile</td>
                                    <td>Mobile</td>
                                    <td>Mobile</td>
                                    <td>iPhone X</td>
                                    <td class="process">Processed</td>
                                </tr>
                                <tr>
                                    <td>2018-09-29 05:57</td>
                                    <td>Mobile</td>
                                    <td>Mobile</td>
                                    <td>Mobile</td>
                                    <td>Mobile</td>
                                    <td>iPhone X</td>
                                    <td class="process">Processed</td>
                                </tr>
                                <tr>
                                    <td>2018-09-29 05:57</td>
                                    <td>Mobile</td>
                                    <td>Mobile</td>
                                    <td>Mobile</td>
                                    <td>Mobile</td>
                                    <td>iPhone X</td>
                                    <td class="process">Processed</td>
                                </tr>
                                <tr>
                                    <td>2018-09-29 05:57</td>
                                    <td>Mobile</td>
                                    <td>Mobile</td>
                                    <td>Mobile</td>
                                    <td>Mobile</td>
                                    <td>iPhone X</td>
                                    <td class="process">Processed</td>
                                </tr>
                                </tbody>
                                <div class="overlay-icon">
                                    <span class="zmdi zmdi-folder"></span>
                                    <div class="text-center small-p">Data not found</div>
                                </div>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
