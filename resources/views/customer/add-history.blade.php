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
                            <div class="nk-block-head">
      
                                <div class="nk-block-between-md g-4">
                                    <div class="nk-block-head-content">
                                        <h2 class="nk-block-title fw-normal">My Deposit</h2>
                                        <div class="nk-block-des">
                                            <p>At a glance summary of your deposit history. Enjoy !</p>
                                        </div>
                                    </div>
                                    <div class="nk-block-head-content">
                                        <ul class="nk-block-tools gx-3">
                                            <li class="btn-wrap"><a href="{{ route("user.deposit.view",["usd"]) }}" class="btn btn-icon btn-xl btn-success"><em class="icon ni ni-wallet-in"></em></a><span class="btn-extext">Deposit</span></li>
                                            <li class="btn-wrap"><a href="{{ route("user.plan.view",["all"]) }}" class="btn btn-icon btn-xl btn-dim btn-outline-light"><em class="icon ni ni-arrow-from-right"></em></a><span class="btn-extext">Reinvest</span></li>
                                            <li class="btn-wrap"><a href="{{ route("user.withdraw.view") }}" class="btn btn-icon btn-xl btn-warning"><em class="icon ni ni-wallet-out"></em></a><span class="btn-extext">Withdraw</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- .nk-block-head -->
                            <div class="nk-block">
                                <div class="row g-gs">
                                    <div class="col-md-12">
                                        {{-- table start --}}
                                        <div class="card card-bordered card-preview">
                                            <div class="card-inner">
                                                <div class="table-responsive">
                                                    @if (!$data->isEmpty())
                                                    <h5>Recent Deposit </h5>
                                                    <hr>
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">#</th>
                                                                <th scope="col">Message</th>
                                                                <th scope="col">Currency</th>
                                                                <th scope="col">Amount</th>
                                                                <th scope="col">Type</th>
                                                                <th scope="col">Status</th>
                                                                <th scope="col">Date</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($data as $key => $deposit)
                                                            <tr>
                                                                <th scope="row">{{ $key + 1 }}</th>
                                                                <td>{{ ucwords($deposit->message) }}</td>
                                                                <td>{{ ucwords($deposit->currency) }}</td>
                                                                <td>{{ number_format($deposit->amount,0,".",",") }}</td>
                                                                <td>{{ ucwords($deposit->type) }}</td>
                                                                <td class="{{ strtolower(config("app.tx_status")[$deposit->status]) }}">{{ ucwords(config("app.tx_status")[$deposit->status]) }}</td>
                                                                <td>{{ date("d M,Y",strtotime($deposit->created_at)) }}</td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                    @endif

                                                    @if ($data->isEmpty())
                                                        <h5 class="text-center">No Deposit Record Found</h5>
                                                    @endif
                                                </div>
                                            </div>
                                        </div><!-- .card-preview -->
                                        {{-- table ends --}}
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