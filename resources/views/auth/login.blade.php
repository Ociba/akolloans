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
</section> 
<!-- End Login Signup Option -->
 <!-- JavaScript -->
 @include('frontlayouts.javascript') 
</body>
</html>



