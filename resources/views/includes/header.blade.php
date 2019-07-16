<header class="header-section">
    <div class="header-warp">
        <div class="container">
            <a href="{{ route('home') }}" class="site-logo">
                <img src="{{ asset('images/logo2.png') }}" alt="">
                {{--<span style="color: #fff;">HMQ-Education</span >--}}
            </a>

            <div class="user-panel">
                @guest
                    <a href="{{ route('login') }}">Login</a>
                    <span>/</span>
                    <a href="{{ route('register') }}">Register</a>
                @else
                    <a href="{{ route('course.create') }}">Create course</a>
                    <span>/</span>
                    <a href="{{ route('users_profile', Auth::user()->id) }}">{{ Auth::user()->name }}</a>
                    <span>/</span>
                    <a href="{{ route('logout') }}">Logout</a>
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
