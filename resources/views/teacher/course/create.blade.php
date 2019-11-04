@extends('teacher.layouts.app')

@section('content')
    <!-- Create section -->
{{--    <section class="classroom-section set-bg fixed" style="height: 1100px;"--}}
{{--             data-setbg="{{config('static.static')}}/img/bg.jpg">--}}
{{--        <div class="container" style="padding-top: 220px;">--}}
{{--            <div class="row justify-content-center">--}}
{{--                <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-xl-8 card"--}}
{{--                     style="border: 0; padding: 0;">--}}
{{--                    <div class="text-white card-header"--}}
{{--                         style="background: #185dd0; background: -webkit-gradient(linear, left top, right top, from(#185dd0), to(#7076fc)); background: linear-gradient(to right, #185dd0 0%, #7076fc 100%);">--}}
{{--                        <h2 style="margin-top: 10px;"><strong--}}
{{--                                    style="padding-left: 20px;">@lang('content.creature')</strong></h2>--}}
{{--                    </div>--}}
{{--                    <form class="form-horizontal card-body" action="{{route('course.store')}}" method="post"--}}
{{--                          enctype="multipart/form-data" style="padding: 32.5px;">--}}
{{--                        <input type="hidden" name="_token" value="{{ csrf_token() }}">--}}

{{--                        --}}{{-- Form include --}}
{{--                        @include('teacher.course.partials.form')--}}
{{--                        <label for="">@lang('content.choosecrscover')</label><br>--}}

{{--                        <input type="file" name="image" style="margin-bottom: 15px;">--}}

{{--                        <button class="site-btn" type="submit">@lang('content.create')<i class="fa fa-angle-right"></i></button>--}}

{{--                        <a href="{{route('teacher.dashboard')}}" class="site-btn-danger">@lang('content.cancel')</a>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <br>--}}
{{--    </section>--}}

    <div class="card course" style="background-color:#fbfbfb; border:0">
        <div class="row justify-content-left ml-0" style="height:56px; background-color:white; border-bottom: 1px; border-bottom-color:rgba(0,0,0,0.6); margin-bottom:1px">
            <p class="text-dark font-weight-bold pl-2 pt-3">
                <a id="sidebarCollapse"  class="px-4 mb-4">
                    <img class="mr-2" style="opacity: 0.7" src="{{ asset('assets/icons/icon-triangleleftsm.svg') }}" width="22px">
                    Создание курса
                </a>
            </p>
        </div>


        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-courseInfo" role="tab" aria-controls="nav-home" aria-selected="true">Информация о курсе</a>
                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-courseContent" role="tab" aria-controls="nav-profile" aria-selected="false">Содержание курса</a>
                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-students" role="tab" aria-controls="nav-contact" aria-selected="false">Студенты</a>
                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-access" role="tab" aria-controls="nav-contact" aria-selected="false">Доступ</a>
                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-stat" role="tab" aria-controls="nav-contact" aria-selected="false">Статистика</a>
            </div>
        </nav>
        <div class="tab-content text-dark" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-courseInfo" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="row justify-content-center m-4" style="height:100vh; background-color:#fbfbfb">
                    <div class="card" style="width:90%; box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1); border:0;">

                        <div class="card-header text-dark bg-white" >
                            Название и описание
                        </div>
                        @include('teacher.course.partials.form')
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="nav-courseContent" role="tabpanel" aria-labelledby="nav-profile-tab">
                <div class="row justify-content-center m-4" style="height:100vh; background-color:#fbfbfb">
                    <div class="card" style="width:90%; box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1); border:0;">
                        Привеееет Андреееей!! Ну где же ты, ну обними меняяяя скорееей!!!
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="nav-students" role="tabpanel" aria-labelledby="nav-contact-tab">
                bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb
            </div>

            <div class="tab-pane fade" id="nav-access" role="tabpanel" aria-labelledby="nav-contact-tab">
                CCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCC
            </div>

            <div class="tab-pane fade" id="nav-stat" role="tabpanel" aria-labelledby="nav-contact-tab">
                DDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDD
            </div>
        </div>
    </div>

    <!-- Create section end -->
@endsection
