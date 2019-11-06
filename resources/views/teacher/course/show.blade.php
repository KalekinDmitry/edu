<?php /** @var \App\Models\Course $course */ ?>

@extends('teacher.layouts.app')

@section('title')
    Просмотр курса {{$course->title}}
@endsection

@section('content')
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-3">

                <h5 class="form-group">@lang('content.tableofcontent')</h5>


                @foreach($modules as $module)
                    <h6 class="form-group">{{$module->position + 1}}
                        . {{$module->name}}</h6>
                    <div class="list-group">
                        @foreach($module->lessons as $lesson)
                            <a href="{{ route('teacher.lesson.show', ['course'=>$course->id, 'lesson'=>$lesson->id]) }}"
                               class="list-group-item list-group-item-action ">{{ $lesson->title }}</a>
                        @endforeach
                    </div>
                    <br>
                @endforeach


            </div>


            <div class="col-md-9">
                <div class="card">
                    <div class="card-body text-muted">
                        <h5 class="form-group">{{ $course->title }}</h5>
                        <h5 class="form-group">{{ $course->description_short }}</h5>
                        <p class="form-group">{{ $course->description }}</p>
                        <p class="form-group">[@lang('content.vidfe')]</p>
                        <div class="form-group" style="text-align: center;">
                            <iframe width="100%" height="435"
                                    src="{{ $course->video }}" frameborder="0"
                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                        </div>
                        <div>
                            <p>
                                @if($course->tags != NULL)
                                    <b>Tags:</b>
                                    @foreach(explode(',',$course->tags) as $tag)
                                        <a href="#">#{{ $tag }}</a>
                                    @endforeach
                                @else
                                    @lang('content.notags')
                                @endif
                            </p>
                        </div>
                        <span><i class="flaticon-student-2"></i> 20</span>
                        <span><i class="flaticon-placeholder"></i> 3</span>
                        <div class="rating text-warning">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star i-fade"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
