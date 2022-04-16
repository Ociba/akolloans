<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="modal-content">
                <div class="modal-body pb-1">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="text-center">
                        <h3 class="mt-3">Welcome To <span class="text-primary">TECHNEST HOLDING LIMITED</span><sup>Loans</sup></h3>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-interval="50000000">
                            <div class="row align-items-center">
                                <div class="col-md-6 text-center">
                                    <img style="height:350px;" src="{{ asset('assets/img/bg/akol1.jpg')}}" class="img-fluid my-4" alt="images">
                                </div>
                                <div class="col-md-6">
                                    <p class="f-16"><strong>Welcome To TECHNEST HOLDING LIMITED</strong> gives you Loans with Affordable Interests Rate.</p>
                                    <p class="f-16"> We also Offer <strong>The following Services</strong> like</p>
                                    <p class="mb-2 f-16"><i class="feather icon-check-circle mr-2 text-primary"></i>Supplies & Logistics Management</p>
                                    <p class="mb-2 f-16"><i class="feather icon-check-circle mr-2 text-primary"></i>Civil & Engineering Works</p>
                                    <p class="mb-2 f-16"><i class="feather icon-check-circle mr-2 text-primary"></i>IT & Software Solutions</p>
                                    <p class="mb-2 f-16"><i class="feather icon-check-circle mr-2 text-primary"></i>System Developers</p>
                                    <p class="mb-2 f-16"><i class="feather icon-check-circle mr-2 text-primary"></i>Telecommunication Service</p>
                                    <p class="mb-2 f-16"><i class="feather icon-check-circle mr-2 text-primary"></i>Others</p>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-lg-9">
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" data-interval="50000000">
                            <img style="height:400px;" src="{{ asset('assets/img/bg/akol2.jpg')}}" class="img-fluid mt-0" alt="images">
                        </div>
                        <div class="carousel-item" data-interva="500000000">
                             <!-- Form -->
                         <form method="POST" action="{{ route('login') }}" class="my-5">
                         @csrf
                            <div class="form-group">
                                <label class="form-label">Email</label>
                                <input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group">
                                <label class="form-label d-flex justify-content-between align-items-end">
                                        <span>Password</span>
                                        @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}" class="d-block small">Forgot password?</a>
                                        @endif  
                                    </label>
                                <input type="password" id="password" class="form-control" name="password" required >
                                <div class="clearfix"></div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center m-0">
                                <label class="custom-control custom-checkbox m-0">
                                        <input id="remember_me" type="checkbox" class="custom-control-input" name="remember">
                                        <span class="custom-control-label">Remember me</span>
                                    </label>
                                <button type="submit" class="btn btn-primary">Sign In</button>
                            </div>
                        </form>
                    <!-- [ Form ] End -->
                        </div>
                    </div>
                </div>
               
                <div class="modal-body text-center py-4" style="background:#2c3134">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <!-- <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> -->
                    </ol>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="ml-2">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="mr-2">Next</span>
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>