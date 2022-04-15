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
                @include('layouts.investors_sidebar')
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
                            @include('layouts.message')
                            <div class="row">
                                <!-- customar project  start -->
                                <div class="col-xl-12 col-lg-12 col-xs-12 col-xs-12 col-md-12">
                                    <div class="card mb-4">
                                        <div class="card-body">
                                            @foreach($get_package as $package)
                                            <form action="/investors/save-my-package/{{$package->id}}" method="post" enctype="multipart/form-data"> 
                                             @csrf
                                            <input type="hidden" name="package_id" class="form-control" value="{{$package->id}}">
                                            <input type="hidden" name="bought_by" class="form-control" value="{{auth()->user()->id}}">
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label class="form-label">Location</label>
                                                        <select class="custom-select" name="district_id" required>
                                                           <option>Select District</option>
                                                            @foreach($district_id as $disrtict)
                                                            <option value="{{$disrtict->id}}">{{$disrtict->district}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label class="form-label">Amount</label>
                                                        <input type="number" name="amount_deposited" class="form-control" placeholder="Amount" required>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                    <label class="form-label">Period</label>
                                                    <input type="number" name="period" class="form-control" placeholder="eg. 2, 4, 6" required>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                    <label class="form-label">State</label>
                                                       <select class="custom-select" name="state" required>
                                                            <option>Select State</option>
                                                            <option value="weeks">weeks</option>
                                                            <option value="months">months</option>
                                                            <option value="Years">Years</option>
                                                        </select>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                    <label class="form-label">Contact</label>
                                                    <input type="text" name="contact" class="form-control" maxlength="12" placeholder="256*******" required>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                    <label class="form-label">Passport Photo</label>
                                                    <input type="file" name="profile_photo_path" class="form-control" required>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group text-center">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                                
                                            </form>
                                            @endforeach
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