<div class="container">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
            <div class="sub_title">
                <h2>Latest Tech<span style="color:#ff8000">Nest</span> News</h2>
                <p>Lorem ipsum dolor sit amet mollis felis dapibus arcu donec viverra. Pede phasellus eget. Etiam maecenas vel vici quis dictum rutrum nec nisi et.</p>  
            </div><!-- ends: .section-header -->
        </div>          
        @foreach($news as $new)
        <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                <div class="single_item">
                <div class="item_wrapper">
                    <div class="blog-img">
                        <a href="#" title=""><img src="{{ asset('news_images/'.$new->image)}}" style="height:250px;" alt="" class="img-fluid"></a>
                    </div>
                    <h3><a href="#" title="">{{$new->title}}</a></h3> 
                </div>
                <div class="blog_title">
                    <ul class="post_bloger">
                        <li><i class="fas fa-user"></i>Admin</li> 
                        <li><i class="flaticon-clock-circular-outline"></i>{{ date('F d, Y', strtotime($new->created_at))}} | {{Carbon\Carbon::parse($new->created_at)->diffForHumans()}}</li>
                        {{--<li><i class="fas fa-thumbs-up"></i> NestTeller</li>--}}
                    </ul>               
                </div> 
                <div class="twitter_post">
                    <div class="blog_title">
                        <div class="icon_wrapper text-center">
                            <span style="color:white; font-weight:bold; font-size:36px;">Nest Tellers</span>
                        </div>
                        <p>{{$new->content}}.</p>
                        <a href="#" title=""></a>
                    </div>              
                </div>  
            </div>
        </div>
        @endforeach
    </div>
</div>