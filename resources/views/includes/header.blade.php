<header class="header-section">
    <div class="language-section">
        <a style="color:#fff; margin-left: 12%;">@lang('content.chlang'):</a>
        <a href="{{ route('setLocale', ['ru']) }}"><img style="margin-bottom: 5px; border-radius: 20%"
                                                        src="{{config('static.static')}}/img/icons/ru.png" alt=""></a>
        <a href="{{ route('setLocale', ['en']) }}"><img style="margin-bottom: 5px; border-radius: 20%"
                                                        src="{{config('static.static')}}/img/icons/us.png" alt=""></a>
        <a href="{{ route('setLocale', ['fr']) }}"><img style="margin-bottom: 5px; border-radius: 20%"
                                                        src="{{config('static.static')}}/img/icons/fr.png" alt=""></a>
    </div>
    <div class="header-warp">
        <div class="container">
            <a href="{{ route('home') }}" class="site-logo">
                <img src="{{config('static.static')}}/img/logo2.png" alt="">
            </a>

            <div class="user-panel">
                @include('includes.headerMenu')
            </div>

            <div class="nav-switch">
                <i class="fa fa-bars"></i>
            </div>


            <ul class="main-menu">
                <!-- li><a href="index.html">Home</a></li -->
                <li><a href="{{ route('home') }}#courses">@lang('content.courses')</a></li>
                <li><a href="{{ route('home') }}#about">@lang('content.about us')</a></li>
                <li><a href="{{ route('home') }}#newslatter">@lang('content.news')</a></li>
                <li><a href="{{ route('home') }}#contact">@lang('content.contact us')</a></li>
            </ul>
        </div>
    </div>
</header>
