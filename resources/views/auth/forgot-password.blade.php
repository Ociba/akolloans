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
    <div class="authentication-wrapper authentication-2 px-4">
        <div class="authentication-inner py-5">

            <!-- [ Form ] Start -->
            @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}" class="card">
            @csrf
                <div class="p-4 p-sm-5">
                    <!-- [ Logo ] Start -->
                    <div class="d-flex justify-content-center align-items-center pb-2 mb-4">
                        <div class="ui-w-60">
                            <div class="w-100 position-relative">
                                <img src="assets/img/logo-dark.png" alt="Brand Logo" class="img-fluid">
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <!-- [ Logo ] End -->
                    <h5 class="text-center text-muted font-weight-normal mb-4">Reset Your Password</h5>
                    <hr class="mt-0 mb-4">
                    <p>Enter your email address and we will send you a link to reset your password.</p>
                    <div class="form-group">
                        <input id="email" type="text" class="form-control" type="email" name="email" :value="old('email')" required autofocus  placeholder="Enter your email address" >
                        <div class="clearfix"></div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Send password reset email</button>
                </div>
            </form>
            <!-- [ Form ] End -->

        </div>
    </div>
    <!-- [ content ] End -->

    <!-- Core scripts -->
    @include('layouts.javascript')
</body>
</html>

