<?php use App\Models\Lesson;
/** @var Lesson $lesson */?>

@extends('teacher.layouts.app')

@section('content')

    <section class="lesson-section set-bg fixed" data-setbg="{{config('static.static')}}/img/bg.jpg">

        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="hero-text text-white">
                    <h3>@lang('content.edles'): {{ $lesson->title }}</h3>
                </div>
            </div>
        </div>

        <br>


        <div class="row justify-content-center">
            <div class="card ">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="list-group col-md-5">
                            <div class="d-flex justify-content-center">
                                <h3>@lang('content.steps')</h3>
                            </div>
                            <div class="d-flex form-group">
                                <a class="site-btn-hollow col-md-4"
                                    href="{{ route('textBlock.create', $lesson->id) }}">✚ @lang('content.txt')</a>
                                <a class="site-btn-hollow col-md-4"
                                    href="{{ route('videoBlock.create', $lesson->id) }}">✚ @lang('content.vid')</a>
                                <form style="padding: 0" class="col-md-4" action="{{ route('taskBlock.store', $lesson->id) }}" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="hidden" name="position" value = "0">
                                    <input type="hidden" name="lesson_id" value="{{ $lesson->id }}">
                                    <button class="site-btn-hollow col-md-12" type="submit" value="create">✚ @lang('content.task')</button>
                                </form>
                            </div>
                            @foreach($lesson->texts() as $block)
                                <div class="d-flex">
                                    <a style="border-width: 1px;font-size: 14px;"
                                       href="{{ route('textBlock.show', ['lesson'=>$lesson->id, 'textBlock'=>$block->id]) }}"
                                       class="list-group-item list-group-item-action col-md-6">{{ $block->position + 1 }}
                                        : @lang('content.txt')</a>
                                    <a class="site-btn-hollow col-md-3"
                                       href="{{route('textBlock.edit', [$lesson->id, $block->id])}}"><i
                                                class="fa fa-edit"></i></a>
                                    <form class="col-md-3 p-0"
                                          onsubmit="if(confirm('Delete step?')){return true}else{return false}"
                                          action="{{route('textBlock.destroy', [$lesson, $block])}}" method="post">
                                        <input type="hidden" name="_method" value="Delete">
                                        {{ csrf_field() }}
                                        <button type="submit" class="site-btn-danger w-100">X</button>
                                    </form>
                                </div>
                            @endforeach

                            @foreach($lesson->videos() as $block)
                                <div class="d-flex">
                                    <a style="font-size: 14px;border-width: 1px"
                                       href="{{ route('videoBlock.show', ['lesson'=>$lesson->id, 'videoBlock'=>$block->id]) }}"
                                       class="list-group-item list-group-item-action col-md-6">{{ $block->position + 1 }}
                                        : @lang('content.vid')</a>
                                    <a class="site-btn-hollow col-md-3"
                                       href="{{route('videoBlock.edit', [$lesson->id, $block->id])}}"><i
                                                class="fa fa-edit"></i></a>
                                    <form class="col-md-3 p-0"
                                          onsubmit="if(confirm('Delete step?')){return true}else{return false}"
                                          action="{{route('videoBlock.destroy', [$lesson, $block])}}"
                                          method="post">
                                        <input type="hidden" name="_method" value="Delete">
                                        {{ csrf_field() }}
                                        <button type="submit" class="site-btn-danger w-100">X</button>
                                    </form>
                                </div>
                            @endforeach

                            @foreach($lesson->tasks() as $block)
                                <div class="d-flex">
                                    <a style="font-size: 14px;border-width: 1px"
                                       href="{{ route('taskBlock.show', ['lesson'=>$lesson->id, 'taskBlock'=>$block->id]) }}"
                                       class="list-group-item list-group-item-action col-md-6">{{ $block->position + 1 }}
                                        : @lang('content.task')</a>
                                    <a class="site-btn-hollow col-md-3"
                                       href="{{route('taskBlock.edit', [$lesson->id, $block->id])}}"><i
                                                class="fa fa-edit"></i></a>
                                    <form class="col-md-3 p-0"
                                          onsubmit="if(confirm('Delete step?')){return true}else{return false}"
                                          action="{{route('taskBlock.destroy', [$lesson, $block])}}"
                                          method="post">
                                        <input type="hidden" name="_method" value="Delete">
                                        {{ csrf_field() }}
                                        <button type="submit" class="site-btn-danger w-100">X</button>
                                    </form>
                                </div>
                            @endforeach
                        </div>


                        <form style="padding: 0" class="contact-form col-md-7"
                              action="{{ route('teacher.lesson.update', [$lesson->module_id, $lesson->id]) }}" method="POST"
                              enctype="multipart/form-data">
                            <input type="hidden" name="_method" value="put">
                            {{ csrf_field() }}
                            <div class="row justify-content-center">

                                <div class="col-md-12">
                                    <input type="text" maxlength="64" name="title" placeholder="@lang('content.ltitle')"
                                           value="{{ $lesson->title ?? "" }}" required>
                                    <input type="hidden" name="slug" value="{{ $lesson->slug ?? ""}}">
                                    <input type="hidden" name="module_id" value="{{ $lesson->module_id }}">
                                </div>
                                <div class="col-md-12">
                                    <input type="text" maxlength="256" name="excerpt"
                                           placeholder="@lang('content.excerpt')" value="{{ $lesson->excerpt ?? "" }}"
                                           required>
                                </div>

                                <div class="col-md-12 form-group">
                                        <div class="row">
                                            <div class="col-md-3 d-flex align-items-center">
                                                <input name="is_published" type="hidden" value="0">
                                                <input class="size-32" style="padding: 0" type="checkbox" name="is_published"
                                                       id="publish" value="1"
                                                       @if($lesson->is_published)
                                                       checked="checked"
                                                        @endif>
                                            </div>
                                            <div class="col-md-9 d-fcc">
                                                <label class="w-100 mb-0" for="publish" type="text"
                                                       style="color:gray; padding: 0"><strong>@lang('content.pl')
                                                        ?</strong></label>
                                            </div>
                                        </div>
                                </div>

                                <div class="col-md-12">
                                    <button class="site-btn col-md-4" type="submit"
                                            value="update">@lang('content.update')<i class="fa fa-angle-right"></i>
                                    </button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <br>


    </section>



@endsection
