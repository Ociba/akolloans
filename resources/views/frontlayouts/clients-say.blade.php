<div class="container">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
            <div class="title">
                <h2>What Our Client Say About Us</h2>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="testimonial_wrapper_4" style="margin-top:-100px;">
                @foreach($mesages as $mesage)
                <div class="testimonial_single">
                    <p>"{{$mesage->clients_say}}"</p>
                    <div class="reviewer_info">
                        <div class="member-img">
                            <img src="{{ asset('happy_clients_images/'.$mesage->clients_photo)}}" alt="member img" class="img-fluid  wow zoomIn" data-wow-duration="2s" data-wow-delay=".2s">
                        </div>
                        <h4>{{$mesage->clients_name}}</h4>
                        <span>Client</span>
                    </div>
                </div>
                @endforeach
            </div>
        </div>            
    </div>
</div>
<div class="shape_wrapper">
    <img src="{{ asset('front/images/shapes/testimonial_2_shpe_2.png')}}" alt="" class="shape_1">        
    <img src="{{ asset('front/images/shapes/testimonial_2_shpe_3.png')}}" alt="" class="shape_2">        
    <img src="{{ asset('front/images/shapes/testimonial_2_shpe_1.png')}}" alt="" class="shape_3">
</div>