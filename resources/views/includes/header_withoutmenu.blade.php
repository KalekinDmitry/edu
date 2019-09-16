<header class="header-section">

    <a style="color:#fff; margin-left: 5%;">@lang('content.chlang'):</a>
    <a href="{{ route('setLocale', ['ru']) }}"><img style="margin-bottom: 5px; border-radius: 20%"
                                                    src="{{config('static.static')}}/img/icons/ru.png" alt=""></a>
    <a href="{{ route('setLocale', ['en']) }}"><img style="margin-bottom: 5px; border-radius: 20%"
                                                    src="{{config('static.static')}}/img/icons/us.png" alt=""></a>
    <a href="{{ route('setLocale', ['fr']) }}"><img style="margin-bottom: 5px; border-radius: 20%"
                                                    src="{{config('static.static')}}/img/icons/fr.png" alt=""></a>

    <div class="header-warp">


        <div class="container d-flex">
            @guest
                <a href="{{ route('home') }}" class="site-logo">
                    <img src="{{config('static.static')}}/img/logo2.png" alt="">
                </a>
            @else
                @auth('web')
                    <a href="{{ route('home') }}" class="site-logo">
                        <img src="{{config('static.static')}}/img/logo2.png" alt="">
                    </a>
                @endauth

                @auth('teacher')
                    <a href="{{ route('teacher.dashboard') }}" class="site-logo">
                        <img src="{{config('static.static')}}/img/logo2.png" alt="">
                    </a>
                @endauth

                @auth('admin')
                    <a href="{{ route('admin.dashboard') }}" class="site-logo">
                        <img src="{{config('static.static')}}/img/logo2.png" alt="">
                    </a>
                @endauth
            @endguest

            <div class="nav-switch">
                <i class="fa fa-bars"></i>
            </div>

            <div class="user-panel">
                @include('includes.headerMenu')
            </div>
        </div>
    </div>
</header>
