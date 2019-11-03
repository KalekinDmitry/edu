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
            <div class="row justify-content-left">
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
