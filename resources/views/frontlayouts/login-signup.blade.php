<div class="l-modal is-hidden--off-flow js-modal-shopify">
    <div class="l-modal__shadow js-modal-hide"></div>
    <div class="login_popup login_modal_body">
        <div class="Popup_title d-flex justify-content-between">
            <h2 class="hidden">&nbsp;</h2>
            <!-- Nav tabs -->
            <div class="row">
                <div class="col-12 col-lg-12 col-md-12 col-lg-12 login_option_btn">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#login" role="tab">Login</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#panel2" role="tab">Register</a></li>
                    </ul>
                </div>
                <div class="col-12 col-lg-12 col-md-12 col-lg-12">
                    <!-- Tab panels -->
                    <div class="tab-content card">
                        <!--Login-->
                        <div class="tab-pane fade in show active" id="login" role="tabpanel">
                            <form action="{{ route('login') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-12 col-lg-12 col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <label class="control-label">Email</label>
                                            <input id="email" class="form-control" type="email" name="email" :value="old('email')" style="height:35px;" required autofocus>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-12 col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <label class="control-label">Password</label>
                                            <input type="password" id="password" class="form-control" style="height:35px;" name="password" required >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-lg-12 col-md-12 col-lg-12 d-flex justify-content-between login_option">
                                        @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}" class="d-block small">Forgot password?</a>
                                        @endif  
                                    </div> 
                                </div>
                                    <div class="row">
                                        <div class="col-12 col-lg-12 col-md-12 col-lg-12  login_option text-center">
                                            <button type="submit" class="btn btn-block btn-warning">Login</button>
                                        </div> 
                                    </div>
                                    {{--<div class="col-12 col-lg-12 col-md-12 col-lg-12">
                                        <div class="social_login">
                                            <div class="social_items">
                                                <button class="google_login google">Login Google</button>
                                                <button class="google_login facebook">Login Facebook</button>
                                                <button class="google_login twitter">Login Twitter</button>
                                                <button class="google_login linkdin">Login Linkdin</button>
                                            </div>
                                        </div>
                                    </div>--}}
                            </form>
                        </div>
                        <!--/.Panel 1-->
                        <!--Panel 2-->
                        <div class="tab-pane fade" id="panel2" role="tabpanel">
                            <form action="{{ route('register') }}" class="register" method="POST">
                               @csrf
                                <div class="row">
                                    <div class="col-12 col-lg-12 col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <label  class="control-label">Name</label>
                                            <input type="text" class="form-control" style="height:35px;" id="name" name="name" :value="old('name')" required>
                                        </div>
                                    </div>                                        
                                    <div class="col-12 col-lg-12 col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <label  class="control-label">Email</label>
                                            <input type="email" class="form-control" style="height:35px;" id="password" name="email" :value="old('email')" required >
                                        </div>
                                    </div> 
                                    <div class="col-12 col-lg-12 col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <label  class="control-label">Password</label>
                                            <input type="password" class="form-control" name="password" style="height:35px;" id="password" placeholder="" required>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-12 col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <label  class="control-label">Confirm Password</label>
                                            <input id="password_confirmation" class="form-control" type="password" style="height:35px;"  name="password_confirmation" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-lg-12 col-md-12 col-lg-12  login_option text-center">
                                        <button type="submit" class="btn btn-block btn-warning">Register</button>
                                    </div> 
                                </div>
                            </form>
                        </div><!--/.Panel 2-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>