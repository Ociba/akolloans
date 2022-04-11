{{--<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
--}}

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
    <link rel="stylesheet" href="assets/css/pages/authentication.css">
</head>

<body>
    <!-- [ Preloader ] Start -->
    <div class="page-loader">
        <div class="bg-primary"></div>
    </div>
    <!-- [ Preloader ] End -->

    <!-- [ Content ] Start -->
    <div class="authentication-wrapper authentication-2 ui-bg-cover ui-bg-overlay-container px-4" style="background-image: url('assets/img/bg/21.jpg');">
        <div class="ui-bg-overlay bg-dark opacity-25"></div>

        <div class="authentication-inner py-5">

            <div class="card">
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

                    <h5 class="text-center text-muted font-weight-normal mb-4">Create an Account</h5>

                    <!-- Form -->
                    <form action="{{ route('register') }}" method="POST">
                         @csrf
                        <div class="form-group">
                            <label class="form-label">Your name</label>
                            <input type="text" id="name" class="form-control" name="name" :value="old('name')" required>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Your email</label>
                            <input id="email" type="email" class="form-control" name="email" :value="old('email')" required >
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Password</label>
                            <input id="password" class="form-control" type="password" name="password" required>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Confirm Password</label>
                            <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required>
                            <div class="clearfix"></div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block mt-4">Sign Up</button>
                        {{--<div class="text-light small mt-4">
                            By clicking "Sign Up", you agree to our
                            <a href="javascript:void(0)">terms of service and privacy policy</a>. We’ll occasionally send you account related emails.
                        </div>
                        --}}
                    </form>
                    <!-- [ Form ] End -->

                </div>
                <div class="card-footer py-3 px-4 px-sm-5">
                    <div class="text-center text-muted">
                        Already have an account?
                        <a href="{{ route('register') }}">Sign In</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- / Content -->

    <!-- Core scripts -->
    @include('layouts.javascript')
</body>
</html>

