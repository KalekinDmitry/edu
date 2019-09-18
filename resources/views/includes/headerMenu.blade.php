@if (Request::is('/'))
    <div class="row">
        <div class="dropdown">
            <button class="site-btn-info-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                <strong>@lang('content.ent')</strong>
                <i class="dropdown-toggle"></i>
            </button>
            <div class="dropdown-menu" style="background-color: #3B3444" aria-labelledby="dropdownMenuButton">
                @guest
                    <a class="dropdown-item" style="background-color: #3B3444"
                       href="{{ route('user.showLoginForm') }}">@lang('content.asus')</a>
                @else
                    @auth('web')
                        <a class="dropdown-item" style="background-color: #3B3444"
                           href="{{ route('user.dashboard') }}">@lang('content.asus')</a>
                    @endauth
                @endguest
                <a class="dropdown-item" style="background-color: #3B3444"
                   href="{{ route('teacher.showLoginForm') }}">@lang('content.astch')</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="site-btn-danger-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                <strong>@lang('content.reg')</strong>
                <i class="dropdown-toggle"></i>
            </button>
            <div class="dropdown-menu" style="background-color: #3B3444" aria-labelledby="dropdownMenuButton">
                @guest
                    <a class="dropdown-item" style="background-color: #3B3444"
                       href="{{ route('user.showRegisterForm') }}">@lang('content.asus')</a>
                @else
                    @auth('web')
                        <a class="dropdown-item" style="background-color: #3B3444"
                           href="{{ route('user.dashboard') }}">@lang('content.asus')</a>
                    @endauth
                @endguest
                <a class="dropdown-item" style="background-color: #3B3444"
                   href="{{ route('teacher.showRegisterForm') }}">@lang('content.astch')</a>
            </div>
        </div>
    </div>
@endif

@if (Request::is('user') || Request::is('user/*'))
    <div class="dropdown">
        <button class="site-btn-danger-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
            <strong>{{ Auth::user()->name }}</strong>
            <i class="dropdown-toggle"></i>
        </button>
        <div class="dropdown-menu" style="background-color: #3B3444" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" style="background-color: #3B3444"
               href="{{ route('user_settings') }}"><strong>@lang('content.profile')</strong></a>
            <a class="dropdown-item" style="background-color: #3B3444"
               href="{{ route('user.dashboard')}}">Dashboard</a>
            <a class="dropdown-item" style="background-color: #3B3444"
               href="{{ route('user.logout') }}">@lang('content.logoutbtn')</a>
        </div>
    </div>
@endif




@if (Request::is('teacher') || Request::is('teacher/*'))
    <div class="dropdown">
        <button class="site-btn-danger-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
            <strong>{{ Auth::user()->name }}</strong>
            <i class="dropdown-toggle"></i>
        </button>
        <div class="dropdown-menu" style="background-color: #3B3444" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" style="background-color: #3B3444"
               href="{{ route('teacher_settings') }}"><strong>@lang('content.profile')</strong></a>
            <a class="dropdown-item" style="background-color: #3B3444"
               href="{{ route('teacher.dashboard')}}">Dashboard</a>
            <a class="dropdown-item" style="background-color: #3B3444"
               href="{{ route('course.create') }}">@lang('content.create course')</a>
            <a class="dropdown-item" style="background-color: #3B3444"
               href="{{ route('teacher.logout') }}">@lang('content.logoutbtn')</a>
        </div>
    </div>
@endif