{{--
@auth('web') --}}
    <div class="media d-flex align-items-center">
        <img src="https://res.cloudinary.com/mhmd/image/upload/v1556074849/avatar-1_tcnd60.png" alt="..." width="24" class="mr-3 rounded-circle ">
        <div class="media-body p-0 m-0">
            <p class="m-0 p-0 font-weight-bold text-light" style="font-size:11px; line-height: 12px">{{ Auth::user()->name }}</p>
            <p class="font-weight-light text-muted m-0 p-0" style="font-size:11px; line-height: 12px">{{ Auth::user()->email}}</p>
        </div>
        <div class="dropdown">
            <a href="#" class="p-4" id="profileDropdown" data-toggle="dropdown"  aria-haspopup="ture" aria-expanded="false">
                <img src="{{ asset('assets/icons/icon_threedots.svg') }}" style="opacity: 0.3;" class="pb-1" width="4px">
            </a>
            <div class="dropdown-menu " style="border: 0; margin-left:-145px; margin-top: -50px" aria-labelledby="profileDropdown">
                @if(Request::is('teacher') || Request::is('teacher/*'))
                    <a class="dropdown-item " href="#">Профиль</a>
                    <hr class="m-0 p-0">
                    <a class="dropdown-item " href="{{ route('teacher.logout') }}">Выйти</a>
                @elseif(Request::is('user') || Request::is('user/*'))
                    <a class="dropdown-item " href="{{ route('user_settings') }}">Профиль</a>
                    <hr class="m-0 p-0">
                    <a class="dropdown-item " href="{{ route('user.logout') }}">Выйти</a>
                @endif
            </div>
        </div>
    </div>
{{-- @endauth --}}
