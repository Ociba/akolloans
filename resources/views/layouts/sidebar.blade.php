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
            <a href="/dashboard" class="sidenav-link">
                <i class="sidenav-icon feather icon-home"></i>
                <div>Admin Dashboards</div>
            </a>
        </li>
        <li class="sidenav-divider mb-1"></li>
        <li class="sidenav-item">
            <a href="javascript:" class="sidenav-link sidenav-toggle">
                <i class="sidenav-icon feather icon-users"></i>
                <div>Investors</div>
                <div class="pl-1 ml-auto">
                    <div class="badge badge-primary">{{ auth()->user()->countInvestors()}}+</div>
                </div>
            </a>
            <ul class="sidenav-menu">
                <li class="sidenav-item">
                    <a href="/admin/investors" class="sidenav-link">
                        <div>List of Investors</div>
                    </a>
                </li>
                <li class="sidenav-item">
                    <a href="/admin/suspended-investors" class="sidenav-link">
                        <div>Suspended Investors</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="sidenav-divider mb-1"></li>
        <li class="sidenav-item">
            <a href="/admin/get-packages" class="sidenav-link">
                <i class="sidenav-icon feather icon-grid"></i>
                <div>Packages</div>
                <div class="pl-1 ml-auto">
                    <div class="badge badge-danger">{{ auth()->user()->countPackages()}}+</div>
                </div>
            </a>
        </li>
        
        <li class="sidenav-divider mb-1"></li>
        <li class="sidenav-item">
            <a href="javascript:" class="sidenav-link sidenav-toggle">
                <i class="sidenav-icon feather icon-layout"></i>
                <div>Clients (Loans)</div>
                <div class="pl-1 ml-auto"> 
                    <div class="badge badge-success">{{ auth()->user()->countLoanClients()}}+</div>
                </div>
            </a>
            <ul class="sidenav-menu">
                <li class="sidenav-item">
                    <a href="/admin/all-clients" class="sidenav-link">
                        <div>Clients With Paid Loans</div>
                    </a>
                </li>
                <li class="sidenav-item">
                    <a href="/admin/clients-with-loans" class="sidenav-link">
                        <div>Clients with Loans</div>
                    </a>
                </li>
                <li class="sidenav-item">
                    <a href="/admin/loan-defaulters" class="sidenav-link">
                        <div>Loan Defaulters</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="sidenav-divider mb-1"></li>
        <li class="sidenav-item">
            <a href="/admin/get-interests" class="sidenav-link">
                <i class="sidenav-icon ion ion-md-wallet"></i>
                <div>Interests</div>
            </a>
        </li>
        <li class="sidenav-divider mb-1"></li>
        <li class="sidenav-item">
            <a href="javascript:" class="sidenav-link sidenav-toggle">
                <i class="sidenav-icon feather icon-menu"></i>
                <div>Other Entries</div>
            </a>
            <ul class="sidenav-menu">
                <li class="sidenav-item">
                    <a href="/accountsettings/get-categories" class="sidenav-link">
                        <div>Categories</div>
                    </a>
                </li>
                <li class="sidenav-item">
                    <a href="/accountsettings/get-districts" class="sidenav-link">
                        <div>Districts</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="sidenav-divider mb-1"></li>
        <li class="sidenav-item">
            <a href="javascript:" class="sidenav-link sidenav-toggle">
                <i class="sidenav-icon feather icon-settings"></i>
                <div>Account Settings</div>
            </a>
            <ul class="sidenav-menu">
                <li class="sidenav-item">
                    <a href="/accountsettings/get-all-users" class="sidenav-link">
                        <div>Users</div>
                    </a>
                </li>
                <li class="sidenav-item">
                    <a href="/change-password" class="sidenav-link">
                        <div>Change Password</div>
                    </a>
                </li>
                <li class="sidenav-item">
                    <a href="/accountsettings/get-roles-for-permissions" class="sidenav-link">
                        <div>Permissions</div>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Layouts -->
        <li class="sidenav-divider mb-1"></li>
    </ul>
</div>