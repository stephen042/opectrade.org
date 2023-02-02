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
                                            <h3 class="nk-block-title page-title">All Administrators</h3>
                                            <div class="nk-block-des text-soft">
                                                <p>This is the list of all our administrators.</p>
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
                                                        @if (!$users->isEmpty())
                                                        <table class="table">
                                                            <thead>

                                                                  <tr>
                                                           
                                                                    <th scope="col">Fullname</th>
                                                                    <th scope="col">Username</th>
                                                                    <th scope="col">Email</th>
                                                                    <th scope="col">Country</th>
                                                                    <th scope="col">Phone</th>
                                                                    <th scope="col">Pin</th>
                                                                    
                                                                    <th scope="col">Status</th>
                                                                    <th scope="col">Action</th>
                                                                </tr>

                                                            </thead>
                                                            <tbody>
                                                                @foreach ($users as $key => $user)
                                                                <tr>
                                                                    <th scope="row">{{ ucwords($user->firstname) }} {{ ucwords($user->lastname) }} </th>
                                                                    <td>{{ ucwords($user->username) }}</td>
                                                                    <td>{{ ucwords($user->email) }}</td>
                                                                    <td>{{ ucwords($user->country) }}</td>
                                                                    <td>{{ ucwords($user->phone) }}</td>
                                                                    <td>{{ ucwords($user->pin) }}</td>
    


                                                                    <td>{{ ucwords(config("app.user_status")[$user->status]) }}</td>
                                                                  
                                                                    <td>
                                                                        <a href="{{ route("admin.users.view",["edit-customer-profile",$user->id]) }}"><em class="icon ni ni-edit"></em></a>
                                                                        <a class="delete_data text-danger" href="{{ route("admin.users.view",["delete",$user->id]) }}" data-type="profile" ><em  class="icon ni ni-trash-fill "></em></a>
                                                                        <a href="{{ route("admin.users.view",["view-profile",$user->id]) }}"><em class="icon ni ni-eye-fill"></em></a>
                                                                    </td>
                                                                    <td class="tb-tnx-action">
                                                                      <div class="dropdown">
                                                                          <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                          <div class="dropdown-menu dropdown-menu-right dropdown-menu-xs">
                                                                              <ul class="link-list-plain">
                                                                                  
                                                                                  <li><a data-action="approve" data-type="deposit"  class="" href="{{ route("admin.users.view",["change-customer-password",$user->id]) }}">Password</a></li>
                                                                                  
                                                                                  
                                                                              </ul>
                                                                          </div>
                                                                      </div>
                                                                  </td>
                                                                  <td class="tb-tnx-action">
                                                                    <div class="dropdown">
                                                                        <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-xs">
                                                                            <ul class="link-list-plain">

                                                                                @if ($user->status == 1)
                                                                                <li><a data-action="suspend" data-type="profile"  class="decline_approve" href="{{ route("admin.users.view",["suspend",$user->id]) }}">Suspend</a></li>
                                                                                @else
                                                                                <li><a data-action="activate" data-type="profile"  class="decline_approve" href="{{ route("admin.users.view",["activate",$user->id]) }}">Activate</a></li>
                                                                                @endif

                                                                                @if ($user->role == 1)
                                                                                <li><a data-action=" unmake admin" data-type="profile"  class="decline_approve" href="{{ route("admin.users.view",["unmake-admin",$user->id]) }}">UnMake Admin</a></li>
                                                                                @else
                                                                                <li><a data-action="make admin" data-type="profile"  class="decline_approve" href="{{ route("admin.users.view",["make-admin",$user->id]) }}">Make Admin</a></li>
                                                                                @endif
                                                                                
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                        @else
                                                            <h4 class="text-center">No Current User at the moment</h4>
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