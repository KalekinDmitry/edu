<div class="vertical-nav bg-dark" id="sidebar">
  <div class="py-4 px-3   pb-0 mb-0 bg-dark">
  <button class="btn btn-primary" data-toggle="collapse" data-target="#navbarProfile"  style="padding-left: 0; margin-left: 8px; width: 184px">
    <div class="media d-flex align-items-center">
      <img src="https://res.cloudinary.com/mhmd/image/upload/v1556074849/avatar-1_tcnd60.png" alt="..." width="24" class="mr-3 rounded-circle ">
      <div class="media-body p-0 m-0">
        <p class="m-0 p-0 font-weight-bold text-light" style="font-size:11px; line-height: 12px">Jason Doe</p>
        <p class="font-weight-light text-muted m-0 p-0" style="font-size:11px; line-height: 12px">web.dev@gmail.com</p>
      </div>
      <img src="{{ asset('assets/icons/icon_threedots.svg') }}" style="opacity: 0.3" class="pb-1" width="4px">
    </div>
  </button>
  </div>

  <hr class="pt-0 mt-0" style="background-color:white; opacity: 0.1">

  {{-- <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">Main</p> --}}

  <ul class="nav flex-column bg-dark mb-0">

    <li class="nav-item  m-1 ml-2">
      <a href="#" class="nav-link text-white font-weight-normal " style="opacity: 0.7; font-size:13px; line-height: 13px">
        <img src="{{ asset('assets/icons/icon_home.svg') }}" class="pb-1" width="16px">
        <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
        Новости
      </a>
    </li>

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

    <li class="nav-item m-1 ml-2">
        <button class="btn btn-primary" data-toggle="collapse" data-target="#navbarToggleExternalContent"  style="padding-left: 0; margin-left: 8px; width: 184px">
            <div class="col-md-9 col-sm-9 col-sx-9 text-white font-weight-normal" style="padding: 0; font-size:13px; line-height: 13px">
                    <img src="{{ asset('assets/icons/icon_messages.svg') }}"  sytle="margin-left: 0" width="16px">
                    <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
                    Сообщения
            </div>
        </button>
    </li>

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



    {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
 --}}


  </ul>

  {{-- <p class="text-gray font-weight-bold text-uppercase px-3 small py-4 mb-0">Charts</p> --}}

  {{-- <ul class="nav flex-column bg-dark mb-0">
    <li class="nav-item">
      <a href="#" class="nav-link text-light">
                <i class="fa fa-area-chart mr-3 text-primary fa-fw"></i>
                Area charts
            </a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link text-light">
                <i class="fa fa-bar-chart mr-3 text-primary fa-fw"></i>
                Bar charts
            </a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link text-light">
                <i class="fa fa-pie-chart mr-3 text-primary fa-fw"></i>
                Pie charts
            </a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link text-light">
                <i class="fa fa-line-chart mr-3 text-primary fa-fw"></i>
                Line charts
            </a>
    </li>
  </ul> --}}
</div>
<!-- End vertical navbar -->




<!-- Page content holder -->
<div class="page-content" id="content">
    <div class="collapse" id="navbarToggleExternalContent">


        <div class="row ml-0">
            <div class="card col-md-5 py-0 px-0" style="border-radius:0">
                <div class="row" style="height:56px">

                    <p class="text-dark font-weight-bold pl-5 pt-3">
                        <img class="mr-2 pb-1" style="opacity: 0.7" src="{{ asset('assets/icons/icon-triangleleftsm.svg') }}" width="16px">
                        Сообщения
                    </p>
                </div>

                <input class="form-control form-control-lg" style="height: 64px; font-size:15px; border-radius:0; border-left: 0; border-right:0; background-color:#FBFBFB"type="text" placeholder="Поиск">

                <div class="py-4 px-3   pb-0 mb-0" style="background-color: #FBFBFB ">
                    <div class="media d-flex align-items-center">
                        <img src="https://res.cloudinary.com/mhmd/image/upload/v1556074849/avatar-1_tcnd60.png" alt="..." width="40" class="mr-3 rounded-circle ">
                        <div class="media-body p-0 m-0">
                            <p class="m-0 p-0 font-weight-bold text-dark" style="font-size:16px; line-height: 24px">Jason Doe</p>
                            <p class="font-weight-light text-muted m-0 p-0" style="font-size:16px; line-height: 16px">Вы: Да, я видел. Мне кажется наличие трансф...</p>
                        </div>
                    </div>
                </div>

                <hr class="p-0 m-0">
                <div class="py-4 px-3   pb-0 mb-0" >
                    <div class="media d-flex align-items-center">
                        <img src="https://res.cloudinary.com/mhmd/image/upload/v1556074849/avatar-1_tcnd60.png" alt="..." width="40" class="mr-3 rounded-circle ">
                        <div class="media-body p-0 m-0">
                            <p class="m-0 p-0 font-weight-bold text-dark" style="font-size:16px; line-height: 24px">Jason Doe</p>
                            <p class="font-weight-light text-dark m-0 p-0" style="font-size:16px; line-height: 16px">Вы: Да, я видел. Мне кажется...</p>
                            </div>
                    </div>
                </div>
                <hr class="p-0 m-0">
                <div class="py-4 px-3   pb-0 mb-0" >
                    <div class="media d-flex align-items-center">
                        <img src="https://res.cloudinary.com/mhmd/image/upload/v1556074849/avatar-1_tcnd60.png" alt="..." width="40" class="mr-3 rounded-circle ">
                        <div class="media-body p-0 m-0">
                            <p class="m-0 p-0 font-weight-bold text-dark" style="font-size:16px; line-height: 24px">Jason Doe</p>
                            <p class="font-weight-light m-0 p-0" style="font-size:16px; line-height: 16px">Вы: Да, я видел. Мне кажется наличие трансф...</p>
                            </div>
                    </div>
                </div>
            </div>


            <div  class="card col-md-7 py-0 px-0" style="border-radius:0; background-color: #FBFBFB ">
                <div class="row" style="background-color: white; padding:16px; margin: 0; box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.12)">
                        <img src="https://res.cloudinary.com/mhmd/image/upload/v1556074849/avatar-1_tcnd60.png" alt="..." width="24" class="mr-3 rounded-circle ">
                        <p class="m-0 p-0 font-weight-bold text-dark" style="font-size:16px; line-height: 20px">Jason Doe</p>
                </div>

                <div class="row mt-4 ml-4 mr-5">
                    {{-- @foreach($invites as $invite) --}}
                        <div class="card col-md-9" style="padding: 0; border:0; border-radius:4px; box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);">
                            <div class="card-header d-flex text-white pb-1 pt-2"
                                    style="background: #185dd0; background: -webkit-gradient(linear, left top, right top, from(#185dd0), to(#7076fc)); background: linear-gradient(to right, #185dd0 0%, #7076fc 100%);">
                                {{-- <p class="mb-0 pb-0 font-weight-bold">{{ $invite->message_title }}</p> --}}
                                <img src="https://res.cloudinary.com/mhmd/image/upload/v1556074849/avatar-1_tcnd60.png" alt="..." width="32" class="mr-3 rounded-circle ">
                                <p class="m-0 p-0 mt-2 font-weight-bold text-white" style="font-size:16px; line-height: 20px">Jason Doe</p>
                            </div>
                            <div class="card-body">
                                <p class="text-dark" >Здравствуйте! Я хотле бы вам предложить пройти курс по веб-рзаработке</p>
                                <div class="d-flex flex-wrap">
                                    <form action="#"
                                            method="post"
                                            enctype="multipart/form-data" style="margin-right: 5px;">
                                        <input type="hidden" name="_method" value="put">
                                        <input type="hidden" name="newIncludedUsers[]" value="#">
                                        {{ csrf_field() }}
                                        <button class="btn btn-primary" type="submit"
                                                value="update">@lang('content.flw')
                                            <i class="fa fa-angle-right"></i></button>
                                    </form>
                                    <form onsubmit="if(confirm('Realy delete?')){return true}else{return false}"
                                            action="#"
                                            method="post">
                                        <input type="hidden" name="_method" value="delete">
                                        {{ csrf_field() }}
                                        <button type="submit"
                                                class="btn btn-danger col-md-12">@lang('content.del')</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <br>
                    {{-- @endforeach --}}
                </div>

                <div class="row justify-content-end mt-4 ml-4 mr-5">
                    <div class="card col-md-9" style="padding: 16px; border: 0; border-radius:4px; box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);">
                        <div class="media d-flex align-items-center">
                            <img src="https://res.cloudinary.com/mhmd/image/upload/v1556074849/avatar-1_tcnd60.png" alt="..." width="32" class="mr-3 rounded-circle ">
                            <div class="media-body p-0 m-0">
                                <p class="m-0 p-0 font-weight-bold text-dark" style="font-size:16px; line-height: 24px">Jason Doe</p>
                                <p class="font-weight-light m-0 p-0" style="font-size:16px; line-height: 16px">Благодарю</p>
                                </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>












    </div>











































































































    





































































































































































































    



    <div class="collapse" id="navbarProfile">
     
            <div class="card col-md-12" style="border-radius:0">
                <div class="row pb-6" style="height:56px">

                    <p class="text-dark font-weight-bold pl-5 pt-3">
                        <img class="mr-2" style="opacity: 0.7" src="{{ asset('assets/icons/icon-triangleleftsm.svg') }}" width="16px">
                        Профиль
                    </p>
                </div>

                
                   <div class="container col-md-12">
                        <div class="card mr-6" style="padding: 0; border:0; border-radius:4px; box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);">
                            <div class="card-header d-flex text-dark pb-1 pt-2">
                                
                               
                                <p class="text-dark font-weight-bold pl-5 pt-3" style="font-size:16px; line-height: 20px">Персональная информация</p>
                            </div>
                    <div class="card-body">
                            <div class="row ml-0">

                            <div class="container col-md-6 m-0">
                            <p class="text-grey font-weight-bold" style="font-size:13px; line-height: 20px">Имя</p>
                            <input type="name" class="form-control text-dark" placeholder="Jason">
                            <p class="text-grey font-weight-bold" style="font-size:13px; line-height: 20px; margin-top: 20px">Фамилия</p>
                            <input type="name" class="form-control" placeholder="Doe">
                            <p class="text-grey font-weight-bold" style="font-size:13px; line-height: 20px; margin-top: 20px">Пол</p>
                            <input type="name" class="form-control" placeholder="Мужской">
                            <p class="text-grey font-weight-bold" style="font-size:13px; line-height: 20px; margin-top: 20px">Ваша временная зона (таймзона)</p>
                            <input type="name" class="form-control" placeholder="Европа/Москва">
                            <p class="text-grey font-weight-bold" style="font-size:13px; line-height: 20px; margin-top: 20px">Email</p>
                            <input type="name" class="form-control" placeholder="user@mail.com">
                            </div>

                            <div class="container col-md-6 m-0" style="text-align: right">
                            <img src="https://res.cloudinary.com/mhmd/image/upload/v1556074849/avatar-1_tcnd60.png" alt="..." width="160" class="mr-3 rounded-circle ">
                            </div>

                            </div>
                     </div>
                            </div>
                        </div>
                        <br>
                        <div class="container col-md-12">
                        <div class="card mr-6" style="margin-top: 24px; padding: 0; border:0; border-radius:4px; box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);">
                            <div class="card-header d-flex text-dark pb-1 pt-2">
                                
                               
                                <p class="text-dark font-weight-bold pl-5 pt-3" style="font-size:16px; line-height: 20px">Опасная зона</p>
                            </div>
                    <div class="card-body">
                            <div class="row ml-0">

                            <div class="container col-md-4 m-0">
                            <button class="btn btn-danger">Удалить аккаунт из системы</button>
                            </div>

                            <div class="container col-md-6 m-0">
                            <p class="text-grey font-weight-bold" style="font-size:13px; line-height: 20px">При удаление аккаунта пропадет весь ваш прогресс и активность,
а также вы потеряете доступ к системе</p>
                            </div>

                            </div>
                     </div>
                            </div>
                        </div>
                </div>
            </div>
            
     
    </div>
  <!-- Demo content -->
  {{-- <h2 class="display-4 text-white">Bootstrap vertical nav</h2>
  <p class="lead text-white mb-0">Build a fixed sidebar using Bootstrap 4 vertical navigation and media objects.</p>
  <p class="lead text-white">Snippet by <a href="https://bootstrapious.com/snippets" class="text-white">
        <u>Bootstrapious</u></a>
  </p>
  <div class="separator"></div>
  <div class="row text-white">
    <div class="col-lg-7">
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
        dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
        dolor.
      </p>
      <div class="bg-white p-5 rounded my-5 shadow-sm">
        <p class="lead font-italic mb-0 text-muted">"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
          irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
      </div>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
        dolor.
      </p>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
        dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
        dolor.
      </p>
    </div>
    <div class="col-lg-5">
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
        dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
        dolor.
      </p>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
        dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
        dolor.
      </p>
    </div>
  </div> --}}

</div>

