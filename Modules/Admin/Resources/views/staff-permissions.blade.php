<!DOCTYPE html>

<html lang="en" class="default-style layout-fixed layout-navbar-fixed">
<head>
   @include('layouts.title')

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description"
        content="" />
    <meta name="keywords" content="">
    <meta name="author" content="" />
   @include('layouts.css')

</head>

<body>
    <!-- [ Preloader ] Start -->
    <div class="page-loader">
        <div class="bg-primary"></div>
    </div>
    <!-- [ Preloader ] End -->

    <!-- [ Layout wrapper ] Start -->
    <div class="layout-wrapper layout-2">
        <div class="layout-inner">
            <!-- [ Layout sidenav ] Start -->
            @include('layouts.sidebar')
            <!-- [ Layout sidenav ] End -->
            <!-- [ Layout container ] Start -->
            <div class="layout-container">
                <!-- [ Layout navbar ( Header ) ] Start -->
                @include('layouts.navbar')
                <!-- [ Layout navbar ( Header ) ] End -->

                <!-- [ Layout content ] Start -->
                <div class="layout-content">

                    <!-- [ content ] Start -->
                    <div class="container-fluid flex-grow-1 container-p-y">
                        @include('layouts.breadcrumbs')
                        <div class="row">
                              <!-- customar project  start -->
                              <div class="col-xl-12 col-lg-12 col-xs-12 col-xs-12 col-md-12">
                                 @include('layouts.message')
                                 <div class="card">
                                 <div class="card-body">
                                 @foreach($staff as $staf)
                                 <div class="row align-items-center m-l-0">
                                    <div class="col-sm-6">
                                        
                                         <span class="text-info font-weight-bold"> {{$staf->name}}</span>
                                    </div>
                                    <div class="col-sm-6 text-right">
                                        <a href="/admin/add-permission/{{$staf->id}}" class="btn btn-success btn-sm btn-round mb-3"><i class="feather icon-plus"></i> Add Permission (s)</a>
                                    
                                    </div>
                                </div>
                                @endforeach
                                 <div class="table-responsive">
                                    <table id="report-table" class="table table-bordered table-striped mb-0">
                                        <thead>
                                            <tr class="text-cente">
                                                <th>No.</th>
                                                <th>Permissions</th>
                                                <th>Action</th>  
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @if ($get_users_and_permission->currentPage() > 1)
                                            @php($i =  1 + (($get_users_and_permission->currentPage() - 1) * $get_users_and_permission->perPage()))
                                            @else
                                            @php($i = 1)
                                            @endif
                                          @foreach($get_users_and_permission as $i=>$permission)
                                            <tr>
                                                <td>{{$i++ + 1}}</td>
                                                <td hidden>{{$permission->id}}</td>
                                                <td>{{$permission->permission}}</td>
                                                <td>
                                                    <a href="/admin/unassign-permissions/{{$permission->id}}" class="btn btn-info btn-sm"><i class="feather icon-edit"></i>&nbsp;remove prmissions </a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row mt-3">
                                    @if(isset($search_query))
                                        {{ $get_users_and_permission->appends(['name' => $search_query])->links() }}
                                        @else
                                        {{ $get_users_and_permission->links() }}
                                    @endif
                                </div>
                               </div>
                               
                              </div>
                              </div>
                            <!-- customar project  end -->
                        </div>
                    </div>
                    <!-- [ content ] End -->

                    <!-- [ Layout footer ] Start -->
                    @include('layouts.footer')
                    <!-- [ Layout footer ] End -->
                </div>
                <!-- [ Layout content ] Start -->
            </div>
            <!-- [ Layout container ] End -->
        </div>
        <!-- Overlay -->
        <div class="layout-overlay layout-sidenav-toggle"></div>
    </div>
    <!-- [ Layout wrapper] End -->

    <!-- Modal -->
    
    <!-- Core scripts -->
   @include('layouts.javascript')

</body>
</html>
