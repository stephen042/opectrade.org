<?php 

?>
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
                                            <h3 class="nk-block-title page-title">View Deposit Proof</h3>
                                            <div class="nk-block-des text-soft">
                                                <p>{{ ucwords($deposit->username) }} Deposit Detail.</p>
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                        <div class="nk-block-head-content">
                                            <div class="toggle-wrap nk-block-tools-toggle">
                                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                                <div class="toggle-expand-content" data-content="pageMenu">
                                                    <ul class="nk-block-tools g-3">

                                                        <li class="nk-block-tools-opt"><a  href="" class="btn btn-primary go_back"><em class="icon ni ni-back-ios"></em><span>Back</span></a></li>
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
                                                        <div class="card-tools text-center">

                                                            @foreach (json_decode($deposit->proof) as $key => $image)
                                                                  {{-- <caption class="text-center">Image {{ $key + 1 }}</caption> --}}
                                                                <img style="margin:3px;" height="300px" src="{{ asset(str_replace("public","storage",$image)) }}"   alt="">
                                                            @endforeach

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