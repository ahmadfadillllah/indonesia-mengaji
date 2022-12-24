<header class="header-3 pattern-1">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-xl-3 col-12">
                <div class="mobile-menu-wrapper d-flex flex-wrap align-items-center justify-content-between">
                    <div class="header-bar d-lg-none">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="logo">
                        <a href="{{ route('home.index') }}">
                            <img src="{{ asset('home') }}/assets/images/logo/02.png
                            " alt="logo">
                        </a>
                    </div>
                    <div class="ellepsis-bar d-lg-none">
                        <i class="fas fa-ellipsis-h"></i>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-12">
                <div class="header-top">
                    <div class="header-top-area">
                        <ul class="left lab-ul">
                            <li>
                                <i class="icofont-ui-call"></i> <span>+800-123-4567 6587</span>
                            </li>
                            <li>
                                <i class="fas fa-map-marker-alt"></i> Beverley, New York 224 US
                            </li>
                        </ul>
                        <ul class="social-icons lab-ul d-flex">
                            <li>
                                <a href="#"><i class="fab fa-facebook-messenger"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-vimeo-v"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-skype"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-wifi"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="header-bottom">
                    <div class="header-wrapper">
                        <div class="menu-area justify-content-between w-100">
                            <ul class="menu lab-ul">
                                <li>
                                    <a href="{{ route('home.index') }}">Home</a>
                                </li>
                                <li>
                                        <a href="#0">Layanan</a>
                                        <ul class="submenu">
                                            <li><a href="events.html">Belajar Ngaji Anak-anak</a></li>
                                            <li><a href="events-single.html">Belajar Ngaji Dewasa</a></li>
                                        </ul>
                                    </li>
                                <li>
                                    <a href="javascript:void(0)">Program</a>
                                </li>
                                <li><a href="{{ route('home.contact') }}">Kontak</a></li>
                            </ul>
                            <div class="prayer-time d-none d-lg-block">
                                <a href="{{ route('login') }}" class="prayer-time-btn"><i class="icofont-clock-time"></i> Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
