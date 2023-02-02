<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    @include('include.a_css')
    <!-- Page Title  -->
    <title>{{ config('app.name') }} Admin</title>
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
                                            <h3 class="nk-block-title page-title">Active Customer Withdrawal</h3>
                                            <div class="nk-block-des text-soft">
                                                <p>This is the list of all active withdrawal of customers.</p>
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="row g-gs">
                                        <div class="col-md-12">
                                            {{-- table start --}}
                                            @if (!$withdrawals->isEmpty())
                                                <div class="card card-bordered card-preview">
                                                    <div class="card-inner">
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>

                                                                        <th scope="col">Fullname</th>
                                                                        <th scope="col">Username</th>
                                                                        <th scope="col">Email</th>
                                                                        <th scope="col">Currency</th>
                                                                        <th scope="col">Amount</th>
                                                                        <th scope="col">Payment</th>
                                                                        <th scope="col">Address</th>
                                                                        <th scope="col">Date</th>
                                                                        <th scope="col">Status</th>
                                                                        <th scope="col">Action</th>

                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach ($withdrawals as $item => $data)

                                                                        <tr>
                                                                            <td>{{ $data->firstname }}
                                                                                {{ $data->lastname }}</td>
                                                                            <td>{{ $data->username }}</td>
                                                                            <td>{{ $data->email }}</td>
                                                                            <td>{{ $data->currency }}</td>
                                                                            <td>{{ $data->currency == 'USD' ? number_format($data->amount, 0, '.', ',') : $data->amount }}
                                                                            </td>
                                                                            <td>{{ $data->withdrawal_payment_method }}
                                                                            </td>
                                                                            <td style="font-size:8px;">
                                                                                {{ $data->withdrawal_address }}</td>
                                                                            <td>{{ date('d M, Y', strtotime($data->created_at)) }}
                                                                            </td>
                                                                            <td>{{ ucwords(config('app.tx_status')[$data->status]) }}
                                                                            </td>
                                                                            <td class="tb-tnx-action">
                                                                                <a title="approve" data-action="approve"
                                                                                    data-type="withdraw"
                                                                                    class="decline_approve"
                                                                                    href="{{ route('admin.withdraw.view', ['approve', $data->id]) }}"><em
                                                                                        class="icon ni ni-check-c"></em></a>

                                                                                <a title="delete" data-action="delete"
                                                                                    class="delete_data text-danger"
                                                                                    href="{{ route('admin.withdraw.view', ['delete', $data->id]) }}"
                                                                                    data-type="withdraw"><em
                                                                                        class="icon ni ni-trash-fill "></em></a>

                                                                                <a title="decline" data-action="decline"
                                                                                    data-type="withdraw"
                                                                                    class="decline_approve"
                                                                                    href="{{ route('admin.withdraw.view', ['decline', $data->id]) }}"><em
                                                                                        class="icon ni ni-cross-fill-c"></em></a>
                                                                            </td>
                                                                        </tr>
                                                                    @endforeach
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            @else
                                                <p class="text-center">No withdrawal request now</p>
                                            @endif

                                            {{-- table ends --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- footer @s -->
                @include('include.a_footer')
                <!-- footer @e -->
            </div>
        </div>
    </div>
    <!-- JavaScript -->
    @include('include.a_scripts')
</body>

</html>
