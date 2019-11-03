@extends('layouts.app')

@section('content')

    <div class="card course" style="background-color:#fbfbfb; border:0">

{{--        @include('temp.base_components_example')--}}


        <div class="row justify-content-left ml-0" style="height:56px; background-color:white; border-bottom: 1px; border-bottom-color:rgba(0,0,0,0.6); margin-bottom:1px">
            <p class="text-dark font-weight-bold pl-2 pt-3">
                <a id="sidebarCollapse"  class="px-4 mb-4">
                    <img class="mr-2" style="opacity: 0.7" src="{{ asset('assets/icons/icon-triangleleftsm.svg') }}" width="22px">
                    Редактирование курса
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
                        <form class="m-0 p-0"action="{{route('course.update', $course)}}" method="post" enctype="multipart/form-data">
                            <div class="card-body" style="min-width:548px; max-width: 548px">
                                <input type="hidden" name="_method" value="put">
                                {{ csrf_field() }}
                                @include('teacher.course.partials.form')
                                <div class="row justify-content-left mx-0">
                                    <button class="btn btn-primary mr-1"  type="submit">Сохранить</button>
                                    <button class="btn btn-light">Сбросить</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="nav-courseContent" role="tabpanel" aria-labelledby="nav-profile-tab">
                <div class="justify-content-end m-4" style="height:200vh; background-color:#fbfbfb">

                    @foreach($modules as $module)
                        <div class="row col-md-12 my-3 mx-0 p-3 bg-white" style=" border-radius:4px; box-shadow: 0px 2px 4px rgba(0,0,0,0.1)">
                                <div class="col-md-3 mx-0">
                                    <img style="border-radius: 4px" src="{{config('static.static')}}/img/bg.jpg" width="128">
                                </div>
                                <div class="col-md-6 mx-0 p-0">
                                    <p class="font-weight-bold text-dark">Module: {{$module->name}}</p>
                                </div>
                                <form action="{{route('module.edit', [$course->id, $module->id])}}" class=" row justify-content-end col-md-3 m-0 p-0">
                                    <button class="btn btn-light my-4" style="font-size: 13px; line-height:28px">
                                        Редактировать
                                    </button>
                                </form>

                        </div>
                        @foreach($module->lessons as $lesson)
                            <div class="row m-0">
                                <div class="col-md-1 mx-0">
                                    <div class="col-md-6" style=" height: 100%; border: 0; border-right-width: 1px; border-right-color: rgba(0,0,0,0.1); border-style: solid"></div>
                                </div>
                                <div class="row col-md-11 my-3 mx-0 p-3 bg-white" style=" border-radius:4px; box-shadow: 0px 2px 4px rgba(0,0,0,0.1)">
                                    <div class="col-md-3 mx-0">
                                        <img style="border-radius:4px" src="{{config('static.static')}}/img/bg.jpg"  width="128px">
                                    </div>
                                    <div class="col-md-6">
                                        <p class="text-dark">Lesson: {{$lesson->title}}</p>
                                        <p>Lesson: {{$lesson->excerpt}}</p>
                                    </div>
                                    <form action="{{route('lesson.edit', [$module->id, $lesson->id])}}" class="row justify-content-end col-md-3 m-0 p-0">
                                        <button class="btn btn-light  my-4"  style="font-size: 13px; line-height: 28px">Редактировать</button>
                                    </form>
                                </div>
                            </div>
                        @endforeach
                    @endforeach


{{--
{{--                        <div class="card" style="box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1); border:0;">--}}
{{--                            <div class="col-md-12">--}}
{{--                                <form onsubmit="if(confirm('Delete module?')){return true}else{return false}"--}}
{{--                                      action="{{route('module.destroy', [$course, $module])}}" method="post">--}}
{{--                                    <input type="hidden" name="_method" value="Delete">--}}
{{--                                    {{ csrf_field() }}--}}
{{--                                    <div class="row">--}}
{{--                                        <h5 class="col-md-8" style="font-size: 18px; padding-bottom:10px;">--}}
{{--                                            📂 {{$module->position + 1}}--}}
{{--                                            . {{$module->name}}</h5>--}}
{{--                                        <a class="site-btn-hollow col-md-3"--}}
{{--                                           href="{{route('module.edit', [$course->id, $module->id])}}"><i--}}
{{--                                                    class="fa fa-edit"></i>@lang('content.edit')</a>--}}
{{--                                        <button type="submit" class="site-btn-danger-sm col-md-1">X</button>--}}
{{--                                    </div>--}}
{{--                                </form>--}}
{{--                                <br>--}}
{{--                                <div class="list-group">--}}
{{--                                    @foreach($module->lessons as $lesson)--}}
{{--                                        <div class="row">--}}
{{--                                            <a style="border-width: 1px"--}}
{{--                                               href="{{ route('lesson.show', ['course'=>$course->id, 'lesson'=>$lesson->id]) }}"--}}
{{--                                               style="font-size: 14px;"--}}
{{--                                               class="list-group-item list-group-item-action col-md-8">📄{{ $lesson->title }}</a>--}}
{{--                                            <a class="site-btn-hollow col-md-3"--}}
{{--                                               href="{{route('lesson.edit', [$module->id, $lesson->id])}}"><i--}}
{{--                                                        class="fa fa-edit"></i></a>--}}
{{--                                            <form style="padding: 0" class="col-md-1"--}}
{{--                                                  onsubmit="if(confirm('Delete module?')){return true}else{return false}"--}}
{{--                                                  action="{{route('lesson.destroy', [$module, $lesson])}}"--}}
{{--                                                  method="post">--}}
{{--                                                <input type="hidden" name="_method" value="Delete">--}}
{{--                                                {{ csrf_field() }}--}}
{{--                                                <button type="submit" class="site-btn-danger col-md-12">X--}}
{{--                                                </button>--}}
{{--                                            </form>--}}
{{--                                        </div>--}}
{{--                                    @endforeach--}}
{{--                                    <div class="row">--}}
{{--                                        <a class="site-btn-info col-md-12"--}}
{{--                                           href="{{ route('lesson.create', $module->id) }}">✚</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        @endforeach--}}
                        <div class="card col-md-12 my-3 mx-0 p-3 " style="border-radius:4px; background-color:#fbfbfb">
                            <form action="{{ route('module.create', $course->id) }}" class="card-body p-0  row m-0">
                                <div class="col-md-10 m-0">
                                    <p class="text-muted font-weight-bold" style="font-size: 13px">Добавить новый компонент</p>
                                    <p class="text-muted" style="font-size: 13px">Добавьте черновик нового модуля. В любой момент вы сможете изменить его, а так же опубилковать</p>
                                </div>
                                <button class="btn btn-primary col-md-2" type="submit">@lang('content.addnm')</button>
                            </form>

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
    <!-- Courses section end -->
@endsection
