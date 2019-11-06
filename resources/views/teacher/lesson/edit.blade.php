@extends('layouts.app')

@section('content')



{{--                                <form style="padding: 0" class="col-md-4" action="{{ route('taskBlock.store', $lesson->id) }}" method="POST" enctype="multipart/form-data">--}}
{{--                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
{{--                                    <input type="hidden" name="position" value = "0">--}}
{{--                                    <input type="hidden" name="lesson_id" value="{{ $lesson->id }}">--}}
{{--                                    <button class="site-btn-hollow col-md-12" type="submit" value="create">✚ @lang('content.task')</button>--}}
{{--                                </form>--}}

{{--                                    <a style="border-width: 1px;font-size: 14px;"--}}
{{--                                       href="{{ route('textBlock.show', ['lesson'=>$lesson->id, 'textBlock'=>$textBlock->id]) }}"--}}
{{--                                       class="list-group-item list-group-item-action col-md-6">{{ $textBlock->position + 1 }}--}}
{{--                                        : @lang('content.txt')</a>--}}

{{--                                    <a class="site-btn-hollow col-md-3"--}}
{{--                                       href="{{route('textBlock.edit', [$lesson->id, $textBlock->id])}}"><i--}}
{{--                                                class="fa fa-edit"></i></a>--}}


{{--
{{--                                    <a style="font-size: 14px;border-width: 1px"--}}
{{--                                       href="{{ route('videoBlock.show', ['lesson'=>$lesson->id, 'videoBlock'=>$videoBlock->id]) }}"--}}
{{--                                       class="list-group-item list-group-item-action col-md-6">{{ $videoBlock->position + 1 }}--}}
{{--                                        : @lang('content.vid')</a>--}}
{{--                                    <a class="site-btn-hollow col-md-3"--}}
{{--                                       href="{{route('videoBlock.edit', [$lesson->id, $videoBlock->id])}}"><i--}}
{{--                                                class="fa fa-edit"></i></a>--}}
{{--                                    <form class="col-md-3 p-0"--}}
{{--                                          onsubmit="if(confirm('Delete step?')){return true}else{return false}"--}}
{{--                                          action="{{route('videoBlock.destroy', [$lesson, $videoBlock])}}"--}}
{{--                                          method="post">--}}
{{--                                        <input type="hidden" name="_method" value="Delete">--}}
{{--                                        {{ csrf_field() }}--}}
{{--                                        <button type="submit" class="site-btn-danger w-100">X</button>--}}
{{--                                    </form>--}}

{{--                                    <a style="font-size: 14px;border-width: 1px"--}}
{{--                                       href="{{ route('taskBlock.show', ['lesson'=>$lesson->id, 'taskBlock'=>$taskBlock->id]) }}"--}}
{{--                                       class="list-group-item list-group-item-action col-md-6">{{ $taskBlock->position + 1 }}--}}
{{--                                        : @lang('content.task')</a>--}}
{{--                                    <a class="site-btn-hollow col-md-3"--}}
{{--                                       href="{{route('taskBlock.edit', [$lesson->id, $taskBlock->id])}}"><i--}}
{{--                                                class="fa fa-edit"></i></a>--}}
{{--                                    <form class="col-md-3 p-0"--}}
{{--                                          onsubmit="if(confirm('Delete step?')){return true}else{return false}"--}}
{{--                                          action="{{route('taskBlock.destroy', [$lesson, $taskBlock])}}"--}}
{{--                                          method="post">--}}
{{--                                        <input type="hidden" name="_method" value="Delete">--}}
{{--                                        {{ csrf_field() }}--}}
{{--                                        <button type="submit" class="site-btn-danger w-100">X</button>--}}
{{--                                    </form>--}}


{{--                        <form style="padding: 0" class="contact-form col-md-7"--}}
{{--                              action="{{ route('lesson.update', [$module->id, $lesson->id]) }}" method="POST"--}}
{{--                              enctype="multipart/form-data">--}}
{{--                            <input type="hidden" name="_method" value="put">--}}
{{--                            {{ csrf_field() }}--}}
{{--                            <div class="row justify-content-center">--}}

{{--                                <div class="col-md-12">--}}
{{--                                    <input type="text" maxlength="64" name="title" placeholder="@lang('content.ltitle')"--}}
{{--                                           value="{{ $lesson->title ?? "" }}" required>--}}
{{--                                    <input type="hidden" name="slug" value="{{ $lesson->slug ?? ""}}">--}}
{{--                                    <input type="hidden" name="module_id" value="{{ $module->id }}">--}}
{{--                                </div>--}}
{{--                                <div class="col-md-12">--}}
{{--                                    <input type="text" maxlength="256" name="excerpt"--}}
{{--                                           placeholder="@lang('content.excerpt')" value="{{ $lesson->excerpt ?? "" }}"--}}
{{--                                           required>--}}
{{--                                </div>--}}

{{--                                <div class="col-md-12 form-group">--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col-md-3 d-flex align-items-center">--}}
{{--                                                <input name="is_published" type="hidden" value="0">--}}
{{--                                                <input class="size-32" style="padding: 0" type="checkbox" name="is_published"--}}
{{--                                                       id="publish" value="1"--}}
{{--                                                       @if($lesson->is_published)--}}
{{--                                                       checked="checked"--}}
{{--                                                        @endif>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-md-9 d-fcc">--}}
{{--                                                <label class="w-100 mb-0" for="publish" type="text"--}}
{{--                                                       style="color:gray; padding: 0"><strong>@lang('content.pl')--}}
{{--                                                        ?</strong></label>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                </div>--}}

{{--                                <div class="col-md-12">--}}
{{--                                    <button class="site-btn col-md-4" type="submit"--}}
{{--                                            value="update">@lang('content.update')<i class="fa fa-angle-right"></i>--}}
{{--                                    </button>--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                        </form>--}}

<div class="row course m-0">

    <div class="card lesson-panel" style="background-color: #fbfbfb; border:0">

        <div class="row justify-content-left ml-0" style="height:56px; background-color:white; border-bottom: 1px; border-bottom-color:rgba(0,0,0,0.6); margin-bottom:1px">
            <p class="text-dark font-weight-bold pl-2 pt-3">
                <a id="sidebarCollapse"  class="px-4 mb-4">
                    <img class="mr-2" style="opacity: 0.7" src="{{ asset('assets/icons/icon-triangleleftsm.svg') }}" width="22px">
                    Редактирование урока
                </a>
            </p>
        </div>

        <h5 class="text-dark mx-5 my-4">{{ $lesson->title }}</h5>
        <div class="row mx-5 my-0">
            <p class="text-dark" style="font-size: 16px">Шаги</p>
            <hr class="col-md-7 text-dark mx-2">
            <img style="opacity: 0.3; margin-top: -16px; " src="{{ asset('assets/icons/icon_pen.svg') }}" width="16px">
        </div>
        <div class="mx-5 my-0">
            @foreach($steps->textBlocks as $textBlock)
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
                                  action="{{route('textBlock.destroy', [$lesson, $textBlock])}}" method="post">
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

            @foreach($steps->videoBlocks as $videoBlock)
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
                                  action="{{route('videoBlock.destroy', [$lesson, $videoBlock])}}" method="post">
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

            @foreach($steps->taskBlocks as $taskBlock)
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
                                  action="{{route('taskBlock.destroy', [$lesson, $taskBlock])}}" method="post">
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
                            <a class="dropdown-item" href="{{ route('textBlock.create', $lesson->id) }}">текст</a>
                            <a class="dropdown-item" href="{{ route('videoBlock.create', $lesson->id) }}">видео</a>

                            <form class="col-md-4 m-0 p-0" action="{{ route('taskBlock.store', $lesson->id) }}" method="POST" enctype="multipart/form-data">
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

    <div class="card lesson-content" style="background-color: white; border: 0;">


{{--        <div class="row justify-content-left ml-0" style="height:56px; background-color:white; border-bottom: 1px; border-bottom-color:rgba(0,0,0,0.6); margin-bottom:1px">--}}
{{--            <p class="text-dark font-weight-bold pl-2 pt-3">--}}
{{--                <a id="sidebarCollapse"  class="px-4 mb-4">--}}
{{--                    <img class="mr-2" style="opacity: 0.7" src="{{ asset('assets/icons/icon_pen.svg') }}" width="22px">--}}

{{--                </a>--}}
{{--            </p>--}}
{{--        </div>--}}



        @foreach($steps->textBlocks as $textBlock)
            <div class="collapse" id="textBlockCollapse{{$textBlock->position}}">
                <div class="card card-body text-dark">
                    <form class="m-0 p-0" action="{{ route('textBlock.update', [$lesson->id, $textBlock->id]) }}" method="POST" enctype="multipart/form-data">
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

        @foreach($steps->videoBlocks as $videoBlock)
            <div class="collapse" id="videoBlockCollapse{{$videoBlock->position}}">
                <div class="card card-body text-dark">
                    <form class="m-0 p-0" action="{{ route('videoBlock.update', [$lesson->id, $videoBlock->id]) }}" method="POST" enctype="multipart/form-data">
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

        @foreach($steps->taskBlocks as $taskBlock)
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
