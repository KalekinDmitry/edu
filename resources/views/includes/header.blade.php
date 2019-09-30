<header class="header-section">
    {{-- <div class="language-section">
        <a style="color:#fff; margin-left: 11%;">@lang('content.chlang'):</a>
        <a href="{{ route('setLocale', ['ru']) }}"><img style="margin-bottom: 5px; border-radius: 20%"
                                                        src="{{config('static.static')}}/img/icons/ru.png" alt=""></a>
        <a href="{{ route('setLocale', ['en']) }}"><img style="margin-bottom: 5px; border-radius: 20%"
                                                        src="{{config('static.static')}}/img/icons/us.png" alt=""></a>
        <a href="{{ route('setLocale', ['fr']) }}"><img style="margin-bottom: 5px; border-radius: 20%"
                                                        src="{{config('static.static')}}/img/icons/fr.png" alt=""></a>
    </div>
    <div class="header-warp">
        <div class="container d-flex">

            <a href="{{ route('home') }}" class="site-logo">
                <img src="{{config('static.static')}}/img/logo2.png" alt="">
            </a>

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

            <div class="user-panel">
                @include('includes.headerMenu')
            </div>
        </div>
    </div> --}}




    <div class="row justify-content-center">
        <div class="row col-md-11">
            <a style="color:#fff">@lang('content.chlang'):</a>
            <a href="{{ route('setLocale', ['ru']) }}"><img style="margin-bottom: 5px; border-radius: 20%"
                                                            src="{{config('static.static')}}/img/icons/ru.png" alt=""></a>
            <a href="{{ route('setLocale', ['en']) }}"><img style="margin-bottom: 5px; border-radius: 20%"
                                                            src="{{config('static.static')}}/img/icons/us.png" alt=""></a>
            <a href="{{ route('setLocale', ['fr']) }}"><img style="margin-bottom: 5px; border-radius: 20%"
                                                            src="{{config('static.static')}}/img/icons/fr.png" alt=""></a>
        </div>
        <nav class="navbar navbar-expand navbar-dark col-md-11" style="border: 0px; border-bottom: 3px solid #fee110; border-radius: 0">
            <div class="row jusctify-content-center col-md-12">
                <a class="navbar-brand col-md-3" href="{{ route('home') }}">
                    <img src="{{config('static.static')}}/img/logo2.png" alt="">
                </a>
                <div class="collapse navbar-collapse col-md-12">
                    <ul class="main-menu col-md-8">
                        <!-- li><a href="index.html">Home</a></li -->
                        <li class="nav-item active"><a style="margin-top: 14px" class="nav-link" href="{{ route('home') }}#courses">@lang('content.courses')</a></li>
                        <li class="nav-item active"><a class="nav-link" href="{{ route('home') }}#about">@lang('content.about us')</a></li>
                        <li class="nav-item active"><a class="nav-link" href="{{ route('home') }}#newslatter">@lang('content.news')</a></li>
                        <li class="nav-item active"><a class="nav-link" href="{{ route('home') }}#contact">@lang('content.contact us')</a></li>
                        <li class="nav-item active"><a class="nav-link" href="{{ route('home') }}#contact">@lang('content.contact us')</a></li>
                    </ul>

                    <div style="margin-top: 8px" class="user-panel col-md-4">
                            @include('includes.headerMenu')
                        </div>

                    <div class="nav-switch col-md-0">
                        <i class="fa fa-bars"></i>
                    </div>



                </div>



            </div>
        </nav>
    </div>


</header>

