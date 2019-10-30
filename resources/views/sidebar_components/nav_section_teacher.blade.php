@if(Request::is('teacher'))
<li class="nav-item m-1 ml-2">
    <button class="btn btn-primary text-white font-weight-normal">
        <div class="row justify-content-left">
            <img src="{{ asset('assets/icons/icon_hat.svg') }}" width="16px">
            <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
            Курсы
        </div>
    </button>
</li>
@else
<li class="nav-item  m-1 ml-2">
    <a href="{{route('teacher.dashboard')}}" class="nav-link text-white font-weight-normal " >
        <img src="{{ asset('assets/icons/icon_hat.svg') }}"  width="16px">
        <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
        Курсы
    </a>
</li>
@endif


<li class="nav-item  m-1 ml-2">
    <a href="#" class="nav-link text-white font-weight-normal " >
        <img src="{{ asset('assets/icons/icon_courses.svg') }}"  width="16px">
        <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
        Продукты
    </a>
</li>

<li class="nav-item  m-1 ml-2">
    <a href="#" class="nav-link text-white font-weight-normal " >
        <img src="{{ asset('assets/icons/icon_lightning.svg') }}"  width="16px">
        <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
        Задания
    </a>
</li>

<li class="nav-item  m-1 ml-2">
    <a href="#" class="nav-link text-white font-weight-normal " >
        <img src="{{ asset('assets/icons/icon_users.svg') }}"  width="16px">
        <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
        Пользователи
    </a>
</li>

<li class="nav-item  m-1 ml-2">
    <a href="#" class="nav-link text-white font-weight-normal " >
        <img src="{{ asset('assets/icons/icon_file.svg') }}"  width="16px">
        <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
        Файлы
    </a>
</li>

<li class="nav-item  m-1 ml-2">
    <a href="#" class="nav-link text-white font-weight-normal " >
        <img src="{{ asset('assets/icons/icon_gamepad.svg') }}"  width="16px">
        <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
        Геймификация
    </a>
</li>


<li class="nav-item  m-1 ml-2">
    <a href="#" class="nav-link text-white font-weight-normal " >
        <img src="{{ asset('assets/icons/icon_cogwheel.svg') }}"  width="16px">
        <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
        Настройки
    </a>
</li>

<li class="nav-item  m-1 ml-2">
    <a href="#" class="nav-link text-white font-weight-normal " >
        <img src="{{ asset('assets/icons/icon_help.svg') }}"  width="16px">
        <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
        Помощь
    </a>
</li>
