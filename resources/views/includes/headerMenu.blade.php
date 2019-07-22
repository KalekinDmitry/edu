<div class="dropdown">
    <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
        <strong>{{ Auth::user()->name }}</strong>
    </button>
    <div class="dropdown-menu" style="background-color: #3B3444" aria-labelledby="dropdownMenuButton">

        @auth('web')
            <a class="dropdown-item" style="background-color: #3B3444"
               href="{{ route('users_profile', Auth::user()->id) }}"><strong>Proffile</strong></a>
            <a class="dropdown-item" style="background-color: #3B3444" href="#">My coureses</a>
            <a class="dropdown-item" style="background-color: #3B3444" href="#">Messages</a>
        @endauth

        @auth('teacher')
            <a class="dropdown-item" style="background-color: #3B3444"
               href="{{ route('teacher_profile', Auth::user()->id) }}"><strong>Proffile</strong></a>
            <a class="dropdown-item" style="background-color: #3B3444" href="{{ route('course.create') }}">Create
                course</a>
            <a class="dropdown-item" style="background-color: #3B3444" href="#">Messages</a>
        @endauth

        @auth('admin')
            <a class="dropdown-item" style="background-color: #3B3444"
               href="{{ route('admin_profile', Auth::user()->id) }}"><strong>Proffile</strong></a>
            <a class="dropdown-item" style="background-color: #3B3444" href="#">Messages</a>
        @endauth

        <a class="dropdown-item" style="background-color: #3B3444" href="{{ route('logout') }}">Logout</a>
    </div>
</div>
