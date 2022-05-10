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
<header class="header_inner about_page">
<!-- Preloader -->
@include('frontlayouts.preloader')  
<div class="header_top" style="margin-top:0px;">
        @include('frontlayouts.otherpages-topheader')
    </div>
</header><!--  End header section-->



<section class="login_signup_option">
    @include('frontlayouts.login-signup')
</section>  <!-- End Login Signup Option -->
<!--========={ Popular Courses }========-->
<section class="unlimited_possibilities" id="about_unlimited_possibilities" style="margin-top:-2px;">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="sub_title" style="margin-top:80px;">
                  @include('frontlayouts.mini-menu')
                    <h2>Our Services</h2>
                   
                    <p>Lorem ipsum dolor sit amet mollis felis dapibus arcu donec viverra. Pede phasellus eget. Etiam maecenas vel vici quis dictum rutrum nec nisi et.</p>  
                </div><!-- ends: .section-header -->
            </div>
            @foreach($services as $service)
            <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                <div class="single_item single_item_center">
                    <div class="icon_wrapper">
                    <a href="#" title=""><img src="{{ asset('service_images/'.$service->photo)}}" style="height:250px;" alt="" class="img-fluid"></a>
                    </div>
                    <div class="blog_title">
                        <h3><a href="#" title="">{{$service->service}}</a></h3> 
                        <p>{{$service->content}}</p>                    
                    </div>   
                </div>
            </div>
            @endforeach            
        </div>
    </div>
</section><!-- End Popular Courses -->




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
</body>
</html>



