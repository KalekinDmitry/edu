
@if(!Request::is('user/login') && !Request::is('teacher/login'))
<div class="sidebar bg-dark" id="sidebar">
  <div class="py-4 px-3   pb-0 mb-0 bg-dark">
        @if (Request::is('/')|| Request::is('course/*'))
            @include('sidebar_components.login_register_section')
        @endif

        @if (Request::is('user') || Request::is('user/*') || Request::is('teacher') || Request::is('teacher/*'))
            @include('sidebar_components.user_section')
        @endif

  </div>

  <hr class="pt-0 mt-0" style="background-color:white; opacity: 0.1">

  <ul class="nav flex-column bg-dark mb-0">

    <li class="nav-item  m-1 ml-2">
      <a href="{{ route('home') }}" class="nav-link text-white font-weight-normal ">
        <img src="{{ asset('assets/icons/icon_home.svg') }}"  width="16px">
        <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
        Новости
      </a>
    </li>

    <li class="nav-item  m-1 ml-2">
        <a href="#" class="nav-link text-white font-weight-normal " >
            <img src="{{ asset('assets/icons/icon_courses.svg') }}"  width="16px">
            <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
            Курсы
        </a>
    </li>

    <li class="nav-item  m-1 ml-2">
        <a href="#" class="nav-link text-white font-weight-normal; ">
            <img src="{{ asset('assets/icons/icon_calendar.svg') }}"  width="16px">
            <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
            Календарь
        </a>
    </li>

    @guest

    @else
        @if(Request::is('user'))
            <li class="nav-item m-1 ml-2">
                <button class="btn btn-primary text-white font-weight-normal" >
                    <div class="class row justify-content-left">
                        <img src="{{ asset('assets/icons/icon_messages.svg') }}" width="16px">
                        <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
                        Сообщения
                    </div>
                </button>
            </li>
            @else
            <li class="nav-item  m-1 ml-2">
                <a href="{{ route('user.dashboard')}}" class="nav-link text-white font-weight-normal; " >
                    <img src="{{ asset('assets/icons/icon_messages.svg') }}"  width="16px">
                    <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
                    Сообщения
                </a>
            </li>
            @endif
    @endguest


    <li class="nav-item  m-1 ml-2">
        <a href="#" class="nav-link text-white font-weight-normal " >
            <img src="{{ asset('assets/icons/icon_eduresrc.svg') }}"  width="16px">
            <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
            Обучающие ресурсы
        </a>
    </li>

    <li class="nav-item m-1 ml-2">
        <a href="#" class="nav-link text-white font-weight-normal " >
            <img src="{{ asset('assets/icons/icon_help.svg') }}"  width="16px">
            <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
            Помощь
        </a>
    </li>
    </ul>
    {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>--}}
</div>
@endif
