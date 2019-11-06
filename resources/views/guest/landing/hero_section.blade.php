<section class="hero-section set-bg fixed" data-setbg="{{config('static.static')}}/img/bg.jpg">

    {{-- Header --}}
    <div class="row justify-content-center py-4">
        <div class="col-md-11">
            <a style="color:#fff; padding-top: 5px;">@lang('content.chlang'):&nbsp;</a>
            <a href="{{ route('setLocale', ['ru']) }}"><img style="margin-bottom: 16px; border-radius: 20%"
                                                            src="{{config('static.static')}}/img/icons/ru.png" alt=""></a>
            <a href="{{ route('setLocale', ['en']) }}"><img style="margin-bottom: 16px; border-radius: 20%"
                                                            src="{{config('static.static')}}/img/icons/us.png" alt=""></a>
            <a href="{{ route('setLocale', ['fr']) }}"><img style="margin-bottom: 16px; border-radius: 20%"
                                                            src="{{config('static.static')}}/img/icons/fr.png" alt=""></a>
        </div>
        <div class="col-md-11">
            <nav class="navbar navbar-expand navbar-dark" style="min-height: 128px; border: 0px; border-bottom: 3px solid #fee110; border-radius: 0; margin: 0; padding: 0">
                <a class="navbar-brand col-md-3" style="margin: 0" href="{{ route('home') }}">
                    <img src="{{config('static.static')}}/img/logo2.png" alt="">
                </a>
                <div class="collapse navbar-collapse col-md-6 col-sm-5" style="padding: 0">
                    <ul class="main-menu col-md-12" style="margin: 0; padding: 0">
                        <!-- li><a href="index.html">Home</a></li -->
                        <li class="nav-item active"><a style="margin-top: 14px" class="nav-link" href="{{ route('home') }}#courses">@lang('content.courses')</a></li>
                        <li class="nav-item active"><a class="nav-link" href="{{ route('home') }}#about">@lang('content.about us')</a></li>
                        <li class="nav-item active"><a class="nav-link" href="{{ route('home') }}#newslatter">@lang('content.news')</a></li>
                        <li class="nav-item active"><a class="nav-link" href="{{ route('home') }}#contact">@lang('content.contact us')</a></li>
                        <li class="nav-item active"><a class="nav-link" href="{{ route('home') }}#contact">@lang('content.contact us')</a></li>
                    </ul>
                </div>

                <div style="padding: 0; margin-top: 19px; margin-right: 16px; margin-bottom: 8px" class="user-panel col-md-3 col-sm-4">
                    @include('guest.landing.header_menu')
                </div>

                <div class="nav-switch col-md-0">
                    <i class="fa fa-bars"></i>
                </div>

            </nav>
        </div>
    </div>

    {{-- Banner --}}
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="hero-text text-white">
                    <h2>Special HMQ- @lang('content.edcourse')</h2>
                    <p>@lang('content.presentation').</p>
                    <div class="hero-author">
                        <div class="hero-author-pic set-bg"
                             data-setbg="{{config('static.static')}}/img/hero-author.jpg"></div>
                        <h5>@lang('content.comname'), <span>@lang('content.prtc')</span></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
