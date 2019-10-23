<div class="row p-0 m-0">
    <div class="dropright col-md-5 p-0 m-0">
        <button  class="nav-item btn btn-primary" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">Вход
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            @guest
                <a class="dropdown-item"
                    href="{{ route('user.showLoginForm') }}">@lang('content.asus')</a>
            @else
                @auth('web')
                    <a class="dropdown-item"
                        href="{{ route('user.dashboard') }}">@lang('content.asus')</a>
                @endauth
            @endguest
            <a class="dropdown-item"
                href="{{ route('teacher.showLoginForm') }}">@lang('content.astch')</a>
        </div>
    </div>
    <div class="dropright p-0 m-0 col-md-7">
        <button class="nav-item btn btn-warning m-0" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">Регистрация
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            @guest
                <a class="dropdown-item"
                    href="{{ route('user.showRegisterForm') }}">@lang('content.asus')</a>
            @else
                @auth('web')
                    <a class="dropdown-item"
                        href="{{ route('user.dashboard') }}">@lang('content.asus')</a>
                @endauth
            @endguest
            <a class="dropdown-item"
                href="{{ route('teacher.showRegisterForm') }}">@lang('content.astch')</a>
        </div>
    </div>
</div>
