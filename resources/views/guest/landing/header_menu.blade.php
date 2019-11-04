<div class="row justify-content-center">
    <div class="dropdown">
        <button class="nav-item active  site-btn-info-sm col-md-12" type="button" id="dropdownMenuButton"
                data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
            <strong>@lang('content.ent')</strong>
            <i class="dropdown-toggle"></i>
        </button>
        <div class="dropdown-menu" style="background-color: #3B3444" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" style="background-color: #3B3444"
               href="{{ route('student.showLoginForm') }}">@lang('content.asus')</a>
            <a class="dropdown-item" style="background-color: #3B3444"
               href="{{ route('teacher.showLoginForm') }}">@lang('content.astch')</a>
        </div>
    </div>
    <div class="dropdown">
        <button class="nav-item active  site-btn-danger-sm col-md-12" type="button" id="dropdownMenuButton"
                data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
            <strong>@lang('content.reg')</strong>
            <i class="dropdown-toggle"></i>
        </button>
        <div class="dropdown-menu" style="background-color: #3B3444" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" style="background-color: #3B3444"
               href="{{ route('student.showRegisterForm') }}">@lang('content.asus')</a>
            <a class="dropdown-item" style="background-color: #3B3444"
               href="{{ route('teacher.showRegisterForm') }}">@lang('content.astch')</a>
        </div>
    </div>
</div>

