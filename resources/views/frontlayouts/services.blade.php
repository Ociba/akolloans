<div class="container"> 
<div class="row">
    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
        <div class="sub_title">
            <h2>Our Other Services</h2>
            <p>Lorem ipsum dolor sit amet mollis felis dapibus arcu donec viverra. Pede phasellus eget. Etiam maecenas vel vici quis dictum rutrum nec nisi et.</p>  
        </div><!-- ends: .section-header -->
    </div>
    @foreach($get_services as $service )
    <div class="col-12 col-sm-6 col-md-6 col-lg-4">
        <div class="single-courses">
            <div class="courses_banner_wrapper">
                <div class="courses_banner"><a href="#"><img src="{{ asset('service_images/'.$service->photo)}}" style="height:200px;" alt="" class="img-fluid"></a></div>
                <div class="purchase_price">
                    <a href="#" class="read_more-btn" style="background-color:#ff3300">Nest Tellers</a>
                </div>
            </div>
            <div class="courses_info_wrapper">
                <div class="courses_title">
                    <h3><a href="#">{{$service->service}}</a></h3>
                    {{--<div class="teachers_name">Teacher - <a href="#" title="">Jhonthan Smith</a></div>--}}
                </div>
                {{--<div class="courses_info">
                    <ul class="list-unstyled">
                        <li><i class="fas fa-calendar-alt"></i>180 Days</li>
                        <li><i class="fas fa-user"></i>30 Students</li>
                    </ul>
                    <a href="#" class="cart_btn">Add to Cart</a>
                </div>--}}
            </div>
        </div><!-- Ends: .single courses -->
    </div>
    @endforeach<!-- Ends: . -->           
</div>
</div>
<div class="shape_bg">
    <span class="shape_1"></span> 
    <span class="shape_2"></span> 
    <span class="shape_3"></span>
</div> 