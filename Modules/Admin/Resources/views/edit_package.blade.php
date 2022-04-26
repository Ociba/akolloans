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
                        <div class="col-xl-2 col-lg-2 col-xs-12 col-xs-12 col-md-12"></div>
                              <!-- customar project  start -->
                              <div class="col-xl-8 col-lg-8 col-xs-12 col-xs-12 col-md-12">
                                 @include('layouts.message')
                                 <div class="card">
                                    <div class="card-body">
                                        @foreach($edit_package as $package)
                                        <form action="/admin/update-package/{{$package->id}}" method="get">
                                            @csrf
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="floating-label" for="package_name">Package Name</label>
                                                            <input type="text" class="form-control" name="package_name" value="{{$package->package_name}}"  id="package_name" data-toggle="tooltip" data-placement="bottom" title="" placeholder="" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group fill">
                                                            <label class="floating-label" for="from">Lowest Amount</label>
                                                            <input type="text" class="form-control" name="from" value="{{$package->from}}" id="from" data-toggle="tooltip" data-placement="bottom" title="" placeholder="" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group fill">
                                                            <label class="floating-label" for="to">Highest Amount</label>
                                                            <input type="text" class="form-control" name="to" value="{{$package->to}}" id="to" data-toggle="tooltip" data-placement="bottom" title="" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group fill">
                                                            <label class="floating-label" for="investor_interest">Investors Interest Rate</label>
                                                            <input type="text" class="form-control" name="investor_interest" value="{{$package->investor_interest}}" id="investor_interest" data-toggle="tooltip" data-placement="bottom" title="" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group fill">
                                                            <label class="floating-label" for="client_interests">Clients Interest Rate</label>
                                                            <input type="text" class="form-control" name="client_interests" value="{{$package->client_interests}}" id="client_interests" data-toggle="tooltip" data-placement="bottom" title="" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 text-center">
                                                        <button type="submit" class="btn btn-primary">Update Package</button>
                                                    </div>
                                                </div>
                                            </form>
                                            @endforeach
                                            </div>
                                    </div>
                              </div>
                              <div class="col-xl-2 col-lg-2 col-xs-12 col-xs-12 col-md-12"></div>
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
