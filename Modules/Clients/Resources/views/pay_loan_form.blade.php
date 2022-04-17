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
                        @include('layouts.message')
                        <div class="row">
                            <!-- 3rd row Start -->
                            <div class="col-xl-3">
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header with-element text-center">
                                        <h6 class="card-header-title mb-0">Enter Total Amount You are Supposed To Pay</h6>
                                    </div>
                                    <div>
                                        <div class="card-body">
                                            @foreach($pay_loan as $loan_payment)
                                                <form action="/clients/pay-loan/{{$loan_payment->id}}" method="get"> 
                                                        @csrf
                                                    
                                                    <input type="hidden" name="user_id" class="form-control" value="{{auth()->user()->id}}">
                                                        <div class="form-row">
                                                            <div class="form-group col-md-12">
                                                            <label class="form-label">Amount</label>
                                                            <input type="number" name="loan_payments_amount" class="form-control"  placeholder="" required>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group text-center">
                                                        {{--<a href="/clients/my-loan-details" class="btn btn-success">Back</a>--}}
                                                        <button type="submit" class="btn btn-primary">Pay Now</button>
                                                        </div>
                                                        
                                                    </form>
                                                    
                                                @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3">
                               
                                </div>
                            </div>
                            <!-- 3rd row Start -->
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
