
@if(!Request::is('user/login') && !Request::is('teacher/login') && !Request::is('user/register') && !Request::is('teacher/register'))
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
        @if(Request::is('teacher/*') || Request::is('teacher'))
            @include('sidebar_components.nav_section_teacher')
        @endif

        @if(Request::is('user') || Request::is('user/*'))
            @include('sidebar_components.nav_section_student')
        @endif
    </ul>
    {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>--}}
</div>
@endif
