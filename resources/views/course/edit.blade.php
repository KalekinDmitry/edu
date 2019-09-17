@extends('layouts.app_changeincludes')

@section('content')

    <!-- Page top section -->
    <section class="page-top-section set-bg fixed " style="min-height: 200vh" data-setbg="{{config('static.static')}}/img/page-top-bg.jpg">
        <div class="container text-white">
            <h3>Edit course</h3>
        </div>
        <!--  Page top end -->

        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card ">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- Header section end -->
                                <a class="site-btn-info-sm col-md-12" href="{{ route('module.create', $course->id) }}">Add
                                    new
                                    module</a>
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
                                                        class="fa fa-edit"></i>edit</a>
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
                                                <form style="padding: 0"
                                                      onsubmit="if(confirm('Delete module?')){return true}else{return false}"
                                                      action="{{route('lesson.destroy', [$module, $lesson])}}"
                                                      method="post">
                                                    <input type="hidden" name="_method" value="Delete">
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="site-btn-danger col-md-12">X</button>
                                                </form>
                                            </div>
                                        @endforeach
                                        <div class="row">
                                            <a class="site-btn-info col-md-12"
                                               href="{{ route('lesson.create', $module->id) }}">✚</a>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            @endforeach


                            <div class="col-md-12">
                                <!-- course -->
                                <div class="course-item featured">
                                    <div class="course-content">
                                        <div class="cc-text">
                                            <form class="form-horizontal card-body"
                                                  action="{{route('course.update', $course)}}"
                                                  method="post"
                                                  enctype="multipart/form-data">
                                                <input type="hidden" name="_method" value="put">
                                                {{ csrf_field() }}

                                                {{-- Form include --}}
                                                @include('course.partials.form')

                                                <div class="form-group">
                                                    <label for="">@lang('content.chcovifch')</label><br>

                                                    <input type="file" name="image">
                                                </div>
                                                <input class="site-btn col-md-4" type="submit" value="To apply">
                                                <a class="site-btn-hollow"
                                                   href="{{ route('home') }}">@lang('content.cancel')</a>
                                            </form>
                                        </div>
                                    </div>
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
