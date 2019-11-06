@extends('layouts.app')

@section('content')

<div class="card course" style="background-color: #fbfbfb">

    <div class="row justify-content-left ml-0" style="height:56px; background-color:white; border-bottom: 1px; border-bottom-color:rgba(0,0,0,0.6); margin-bottom:1px">
        <p class="text-dark font-weight-bold pl-2 pt-3">
            <a id="sidebarCollapse"  class="px-4 mb-4">
                <img class="mr-2" style="opacity: 0.7" src="{{ asset('assets/icons/icon-triangleleftsm.svg') }}" width="22px">
                Создание модуля
            </a>
        </p>
    </div>

    <form class="m-3 p-0 col-md-6 col-sm-12" action="{{ route('module.store', $course->id) }}" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="row justify-content-center">
            <div class="form-group col-md-12">
                <p class="text-muted font-weight-bold">
                    Название модуля
                </p>
                <input class="form-control" type="text" maxlength="64" name="name" placeholder="Введите название модуля"  required>
                <input type="hidden" name="course_id" value="{{ $course->id }}">
                <input type="hidden" name="position" value = "0">
            </div>
            <div class="col-md-12 row justify-content-end" >
                <button class = "btn btn-primary" type="submit" value="create">@lang('content.create')</button>
            </div>

        </div>
    </form>


</div>

@endsection
