
@if(!Request::is('user/login') && !Request::is('teacher/login'))
<div class="vertical-nav bg-dark" id="sidebar">
  <div class="py-4 px-3   pb-0 mb-0 bg-dark">
        @if (Request::is('/')|| Request::is('course/*'))
            @include('sidebar_components.login_register_section')
        @endif

        @if (Request::is('user') || Request::is('user/*'))
            @include('sidebar_components.user_section')
        @endif

  </div>

  <hr class="pt-0 mt-0" style="background-color:white; opacity: 0.1">

  <ul class="nav flex-column bg-dark mb-0">

    @if(Request::is('/'))
        <li class="nav-item m-1 ml-2">
            <button class="btn btn-primary" style="padding-left: 0; margin-left: 8px; width: 184px">
                <div class="col-md-9 col-sm-9 col-sx-9 text-white font-weight-normal" style="padding: 0; font-size:13px; line-height: 13px">
                        <img src="{{ asset('assets/icons/icon_home.svg') }}"  style="margin-left: -26px" width="20px">
                        <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
                        Новости
                </div>
            </button>
        </li>
    @else
    <li class="nav-item  m-1 ml-2">
      <a href="{{ route('home') }}" class="nav-link text-white font-weight-normal " style="opacity: 0.7; font-size:13px; line-height: 13px">
        <img src="{{ asset('assets/icons/icon_home.svg') }}" class="pb-1" width="16px">
        <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
        Новости
      </a>
    </li>
    @endif

    <li class="nav-item  m-1 ml-2">
        <a href="#" class="nav-link text-white font-weight-normal " style="opacity: 0.7; font-size:13px; line-height: 13px">
            <img src="{{ asset('assets/icons/icon_courses.svg') }}" class="pb-1" width="16px">
            <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
            Курсы
        </a>
    </li>

    <li class="nav-item  m-1 ml-2">
        <a href="#" class="nav-link text-white font-weight-normal; " style="opacity: 0.7; font-size:13px; line-height: 13px">
            <img src="{{ asset('assets/icons/icon_calendar.svg') }}" class="pb-1" width="16px">
            <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
            Календарь
        </a>
    </li>

    @guest

    @else
        @if(Request::is('user'))
        <li class="nav-item m-1 ml-2">
            <button class="btn btn-primary" style="padding-left: 0; margin-left: 8px; width: 184px">
                <div class="col-md-9 col-sm-9 col-sx-9 text-white font-weight-normal" style="padding: 0; font-size:13px; line-height: 13px">
                        <img src="{{ asset('assets/icons/icon_messages.svg') }}"  style="margin-left: -10px" width="16px">
                        <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
                        Сообщения
                </div>
            </button>
        </li>
        @else
        <li class="nav-item  m-1 ml-2">
            <a href="{{ route('user.dashboard')}}" class="nav-link text-white font-weight-normal; " style="opacity: 0.7; font-size:13px; line-height: 13px">
                <img src="{{ asset('assets/icons/icon_messages.svg') }}" class="pb-1" width="16px">
                <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
                Сообщения
            </a>
        </li>
        @endif
    @endguest


    <li class="nav-item  m-1 ml-2">
        <a href="#" class="nav-link text-white font-weight-normal " style="opacity: 0.7; font-size:13px; line-height: 13px">
            <img src="{{ asset('assets/icons/icon_eduresrc.svg') }}" class="pb-1" width="16px">
            <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
            Обучающие ресурсы
        </a>
    </li>

    <li class="nav-item m-1 ml-2">
        <a href="#" class="nav-link text-white font-weight-normal " style="opacity: 0.7; font-size:13px; line-height: 13px">
            <img src="{{ asset('assets/icons/icon_help.svg') }}" class="pb-1" width="16px">
            <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
            Помощь
        </a>
    </li>
    </ul>
    {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>--}}
</div>
@endif
