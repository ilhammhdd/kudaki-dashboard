<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg fixed-top scrolling-navbar indigo">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar"
                    aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                <span class="icon-menu"></span>
                <span class="icon-menu"></span>
                <span class="icon-menu"></span>
            </button>
            <a href="{{route('home.landing')}}" class="navbar-brand"><img src="{{asset('img/logokudaki.png')}}"
                                                                          alt=""></a>
        </div>
        <div class="collapse navbar-collapse" id="main-navbar">
            <ul class="navbar-nav mr-auto w-100 justify-content-left clearfix">
                <li class="nav-item active">
                    <a class="nav-link" href="#hero-area">
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#feature">
                        Tentang
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#services">
                        Fitur
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">
                        Contact
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('auth.indexSignUp')}}">
                        Sign up
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('auth.indexLogin')}}">
                        Login
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <!-- Mobile Menu Start -->
    <ul class="mobile-menu navbar-nav">
        <li>
            <a class="page-scroll" href="#hero-area">
                Home
            </a>
        </li>
        <li>
            <a class="page-scroll" href="#services">
                Services
            </a>
        </li>
        <li>
            <a class="page-scroll" href="#feature">
                feature
            </a>
        </li>
        <li>
            <a class="page-scroll" href="#team">
                Team
            </a>
        </li>
        <li>
            <a class="page-scroll" href="#testimonial">
                Testimonial
            </a>
        </li>
        <li>
            <a class="page-scroll" href="#pricing">
                Pricing
            </a>
        </li>
        <li>
            <a class="page-scroll" href="#contact">
                Contact
            </a>
        </li>
    </ul>
    <!-- Mobile Menu End -->

</nav>
<!-- Navbar End -->