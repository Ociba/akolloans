<!DOCTYPE html>

<html lang="en" class="default-style layout-fixed layout-navbar-fixed">
<head>
    @include('layouts.title')

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="" />
   @include('layouts.css')
    <!-- Page -->
    <link rel="stylesheet" href="{{ asset('assets/css/pages/authentication.css')}}">
</head>

<body>
    <!-- [ Preloader ] Start -->
    <div class="page-loader">
        <div class="bg-primary"></div>
    </div>
    <!-- [ Preloader ] End -->
    <!-- [ content ] Start -->
    <div class="authentication-wrapper authentication-3">
        <div class="authentication-inner">

            <!-- [ Side container ] Start -->
            <!-- Do not display the container on extra small, small and medium screens -->
            <div class="d-none d-lg-flex col-lg-8 align-items-center ui-bg-cover ui-bg-overlay-container p-2" style="background-image: url('assets/img/bg/akol1.jpg'); height:100%;">
                <div class="ui-bg-overlay bg-dark opacity-50"></div>
                <!-- [ Text ] Start -->
                {{--<div class="w-100 text-white px-5">
                    <h1 class="display-2 font-weight-bolder mb-4">JOIN OUR COMMUNITY</h1>
                    <div class="text-large font-weight-light">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vehicula ex eu gravida faucibus. Suspendisse viverra pharetra purus. Proin fringilla ac lorem at sagittis. Proin tincidunt dui et nunc ultricies dignissim.
                    </div>
                </div>--}}
                <!-- [ Text ] End -->
            </div>
            <!-- [ Side container ] End -->

            <!-- [ Form container ] Start -->
            <div class="d-flex col-lg-4 align-items-center bg-white p-5">
                <!-- Inner container -->
                <!-- Have to add `.d-flex` to control width via `.col-*` classes -->
                <div class="d-flex col-sm-7 col-md-5 col-lg-12 px-0 px-xl-4 mx-auto">
                    <div class="w-100">
                    <x-jet-validation-errors class="mb-4" />

                    @if (session('status'))
                        <div class="mb-4 font-medium text-sm text-green-600">
                            {{ session('status') }}
                        </div>
                    @endif
                        <!-- [ Logo ] Start -->
                        <div class="d-flex justify-content-center align-items-center">
                            <div class="">
                                <div class="w-100 position-relative">
                                    <img src="{{ asset('assets/img/bg/akol2.jpg')}}" alt="Brand Logo" style="width:100%; height:100%" class="img-flui">
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- [ Logo ] End -->

                        <h4 class="text-center text-lighter font-weight-normal mt-5 mb-4">Login to Your Account</h4>

                        <!-- [ Form ] Start -->
                        <form method="POST" action="{{ route('login') }}" class="my-5">
                         @csrf
                            <div class="form-group">
                                <label class="form-label">Email</label>
                                <input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group">
                                <label class="form-label d-flex justify-content-between align-items-end">
                                        <span>Password</span>
                                        @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}" class="d-block small">Forgot password?</a>
                                        @endif  
                                    </label>
                                <input type="password" id="password" class="form-control" name="password" required >
                                <div class="clearfix"></div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center m-0">
                                <label class="custom-control custom-checkbox m-0">
                                        <input id="remember_me" type="checkbox" class="custom-control-input" name="remember">
                                        <span class="custom-control-label">Remember me</span>
                                    </label>
                                <button type="submit" class="btn btn-primary">Sign In</button>
                            </div>
                        </form>
                        <!-- [ Form ] End -->

                        <div class="text-center text-muted">
                            Don't have an account yet?
                            <a href="{{ route('register') }}">Sign Up</a>
                        </div>

                    </div>
                </div>
            </div>
            <!-- [ Form container ] End -->

        </div>
    </div>
    <!-- [ content ] End -->

    <!-- Core scripts -->
    @include('layouts.javascript')

</body>
</html>
