@extends('teacher.layouts.app')

@section('content')
<div class="card col-md-12 m-0" style="border-radius:0; background-color:#f6f6f6">
    <div class="row pb-6 m-0" style="height:56px">

        <p class="text-dark font-weight-bold pl-2 pt-3" style="opacity: 0.5">
            <img class="mr-4 ml-0"  src="{{ asset('assets/icons/icon-triangleleftsm.svg') }}" width="20px">
            Профиль
        </p>
    </div>


    <div class="container col-md-12 ml-4">
        <div class="card mr-6" style="padding: 0; border:0; border-radius:4px; box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);">
            <div class="card-header d-flex text-dark pb-1 pt-2" style="background-color:white">
                <p class="text-dark font-weight-bold pl-3 pt-3" style="font-size:16px; line-height: 20px">Персональная информация</p>
            </div>
            <div class="card-body">
                <div class="row ml-0">

                    <form class="form-horizontal card-body"
{{--                          action="{{route('teacher.settings_save', $teacher)}}"--}}
                            action="#"
{{--                          method="post"--}}
                          enctype="multipart/form-data">
                        <input type="hidden" name="_method" value="put">
                        {{ csrf_field() }}
                        <div class="container col-md-6 m-0">
                            <p class="text-grey font-weight-bold" style="font-size:13px; line-height: 20px">Имя</p>
                            <input type="name" name="name" class="form-control font-weight-bold text-dark"
                                   value="{{$teacher->name ?? ""}}"
                                   style="font-size:13px; line-height: 16px" placeholder="Jason">

                            <p class="text-grey font-weight-bold" style="font-size:13px; line-height: 20px; margin-top: 20px">Фамилия</p>
                            <input type="name" class="form-control font-weight-bold " style="font-size:13px; line-height: 16px" placeholder="Doe">

                            <p class="text-grey font-weight-bold" style="font-size:13px; line-height: 20px; margin-top: 20px">Пол</p>
                            <input type="name" class="form-control font-weight-bold " style="font-size:13px; line-height: 16px" placeholder="Мужской">

                            <p class="text-grey font-weight-bold" style="font-size:13px; line-height: 20px; margin-top: 20px">Ваша временная зона (таймзона)</p>
                            <input type="name" class="form-control font-weight-bold " style="font-size:13px; line-height: 16px" placeholder="Европа/Москва">

                            <p class="text-grey font-weight-bold" style="font-size:13px; line-height: 20px; margin-top: 20px">Email</p>
                            <input type="name" name="email" class="form-control font-weight-bold "
                                   value="{{$teacher->email ?? ""}}"
                                   style="font-size:13px; line-height: 16px" placeholder="user@mail.com">
                        </div>
                        <div class="row justify-content-start m-3">
                            <button type="submit" class="btn btn-primary">Сохранить</button>
                        </div>
                    </form>


                    <div class="container col-md-6 m-0" style="text-align: right">
                        <div class="row justify-content-end m-0 p-0">
                            <img src="https://res.cloudinary.com/mhmd/image/upload/v1556074849/avatar-1_tcnd60.png" alt="..." width="160" height="160" class="mr-3 rounded-circle ">
                        </div>
                        <div class="row justify-content-end mr-0">
                            <div class="card mt-3" style="width: 192px; text-align: left; border: 0">
                                <ul class="list-group list-group-flush py-0 px-0" style="box-shadow: 0px 4px 24px rgba(0,0,0,0.12)">
                                    <li class="list-group-item text-dark" style="font-size: 12px; border: 0">Загрузить изображение</li>
                                    <li class="list-group-item text-dark"style="font-size: 12px; border: 0">Фотография из Facebook</li>
                                    <li class="list-group-item text-dark"style="font-size: 12px; border: 0">Gravatar</li>
                                    <li class="list-group-item text-dark"style="font-size: 12px; border: 0">Удалить изображение</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="container col-md-12 ml-4">
        <div class="card mr-6 mb-3" style="margin-top: 24px; padding: 0; border:0; border-radius:4px; box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);">
            <div class="card-header d-flex text-dark pb-1 pt-2" style="background-color:white">
                <p class="text-dark font-weight-bold pl-5 pt-3" style="font-size:16px; line-height: 20px">Опасная зона</p>
            </div>
            <div class="card-body">
                <div class="row ml-0">
                    <div class="container col-md-4 m-0">
                        <button class="btn btn-light" style="border-color:red; color:red">Удалить аккаунт из системы</button>
                    </div>

                    <div class="container col-md-6 m-0">
                        <p class="text-grey font-weight-bold" style="font-size:13px; line-height: 20px; opacity: 0.75">При удаление аккаунта пропадет весь ваш прогресс и активность,
                            а также вы потеряете доступ к системе</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

{{--@section('head')--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1.0">--}}
{{--    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">--}}
{{--    <meta name="author" content="GeeksLabs">--}}
{{--    <meta name="keyword"--}}
{{--          content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">--}}
{{--    <link href="{{ config('static.static') }}/img/favicon.ico" rel="shortcut icon"/>--}}

{{--    <!-- Bootstrap CSS -->--}}
{{--    <link href="{{ asset('css/admin/bootstrap.min.css') }}" rel="stylesheet">--}}
{{--    <!-- font icon -->--}}
{{--    <link href="{{ asset('css/admin/elegant-icons-style.css' )}}" rel="stylesheet"/>--}}
{{--    <link href="{{ asset('css/admin/font-awesome.min.css') }}" rel="stylesheet"/>--}}
{{--    <!-- full calendar css-->--}}
{{--    <link href="{{ asset('css/admin/bootstrap-fullcalendar.css') }}" rel="stylesheet"/>--}}
{{--    <link href="{{ asset('css/admin/fullcalendar2.css') }}" rel="stylesheet"/>--}}
{{--    <!-- easy pie chart-->--}}
{{--    <link href="{{ asset('css/admin/jquery.easy-pie-chart.css') }}" rel="stylesheet" type="text/css"--}}
{{--          media="screen"/>--}}
{{--    <!-- owl carousel -->--}}
{{--    <link rel="stylesheet" href="{{ asset('css/admin/owl.carousel.css') }}" type="text/css">--}}
{{--    <link href="{{ asset('css/admin/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet">--}}
{{--    <!-- Custom styles -->--}}
{{--    <link rel="stylesheet" href="{{ asset('css/admin/fullcalendar.css') }}">--}}
{{--    <link href="{{ asset('css/admin/widgets.css') }}" rel="stylesheet">--}}
{{--    <link href="{{ asset('css/admin/style.css') }}" rel="stylesheet">--}}
{{--    <link href="{{ asset('css/admin/style-responsive.css') }}" rel="stylesheet"/>--}}
{{--    <link href="{{ asset('css/admin/xcharts.min.css') }}" rel=" stylesheet">--}}
{{--    <link href="{{ asset('css/admin/jquery-ui-1.10.4.min.css') }}" rel="stylesheet">--}}

{{--    <!-- bootstrap theme -->--}}
{{--    <link href="{{ asset('css/admin/bootstrap-theme.css') }}" rel="stylesheet">--}}
{{--@endsection--}}

{{--@section('content')--}}
{{--    <section class="content-section set-bg fixed"--}}
{{--             data-setbg="{{config('static.static')}}/img/bg.jpg">--}}
{{--        <div class="container" style="padding-top: 200px;">--}}
{{--            <div class="row">--}}
{{--                <section class="wrapper">--}}
{{--                    @include('teacher.settings.components.owninformation')--}}
{{--                    @include('teacher.settings.components.addpanel')--}}
{{--                </section>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--@endsection--}}

{{--@section('scripts')--}}
{{--    <!-- javascripts -->--}}
{{--    <script src="{{ asset('js/admin/jquery.js') }}"></script>--}}
{{--    <script src="{{ asset('js/admin/jquery-ui-1.10.4.min.js') }}"></script>--}}
{{--    <script src="{{ asset('js/admin/jquery-1.8.3.min.js') }}"></script>--}}
{{--    <script type="text/javascript" src="{{ asset('js/admin/jquery-ui-1.9.2.custom.min.js') }}"></script>--}}
{{--    <!-- bootstrap -->--}}
{{--    <script src="{{ asset('js/admin/bootstrap.min.js') }}"></script>--}}
{{--    <!-- nice scroll -->--}}
{{--    <script src="{{ asset('js/admin/jquery.scrollTo.min.js') }}"></script>--}}
{{--    <script src="{{ asset('js/admin/jquery.nicescroll.js') }}" type="text/javascript"></script>--}}
{{--    <!-- charts scripts -->--}}
{{--    <script src="{{ asset('js/admin/jquery.knob.js') }}"></script>--}}
{{--    <script src="{{ asset('js/admin/jquery.sparkline.js') }}" type="text/javascript"></script>--}}
{{--    <script src="{{ asset('js/admin/jquery.easy-pie-chart.js') }}"></script>--}}
{{--    <script src="{{ asset('js/admin/owl.carousel.js') }}"></script>--}}
{{--    <!-- jQuery full calendar -->--}}
{{--    <--}}
{{--    <script src="{{ asset('js/admin/fullcalendar.min.js') }}"></script>--}}
{{--    <!-- Full Google Calendar - Calendar -->--}}
{{--    <script src="{{ asset('js/admin/fullcalendar2.js') }}"></script>--}}
{{--    <!--script for this page only-->--}}
{{--    <script src="{{ asset('js/admin/calendar-custom.js') }}"></script>--}}
{{--    <script src="{{ asset('js/admin/jquery.rateit.min.js') }}"></script>--}}
{{--    <!-- custom select -->--}}
{{--    <script src="{{ asset('js/admin/jquery.customSelect.min.js') }}"></script>--}}
{{--    <script src="{{ asset('js/admin/Chart2.js') }}"></script>--}}
{{--@endsection--}}
