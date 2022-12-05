<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index.html" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ asset('home') }}/assets/images/logo/03.png" alt=""
                    height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('home') }}/assets/images/logo/04.png" alt=""
                    height="50">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="index.html" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ asset('home') }}/assets/images/logo/03.png" alt=""
                    height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('home') }}/assets/images/logo/05.png" alt=""
                    height="50">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('dashboard.index') }}">
                        <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Dashboards</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('alluser.index') }}">
                        <i class="ri-user-6-line"></i> <span data-key="t-dashboards">Users</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('contact.index') }}">
                        <i class="ri-message-2-line"></i> <span data-key="t-dashboards">Pesan</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('hijaiyah.index') }}">
                        <i class="ri-book-2-line"></i> <span data-key="t-dashboards">Hijaiyah</span>
                    </a>
                </li>
                <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-pages">Pages</span></li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('profile.index') }}">
                        <i class="ri-account-circle-line"></i> <span data-key="t-authentication">Profile</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('changepassword.index') }}">

                        <i class="ri-lock-2-line"></i> <span data-key="t-dashboards">Ubah Password </span>
                        <span class="badge bg-soft-success text-success mt-1 float-end">New</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('logout') }}">
                        <i class="ri-logout-box-line"></i> <span data-key="t-dashboards">Log Out</span>
                    </a>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">
