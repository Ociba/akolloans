<!DOCTYPE html>

<html lang="en" class="default-style layout-fixed layout-navbar-fixed">
<head>
   @include('layouts.title')

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description"
        content="" />
    <meta name="keywords" content="">
    <meta name="author" content="" />
   @include('layouts.css')

</head>

<body>
    <!-- [ Preloader ] Start -->
    <div class="page-loader">
        <div class="bg-primary"></div>
    </div>
    <!-- [ Preloader ] End -->

    <!-- [ Layout wrapper ] Start -->
    <div class="layout-wrapper layout-2">
        <div class="layout-inner">
            <!-- [ Layout sidenav ] Start -->
            @include('layouts.sidebar')
            <!-- [ Layout sidenav ] End -->
            <!-- [ Layout container ] Start -->
            <div class="layout-container">
                <!-- [ Layout navbar ( Header ) ] Start -->
                @include('layouts.navbar')
                <!-- [ Layout navbar ( Header ) ] End -->

                <!-- [ Layout content ] Start -->
                <div class="layout-content">

                    <!-- [ content ] Start -->
                    <div class="container-fluid flex-grow-1 container-p-y">
                        @include('layouts.breadcrumbs')
                        <div class="row">
                             <!-- customar project  start -->
                             <div class="col-xl-12 col-lg-12 col-xs-12 col-xs-12 col-md-12">
                            <div class="card overflow-hidden">
                            <div class="row no-gutters row-bordered row-border-light">
                                <div class="col-md-3 pt-0">
                                    <div class="list-group list-group-flush account-settings-links">
                                        <a class="list-group-item list-group-item-action active" data-toggle="list" href="#account-general">General</a>
                                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-change-password">Change password</a>
                                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-info">Info</a>
                                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-social-links">Social links</a>
                                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-connections">Connections</a>
                                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-notifications">Notifications</a>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="account-general">

                                            <div class="card-body media align-items-center">
                                                @foreach($get_my_profile as $logged_user)
                                                <img src="{{ asset('users_photo/'.$logged_user->profile_photo_path)}}" alt="" class="d-block ui-w-80">
                                                
                                                @endforeach
                                            </div>
                                            <hr class="border-light m-0">

                                            <div class="card-body">
                                                @foreach($get_my_profile as $logged_user)
                                                <div class="form-group">
                                                    <label class="form-label">Username</label>
                                                    <input type="text" name="name" class="form-control mb-1" value="{{$logged_user->name}}" readonly>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">E-mail</label>
                                                    <input type="text" name="email" class="form-control mb-1" value="{{$logged_user->email}}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Category</label>
                                                    <input type="text" class="form-control" value="{{$logged_user->category}}" readonly>
                                                    <div class="clearfix"></div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="account-change-password">
                                            <form action="/update-password" method="get">
                                             @csrf
                                            <div class="card-body pb-2">
                                                <div class="form-group">
                                                    <label class="form-label">Current password</label>
                                                    <input type="password" id="current_password" name="current_password" class="form-control">
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">New password</label>
                                                    <input type="password" id="new_password" name="new_password" class="form-control">
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Repeat new password</label>
                                                    <input type="password" id="confirm_password" name="confirm_password" class="form-control">
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                            <div class="text-right mt-3 pb-3">
                                            <button type="submit" class="btn btn-primary">Save changes</button>&nbsp;
                                            <button type="button" class="btn btn-default">Cancel</button>
                                            </form>
                                        </div>
                                        </div>
                                        <div class="tab-pane fade" id="account-info">
                                            <div class="card-body pb-2">
                                                <div class="form-group">
                                                    <label class="form-label">Bio</label>
                                                    <textarea class="form-control" rows="5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nunc arcu, dignissim sit amet sollicitudin iaculis, vehicula id urna. Sed luctus urna nunc. Donec fermentum, magna sit amet rutrum pretium, turpis dolor molestie diam, ut lacinia diam risus eleifend sapien. Curabitur ac nibh nulla. Maecenas nec augue placerat, viverra tellus non, pulvinar risus.</textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Birthday</label>
                                                    <input type="text" class="form-control" value="May 3, 1995">
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Country</label>
                                                    <select class="custom-select">
                                                        <option>USA</option>
                                                        <option selected>Canada</option>
                                                        <option>UK</option>
                                                        <option>Germany</option>
                                                        <option>France</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Languages</label>
                                                    <select multiple class="account-settings-multiselect form-control w-100">
                                                        <option selected>English</option>
                                                        <option>German</option>
                                                        <option>French</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <hr class="border-light m-0">
                                            <div class="card-body pb-2">
                                                <h6 class="mb-4">Contacts</h6>
                                                <div class="form-group">
                                                    <label class="form-label">Phone</label>
                                                    <input type="text" class="form-control" value="+0 (123) 456 7891">
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Website</label>
                                                    <input type="text" class="form-control" value="">
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                            <hr class="border-light m-0">
                                            <div class="card-body pb-2">
                                                <h6 class="mb-4">Interests</h6>
                                                <div class="form-group">
                                                    <label class="form-label">Favorite music</label>
                                                    <input type="text" class="form-control account-settings-tagsinput" value="Rock,Alternative,Electro,Drum & Bass,Dance">
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Favorite movies</label>
                                                    <input type="text" class="form-control account-settings-tagsinput" value="The Green Mile,Pulp Fiction,Back to the Future,WALL·E,Django Unchained,The Truman Show,Home Alone,Seven Pounds">
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="account-social-links">
                                            <div class="card-body pb-2">
                                                <div class="form-group">
                                                    <label class="form-label">Twitter</label>
                                                    <input type="text" class="form-control" value="https://twitter.com/user">
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Facebook</label>
                                                    <input type="text" class="form-control" value="https://www.facebook.com/user">
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Google+</label>
                                                    <input type="text" class="form-control" value="">
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">LinkedIn</label>
                                                    <input type="text" class="form-control" value="">
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Instagram</label>
                                                    <input type="text" class="form-control" value="https://www.instagram.com/user">
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="account-connections">
                                            <div class="card-body">
                                                <button type="button" class="btn btn-twitter">Connect to<strong>Twitter</strong></button>
                                            </div>
                                            <hr class="border-light m-0">
                                            <div class="card-body">
                                                <h5 class="mb-2">
                                                    <a href="javascript:void(0)" class="float-right text-muted text-tiny">
                                                        <i class="ion ion-md-close"></i> Remove
                                                    </a>
                                                    <i class="ion ion-logo-google text-google"></i>You are connected to Google:
                                                </h5> nmaxwell@mail.com
                                            </div>
                                            <hr class="border-light m-0">
                                            <div class="card-body">
                                                <button type="button" class="btn btn-facebook">Connect to<strong>Facebook</strong></button>
                                            </div>
                                            <hr class="border-light m-0">
                                            <div class="card-body">
                                                <button type="button" class="btn btn-instagram">Connect to<strong>Instagram</strong></button>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="account-notifications">
                                            <div class="card-body pb-2">
                                                <h6 class="mb-4">Activity</h6>
                                                <div class="form-group">
                                                    <label class="switcher">
                                                        <input type="checkbox" class="switcher-input" checked>
                                                        <span class="switcher-indicator">
                                                            <span class="switcher-yes"></span>
                                                        <span class="switcher-no"></span>
                                                        </span>
                                                        <span class="switcher-label">Email me when someone comments on my article</span>
                                                    </label>
                                                </div>
                                                <div class="form-group">
                                                    <label class="switcher">
                                                        <input type="checkbox" class="switcher-input" checked>
                                                        <span class="switcher-indicator">
                                                            <span class="switcher-yes"></span>
                                                        <span class="switcher-no"></span>
                                                        </span>
                                                        <span class="switcher-label">Email me when someone answers on my forum thread</span>
                                                    </label>
                                                </div>
                                                <div class="form-group">
                                                    <label class="switcher">
                                                        <input type="checkbox" class="switcher-input">
                                                        <span class="switcher-indicator">
                              <span class="switcher-yes"></span>
                                                        <span class="switcher-no"></span>
                                                        </span>
                                                        <span class="switcher-label">Email me when someone follows me</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <hr class="border-light m-0">
                                            <div class="card-body pb-2">

                                                <h6 class="mb-4">Application</h6>

                                                <div class="form-group">
                                                    <label class="switcher">
                                                        <input type="checkbox" class="switcher-input" checked>
                                                        <span class="switcher-indicator">
                              <span class="switcher-yes"></span>
                                                        <span class="switcher-no"></span>
                                                        </span>
                                                        <span class="switcher-label">News and announcements</span>
                                                    </label>
                                                </div>
                                                <div class="form-group">
                                                    <label class="switcher">
                                                        <input type="checkbox" class="switcher-input">
                                                        <span class="switcher-indicator">
                              <span class="switcher-yes"></span>
                                                        <span class="switcher-no"></span>
                                                        </span>
                                                        <span class="switcher-label">Weekly product updates</span>
                                                    </label>
                                                </div>
                                                <div class="form-group">
                                                    <label class="switcher">
                                                        <input type="checkbox" class="switcher-input" checked>
                                                        <span class="switcher-indicator">
                              <span class="switcher-yes"></span>
                                                        <span class="switcher-no"></span>
                                                        </span>
                                                        <span class="switcher-label">Weekly blog digest</span>
                                                    </label>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div></div></div>
                    <!-- [ content ] End -->

                    <!-- [ Layout footer ] Start -->
                    @include('layouts.footer')
                    <!-- [ Layout footer ] End -->
                </div>
                <!-- [ Layout content ] Start -->
            </div>
            <!-- [ Layout container ] End -->
        </div>
        <!-- Overlay -->
        <div class="layout-overlay layout-sidenav-toggle"></div>
    </div>
    <!-- [ Layout wrapper] End -->

    <!-- Modal -->
    
    <!-- Core scripts -->
   @include('layouts.javascript')
</body>
</html>
