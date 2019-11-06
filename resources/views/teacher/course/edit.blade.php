@extends('teacher.layouts.app')

@section('title')
    <img class="mr-2" style="opacity: 0.7; margin-top:-8px" src="{{ asset('assets/icons/icon-triangleleftsm.svg') }}" width="24px">
    @lang('content.edcour')
@endsection

@section('content')
    <div class="card course" style="background-color:#fbfbfb; border:0">

        {{--        @include('temp.base_components_example')--}}


        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-courseInfo" role="tab" aria-controls="nav-home" aria-selected="true">Информация о курсе</a>
                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-courseContent" role="tab" aria-controls="nav-profile" aria-selected="false">Содержание курса</a>
            </div>
        </nav>

        <div class="tab-content text-dark m-0 p-0" id="nav-tabContent">
            <div class="tab-pane fade show active m-0 p-0" id="nav-courseInfo" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="row justify-content-center m-0 p-0" style="height:100%; background-color:#fbfbfb">
                    <div class="card" style="width:100%; box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1); border:0;">

                        <form class="m-0 p-0"action="{{route('teacher.course.update', $course)}}" method="post" enctype="multipart/form-data">
                            <div class="card-body" style="min-width:548px; max-width: 548px">
                                <input type="hidden" name="_method" value="put">
                                {{ csrf_field() }}
                                @include('teacher.course.partials.form')
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="nav-courseContent" role="tabpanel" aria-labelledby="nav-profile-tab">
                <div class="justify-content-end m-4" style="height:200vh; background-color:#fbfbfb">

                    @foreach($course->modules() as $module)
                        <div class="row col-md-12 my-3 mx-0 p-3 bg-white" style=" border-radius:4px; box-shadow: 0px 2px 4px rgba(0,0,0,0.1)">
                            <div class="col-md-3 mx-0">
                                <img style="border-radius: 4px" src="{{config('static.static')}}/img/bg.jpg" width="128">
                            </div>
                            <div class="col-md-6 mx-0 p-0">
                                <p class="font-weight-bold text-dark">Module: {{$module->name}}</p>
                            </div>
                            <form action="{{route('teacher.module.edit', [$course->id, $module->id])}}" class=" row justify-content-end col-md-3 m-0 p-0">
                                <button class="btn btn-light my-4" style="font-size: 13px; line-height:28px">
                                    Редактировать
                                </button>
                            </form>

                        </div>
                        @foreach($module->lessons() as $lesson)
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
                                    <form action="{{route('teacher.lesson.edit', [$lesson->id])}}" class="row justify-content-end col-md-3 m-0 p-0">
                                        <button class="btn btn-light  my-4"  style="font-size: 13px; line-height: 28px">Редактировать</button>
                                    </form>
                                </div>
                            </div>
                        @endforeach
                    @endforeach

                    <div class="card col-md-12 my-3 mx-0 p-3 " style="border-radius:4px; background-color:#fbfbfb">
                        <form action="{{ route('teacher.module.create', $course->id) }}" class="card-body p-0  row m-0">
                            <div class="col-md-10 m-0">
                                <p class="text-muted font-weight-bold" style="font-size: 13px">Добавить новый компонент</p>
                                <p class="text-muted" style="font-size: 13px">Добавьте черновик нового модуля. В любой момент вы сможете изменить его, а так же опубилковать</p>
                            </div>
                            <button class="btn btn-primary col-md-2" type="submit">@lang('content.addnm')</button>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Courses section end -->
@endsection


