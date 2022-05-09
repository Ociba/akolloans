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
<header class="header_inner blog_page">
<!-- Preloader -->
@include('frontlayouts.preloader')  
<div class="header_top" style="margin-top:0px;">
        @include('frontlayouts.otherpages-topheader')
    </div>
</header><!--  End header section-->




<section class="login_signup_option">
    @include('frontlayouts.login-signup')
</section>  <!-- End Login Signup Option -->
<section class="blog_wrapper" id="courses_details_wrapper">
    <div class="container">  
        <div class="row">        
            <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                <div class="courses_details">
                    <div class="single-curses-contert">
                        <h3>Nest Tellers: Financial Services (Quick Loans)</h3>
                        <div class="review-option">
                            <div class="teacher-info single_items single_items_shape">
                                <img src="{{ asset('front/images/team/review_1.jpg')}}" alt="" class="img-fluid">
                                <div class="teacher-name">
                                    <span>Teacher</span>
                                    <span>DAVID MARTIN</span>
                                </div>
                            </div>
                            <div class="review-rank single_items single_items_shape">
                                <span>Reviews</span>
                                <div class="rank-icons">
                                    <ul class="list-unstyled">
                                        <li><i class="fa fa-star review-icon"></i></li>
                                        <li><i class="fa fa-star review-icon"></i></li>
                                        <li><i class="fa fa-star review-icon"></i></li>
                                        <li><i class="fa fa-star review-icon"></i></li>
                                        <li><i class="fa fa-star review-icon"></i></li>
                                        <li><span>(8 Reviews)</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="teacher_fee single_items ">
                                <span>Price</span>
                                <span class="courses_price">$50.56</span>
                            </div>
                            <div class="buy_btn single_items">
                                <a href="#" title="">Buy Now</a>
                            </div>
                        </div>
                        <div class="details-img-bxo">
                            <img src="{{ asset('front/images/blog/blog3-1.jpg')}}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="courses_tab_wrapper">   

                        <!-- Tab panes -->
                        <div class="tab_contents tab-content">
                            <div role="tabpanel" class="tab-pane fade in active show" id="information">
                                <h3>About Nest Tellers <span>:</span></h3>
                                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                                <h3>Why Choose Nest Tellers Financial Services? <span>:</span></h3>
                                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>  
                                <ul class="step_point">
                                    <li>Create static HTML and CSS portfolio sites and landing pages.</li>
                                    <li>Think like a developer. Become an expert at Googling code questions!</li>
                                    <li>Write complex web apps with multiple models and data associations.</li>
                                    <li>Create a blog application from scratch using Express, MongoDB, and Semantic UI.</li>
                                    <li>Use Express and MongoDB to create full-stack JS applications.</li>
                                </ul>                              
                                <h3>Nest Tellers Outcomes <span>:</span></h3>
                                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                                <ul class="step_point">
                                    <li>Over 37 lectures and 55.5 hours of content!</li>
                                    <li>LIVE PROJECT End to End Software Testing Training Included.</li>
                                    <li>Learn Software Testing and Automation basics from a professional trainer from your own desk.</li>
                                </ul>
                                <div class="social_wrapper d-flex">
                                    <span>Share : </span>
                                    <ul class="social-items d-flex list-unstyled">
                                        <li><a href="#"><i class="fab fa-facebook-f fb_icon"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter tw_icon"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in link_icon"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram in_icon"></i></a></li>
                                    </ul>   
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div> <!--End Blog Siderbar Left-->


            <div class="col-12 col-sm-12 col-md-4 col-lg-4 blog_wrapper_right ">
                <div class="blog-right-items">
                    <div class="courses_features widget_single">
                        <div class="items-title">
                            <h3 class="title">Quick  Links</h3>
                        </div>
                        <div class="features_items">
                            <ul class="list-unstyled">
                                <li><a href="#" title=""><i class="flaticon-page"></i> About </a><span>69</span></li>
                                <li><a href="#" title=""><i class="flaticon-eye-open"></i> Services </a><span>56</span></li>
                                <li><a href="#" title=""><i class="flaticon-clock-circular-outline"></i> Jobs</a><span>5H</span></li>
                                <li><a href="#" title=""><i class="flaticon-padlock"></i> Contact</a><span>No</span></li>
                                <li><a href="#" title=""><i class="flaticon-diploma"></i> How to get Loan</a><span>Yes</span></li>                                
                                <li><a href="#" title=""><i class="flaticon-language"></i> Terms & Conditions</a><span>Eng</span></li>                                
                                <li><a href="#" title=""><i class="flaticon-thumbs-up-hand-symbol"></i> How To Buy Package</a><span>Any</span></li>                                
                                <li><a href="#" title=""><i class="flaticon-edit"></i> Your Say</a><span>Yes</span></li>
                                <li><a href="#" title=""><i class="flaticon-edit"></i> Read Our Feedback</a><span>Yes</span></li>
                            </ul>
                        </div>
                        <img src="{{ asset('front/images/shapes/testimonial_2_shpe_2.png')}}" alt="" class="courses_feaures_shpe">
                    </div>  



                    <div class="recent_post_wrapper popular_courses_post widget_single">
                        <div class="items-title">
                            <h3 class="title">Our News & Updates</h3>
                        </div>
                        <div class="single-post">
                            <div class="recent_img">
                                 <a href="#" title=""><img src="{{ asset('front/images/courses/spi-01.jpg')}}" alt="" class="img-fluid"></a>
                            </div>
                            <div class="post_title">
                                <a href="#" title="">How to Become Master In CSS within qa Week.</a>
                                <div class="courses_price">
                                    <div class="price"><span><del>74$</del></span> <span class="new_price">49$</span></div>
                                </div>
                            </div>
                        </div>

                        <div class="single-post">
                            <div class="recent_img">
                                <a href="#" title=""><img src="{{ asset('front/images/courses/spi-02.jpg')}}" alt="" class="img-fluid"></a>
                            </div>
                            <div class="post_title">
                                <a href="#" title="">Connecting volunteers & nonprofitsz worldwide.</a>
                                <div class="courses_price">
                                    <div class="price"><span><del>60$</del></span> <span class="new_price">38$</span></div>
                                </div>
                            </div>
                        </div>

                        <div class="single-post">
                            <div class="recent_img">
                                <a href="#" title=""><img src="{{ asset('front/images/courses/spi-03.jpg')}}" alt="" class="img-fluid"></a>
                            </div>
                            <div class="post_title">
                                <a href="#" title="">Research of Learn training process</a>
                                <div class="courses_price">
                                    <div class="price"><span class="new_price">79$</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="single-post">
                            <div class="recent_img">
                                <a href="#" title=""><img src="{{ asset('front/images/courses/spi-03.jpg')}}" alt="" class="img-fluid"></a>
                            </div>
                            <div class="post_title">
                                <a href="#" title="">Research of Learn training process</a>
                                <div class="courses_price">
                                    <div class="price"><span class="new_price">79$</span></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="get_discount widget_single">
                        <div class="items-title">
                            <p>Nest Tellers Spcial Offers</p>
                            <h3>Get 35% Off</h3>
                            <a href="#" title="">Get Started</a>
                        </div>

                        <img src="{{ asset('front/images/shapes/testimonial_2_shpe_2.png')}}" alt="" class="courses_feaures_shpe">
                    </div>  
                </div>
            </div> <!-- End Right Sidebar-->
            
        </div>
    </div> 
</section><!-- ./ End  Blog Wrapper-->




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



