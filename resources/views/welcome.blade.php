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
            @foreach($mesages as $mesage)
            <div class="single-wrappe col-12 col-sm-6 col-md-4 col-lg-4">
                <div class="team-single-item">
                    <figure>
                        <div class="member-img">
                            <div class="teachars_pro">
                                <img src="{{ asset('happy_clients_images/'.$mesage->clients_photo)}}" style="height:250px" alt="member img" class="img-fluid">
                            </div>
                        </div>
                        <figcaption>
                            <div class="member-name">
                                <h4><a href="#" title="">{{$mesage->clients_name}}</a></h4>
                                <span>Client</span>
                            </div>                            
                        </figcaption>
                    </figure>
                </div>
            </div>
            @endforeach           
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



