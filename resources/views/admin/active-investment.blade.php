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
                                            <h3 class="nk-block-title page-title">Active Customer Investments</h3>
                                            <div class="nk-block-des text-soft">
                                                <p>This is the list of all active investments of customers.</p>
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
                                                        @if (!$investments->isEmpty())
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                
                                                                    <th scope="col">Fullname/Username/Email</th>
                                                                    <th scope="col">Currency</th>
                                                                    <th scope="col">Amount</th>
                                                                    <th scope="col">Curreny Amount</th>
                                                                    <th scope="col">Total</th>
                                                                    <th scope="col">Daily</th>
                                                                    <th scope="col">Start/End Date</th>
                                                                   
                                                                    <th scope="col">Duration</th>
                                                                    <th scope="col">Commission</th>
                                                                    <th scope="col">Status</th>
                                                                    <th scope="col">Last Update</th>
                                                                    <th scope="col">Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($investments as $key => $investment)
                                                                <tr>
                                                                    <th scope="row">{{ ucwords($investment->firstname) }} {{ ucwords($investment->lastname) }} / {{ ucwords($investment->username) }} / {{ ucwords($investment->email) }}</th>
                                                                    <td>{{ ucwords($investment->currency) }}</td>
                                                                    <td>{{ ($investment->currency == "USD") ? number_format($investment->amount,0,".",",") : $investment->amount }}</td>
                                                                    <td>{{ ($investment->currency == "USD") ? number_format($investment->growth_amount,0,".",",") : $investment->growth_amount }}</td>
                                                                    <?php
                                                                      $amount = $investment->amount;
                                                                      $commission = ($amount * $investment->percent_commission)/100;
                                                                      $total = $amount + $commission;
                                                                      $daily = $commission/preg_replace('~\D~', '', $investment->duration);
                                                                    ?>
                                                                    <td>{{ ($investment->currency == "USD") ? number_format($total,0,".",",") : $total }}</td>
                                                                    <td>{{ ($investment->currency == "USD") ? number_format($daily,0,".",",") : $daily }}</td>
                                                                    <td>{{ date("d M,Y",strtotime($investment->created_at)) }} <b class="text-danger">=></b>  {{ date("d M,Y",strtotime($investment->close_date)) }}</td>
                                                                    <td>{{ ucwords($investment->duration) }}</td>
                                                                    <td>{{ ucwords($investment->percent_commission) }}%</td>

                                                                    <td>{{ ucwords(config("app.tx_status")[$investment->status]) }}</td>
                                                                    <td>{{ date("d M,Y",strtotime($investment->updated_at)) }}</td>
                                                                    <td>
                                                                        <a href="{{ route("admin.investment.view",["edit",$investment->id]) }}"><em class="icon ni ni-edit"></em></a>
                                                                        <a class="delete_data text-danger" href="{{ route("admin.investment.view",["delete",$investment->id]) }}" data-type="investment" ><em  class="icon ni ni-trash-fill "></em></a>
                                                                        {{-- <a href="{{ route("admin.investment.view",["view",$investment->id]) }}"><em class="icon ni ni-eye-fill"></em></a> --}}
                                                                    </td>
                                                                    <td class="tb-tnx-action">
                                                                      <div class="dropdown">
                                                                          <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                          <div class="dropdown-menu dropdown-menu-right dropdown-menu-xs">
                                                                              <ul class="link-list-plain">
                                                                                  
                                                                                  <li><a data-action="approve" data-type="investment"  class="decline_approve" href="{{ route("admin.investment.view",["complete",$investment->id]) }}">Complete</a></li>
                                                                                  <li><a data-action="update today accural" data-type="investment"  class="decline_approve" href="{{ route("admin.investment.view",["today",$investment->id]) }}">Update Today Accural</a></li>
                                                                                  
                                                                              </ul>
                                                                          </div>
                                                                      </div>
                                                                  </td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                        @else
                                                            <h4 class="text-center">No Active Investment at the moment</h4>
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