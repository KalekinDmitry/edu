<?php /** @var \App\Models\Module $module */ ?>

@extends('teacher.layouts.app')

@section('title')
    @lang('content.emod'): {{ $module->name }}
@endsection


@section('content')

    <div class="card" style="background-color:#fbfbfb; border:0">

        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-info-tab" data-toggle="tab" href="#nav-info"
                   role="tab" aria-controls="nav-home" aria-selected="true">Название</a>
                <a class="nav-item nav-link" id="nav-content-tab" data-toggle="tab" href="#nav-content" role="tab"
                   aria-controls="nav-profile" aria-selected="false">Содержание</a>
            </div>
        </nav>
        <div class="tab-content text-dark card-body bg-white" id="nav-tabContent">

            {{-- Информация --}}
            <div class="tab-pane fade show active" id="nav-info" role="tabpanel" aria-labelledby="nav-info-tab">
                <div class="d-flex">
                    <form class="d-flex"
                          action="{{route('teacher.module.update', $module)}}"
                          method="post"
                          enctype="multipart/form-data">
                        <input type="hidden" name="_method" value="put">
                        @csrf
                        <input class="form-control mr-2" type="text" name="name" placeholder="Название модуля"
                               value="{{$module->name}}">
                        <button class="btn btn-success">
                            Обновить
                        </button>
                    </form>
                </div>
            </div>

            {{-- Содержание --}}
            <div class="tab-pane fade" id="nav-content" role="tabpanel" aria-labelledby="nav-content-tab">

                <div class="d-flex form-group">
                    <form class="d-flex" action="{{route("teacher.lesson.store")}}" method="post">
                        @csrf
                        <input type="hidden" name="module_id" value="{{$module->id}}">
                        <input class="form-control mr-2" type="text" name="title" placeholder="Название урока">
                        <button class="btn btn-success">
                            Добавить
                        </button>
                    </form>
                </div>


                @foreach($module->lessons() as $lesson)
                    <form onsubmit="if(confirm('Delete lesson?')){return true}else{return false}"
                          action="{{route('teacher.lesson.destroy', [$lesson])}}"
                          method="post" class="form-group">
                        <input type="hidden" name="_method" value="Delete">
                        @csrf
                        <div class="d-flex">
                            <h5 class="d-flex align-items-center">{{$lesson->title}}</h5>
                            <a class="btn btn-primary icon-32 ml-auto"
                               href="{{route('teacher.lesson.edit', [$lesson->id])}}">
                                <i class="fa fa-edit"></i>
                            </a>
                            <button class="btn btn-danger icon-32 ml-2" type="submit">
                                <i class="far fa-trash-alt"></i>
                            </button>
                        </div>
                    </form>
                @endforeach


            </div>

        </div>

    </div>

    {{--
        <div class="row justify-content-center">
            <div class="card col-md-8">
                <div class="card-body">
                    <div class="row">
                        <div class="list-group col-md-4">
                            <div class="row justify-content-center">
                                <h5>@lang('content.lessons')</h5>
                            </div>
                            <br>
                            @foreach($module->lessons() as $lesson)
                                <div class="row">
                                    <a style="border-width: 1px"
                                       href="{{ route('teacher.lesson.show', ['course'=>$module->course()->id, 'lesson'=>$lesson->id]) }}"
                                       style="font-size: 14px;"
                                       class="list-group-item list-group-item-action col-md-8">📄{{ $lesson->title }}</a>
                                    <a class="site-btn-hollow col-md-2"
                                       href="{{route('teacher.lesson.edit', [$module->id, $lesson->id])}}"><i
                                                class="fa fa-edit"></i></a>
                                    <form class="col-md-2" style="padding: 0"
                                          onsubmit="if(confirm('Delete module?')){return true}else{return false}"
                                          action="{{route('teacher.lesson.destroy', [$module, $lesson])}}"
                                          method="post">
                                        <input type="hidden" name="_method" value="Delete">
                                        {{ csrf_field() }}
                                        <button type="submit" class="site-btn-danger col-md-12">X</button>
                                    </form>
                                </div>
                            @endforeach
                            <div class="row">
                                <a class="site-btn-info col-md-12"
                                   href="{{ route('teacher.lesson.create', $module->id) }}">✚</a>
                            </div>
                        </div>


                        <form class="contact-form col-md-8"
                              action="{{ route('teacher.module.update', [$module->course()->id, $module->id]) }}"
                              method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_method" value="put">
                            {{ csrf_field() }}
                            <div class="row justify-content-center">
                                <input class="col-md-7" type="text" maxlength="64" name="name"
                                       placeholder="Module title" value="{{ $module->name }}" required>
                                <input type="hidden" name="course_id" value="{{ $module->course_id}}">
                                <input type="hidden" name="position" value="{{ $module->position }}">
                                <div class="col-md-7">
                                    <button class="site-btn col-md-4" type="submit"
                                            value="update">@lang('content.update')<i class="fa fa-angle-right"></i>
                                    </button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>--}}





@endsection
