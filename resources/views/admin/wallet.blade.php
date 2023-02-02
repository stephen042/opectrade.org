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
                                            <h3 class="nk-block-title page-title">All Customer Wallet</h3>
                                            <div class="nk-block-des text-soft">
                                                <p>This is the list of all customer wallet of customers.</p>
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="row g-gs">
                                        <div class="col-md-12">
                                            {{-- table start --}}
                                            <div class="card card-bordered card-preview">
                                                <div class="card-inner">
                                                    <div class="table-responsive">
                                                        @if (!$accounts->isEmpty())
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">Fullaname</th>
                                                                    <th scope="col">Username</th>
                                                                    <th scope="col">Email</th>
                                                                    <th scope="col">Dollar Balance</th>
                                                                    <th scope="col">Ethereum Balance</th>
                                                                    <th scope="col">Bitcoin Balance</th>
                                                                    <th scope="col">Date</th>
                                                                    <th scope="col">Action</th>
                                                                  </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($accounts as $key => $account)
                                                                <tr>
                                                                    <td>{{ ucwords($account->firstname) }} {{ ucwords($account->lastname) }}</td>
                                                                    <td>{{ ucwords($account->username) }}</td>
                                                                    <td>{{ ucwords($account->email) }}</td>
                                                                    <td>{{ number_format($account->dolla_balance,0,".",",") }}</td>
                                                                    <td>{{ $account->ethereum_balance }}</td>
                                                                    <td>{{ $account->bitcoin_balance }}</td>
                                                                    <td>{{ date("d M,Y",strtotime($account->created_at)) }}</td>
                                                                    <td>
                                                                        <a href="{{ route("admin.wallet.view",["edit",$account->user_id]) }}"><em class="icon ni ni-edit"></em></a>
                                                                        <a href="{{ route("admin.wallet.view",["view",$account->user_id]) }}"><em class="icon ni ni-eye-fill"></em></a>
                                                                    </td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                        @else
                                                            <h4 class="text-center">No Customer Wallet at the moment</h4>
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