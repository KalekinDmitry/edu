<?php use App\Models\Lesson;

/** @var Lesson $lesson */ ?>

@extends('teacher.layouts.app')

@section('title')
    <img class="mr-2" style="opacity: 0.7; margin-top: -8px" src="{{ asset('assets/icons/icon-triangleleftsm.svg') }}" width="24px">
    @lang('content.edles'): {{ $lesson->title }}
@endsection

@section('content')

    <div class=" row course< p-0" style="background-color:#fbfbfb; border:0">



{{--        <nav>--}}
{{--            <div class="nav nav-tabs" id="nav-tab" role="tablist">--}}
{{--                <a class="nav-item nav-link active" id="nav-info-tab" data-toggle="tab" href="#nav-info"--}}
{{--                   role="tab" aria-controls="nav-info" aria-selected="true">Информация</a>--}}
{{--                <a class="nav-item nav-link" id="nav-texts-tab" data-toggle="tab" href="#nav-texts" role="tab"--}}
{{--                   aria-controls="nav-texts" aria-selected="false">Тексты</a>--}}
{{--                <a class="nav-item nav-link" id="nav-videos-tab" data-toggle="tab" href="#nav-videos" role="tab"--}}
{{--                   aria-controls="nav-videos" aria-selected="false">Видео</a>--}}
{{--                <a class="nav-item nav-link" id="nav-tasks-tab" data-toggle="tab" href="#nav-tasks" role="tab"--}}
{{--                   aria-controls="nav-tasks" aria-selected="false">Задания</a>--}}
{{--            </div>--}}
{{--        </nav>--}}
{{--        <div class="tab-content card-body text-dark bg-white" id="nav-tabContent">--}}
{{--            <div class="tab-pane fade show active" id="nav-info" role="tabpanel" aria-labelledby="nav-info-tab">--}}
{{--                @include("teacher.lesson.partials.form")--}}
{{--            </div>--}}

{{--            <div class="tab-pane fade" id="nav-texts" role="tabpanel" aria-labelledby="nav-texts-tab">--}}
{{--                @include("teacher.lesson.partials.texts")--}}
{{--            </div>--}}

{{--            <div class="tab-pane fade" id="nav-videos" role="tabpanel" aria-labelledby="nav-videos-tab">--}}
{{--                @include("teacher.lesson.partials.videos")--}}
{{--            </div>--}}

{{--            <div class="tab-pane fade" id="nav-tasks" role="tabpanel" aria-labelledby="nav-tasks-tab">--}}
{{--                @include("teacher.lesson.partials.tasks")--}}
{{--            </div>--}}

{{--        </div>--}}

        <div class="card lesson-panel m-0" style="background-color: #fbfbfb; border:0">

            <h5 class="text-dark mx-5 my-4">{{ $lesson->title }}</h5>
            <div class="row mx-5 my-0">
                <p class="text-dark" style="font-size: 16px">Шаги</p>
                <hr class="col-md-7 text-dark mx-2">
                <img style="opacity: 0.3; margin-top: -16px; " src="{{ asset('assets/icons/icon_pen.svg') }}" width="16px">
            </div>
            <div class="mx-5 my-0">
                @foreach($lesson->texts() as $textBlock)
                    <div class="card my-3 py-0" style="height: 76px"
                         data-toggle="collapse" href="#textBlockCollapse{{$textBlock->position}}" role="button"
                         aria-expanded="false" aria-controls="textBlockCollapse{{$textBlock->position}}">
                        <div class="card-body py-3">
                            <div class="row">
                                <div class="col-md-11">
                                    <div class="card-title my-0 text-dark" style="font-size:16px">
                                        {{ $textBlock->position + 1 }}: text block
                                    </div>
                                    <p class="text-muted" style="font-size:12px">
                                        Place your educational materials here
                                    </p>
                                </div>
                                <form class="col-md-1 row justify-content-end m-0 p-0"
                                      onsubmit="if(confirm('Delete step?')){return true}else{return false}"
                                      action="{{route('teacher.text.destroy', [$textBlock])}}" method="post">
                                    <input type="hidden" name="_method" value="Delete">
                                    {{ csrf_field() }}
                                    <button  class="btn m-0 p-0">
                                        <img class="mr-2" style="opacity: 0.3" src="{{ asset('assets/icons/icon_delete.svg') }}" width="16px">
                                    </button>

                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach

                @foreach($lesson->videos() as $videoBlock)
                    <div class="card my-3 py-0" style="height: 76px"
                         data-toggle="collapse" href="#videoBlockCollapse{{$videoBlock->position}}" role="button"
                         aria-expanded="false" aria-controls="videoBlockCollapse{{$videoBlock->position}}">
                        <div class="card-body py-3">
                            <div class="row">

                                <div class="col-md-11">
                                    <div class="card-title my-0 text-dark" style="font-size:16px">
                                        {{ $videoBlock->position + 1 }}: video block
                                    </div>
                                    <p class="text-muted" style="font-size:12px">
                                        Place your educational materials here
                                    </p>
                                </div>

                                <form class="col-md-1 row justify-content-end m-0 p-0"
                                      onsubmit="if(confirm('Delete step?')){return true}else{return false}"
                                      action="{{route('teacher.videoBlock.destroy', [$lesson,$videoBlock])}}" method="post">
                                    <input type="hidden" name="_method" value="Delete">
                                    {{ csrf_field() }}
                                    <button  class="btn m-0 p-0">
                                        <img class="mr-2" style="opacity: 0.3" src="{{ asset('assets/icons/icon_delete.svg') }}" width="16px">
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach

                @foreach($lesson->tasks() as $taskBlock)
                    <div class="card my-3 py-0" style="height: 76px"
                         data-toggle="collapse" href="#taskBlockCollapse{{$taskBlock->position}}" role="button"
                         aria-expanded="false" aria-controls="taskBlockCollapse{{$taskBlock->position}}">
                        <div class="card-body py-3">
                            <div class="row">

                                <div class="col-md-11">
                                    <div class="card-title my-0 text-dark" style="font-size:16px">
                                        {{ $taskBlock->position + 1 }}: task block
                                    </div>
                                    <p class="text-muted" style="font-size:12px">
                                        Place your educational materials here
                                    </p>
                                </div>

                                <form class="col-md-1 row justify-content-end m-0 p-0"
                                      onsubmit="if(confirm('Delete step?')){return true}else{return false}"
                                      action="{{route('teacher.taskBlock.destroy', [ $lesson, $taskBlock])}}" method="post">
                                    <input type="hidden" name="_method" value="Delete">
                                    {{ csrf_field() }}
                                    <button  class="btn m-0 p-0">
                                        <img class="mr-2" style="opacity: 0.3" src="{{ asset('assets/icons/icon_delete.svg') }}" width="16px">
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach




                <div class="card my-3 py-0" style="height: 76px; background-color: #fbfbfb; box-shadow: none; border-width:1px; border-color: rgba(0,0,0,0.1); border-style: solid">
                    <div class="card-body row m-0 py-3" style="font-size:13px">
                        <div class="col-md-8 mx-0 px-0 py-1">
                            <div class="card-title my-0 text-muted font-weight-bold" style="font-size:13px; line-height: 14px">
                                Добавить шаг
                            </div>
                            <p class="text-muted" style="font-size:11px">
                                Добавить материал или тест
                            </p>
                        </div>
                        <div class="dropdown col-md-4 mx-0 px-0 py-1">
                            <button class="btn btn-primary dropdown-toggle mx-0" type="button" id="dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size:13px; line-height: 16px" >
                                Добавить
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenu">
                                <a class="dropdown-item" href="{{ route('teacher.text.create', $lesson->id) }}">текст</a>
                                <a class="dropdown-item" href="{{ route('teacher.videoBlock.create', $lesson->id) }}">видео</a>

                                <form class="col-md-4 m-0 p-0" action="{{ route('teacher.taskBlock.store', $lesson->id) }}" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="hidden" name="position" value = "0">
                                    <input type="hidden" name="lesson_id" value="{{ $lesson->id }}">
                                    <button class="dropdown-item" type="submit" value="create">Задача</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>

        <div class="card lesson-content m-0" style="background-color: white; border: 0;">
            @foreach($lesson->texts() as $textBlock)
                <div class="collapse" id="textBlockCollapse{{$textBlock->position}}">
                    <div class="card card-body text-dark">
                        <form class="m-0 p-0" action="{{ route('teacher.text.update', [$lesson->id, $textBlock->id]) }}" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_method" value="put">
                            {{ csrf_field() }}
                            <label for="content">Текст урока</label>
                            <textarea class="form-control" id="content" name="content" required style="height:480px; resize: none">{{$textBlock->content ?? ""}}</textarea>
                            <input type="hidden" name="lesson_id" value="{{ $lesson->id }}">
                            <input type="hidden" name="position" value="{{ $textBlock->position }}">

                            <button class = "btn btn-primary my-3" type="submit" value="update">Сохранить</button>

                        </form>
                    </div>
                </div>
            @endforeach

            @foreach($lesson->videos() as $videoBlock)
                <div class="collapse" id="videoBlockCollapse{{$videoBlock->position}}">
                    <div class="card card-body text-dark">
                        <form class="m-0 p-0" action="{{ route('teacher.videoBlock.update', [$lesson->id, $videoBlock->id]) }}" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_method" value="put">
                            {{ csrf_field() }}
                            <label for="videoLink">Ссылка на видео</label>
                            <input class="col-md-12" id="videoLink" type="text" maxlength="64" name="link" placeholder="link" value="{{ $videoBlock->link ?? "" }}" required>
                            <input type="hidden" name="lesson_id" value="{{ $lesson->id }}">
                            <button class = "btn btn-primary my-3" type="submit" value="update">Сохранить</button>
                        </form>
                    </div>
                </div>
            @endforeach

            @foreach($lesson->tasks() as $taskBlock)
                <div class="collapse" id="taskBlockCollapse{{$taskBlock->position}}">
                    <div class="card card-body text-dark">
                        {{--                    <form class="m-0 p-0" action="{{ route('taskBlock.update', [$lesson->id, $taskBlock->id]) }}" method="POST" enctype="multipart/form-data">--}}
                        {{--                        <input type="hidden" name="_method" value="put">--}}
                        {{--                        {{ csrf_field() }}--}}

                        {{--                    </form>--}}
                        TODO

                    </div>
                </div>
            @endforeach


        </div>
    </div>


@endsection
