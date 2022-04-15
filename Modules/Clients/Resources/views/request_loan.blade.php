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
            @include('layouts.borrowers_sidebar')
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
                              <div class="card">
                                <div class="card-body">
                                <form action="/clients/send-loan-request" method="post" enctype="multipart/form-data"> 
                                            @csrf
                                        <input type="hidden" name="package_id" class="form-control" value="{{request()->package_id}}">
                                        <input type="hidden" name="user_id" class="form-control" value="{{auth()->user()->id}}">
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label class="form-label">Date of Birth</label>
                                                    <input type="date" name="date_of_birth" class="form-control" placeholder="" required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="form-label">Phone Number</label>
                                                    <input type="text" name="phone_number" class="form-control" maxlength="10" placeholder="eg 07*******" required>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                <label class="form-label">National ID Number</label>
                                                    <input type="text" name="nin_number" class="form-control" maxlength="14" placeholder="" required>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                <label class="form-label">Tax Identification Number</label>
                                                    <input type="text" name="tin_number" class="form-control" maxlength="14" placeholder="" required>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                <label class="form-label">Computer Number</label>
                                                <input type="text" name="computer_no" class="form-control" maxlength="12" placeholder="" required>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                <label class="form-label">Earning Type</label>
                                                    <select class="custom-select" name="employment_status" required>
                                                        <option>Select Type</option>
                                                        <option value="Salary">Salary</option>
                                                        <option value="Business">Business</option>
                                                        <option value="Wage">Wage</option>
                                                    </select>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                <label class="form-label">Employer</label>
                                                    <select class="custom-select" name="employer" required>
                                                        <option>Select Employer</option>
                                                        <option value="Government">Government</option>
                                                        <option value="Private">Private</option>
                                                        <option value="Self Employed">Self Employed</option>
                                                    </select>
                                                    <div class="clearfix"></div>
                                                </div>
                                                
                                                <div class="form-group col-md-6">
                                                    <label class="form-label">District</label>
                                                    <select class="custom-select" name="district_id" required>
                                                        <option>Select District</option>
                                                        @foreach($get_client_district as $disrtict)
                                                        <option value="{{$disrtict->id}}">{{$disrtict->district}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                <label class="form-label">Loan Amount</label>
                                                <input type="number" name="loan_amount" class="form-control"  placeholder="" required>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                <label class="form-label">Passport Photo</label>
                                                <input type="file" name="profile_photo_path" class="form-control" required>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                            <div class="form-group text-center">
                                            <button type="submit" class="btn btn-primary">Send Request</button>
                                            </div>
                                            
                                        </form>
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
