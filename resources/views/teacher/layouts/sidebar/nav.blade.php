<li class="nav-item m-1 ml-2">
    <a href="{{ route('home') }}" class="nav-link text-white font-weight-normal ">
        <img src="{{ asset('assets/icons/icon_home.svg') }}"  width="16px">
        <i class=" mr-3 "></i>
         Главная
    </a>
</li>

@if( Request::is('teacher'))
    <li class="nav-item m-1 ml-2">
        <form class="p-0 m-0" action="{{route('teacher.dashboard')}}">
            <button class="btn btn-primary text-white font-weight-normal" type="submit">
                <div class="row justify-content-left">
                    <img src="{{ asset('assets/icons/icon_timer.svg') }}" width="16px">
                    <i class=" mr-3  "></i>
                    Панель учителя
                </div>
            </button>
        </form>
    </li>
@else
    <li class="nav-item  m-1 ml-2">
        <a href="{{route('teacher.dashboard')}}" class="nav-link text-white font-weight-normal " >
            <img src="{{ asset('assets/icons/icon_timer.svg') }}"  width="16px">
            <i class=" mr-3 "></i>
            Панель учителя
        </a>
    </li>
@endif

{{--<li class="nav-item m-2">--}}
{{--    <a href="{{route('teacher.course.index')}}" class="nav-link text-white font-weight-normal " >--}}
{{--        <i class="fas fa-graduation-cap"></i> Курсы--}}
{{--    </a>--}}
{{--</li>--}}

@if(Request::is('teacher/course') || Request::is('teacher/course/*'))
    <li class="nav-item m-1 ml-2">
        <form class="p-0 m-0" action="{{route('teacher.course.index')}}">
            <button class="btn btn-primary text-white font-weight-normal" type="submit">
                <div class="row justify-content-left">
                    <img src="{{ asset('assets/icons/icon_hat.svg') }}" width="16px">
                    <i class=" mr-3  "></i>
                    Курсы
                </div>
            </button>
        </form>
    </li>
@else
    <li class="nav-item  m-1 ml-2">
        <a href="{{route('teacher.course.index')}}" class="nav-link text-white font-weight-normal " >
            <img src="{{ asset('assets/icons/icon_hat.svg') }}"  width="16px">
            <i class=" mr-3 "></i>
            Курсы
        </a>
    </li>
@endif
