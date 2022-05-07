{{--<!DOCTYPE html>

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
    <div class="authentication-wrapper authentication-2 ui-bg-cover ui-bg-overlay-container px-4" style="background-image: url('assets/img/bg/akol1.jpg');">
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
                        <div class="text-light small mt-4">
                            By clicking "Sign Up", you agree to our
                            <a href="javascript:void(0)">terms of service and privacy policy</a>. We’ll occasionally send you account related emails.
                        </div>
                        
                    </form>
                    <!-- [ Form ] End -->

                </div>
                <div class="card-footer py-3 px-4 px-sm-5">
                    <div class="text-center text-muted">
                        Already have an account?
                        <a href="{{ route('login') }}">Sign In</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- / Content -->

    <!-- Core scripts -->
    <script src="{{ asset('assets/js/pace.js')}}"></script>
    <script src="{{ asset('assets/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ asset('assets/libs/popper/popper.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap.js')}}"></script>
    <script src="{{ asset('assets/js/sidenav.js')}}"></script>
    <script src="{{ asset('assets/js/layout-helpers.js')}}"></script>
    <script src="{{ asset('assets/js/material-ripple.js')}}"></script>

    <!-- Libs -->
    <script src="{{ asset('assets/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{ asset('assets/libs/eve/eve.js')}}"></script>
    <script src="{{ asset('assets/libs/chart-am4/core.js')}}"></script>
    <script src="{{ asset('assets/libs/chart-am4/charts.js')}}"></script>
    <script src="{{ asset('assets/libs/chart-am4/animated.js')}}"></script>

    <!-- Demo -->
    <script src="{{ asset('assets/js/analytics.js')}}"></script>
</body>
</html>--}}


<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('frontlayouts.css')
</head>
<body>
<header class="header_four">
<!-- Preloader -->
@include('frontlayouts.preloader')  
    <div class="header_top">
       @include('frontlayouts.top-header')
    </div>

    {{--<div class="edu_nav">
        @include('frontlayouts.menu')
    </div>
    --}}


    <!--==================
        Slider
    ===================-->
    <div class="rev_slider_wrapper" style="margin-top: 50px;">
        @include('frontlayouts.slider')
        <!-- END SLIDER CONTAINER -->
    </div><!-- END SLIDER CONTAINER WRAPPER -->
</header><!--  End header section-->




<section class="login_signup_option">
    @include('frontlayouts.login-signup')
</section>  <!-- End Login Signup Option -->





<section class="unlimited_possibilities">
  @include('frontlayouts.about')
</section><!-- End Unlimited Possibilities -->


{{--
<section class="learn_shep">
   @include('frontlayouts.steps')
</section><!-- End Larnign Step -->
--}}


<section class="popular_courses" id="popular_courses_2">
   @include('frontlayouts.services')   
</section> <!-- ./ End Courses Area section -->


<section class="register_area">
    @include('frontlayouts.counts')
</section><!-- ./ End Register Area section -->



<section class="our_instructors">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="sub_title">
                    <h2>Meet Our Happy Clients</h2>
                    <p>Lorem ipsum dolor sit amet mollis felis dapibus arcu donec viverra. Pede phasellus eget. Etiam maecenas vel vici quis dictum rutrum nec nisi et.</p>  
                </div><!-- ends: .section-header -->
            </div>
            <div class="single-wrappe col-12 col-sm-6 col-md-4 col-lg-4">
                <div class="team-single-item">
                    <figure>
                        <div class="member-img">
                            <div class="teachars_pro">
                                <img src="{{ asset('front/images/team/team_1.jpg')}}" alt="member img" class="img-fluid">
                            </div>
                        </div>
                        <figcaption>
                            <div class="member-name">
                                <h4><a href="#" title="">Jonson Park</a></h4>
                                <span>Professor</span>
                            </div>                            
                        </figcaption>
                    </figure>
                </div>
            </div>
            
            <div class="single-wrapper col-12 col-sm-6 col-md-4 col-lg-4">
                <div class="team-single-item">
                    <figure>
                        <div class="member-img">
                            <div class="teachars_pro">
                                <img src="{{ asset('front/images/team/team_2.jpg')}}" alt="member img" class="img-fluid">
                            </div>
                        </div>
                        <figcaption>
                            <div class="member-name">
                                <h4><a href="#" title="">Teymoni</a></h4>
                                <span>Lecturer</span>
                            </div>                            
                        </figcaption>
                    </figure>
                </div>
            </div>
            
            <div class="single-wrapper  col-12 col-sm-6 col-md-4 col-lg-4">
                <div class="team-single-item ">
                    <figure>
                        <div class="member-img">
                            <div class="teachars_pro">
                                <img src="{{ asset('front/images/team/team_3.jpg')}}" alt="member img" class="img-fluid">
                            </div>
                        </div>
                        <figcaption>
                            <div class="member-name">
                                <h4><a href="#" title="">Jonathon Smith</a></h4>
                                <span>Coordinator</span>
                            </div>                            
                        </figcaption>
                    </figure>
                </div>
            </div>
                               
        </div>
    </div>
</section><!-- ./ End Our Instructiors -->



<section class="testimonial_2">
   @include('frontlayouts.clients-say')
</section><!-- End Testimonial -->



<section class="latest_news_2">
    @include('frontlayouts.news')
</section><!-- End Blog -->





<section class="teamgroup">
    @include('frontlayouts.team')               
</section><!-- End Team Group -->



<!-- Footer -->  
<footer class="footer_2">
   @include('frontlayouts.footer')   
</footer><!-- End Footer -->

<section id="scroll-top" class="scroll-top">
    @include('frontlayouts.scroll')
</section>

    <!-- JavaScript -->
   @include('frontlayouts.javascript')
    
    <!-- =========================================================
         STYLE SWITCHER | ONLY FOR DEMO NOT INCLUDED IN MAIN FILES
    ============================================================== -->
    {{--@include('frontlayouts.sidemodal')--}}
</body>
</html>









