@extends('layouts.app')

@section('content')

<div class="card course" style="background-color: #fbfbfb">

    <div class="row justify-content-left ml-0" style="height:56px; background-color:white; border-bottom: 1px; border-bottom-color:rgba(0,0,0,0.6); margin-bottom:1px">
        <p class="text-dark font-weight-bold pl-2 pt-3">
            <a id="sidebarCollapse"  class="px-4 mb-4">
                <img class="mr-2" style="opacity: 0.7" src="{{ asset('assets/icons/icon-triangleleftsm.svg') }}" width="22px">
                Редактирование модуля
            </a>
        </p>
    </div>

    <div class="row justify-content-center m-5" >
        <div class="col-md-6 m-0">
            <h5>Уроки</h5>
            @foreach($lessons as $lesson)
                <div class="card col-md-12 my-3" style="border:0; box-shadow: 0px 2px 4px rgba(0,0,0,0.1)">
                    <div class="card-body row">
                        <a class="col-md-7 m-0 p-0" href="{{ route('lesson.show', ['course'=>$course->id, 'lesson'=>$lesson->id]) }}">📄{{ $lesson->title }}</a>
                        <form class="m-0 p-0" action="{{route('lesson.edit', [$module->id, $lesson->id])}}">
                            <button class="btn btn-light m-1 " style="font-size:13px; line-height: 28px">Редактировать</button>
                        </form>
                        <form class="col-md-1 m-1 p-0" style="padding: 0" onsubmit="if(confirm('Delete module?')){return true}else{return false}" action="{{route('lesson.destroy', [$module, $lesson])}}" method="post">
                            <input type="hidden" name="_method" value="Delete">
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger ">X</button>
                        </form>
                    </div>
                </div>
            @endforeach
            <div class="card col-md-12 my-3" style="background-color: #fbfbfb ">
                <div class="card-body row justify-content-end">
                    <p class="col-md-8 text-muted font-weight-normal">Добавьте новый урок</p>
                    <form action="{{route('lesson.create', $module->id) }}" class="m-0 p-0">
                        <button class="btn btn-primary my-3">Добавить</button>
                    </form>
                </div>
            </div>
        </div>

        <form class="form col-md-6 my-5" action="{{ route('module.update', [$course->id, $module->id]) }}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_method" value="put">
            {{ csrf_field() }}
            <input class="form-control col-md-12" type="text" maxlength="64" name="name" placeholder="Module title" value="{{ $module->name }}" required>
            <input type="hidden" name="course_id" value="{{ $module->course_id}}">
            <input type="hidden" name="position" value = "{{ $module->position }}">
            <button class = "btn btn-primary col-md-4 my-3" type="submit" value="update">@lang('content.update')</button>
        </form>
    </div>
</div>




@endsection
