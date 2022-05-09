<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta name="author" content="Ecology Theme">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('frontlayouts.css')
</head>
<body>
<header class="header_inner blog_page">
<!-- Preloader -->
@include('frontlayouts.preloader')     
    <div class="header_top" style="margin-top:0px;">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-lg-12">
                    <div class="info_wrapper">
                        <div class="contact_info">                   
                            <ul class="list-unstyled">
                            <li style="font-weight:bold;font-size:25px;"><span style="color:black;">Nest</span>Tellers &nbsp;<i class="fa fa-check-circle"></i><span style="color:#000066;">Loans</span></li>
                            <li><i class="flaticon-phone-receiver"></i>+256-701-128-723</li> 
                            <li>+256-774-712-500</li>
                            <li><i class="flaticon-mail-black-envelope-symbol"></i>info@technestholdings.com</li>
                            </ul>                    
                        </div>
                        <div class="login_info">
                             <ul class="d-flex">
                                <li class="nav-item"><a href="/" class="nav-link sign-in"><i class="fa fa-home"></i>Home</a></li>
                                <li class="nav-item"><a href="#" class="nav-link sign-in js-modal-show"><i class="flaticon-user-male-black-shape-with-plus-sign"></i>Sign Up</a></li>
                                <li class="nav-item"><a href="#" class="nav-link join_now js-modal-show"><i class="flaticon-padlock"></i>Lon In</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header> <!-- End nav -->



<section class="login_signup_option">
    @include('frontlayouts.login-signup')
</section>  <!-- End Login Signup Option -->




<section class="blog" id="blog_3_grid">
    <div class="container">

    <h2 class="text-center mb-3">Nest Teller News Update</h2>
        <div class="row">
            <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                 <div class="single_item single_item_first">
                    <div class="blog-img">
                        <a href="#" title=""><img src="{{ asset('front/images/blog/blog_1.jpg')}}" alt="" class="img-fluid"></a>
                    </div>
                    <div class="blog_title">
                        <span>LeaderShip Development</span>  
                        <h3><a href="#" title="">How to Become Master In CSS within qa Week.</a></h3> 
                        <div class="post_bloger">
                            <span>15/02/2018 - By </span> <span class="bloger_name"> James Colins</span>
                        </div>               
                    </div>   
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                <div class="single_item single_item_center">
                     <div class="blog-img">
                        <a href="#" title=""><img src="{{ asset('front/images/blog/blog_2.jpg')}}" alt="" class="img-fluid"></a>
                    </div>
                    <div class="blog_title">
                        <span>LeaderShip Development</span>  
                        <h3><a href="#" title="">How to Become Master In CSS within qa Week.</a></h3> 
                        <div class="post_bloger">
                            <span>15/02/2018 - By </span> <span class="bloger_name"> Jhon Deo</span>
                        </div>               
                    </div>   
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-4">
               <div class="single_item single_item_last">
                     <div class="blog-img">
                        <a href="#" title=""><img src="{{ asset('front/images/blog/blog_3.jpg')}}" alt="" class="img-fluid"></a>
                    </div>
                    <div class="blog_title">
                        <span>LeaderShip Development</span>  
                        <h3><a href="#" title="">How to Become Master In CSS within qa Week.</a></h3> 
                        <div class="post_bloger">
                            <span>15/02/2018 - By </span> <span class="bloger_name"> Simon Stain</span>
                        </div>               
                    </div>   
                </div>
            </div>            
            <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                 <div class="single_item single_item_first">
                    <div class="blog-img">
                        <a href="#" title=""><img src="{{ asset('front/images/blog/blog_1.jpg')}}" alt="" class="img-fluid"></a>
                    </div>
                    <div class="blog_title">
                        <span>LeaderShip Development</span>  
                        <h3><a href="#" title="">How to Become Master In CSS within qa Week.</a></h3> 
                        <div class="post_bloger">
                            <span>15/02/2018 - By </span> <span class="bloger_name"> James Colins</span>
                        </div>               
                    </div>   
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                <div class="single_item single_item_center">
                     <div class="blog-img">
                        <a href="#" title=""><img src="{{ asset('front/images/blog/blog_2.jpg')}}" alt="" class="img-fluid"></a>
                    </div>
                    <div class="blog_title">
                        <span>LeaderShip Development</span>  
                        <h3><a href="#" title="">How to Become Master In CSS within qa Week.</a></h3> 
                        <div class="post_bloger">
                            <span>15/02/2018 - By </span> <span class="bloger_name"> Jhon Deo</span>
                        </div>               
                    </div>   
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-4">
               <div class="single_item single_item_last">
                     <div class="blog-img">
                        <a href="#" title=""><img src="{{ asset('front/images/blog/blog_3.jpg')}}" alt="" class="img-fluid"></a>
                    </div>
                    <div class="blog_title">
                        <span>LeaderShip Development</span>  
                        <h3><a href="#" title="">How to Become Master In CSS within qa Week.</a></h3> 
                        <div class="post_bloger">
                            <span>15/02/2018 - By </span> <span class="bloger_name"> Simon Stain</span>
                        </div>               
                    </div>   
                </div>
            </div>
            <div class="pagination_blog">
                <ul>
                    <li><a href="#">1</a></li>
                    <li class="current"><a href="#">2</a></li>
                    <li><a href="#" class=""><i class='flaticon-right-arrow'></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</section><!-- End Blog Area -->


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
