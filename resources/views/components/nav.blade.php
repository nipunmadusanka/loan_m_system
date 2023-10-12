<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

<!-- vendor css -->
<nav class="pcoded-navbar  ">
    <div class="navbar-wrapper  ">
        <div class="navbar-content scroll-div ">
            <div class="">
                <div class="main-menu-header">
                    <div class="user-details">
                        <div id="more-details">{{ auth()->user()->name }}</div>
                    </div>
                </div>
            </div>

            <ul class="nav pcoded-inner-navbar ">
                <li class="nav-item pcoded-menu-caption">
                    <label>Navigation</label>
                </li>
                <li class="nav-item">
                    <a href="{{ Route('pages.login.dashboard') }}" class="nav-link "><span class="pcoded-micon"><i
                                class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="{{ Route('pages.viewcustomers.viewcustomers')}}" class="nav-link "><span class="pcoded-micon"><i
                                class="feather icon-layout"></i></span><span class="pcoded-mtext">Customer Details</span></a>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="{{ Route('pages.viewloan.viewloan') }}" class="nav-link "><span class="pcoded-micon"><i
                                class="feather icon-layout"></i></span><span class="pcoded-mtext">Loan Histry</span></a>
                </li>

            </ul>
        </div>
    </div>
</nav>
