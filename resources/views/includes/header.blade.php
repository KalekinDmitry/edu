<header class="header-section">
    <div class="header-warp">
        <div class="container">
            @guest
                <a href="{{ route('home') }}" class="site-logo">
                    <img src="{{config('static.static')}}/img/logo2.png" alt="">
                </a>
            @else
                @auth('web')
                    <a href="{{ route('home') }}" class="site-logo">
                        <img src="{{config('static.static')}}/img/logo2.png"  alt="">
                    </a>
                @endauth

                @auth('teacher')
                    <a href="{{ route('teacher.dashboard') }}" class="site-logo">
                        <img src="{{config('static.static')}}/img/logo2.png"  alt="">
                    </a>
                @endauth

                @auth('admin')
                    <a href="{{ route('admin.dashboard') }}" class="site-logo">
                        <img src="{{config('static.static')}}/img/logo2.png"  alt="">
                    </a>
                @endauth
            @endguest

            <div class="user-panel">
                @guest
                    <a href="{{ route('login') }}">Login</a>
                    <span>/</span>
                    <a href="{{ route('register') }}">Register</a>
                @else
                    @include('includes.headerMenu')
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
