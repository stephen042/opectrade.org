<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    @include('include.a_css')
    <!-- Page Title  -->
    <title>{{ config('app.name') }}</title>

    <!--Start of Tawk.to Script-->
    {{-- <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/61f3fcb0b9e4e21181bc612c/1fqgh65mk';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script> --}}
    <!--End of Tawk.to Script-->
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
                                            <h3 class="nk-block-title page-title">Overview</h3>
                                            <div class="nk-block-des text-soft">
                                                <p>Welcome to
                                                    {{ ucwords(config('app.name')) }} Administator Dashboard.</p>
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="row g-gs">
                                        <div class="col-xxl-6">
                                            <div class="row g-gs">
                                                <div class="col-lg-12 col-xxl-12">
                                                    <div class="row g-gs">

                                                        <div class="col-sm-6 col-lg-4 col-xxl-6">
                                                            <div class="card card-bordered">
                                                                <div class="card-inner">
                                                                    <div class="card-title-group align-start mb-2">
                                                                        <div class="card-title">
                                                                            <h6 class="title">App USD Balance
                                                                            </h6>
                                                                        </div>
                                                                        <div class="card-tools">
                                                                            <em class="card-hint icon ni ni-help-fill"
                                                                                data-toggle="tooltip"
                                                                                data-placement="left" title=""
                                                                                data-original-title="Current balance of all the customers USD account"></em>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="align-end flex-sm-wrap g-4 flex-md-nowrap">
                                                                        <div class="nk-sale-data">
                                                                            <span
                                                                                class="amount">{{ number_format($account->total_dolla_balance, 0, '.', ',') }}</span>
                                                                            <span class="sub-title ">Current balance
                                                                                of all the customers USD account</span>
                                                                        </div>
                                                                        <div class="nk-sales-ck">
                                                                            <canvas class="sales-bar-chart"
                                                                                id="activeSubscription"></canvas>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .card -->
                                                        </div><!-- .col -->

                                                        <div class="col-sm-6 col-lg-4 col-xxl-6">
                                                            <div class="card card-bordered">
                                                                <div class="card-inner">
                                                                    <div class="card-title-group align-start mb-2">
                                                                        <div class="card-title">
                                                                            <h6 class="title">App BTC Balance
                                                                            </h6>
                                                                        </div>
                                                                        <div class="card-tools">
                                                                            <em class="card-hint icon ni ni-help-fill"
                                                                                data-toggle="tooltip"
                                                                                data-placement="left" title=""
                                                                                data-original-title="Current balance of all the customer's bitcoin account"></em>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="align-end flex-sm-wrap g-4 flex-md-nowrap">
                                                                        <div class="nk-sale-data">
                                                                            <span
                                                                                class="amount">{{ $account->total_bitcoin_balance }}</span>
                                                                            <span class="sub-title ">Balance of all
                                                                                the customer's bitcoin account</span>
                                                                        </div>
                                                                        <div class="nk-sales-ck">
                                                                            <canvas class="sales-bar-chart"
                                                                                id="activeSubscription"></canvas>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .card -->
                                                        </div><!-- .col -->

                                                        <div class="col-sm-6 col-lg-4 col-xxl-6">
                                                            <div class="card card-bordered">
                                                                <div class="card-inner">
                                                                    <div class="card-title-group align-start mb-2">
                                                                        <div class="card-title">
                                                                            <h6 class="title">App ETH Balance
                                                                            </h6>
                                                                        </div>
                                                                        <div class="card-tools">
                                                                            <em class="card-hint icon ni ni-help-fill"
                                                                                data-toggle="tooltip"
                                                                                data-placement="left" title=""
                                                                                data-original-title="Current balance of all the customer's ethereum account"></em>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="align-end flex-sm-wrap g-4 flex-md-nowrap">
                                                                        <div class="nk-sale-data">
                                                                            <span
                                                                                class="amount">{{ $account->total_ethereum_balance }}</span>
                                                                            <span class="sub-title ">Balance of all
                                                                                the customer's ethereum account</span>
                                                                        </div>
                                                                        <div class="nk-sales-ck">
                                                                            <canvas class="sales-bar-chart"
                                                                                id="activeSubscription"></canvas>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .card -->
                                                        </div><!-- .col -->

                                                        <div class="col-sm-6 col-lg-4 col-xxl-6">
                                                            <div class="card card-bordered">
                                                                <div class="card-inner">
                                                                    <div class="card-title-group align-start mb-2">
                                                                        <div class="card-title">
                                                                            <h6 class="title">Total Deposits
                                                                            </h6>
                                                                        </div>
                                                                        <div class="card-tools">
                                                                            <em class="card-hint icon ni ni-help-fill"
                                                                                data-toggle="tooltip"
                                                                                data-placement="left" title=""
                                                                                data-original-title="Total Amount Deposited Into the App"></em>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="align-end flex-sm-wrap g-4 flex-md-nowrap">
                                                                        <div class="nk-sale-data">
                                                                            <span
                                                                                class="amount">${{ number_format($account->total_deposits, 0, '.', ',') }}</span>
                                                                            <span class="sub-title ">Total Amount
                                                                                Deposited Into the App</span>
                                                                        </div>
                                                                        <div class="nk-sales-ck">
                                                                            <canvas class="sales-bar-chart"
                                                                                id="activeSubscription"></canvas>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .card -->
                                                        </div><!-- .col -->

                                                        <div class="col-sm-6 col-lg-4 col-xxl-6">
                                                            <div class="card card-bordered">
                                                                <div class="card-inner">
                                                                    <div class="card-title-group align-start mb-2">
                                                                        <div class="card-title">
                                                                            <h6 class="title">USD Paid Out</h6>
                                                                        </div>
                                                                        <div class="card-tools">
                                                                            <em class="card-hint icon ni ni-help-fill"
                                                                                data-toggle="tooltip"
                                                                                data-placement="left" title=""
                                                                                data-original-title="Total amount of money paid out to customer's in dolla"></em>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="align-end flex-sm-wrap g-4 flex-md-nowrap">
                                                                        <div class="nk-sale-data">
                                                                            <span
                                                                                class="amount">${{ number_format($account->total_dolla_withdrawals, 0, '.', ',') }}</span>
                                                                            <span class="sub-title ">Total money
                                                                                paid out to customer's in dolla</span>
                                                                        </div>
                                                                        <div class="nk-sales-ck">
                                                                            <canvas class="sales-bar-chart"
                                                                                id="activeSubscription"></canvas>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .card -->
                                                        </div><!-- .col -->

                                                        <div class="col-sm-6 col-lg-4 col-xxl-6">
                                                            <div class="card card-bordered">
                                                                <div class="card-inner">
                                                                    <div class="card-title-group align-start mb-2">
                                                                        <div class="card-title">
                                                                            <h6 class="title">BTC Paid Out</h6>
                                                                        </div>
                                                                        <div class="card-tools">
                                                                            <em class="card-hint icon ni ni-help-fill"
                                                                                data-toggle="tooltip"
                                                                                data-placement="left" title=""
                                                                                data-original-title="Total  paid out to customer's from their BTC Account"></em>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="align-end flex-sm-wrap g-4 flex-md-nowrap">
                                                                        <div class="nk-sale-data">
                                                                            <span
                                                                                class="amount">{{ $account->total_bitcoin_withdrawals }}</span>
                                                                            <span class="sub-title ">Total BTC paid
                                                                                out to customer's</span>
                                                                        </div>
                                                                        <div class="nk-sales-ck">
                                                                            <canvas class="sales-bar-chart"
                                                                                id="activeSubscription"></canvas>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .card -->
                                                        </div><!-- .col -->

                                                        <div class="col-sm-6 col-lg-4 col-xxl-6">
                                                            <div class="card card-bordered">
                                                                <div class="card-inner">
                                                                    <div class="card-title-group align-start mb-2">
                                                                        <div class="card-title">
                                                                            <h6 class="title">ETH Paid Out
                                                                            </h6>
                                                                        </div>
                                                                        <div class="card-tools">
                                                                            <em class="card-hint icon ni ni-help-fill"
                                                                                data-toggle="tooltip"
                                                                                data-placement="left" title=""
                                                                                data-original-title="Total Ethereum paid out to customer's"></em>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="align-end flex-sm-wrap g-4 flex-md-nowrap">
                                                                        <div class="nk-sale-data">
                                                                            <span
                                                                                class="amount">{{ $account->total_ethereum_withdrawals }}</span>
                                                                            <span class="sub-title ">Total ethereum
                                                                                paid out to customer's</span>
                                                                        </div>
                                                                        <div class="nk-sales-ck">
                                                                            <canvas class="sales-bar-chart"
                                                                                id="activeSubscription"></canvas>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .card -->
                                                        </div><!-- .col -->

                                                        <div class="col-sm-6 col-lg-4 col-xxl-6">
                                                            <div class="card card-bordered">
                                                                <div class="card-inner">
                                                                    <div class="card-title-group align-start mb-2">
                                                                        <div class="card-title">
                                                                            <h6 class="title">Our Customer's
                                                                            </h6>
                                                                        </div>
                                                                        <div class="card-tools">
                                                                            <em class="card-hint icon ni ni-help-fill"
                                                                                data-toggle="tooltip"
                                                                                data-placement="left" title=""
                                                                                data-original-title="Number of Customers using our App"></em>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="align-end flex-sm-wrap g-4 flex-md-nowrap">
                                                                        <div class="nk-sale-data">
                                                                            <span
                                                                                class="amount">{{ $customer->total_customers }}</span>
                                                                            <span class="sub-title ">Number of
                                                                                Customers using our App</span>
                                                                        </div>
                                                                        <div class="nk-sales-ck">
                                                                            <canvas class="sales-bar-chart"
                                                                                id="activeSubscription"></canvas>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .card -->
                                                        </div><!-- .col -->
                                                        <div class="col-sm-6 col-lg-4 col-xxl-6">
                                                            <div class="card card-bordered">
                                                                <div class="card-inner">
                                                                    <div class="card-title-group align-start mb-2">
                                                                        <div class="card-title">
                                                                            <h6 class="title">Administrators
                                                                            </h6>
                                                                        </div>
                                                                        <div class="card-tools">
                                                                            <em class="card-hint icon ni ni-help-fill"
                                                                                data-toggle="tooltip"
                                                                                data-placement="left" title=""
                                                                                data-original-title="Total administrators in your application"></em>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="align-end flex-sm-wrap g-4 flex-md-nowrap">
                                                                        <div class="nk-sale-data">
                                                                            <span
                                                                                class="amount">{{ $admin->total_admins }}</span>
                                                                            <span class="sub-title ">Total
                                                                                administrators in your
                                                                                application</span>
                                                                        </div>
                                                                        <div class="nk-sales-ck">
                                                                            <canvas class="sales-bar-chart"
                                                                                id="activeSubscription"></canvas>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .card -->
                                                        </div><!-- .col -->
                                                        <div class="col-sm-6 col-lg-4 col-xxl-6">
                                                            <div class="card card-bordered">
                                                                <div class="card-inner">
                                                                    <div class="card-title-group align-start mb-2">
                                                                        <div class="card-title">
                                                                            <h6 class="title">Plans</h6>
                                                                        </div>
                                                                        <div class="card-tools">
                                                                            <em class="card-hint icon ni ni-help-fill"
                                                                                data-toggle="tooltip"
                                                                                data-placement="left" title=""
                                                                                data-original-title="Number of active investment plans in your app"></em>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="align-end flex-sm-wrap g-4 flex-md-nowrap">
                                                                        <div class="nk-sale-data">
                                                                            <span
                                                                                class="amount">{{ $plan->total_plans }}</span>
                                                                            <span class="sub-title ">Number of
                                                                                active investment plans in your
                                                                                app</span>
                                                                        </div>
                                                                        <div class="nk-sales-ck">
                                                                            <canvas class="sales-bar-chart"
                                                                                id="activeSubscription"></canvas>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .card -->
                                                        </div><!-- .col -->
                                                        <div class="col-sm-6 col-lg-4 col-xxl-6">
                                                            <div class="card card-bordered">
                                                                <div class="card-inner">
                                                                    <div class="card-title-group align-start mb-2">
                                                                        <div class="card-title">
                                                                            <h6 class="title">Active Deposits
                                                                            </h6>
                                                                        </div>
                                                                        <div class="card-tools">
                                                                            <em class="card-hint icon ni ni-help-fill"
                                                                                data-toggle="tooltip"
                                                                                data-placement="left" title=""
                                                                                data-original-title="Deposits awaiting approval by admin"></em>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="align-end flex-sm-wrap g-4 flex-md-nowrap">
                                                                        <div class="nk-sale-data">
                                                                            <span
                                                                                class="amount">{{ $deposit->total_deposits }}</span>
                                                                            <span class="sub-title ">Deposits
                                                                                awaiting approval by admin</span>
                                                                        </div>
                                                                        <div class="nk-sales-ck">
                                                                            <canvas class="sales-bar-chart"
                                                                                id="activeSubscription"></canvas>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .card -->
                                                        </div><!-- .col -->
                                                        <div class="col-sm-6 col-lg-4 col-xxl-6">
                                                            <div class="card card-bordered">
                                                                <div class="card-inner">
                                                                    <div class="card-title-group align-start mb-2">
                                                                        <div class="card-title">
                                                                            <h6 class="title">Active
                                                                                Withdrawals</h6>
                                                                        </div>
                                                                        <div class="card-tools">
                                                                            <em class="card-hint icon ni ni-help-fill"
                                                                                data-toggle="tooltip"
                                                                                data-placement="left" title=""
                                                                                data-original-title="Withdrawals awaiting approval by admin"></em>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="align-end flex-sm-wrap g-4 flex-md-nowrap">
                                                                        <div class="nk-sale-data">
                                                                            <span
                                                                                class="amount">{{ $withdraw->total_withdrawal }}</span>
                                                                            <span class="sub-title ">Withdrawals
                                                                                awaiting approval by admin</span>
                                                                        </div>
                                                                        <div class="nk-sales-ck">
                                                                            <canvas class="sales-bar-chart"
                                                                                id="activeSubscription"></canvas>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .card -->
                                                        </div><!-- .col -->
                                                        <div class="col-sm-6 col-lg-4 col-xxl-6">
                                                            <div class="card card-bordered">
                                                                <div class="card-inner">
                                                                    <div class="card-title-group align-start mb-2">
                                                                        <div class="card-title">
                                                                            <h6 class="title">Active
                                                                                Investments</h6>
                                                                        </div>
                                                                        <div class="card-tools">
                                                                            <em class="card-hint icon ni ni-help-fill"
                                                                                data-toggle="tooltip"
                                                                                data-placement="left" title=""
                                                                                data-original-title="All the investments that are currently active"></em>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="align-end flex-sm-wrap g-4 flex-md-nowrap">
                                                                        <div class="nk-sale-data">
                                                                            <span
                                                                                class="amount">{{ $investment->total_investment }}</span>
                                                                            <span class="sub-title ">All the
                                                                                investments that are currently
                                                                                active</span>
                                                                        </div>
                                                                        <div class="nk-sales-ck">
                                                                            <canvas class="sales-bar-chart"
                                                                                id="activeSubscription"></canvas>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .card -->
                                                        </div><!-- .col -->
                                                    </div><!-- .row -->
                                                </div><!-- .col -->
                                            </div><!-- .row -->
                                        </div><!-- .col -->

                                        @if (!$activities->isEmpty())

                                            <div class="col-md-6 col-xxl-4">
                                                <div class="card card-bordered card-full">
                                                    <div class="card-inner border-bottom">
                                                        <div class="card-title-group">
                                                            <div class="card-title">
                                                                <h6 class="title">Recent Activities</h6>
                                                            </div>
                                                            <div class="card-tools">
                                                                <ul class="card-tools-nav">
                                                                    {{-- <li><a href="#"><span>View All</span></a></li> --}}
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul class="nk-activity">
                                                        @foreach ($activites as $key => $activity)
                                                            <li class="nk-activity-item">
                                                                <div class="nk-activity-media user-avatar bg-pink">SO
                                                                </div>
                                                                <div class="nk-activity-data">
                                                                    <div class="label">
                                                                        {{ ucwords($activity->message) }}</div>
                                                                    <span
                                                                        class="time">{{ date('d M , Y', strtotime($activity->created_at)) }}</span>
                                                                </div>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div><!-- .card -->
                                            </div><!-- .col -->

                                        @endif

                                        @if (!$newCustomers->isEmpty())
                                            <div class="col-md-6 col-xxl-4">
                                                <div class="card card-bordered card-full">
                                                    <div class="card-inner-group">
                                                        <div class="card-inner">
                                                            <div class="card-title-group">
                                                                <div class="card-title">
                                                                    <h6 class="title">New Users</h6>
                                                                </div>
                                                                <div class="card-tools">
                                                                    <a href="{{ route('admin.users.view', ['customer']) }}"
                                                                        class="link">View All</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @foreach ($newCustomers as $key => $customer)
                                                            <div class="card-inner card-inner-md">
                                                                <div class="user-card">
                                                                    <div class="user-avatar bg-primary-dim">
                                                                        <span>{{ strtoupper(substr($customer->username, 0, 2)) }}</span>
                                                                    </div>
                                                                    <div class="user-info">
                                                                        <span
                                                                            class="lead-text">{{ ucwords($customer->username) }}</span>
                                                                        <span
                                                                            class="sub-text">{{ ucwords($customer->email) }}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach

                                                    </div>
                                                </div><!-- .card -->
                                            </div><!-- .col -->
                                        @endif

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
