<?php use App\Models\Lesson;

/** @var Lesson $lesson */ ?>

@extends('teacher.layouts.app')

@section('title')
    @lang('content.edles'): {{ $lesson->title }}
@endsection

@section('content')

    <div class="card" style="background-color:#fbfbfb; border:0">

        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-info-tab" data-toggle="tab" href="#nav-info"
                   role="tab" aria-controls="nav-info" aria-selected="true">Информация</a>
                <a class="nav-item nav-link" id="nav-texts-tab" data-toggle="tab" href="#nav-texts" role="tab"
                   aria-controls="nav-texts" aria-selected="false">Тексты</a>
                <a class="nav-item nav-link" id="nav-videos-tab" data-toggle="tab" href="#nav-videos" role="tab"
                   aria-controls="nav-videos" aria-selected="false">Видео</a>
                <a class="nav-item nav-link" id="nav-tasks-tab" data-toggle="tab" href="#nav-tasks" role="tab"
                   aria-controls="nav-tasks" aria-selected="false">Задания</a>
            </div>
        </nav>
        <div class="tab-content card-body text-dark bg-white" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-info" role="tabpanel" aria-labelledby="nav-info-tab">
                @include("teacher.lesson.partials.form")
            </div>

            <div class="tab-pane fade" id="nav-texts" role="tabpanel" aria-labelledby="nav-texts-tab">
                @include("teacher.lesson.partials.texts")
            </div>

            <div class="tab-pane fade" id="nav-videos" role="tabpanel" aria-labelledby="nav-videos-tab">
                {{--@include("teacher.lesson.partials.videos")--}}
            </div>

            <div class="tab-pane fade" id="nav-tasks" role="tabpanel" aria-labelledby="nav-tasks-tab">
                {{--@include("teacher.lesson.partials.tasks")--}}
            </div>

        </div>
    </div>









@endsection
