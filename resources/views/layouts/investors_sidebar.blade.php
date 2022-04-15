<div id="layout-sidenav" class="layout-sidenav sidenav sidenav-vertical bg-dark logo-dark">
    <!-- Brand demo (see assets/css/demo/demo.css) -->
    <div class="app-brand demo bg-primary">
        <span class="app-brand-logo demo">
            {{--<img src="assets/img/logo.png" alt="Brand Logo" class="img-fluid">--}}
        </span>
        <a href="index.html" class="app-brand-text demo sidenav-text font-weight-normal ml-2">TECH<span style="color:black;">NEST</span> HOLDING LTD</a>
        <a href="javascript:" class="layout-sidenav-toggle sidenav-link text-large ml-auto">
            <i class="ion ion-md-menu align-middle"></i>
        </a>
    </div>
    <div class="sidenav-divider mt-0"></div>

    <!-- Links -->
    <ul class="sidenav-inner py-1">

        <!-- Dashboards -->
        <li class="sidenav-item open active">
            <a href="/investor" class="sidenav-link">
                <i class="sidenav-icon feather icon-home"></i>
                <div>My Dashboard</div>
            </a>
        </li>
        <li class="sidenav-divider mb-1"></li>
        <li class="sidenav-item">
            <a href="javascript:" class="sidenav-link sidenav-toggle">
                <i class="sidenav-icon feather icon-layers"></i>
                <div>Packages</div> 
            </a>
            <ul class="sidenav-menu">
                <li class="sidenav-item">
                    <a href="/investors/view-packages" class="sidenav-link">
                        <div>Packages</div>
                    </a>
                </li>
                <li class="sidenav-item">
                    <a href="/investors/my-package" class="sidenav-link">
                        <div>My Package</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="sidenav-divider mb-1"></li>
        <li class="sidenav-item">
            <a href="javascript:" class="sidenav-link sidenav-toggle">
                <i class="sidenav-icon feather icon-layout"></i>
                <div>Interest</div>
            </a>
            <ul class="sidenav-menu">
                <li class="sidenav-item">
                    <a href="/investors/my-interest" class="sidenav-link">
                        <div>Expected Interest</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="sidenav-divider mb-1"></li>
        <li class="sidenav-item">
            <a href="javascript:" class="sidenav-link sidenav-toggle">
                <i class="sidenav-icon feather icon-layout"></i>
                <div>Profile</div>
            </a>
            <ul class="sidenav-menu">
                <li class="sidenav-item">
                    <a href="/investors/profile" class="sidenav-link">
                        <div>View Profile</div>
                    </a>
                </li>
                <li class="sidenav-item">
                    <a href="/investors/change-password" class="sidenav-link">
                        <div>Change Password</div>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Layouts -->
        <li class="sidenav-divider mb-1"></li>
    </ul>
</div>