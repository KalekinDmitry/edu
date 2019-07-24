<header class="header-section">
<a style="color:#fff">@lang('content.chlang'):</a>
<a href="{{ route('setLocale', ['ru']) }}">Русский/</a>
<a  href="{{ route('setLocale', ['en']) }}">English/</a>
<a  href="{{ route('setLocale', ['fr']) }}">Francais</a>
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
                    <a href="{{ route('login') }}">@lang('content.loginbtn')</a>
                    <span>/</span>
                    <a href="{{ route('register') }}">@lang('content.regbtn')</a>
                @else
                    @include('includes.headerMenu')
                @endguest

            </div>

            <div class="nav-switch">
                <i class="fa fa-bars"></i>
            </div>



            <ul class="main-menu">
                <!-- li><a href="index.html">Home</a></li -->
                <li><a href="#courses">@lang('content.courses')</a></li>
                <li><a href="#about">@lang('content.about us')</a></li>
                <li><a href="#newslatter">@lang('content.news')</a></li>
                <li><a href="#contact">@lang('content.contact us')</a></li>
            </ul>
        </div>
    </div>
</header>
