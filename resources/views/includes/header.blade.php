<header class="header-section">
    <div class="header-warp">
        <div class="container">
            <a href="{{ route('home') }}" class="site-logo">
                <img src="{{ asset('images/logo2.png') }}" alt="">
            </a>

            <div class="user-panel">
                @guest
                    <a href="{{ route('login') }}">Login</a>
                    <span>/</span>
                    <a href="{{ route('register') }}">Register</a>
                @else
                    @auth('web')
                        <a href="{{ route('users_profile', Auth::user()->id) }}">{{ Auth::user()->name }}</a>
                        <span>/</span>
                        <a href="{{ route('logout') }}">Logout</a>
                    @endauth
                    @auth('teacher')
                        <a href="{{ route('course.create') }}">Create course</a>
                        <span>/</span>
                        <a href="{{ route('teacher_profile', Auth::user()->id) }}">{{ Auth::user()->name }}</a>
                        <span>/</span>
                        <a href="{{ route('logout') }}">Logout</a>
                    @endauth
                    @auth('admin')
                        <a href="{{ route('admin_profile', Auth::user()->id) }}">{{ Auth::user()->name }}</a>
                        <span>/</span>
                        <a href="{{ route('logout') }}">Logout</a>
                    @endauth
                @endguest

            </div>

            <div class="nav-switch">
                <i class="fa fa-bars"></i>
            </div>



            <ul class="main-menu">
                <!-- li><a href="index.html">Home</a></li -->
                <li><a href="#courses">Courses</a></li>
                <li><a href="#about">About us</a></li>
                <li><a href="#newslatter">News</a></li>
                <li><a href="#contact">Contact us</a></li>
            </ul>
        </div>
    </div>
</header>
