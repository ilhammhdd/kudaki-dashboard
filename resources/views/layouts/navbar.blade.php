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
                @if(session()->has('kudaki-token'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('home.organizer')}}">
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('transactions')}}">
                            Invoices
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('logout')}}">
                            Logout
                        </a>
                    </li>
                @else
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
                @endif
            </ul>
        </div>
    </div>

    <!-- Mobile Menu Start -->
    <ul class="mobile-menu navbar-nav">
        @if(session()->has('kudaki-token'))
            <li class="nav-item">
                <a class="nav-link" href="{{route('home.organizer')}}">
                    Home
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('transactions')}}">
                    Invoices
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('logout')}}">
                    Logout
                </a>
            </li>
        @else
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
        @endif
    </ul>
    <!-- Mobile Menu End -->

</nav>
<!-- Navbar End -->