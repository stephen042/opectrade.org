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
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Website Analytics</h3>
                                            <div class="nk-block-des text-soft">
                                                <p>{{ strtoupper(config("app.name")) }}  Appication Dashboard.</p>
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                        <div class="nk-block-head-content">
                                            <div class="toggle-wrap nk-block-tools-toggle">
                                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                                <div class="toggle-expand-content" data-content="pageMenu">
                                                    <ul class="nk-block-tools g-3">

                                                        <li class="nk-block-tools-opt"><a href="{{ route("admin.application.view",["edit-application"]) }}" class="btn btn-primary"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="row g-gs">
                                        <div class="col-md-12 col-lg-12 col-xxl-3">
                                            <div class="card card-bordered h-100">
                                                <div class="card-inner">
                                                    <div class="card-title-group align-start pb-3 g-2">
                                                        <div class="card-title card-title-sm">
                                                            <h6 class="title">Application Information</h6>
                                                            <p>Every single detail of our application information.</p>
                                                        </div>
                                                        <div class="card-tools">
                                                            <em class="card-hint icon ni ni-help" data-toggle="tooltip" data-placement="left" title="" data-original-title="Every single detail of our application information"></em>
                                                        </div>
                                                    </div>
                                                    <div class="analytic-wp">
                                                        <div class="analytic-wp-group g-3">
                                                            <div class="analytic-data analytic-wp-data">
                                                                <div class="analytic-wp-graph">
                                                                    <div class="title">Application Name</div>
                                                                 
                                                                </div>
                                                                <div class="analytic-wp-text">
                                                                    <div class="amount amount-sm">{{ strtoupper(config("app.name")) }}</div>
                                                                    <div class="change up"></div>
                                                                    <div class="subtitle"></div>
                                                                </div>
                                                            </div>
                                                            <div class="analytic-data analytic-wp-data">
                                                                <div class="analytic-wp-graph">
                                                                    <div class="title">Application Email</div>
                                                                 
                                                                </div>
                                                                <div class="analytic-wp-text">
                                                                    <div class="amount amount-sm">{{ config("app.email") }}</div>
                                                                    <div class="change up"></div>
                                                                    <div class="subtitle"></div>
                                                                </div>
                                                            </div>
                                                            <div class="analytic-data analytic-wp-data">
                                                                <div class="analytic-wp-graph">
                                                                    <div class="title">Bitcoin Address</div>
                                                                 
                                                                </div>
                                                                <div class="analytic-wp-text">
                                                                    <div class="amount amount-sm"><input type="text" value="{{ $app->bitcoin_address }}" class="form-control" disabled=""></div>
                                                                    <div class="change up"></div>
                                                                    <div class="subtitle"></div>
                                                                </div>
                                                            </div>

                                                            <div class="analytic-data analytic-wp-data">
                                                                <div class="analytic-wp-graph">
                                                                    <div class="title">Ethereum Address</div>
                                                                 
                                                                </div>
                                                                <div class="analytic-wp-text">
                                                                    <div class="amount amount-sm"><input type="text" value="{{ $app->ethereum_address }}" class="form-control" disabled=""></div>
                                                                    <div class="change up"></div>
                                                                    <div class="subtitle"></div>
                                                                </div>
                                                            </div>

                                                            <div class="analytic-data analytic-wp-data">
                                                                <div class="analytic-wp-graph">
                                                                    <div class="title">Bitcoin Cash Address</div>
                                                                 
                                                                </div>
                                                                <div class="analytic-wp-text">
                                                                    <div class="amount amount-sm"><input type="text" value="{{ $app->btc_cash_address }}" class="form-control" disabled=""></div>
                                                                    <div class="change up"></div>
                                                                    <div class="subtitle"></div>
                                                                </div>
                                                            </div>

                                                            <div class="analytic-data analytic-wp-data">
                                                                <div class="analytic-wp-graph">
                                                                    <div class="title">LiteCoin Address</div>
                                                                 
                                                                </div>
                                                                <div class="analytic-wp-text">
                                                                    <div class="amount amount-sm"><input type="text" value="{{ $app->litecoin_address }}" class="form-control" disabled=""></div>
                                                                    <div class="change up"></div>
                                                                    <div class="subtitle"></div>
                                                                </div>
                                                            </div>
                                                            
                                                                    <div class="analytic-data analytic-wp-data">
                                                                <div class="analytic-wp-graph">
                                                                    <div class="title">BinanceCoin Address</div>
                                                                 
                                                                </div>
                                                                <div class="analytic-wp-text">
                                                                    <div class="amount amount-sm"><input type="text" value="{{ $app->binancecoin_address }}" class="form-control" disabled=""></div>
                                                                    <div class="change up"></div>
                                                                    <div class="subtitle"></div>
                                                                </div>
                                                            </div>
                                                            
                                                                    <div class="analytic-data analytic-wp-data">
                                                                <div class="analytic-wp-graph">
                                                                    <div class="title">DodgeCoin Address</div>
                                                                 
                                                                </div>
                                                                <div class="analytic-wp-text">
                                                                    <div class="amount amount-sm"><input type="text" value="{{ $app->dodgecoin_address }}" class="form-control" disabled=""></div>
                                                                    <div class="change up"></div>
                                                                    <div class="subtitle"></div>
                                                                </div>
                                                            </div>
                                                            
                                                               <div class="analytic-data analytic-wp-data">
                                                                <div class="analytic-wp-graph">
                                                                    <div class="title">USDT Address</div>
                                                                 
                                                                </div>
                                                                <div class="analytic-wp-text">
                                                                    <div class="amount amount-sm"><input type="text" value="{{ $app->usdt_address }}" class="form-control" disabled=""></div>
                                                                    <div class="change up"></div>
                                                                    <div class="subtitle"></div>
                                                                </div>
                                                            </div>




                                                            <div class="analytic-data analytic-wp-data">
                                                                <div class="analytic-wp-graph">
                                                                    <div class="title">Date Last Updated</div>
                                                                 
                                                                </div>
                                                                <div class="analytic-wp-text">
                                                                    <div class="amount amount-sm">{{ date("d,M Y",strtotime($app->updated_at)) }}</div>
                                                                    <div class="change up"></div>
                                                                    <div class="subtitle"></div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- .card -->
                                        </div><!-- .col -->

                                    </div><!-- .row -->
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