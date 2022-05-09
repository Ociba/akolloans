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
<header class="header_inner contact_page">
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
</header> <!-- End Header -->



<section class="login_signup_option">
    @include('frontlayouts.login-signup')
</section>  <!-- End Login Signup Option -->




<section class="contact_info_wrapper">
     <div class="container">  
        <div class="row">  
            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                <div class="contact_info">
                    <h3 class="title">Contact Details</h3>
                    <p>You need to be sure there isn't anything embarrassing hidden in the repeat predefined chunks as nessing hidden in the repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
                    <div class="event_location_info">                  
                        <ul class="list-unstyled">
                            <li>
                                <h4 class="info_title">Address : </h4>
                                <ul class="list-unstyled">
                                    <li>945 Somerset Street </li>
                                    <li>Spartanburg, SC 29301</li>
                                </ul>
                            </li>
                            <li>
                                <h4 class="info_title">Phone Numbers :</h4>
                                <ul class="list-unstyled">
                                    <li>+000 251 215 1235</li>
                                    <li>+000 320 542 6532</li>
                                </ul>
                            </li>
                            <li>
                                <h4 class="info_title">Our E-mails :</h4>
                                <ul class="list-unstyled">
                                    <li>support@eduwais.com</li>                                    
                                </ul>
                            </li>                      
                        </ul>
                        <img src="{{ asset('front/images/banner/map_shape.png')}}" alt="" class="contact__info_shpae">
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                <div class="contact_form_wrapper">
                    <h3 class="title">Leave Your Comment </h3>
                     @include('layouts.message')
                    <div class="leave_comment">
                        <div class="contact_form">
                            <form action="/send-comment" method="get">
                             @csrf
                                <div class="row">                                 
                                    <div class="col-12 col-sm-12 col-md-12 form-group">
                                        <input type="text" class="form-control" id="name" name="names" placeholder="Your Name" required>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 form-group">
                                        <textarea class="form-control" id="comment" name="comment" placeholder="Your Comment Wite Here ..." required></textarea>
                                    </div>
                                     <div class="col-12 col-sm-12 col-md-12 submit-btn">
                                        <button type="submit" class="text-center" style="background-color:#ff3300;">Send Comment</button>
                                    </div>
                                </div>
                            </form>   
                        </div>
                    </div> 
                    </div>
           </div>
        </div>
    </div>
</section> <!-- Contact Info Wrappper-->
<section class="blog_wrapper mt--5">
    <div class="container">  
        <div class="row">        
            <div class="col-12 col-sm-12 col-md-8 col-lg-8" style="margin-top:-300px;">
            
                <div class="blog_post">
                    <div class="postpage_content_wrapper">
                        <div class="blog_post_content">
                            <!-- Blog Comment Wrappper-->
                            <div class="commnet-wrapper">
                            <div class="items_title">
                                    <h3 class="title">2 Commnets</h3>
                                </div>
                                @foreach($get_comments as $comment)
                                 <div class="comment-list-items">
                                    <div class="comment-list-wrapper">
                                        <div class="comment-list">
                                            <div class="commnet_img">
                                                <img src="{{ asset('front/images/team/review_1.jpg')}}" alt="member img" class="img-fluid">
                                            </div>
                                            <div class="comment-text">
                                                <div class="author_info"> 
                                                    <div class="author_name">
                                                        <a href="#" class="">{{$comment->names}}</a> 
                                                        <span>{{ date('F d, Y', strtotime($comment->created_at))}} | {{Carbon\Carbon::parse($comment->created_at)->diffForHumans()}}</span>
                                                     </div>
                                                     
                                                </div>     
                                                <p>{{$comment->comment}}.</p>
                                            </div>
                                        </div>

                                        <div class="comment-list reply_comment_text">
                                            <div class="commnet_img">
                                               <img src="{{ asset('front/images/team/review_3.jpg')}}" alt="member img" class="img-fluid">
                                            </div>
                                            <div class="comment-text">
                                                <div class="author_info"> 
                                                    <div class="author_name">
                                                        <a href="#" class="">Admin</a> 
                                                        <span>{{ date('F d, Y', strtotime($comment->replied_at))}} | {{Carbon\Carbon::parse($comment->replied_at)->diffForHumans()}}</span>
                                                     </div>
                                                     
                                                </div>     
                                                <p>{{$comment->reply}}.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>              
            </div> <!-- End Blog Left Side-->

            <div class="col-12 col-sm-12 col-md-4 col-lg-4 blog_wrapper_right " style="margin-top:-200px;">
                <div class="blog-right-items">

                    <div class="twitter_post_wrapper widget_single">
                        <div class="items-title">
                            <h3 class="title">Twitter Feed</h3>
                        </div>
                        <div class="twitter-single">
                            <div class="twitter-post">
                                <div class="twitter-title">
                                    <i class="fab fa-twitter twitt-icon"></i> 
                                    <p><a href="#" title="">@Jhothan Smith, </a> Lorem ipsum dolor sit amet mollis felis dapibus arcu donec viverra. Pede phasellus eget.</p>
                                </div>
                            </div>
                        </div>

                        <div class="twitter-single">
                            <div class="twitter-post">
                                <div class="twitter-title">
                                    <i class="fab fa-twitter twitt-icon"></i> 
                                    <p><a href="#" title="">@Willian Kane, </a>Lorem ipsum dolor simollirra. Pede phasellus eget.felis dapibus arcu donec viverra.</p>
                                </div>
                            </div>
                        </div>

                        <div class="twitter-single">
                            <div class="twitter-post">
                                <div class="twitter-title">
                                    <i class="fab fa-twitter twitt-icon"></i> 
                                    <p><a href="#" title="">@Michael Smith, </a> Lorem ipsum dolor sit amet mollis felPede phasellus eget.felis dapibuiverra. </p>
                                </div>
                            </div>
                        </div>

                        <div class="twitter-single">
                            <div class="twitter-post">
                                <div class="twitter-title">
                                    <i class="fab fa-twitter twitt-icon"></i> 
                                    <p><a href="#" title="">@Katie Hale, </a> Loreor sit apibus arcu donec viverra. Pede phasellus eget.felis dapibus arcu donec viverra. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- ./ End  Blog Right Side-->
            
        </div>
    </div> 
</section> 
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
