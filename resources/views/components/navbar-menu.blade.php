<header class="site-navbar js-sticky-header site-navbar-target" role="banner">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-6 col-xl-2">
                <h1 class="mb-0 site-logo">
                    <a href="{{ route('landing-page') }}" class="h2 mb-0">
                        <span class="text-primary">
                            <img src="{{ asset('frontend/images/amo-logo3.png') }}" alt="">
                        </span>
                    </a>
                </h1>
            </div>
            <div class="col-12 col-md-10 d-none d-xl-block">
                <nav class="site-navigation position-relative text-right" role="navigation">
                    <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                        <li><a href="{{ route('landing-page') }}" class="nav-link">Home</a></li>
                        <li class="has-children">
                            <a href="#about-section" class="nav-link callto-action">Staff</a>
                            <ul class="dropdown">
                                @guest
                                <li><a href="{{ route('staff.login') }}" class="nav-link">Sign In</a></li>
                                <li><a href="{{ route('staffRegister') }}" class="nav-link">Register</a></li>
                                @endguest
                                @auth
                                <li><a href="{{ route('dashboard.index') }}" class="nav-link">Dashbaord</a></li>
                                @endauth
                            </ul>
                        </li>

                    </ul>
                </nav>
            </div>
            <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#"
                    class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>

        </div>
    </div>

</header>
