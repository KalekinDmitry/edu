@extends('layouts.app')

@section('content')
    <!-- Page top section -->
    <section class="page-top-section set-bg fixed " style="min-height: 200vh"
             data-setbg="{{config('static.static')}}/img/page-top-bg.jpg">
        <div class="container text-white">
            <h3>@lang('content.edcour')</h3>
        </div>
        <!--  Page top end -->
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card ">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="col-md-12">
                                    <!-- Header section end -->
                                    <a class="site-btn-info-sm col-md-12"
                                       href="{{ route('module.create', $course->id) }}">@lang('content.addnm')</a>
                                    <div class="card">
                                        <div class="card-body">
                                            <button class="btn btn-primary">Кнопка</button>
                                            <button class="btn btn-danger">Кнопка</button>
                                            <button class="btn btn-light">Кнопка</button>
                                            <button class="btn btn-light sqr">
                                                <img src="{{ asset('assets/icons/icon_send.svg') }}" style="padding-bottom:2px" width="14px">
                                            </button>
                                            <button class="btn btn-primary circle">
                                                <img src="{{ asset('assets/icons/icon_play.svg') }}" style="padding-left:6px; padding-bottom:2px" width="24px">
                                            </button>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                <label class="custom-control-label" for="customCheck1">checkbox</label>
                                            </div>
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="customSwitches">
                                                <label class="custom-control-label" for="customSwitches">Toggle this switch element</label>
                                            </div>
                                            <div class="custom-control custom-switch-success">
                                                <input type="checkbox" class="custom-control-input" id="customSwitches2">
                                                <label class="custom-control-label" for="customSwitches2">Toggle this switch element</label>
                                            </div>
                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">

                                            <span class="badge badge-success">LABEL</span>
                                            <span class="badge badge-light">LABEL</span>
                                            <span class="badge badge-secondary">LABEL</span>
                                            <span class="badge badge-warning">LABEL</span>
                                            <span class="badge badge-danger">LABEL</span>
                                        </div>
                                    </div>


                                </div>
                                <br><br><br>
                                @foreach($modules as $module)
                                    <div class="col-md-12">
                                        <form onsubmit="if(confirm('Delete module?')){return true}else{return false}"
                                              action="{{route('module.destroy', [$course, $module])}}" method="post">
                                            <input type="hidden" name="_method" value="Delete">
                                            {{ csrf_field() }}
                                            <div class="row">
                                                <h5 class="col-md-8" style="font-size: 18px; padding-bottom:10px;">
                                                    📂 {{$module->position + 1}}
                                                    . {{$module->name}}</h5>
                                                <a class="site-btn-hollow col-md-3"
                                                   href="{{route('module.edit', [$course->id, $module->id])}}"><i
                                                            class="fa fa-edit"></i>@lang('content.edit')</a>
                                                <button type="submit" class="site-btn-danger-sm col-md-1">X</button>
                                            </div>
                                        </form>
                                        <br>
                                        <div class="list-group">
                                            @foreach($module->lessons as $lesson)
                                                <div class="row">
                                                    <a style="border-width: 1px"
                                                       href="{{ route('lesson.show', ['course'=>$course->id, 'lesson'=>$lesson->id]) }}"
                                                       style="font-size: 14px;"
                                                       class="list-group-item list-group-item-action col-md-8">📄{{ $lesson->title }}</a>
                                                    <a class="site-btn-hollow col-md-3"
                                                       href="{{route('lesson.edit', [$module->id, $lesson->id])}}"><i
                                                                class="fa fa-edit"></i></a>
                                                    <form style="padding: 0" class="col-md-1"
                                                          onsubmit="if(confirm('Delete module?')){return true}else{return false}"
                                                          action="{{route('lesson.destroy', [$module, $lesson])}}"
                                                          method="post">
                                                        <input type="hidden" name="_method" value="Delete">
                                                        {{ csrf_field() }}
                                                        <button type="submit" class="site-btn-danger col-md-12">X
                                                        </button>
                                                    </form>
                                                </div>
                                            @endforeach
                                            <div class="row">
                                                <a class="site-btn-info col-md-12"
                                                   href="{{ route('lesson.create', $module->id) }}">✚</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="col-md-7" style="text-align: left;">
                                <!-- course -->
                                <div class="course-item featured">
                                    <form class="form-horizontal card-body"
                                          action="{{route('course.update', $course)}}"
                                          method="post"
                                          enctype="multipart/form-data">
                                        <input type="hidden" name="_method" value="put">
                                        {{ csrf_field() }}

                                        {{-- Form include --}}
                                        @include('teacher.course.partials.form')

                                        <div class="form-group" style="margin-left:0;">
                                            <label for="">@lang('content.chcovifch')</label><br>

                                            <input type="file" name="image">
                                        </div>
                                        <button class="site-btn" type="submit">@lang('content.apply')<i class="fa fa-angle-right"></i></button>
                                        <a class="site-btn-danger"
                                           href="{{ route('teacher.dashboard') }}">@lang('content.cancel')</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Courses section end -->
@endsection