@extends('layouts.app')

@section('content')
    {{-- <section class="dashboard-section set-bg" data-setbg="{{config('static.static')}}/img/bg.jpg" style="height: 100vh">
        <div class="container">
            <div class="d-flex-row justify-content-center">
                <div class="col-md-12">
                    <div class="hero-text text-white">
                        {{-- <div class="card-header">@lang('content.tchdash')</div>
                        <h2>@lang('content.tchdash')</h2>
                        <div class="card-body"  style="padding: 0;">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <h3>@lang('content.logntf')!</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex-row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title h4" style="color:darkslategray">
                                <strong>@lang('content.clovrvw')</strong>
                            </div>
                            <div class="d-flex flex-column ">
                                @foreach($classrooms as $classroom)
                                    <form class="form-group col-md-12 px-0 d-flex-row"
                                          onsubmit="if(confirm('@lang('content.reallydel')?')){return true}else{return false}"
                                          action="{{ route('classroom.destroy', [$classroom->id]) }}" method="post">
                                        <input type="hidden" name="_method" value="Delete">
                                        {{ csrf_field() }}

                                        <div class="card-header h4 col-md-12" style="color:gray">
                                            <strong>{{  $classroom->name }}</strong>
                                        </div>
                                        <a href="{{ route('classroom.edit',[$classroom->id]) }}"
                                           class="site-btn col-sm-6">@lang('content.edclass')</a>
                                        <button type="submit"
                                                class="site-btn-danger col-sm-6">@lang('content.del') </button>
                                    </form>
                                @endforeach
                                <a href="{{ route('classroom.create') }}"
                                   class="site-btn-hollow col-md-12 mt-auto">@lang('content.crnew')</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title h4" style="color:darkslategray">
                                <strong>@lang('content.courovrvw')</strong>
                            </div>
                            <div class="d-flex flex-column ">
                                @foreach($courses as $course)

                                    <form class="form-group col-md-12 px-0 d-flex-row"
                                          onsubmit="if(confirm('@lang('content.reallydel')?')){return true}else{return false}"
                                          action="{{ route('course.destroy', [$course->id]) }}" method="post">
                                        <input type="hidden" name="_method" value="Delete">
                                        {{ csrf_field() }}

                                        <div class="card-header h4 col-md-12" style="color:gray">
                                            <strong>{{  $course->title }}</strong>
                                        </div>
                                        <a href="{{ route('course.edit',[$course->id]) }}"
                                           class="site-btn col-md-4">@lang('content.edcour')</a>
                                        <a href="{{ route('course.show',[$course->id]) }}"
                                           class="site-btn-info col-md-4">@lang('content.look')</a>
                                        <button type="submit"
                                                class="site-btn-danger col-md-4">@lang('content.delcour')</button>


                                    </form>
                                @endforeach
                                <a href="{{ route('course.create') }}"
                                   class="site-btn-hollow col-md-12">@lang('content.crnew')</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br>
    </section> --}}


    <div class="card courses" style="background-color:#fbfbfb; border:0">
        <div class="row justify-content-left ml-0" style="height:56px; background-color:white; box-shadow: 0px 1px 2px rgba(0,0,0,0.11)">
            <p class="text-dark font-weight-bold pl-2 pt-3">
                <a id="sidebarCollapse"  class="px-4 mb-4">
                    <img class="mr-2" style="opacity: 0.7" src="{{ asset('assets/icons/icon-triangleleftsm.svg') }}" width="22px">
                    Мои курсы
                </a>
            </p>
        </div>

        <div class="row m-3">

            <div class="col-md-3 m-0 my-2">
                <div class="card" style=" height:324px; font-size:12px; border-style: dashed; border-width:1px; border-radius:4px border-color:rgba(0,0,0,0.1); background-color:#fbfbfb">
                    <div class="card-body  row m-0 justify-content-center text-muted">
                        <div class="card-title text-dark" style="font-size:16px">
                            Новый курс
                        </div>
                        Добавте черновик нового курса. В любой момент вы его сможете наполнить уроками.
                        <a href="{{ route('course.create') }}" class="btn btn-primary mb-0" style="font-size:13px">
                            Создать тренинг
                        </a>
                    </div>
                </div>
            </div>

            @foreach($courses as $course)
            <div class="col-md-3 m-0 my-2">

                <div class="card" style="height:324px; border-radius:4px">
                    <div class="card-header m-0 set-bg" style="height:160px" data-setbg="{{config('static.static')}}/img/bg.jpg">
                        <div class="row justify-content-end">
                            <a href="#" class="p-4" id="#" data-toggle="dropdown"  aria-haspopup="ture" aria-expanded="false">
                                <img src="{{ asset('assets/icons/icon_threedots.svg') }}" style="opacity: 0.3;" class="pb-1" width="4px">
                            </a>
                            <div class="dropdown">
                                <div class="dropdown-menu " style="font-size:13px; border: 0; box-shadow: 0px 2px 4px rgba(0,0,0,0.1); margin-left:-145px; margin-top: -50px" aria-labelledby="courseSettingsDropdown">
                                    <a href="#" class="dropdown-item">Информация о курсе</a>
                                    <a href="#" class="dropdown-item">Содержимое курса</a>
                                    <a href="#" class="dropdown-item">Студенты</a>
                                    <a href="#" class="dropdown-item">Доступы</a>
                                    <a href="#" class="dropdown-item">Статистика</a>
                                    <hr>
                                    <form class="form-group col-md-12 px-0 d-flex-row"
                                        onsubmit="if(confirm('@lang('content.reallydel')?')){return true}else{return false}"
                                        action="{{ route('course.destroy', [$course->id]) }}" method="post">
                                        <input type="hidden" name="_method" value="Delete">
                                        {{ csrf_field() }}
                                        <button type="submit" style="bacground-color:rgba(0,0,0,0); color:red" class="dropdown-item">Удалить курс</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body text-muted" style="font-size:12px">
                        <div class="card-title text-dark" style="font-size:16px">
                            {{$course->title}}
                        </div>
                        <p style="font-size:12px; line-heigth:10px">
                            {{$course->description_short}}
                        </p>
                    </div>
                </div>
            </div>
            @endforeach


        </div>

    </div>
@endsection
