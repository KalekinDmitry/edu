<?php /** @var \App\Models\Module $module */ ?>

@extends('teacher.layouts.app')

@section('title')
    <img class="mr-2" style="opacity: 0.7; margin-top:-8px" src="{{ asset('assets/icons/icon-triangleleftsm.svg') }}" width="24px">
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
            <div class="tab-pane fade show active" id="nav-info" role="tabpanel" aria-labelledby="nav-info-tab">
                <div class="d-flex">
                    <form class="form col-md-6 my-5" action="{{ route('teacher.module.update', [$module->id]) }}" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_method" value="put">
                        {{ csrf_field() }}
                        <input class="form-control col-md-12" type="text" maxlength="64" name="name" placeholder="Module title" value="{{ $module->name }}" required>
                        <input type="hidden" name="course_id" value="{{ $module->course_id}}">
                        <input type="hidden" name="position" value = "{{ $module->position }}">
                        <button class = "btn btn-primary col-md-4 my-3" type="submit" value="update">@lang('content.update')</button>
                    </form>
                </div>
            </div>


            <div class="tab-pane fade" id="nav-content" role="tabpanel" aria-labelledby="nav-content-tab">
                <div style="width:512px">
                    @foreach($module->lessons() as $lesson)
                        <div class="card col-md-12 my-3" style="border:0; box-shadow: 0px 2px 4px rgba(0,0,0,0.1)">
                            <div class="card-body row">
                                <a class="col-md-7 m-0 mt-2 p-0" href="{{ route('teacher.lesson.show', [$lesson->id]) }}">{{ $lesson->title }}</a>
                                <form class="m-0 p-0" action="{{route('teacher.lesson.edit', [$lesson->id])}}">
                                    <button class="btn btn-light m-1 " style="font-size:13px; line-height: 28px">Редактировать</button>
                                </form>
                                <form class="col-md-1 m-1 p-0" style="padding: 0" onsubmit="if(confirm('Delete module?')){return true}else{return false}" action="{{route('teacher.lesson.destroy', [$lesson])}}" method="post">
                                    <input type="hidden" name="_method" value="Delete">
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger" style="color:white">
                                        <img class="mr-2"  src="{{ asset('assets/icons/icon_delete.svg') }}" style="opacity: 0.5; color:white; margin-top:-4px" width="24px">
                                    </button>
                                </form>
                            </div>
                        </div>
                    @endforeach

                    <div class="card col-md-12 my-3" style="background-color: #fbfbfb; border-width: 1px; border-style: dashed; border-color: rgba(0,0,0,0.1); box-shadow: none;">
                        <div class="card-body row justify-content-end">
                            <p class="col-md-8 text-muted font-weight-normal">Добавьте новый урок</p>
                            <form action="{{route('teacher.lesson.create', $module->id) }}" class="m-0 p-0">
                                <button class="btn btn-primary my-3">Добавить</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
