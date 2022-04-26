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
                                        @foreach($edit_client as $client)
                                        <form action="/admin/update-client-info/{{$client->id}}" method="get">
                                            @csrf
                                                <div class="row">
                                                    <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            @php 
                                                            $current_district=\DB::table('clients')->join('districts','districts.id','clients.district_id')->where('clients.id',$client->id)->value('district');
                                                            @endphp
                                                            <label class="floating-label" for="district_id">District <span style="color:red;"> {{$current_district}}</span></label>
                                                            <select class="form-control" name="district_id"   id="district_id" required>
                                                             @foreach($get_district as $district)
                                                              <option value="{{$district->id}}">{{$district->district}}</option>
                                                              @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group fill">
                                                            <label class="floating-label" for="phone_number">Phone Number</label>
                                                            <input type="text" class="form-control" name="phone_number" value="{{$client->phone_number}}" id="phone_number"  placeholder="" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group fill">
                                                            <label class="floating-label" for="nin_number">Nin Number</label>
                                                            <input type="text" class="form-control" name="nin_number" value="{{$client->nin_number}}" id="nin_number"  required>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group fill">
                                                            <label class="floating-label" for="tin_number">Tax Identification Number</label>
                                                            <input type="text" class="form-control" name="tin_number" value="{{$client->tin_number}}" id="tin_number"  required>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group fill">
                                                            <label class="floating-label" for="computer_no">Computer Number</label>
                                                            <input type="text" class="form-control" name="computer_no" value="{{$client->computer_no}}" id="computer_no"  required>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group fill">
                                                            <label class="floating-label" for="date_of_birth">Date of Birth</label>
                                                            <input type="text" class="form-control" name="date_of_birth" value="{{$client->date_of_birth}}" id="date_of_birth"  required>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group fill">
                                                            <label class="floating-label" for="employment_status">Employment Status [Salary,Wages,Business]</label>
                                                            <input type="text" class="form-control" name="employment_status" value="{{$client->employment_status}}" id="employment_status"  required>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group fill">
                                                            <label class="floating-label" for="employer">Employer [Government,Private, Self Employed]</label>
                                                            <input type="text" class="form-control" name="employer" value="{{$client->employer}}" id="employer"  required>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group fill">
                                                            <label class="floating-label" for="loan_amount">Loan Amount</label>
                                                            <input type="text" class="form-control" name="loan_amount" value="{{$client->loan_amount}}" id="loan_amount"  required readonly>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group fill">
                                                            <label class="floating-label" for="loan_status">Loan Status [paid,overdue,'active']</label>
                                                            <input type="text" class="form-control" name="loan_status" value="{{$client->loan_status}}" id="loan_status"  required>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 text-center">
                                                        <button type="submit" class="btn btn-primary">Update client information</button>
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
