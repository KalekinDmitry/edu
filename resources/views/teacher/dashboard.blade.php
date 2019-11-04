@extends('teacher.layouts.app')

@section('content')

    <div class="card courses" style="background-color:#fbfbfb; border:0">
        <div class="row justify-content-left ml-0" style="height:56px; background-color:white; box-shadow: 0px 1px 2px rgba(0,0,0,0.11)">
            <p class="text-dark font-weight-bold pl-2 pt-3">
                <a id="sidebarCollapse"  class="px-4 mb-4">
                    <img class="mr-2" style="opacity: 0.7" src="{{ asset('assets/icons/icon-triangleleftsm.svg') }}" width="22px">
                    Мои курсы
                </a>
            </p>
        </div>

        <div class="row m-3" style="height:100vh">

            <div class="m-2 p-0" style="min-width: 280px; max-width: 280px">
                <div class="card" style=" height:324px; font-size:12px; border-style: dashed; border-width:1px; border-radius:4px; border-color:rgba(0,0,0,0.1); background-color:#fbfbfb">
                    <div class="card-body  row m-0 justify-content-center text-muted">
                        <div class="card-title text-dark col-md-12" style="font-size:16px">
                            Новый курс
                        </div>
                        Добавте черновик нового курса. В любой момент вы его сможете наполнить уроками.
                        <form class="m-0 p-0" action="{{ route('teacher.course.create') }}">
                            <button type="submit" class="btn btn-primary mb-0 col-md-12" style="font-size:13px">
                                Создать курс
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            @foreach($courses as $course)
            <div class="m-2" style="min-width: 280px; max-width: 280px">

                <div class="card" style="height:324px; border-radius:4px">
                    <div class="card-header m-0 set-bg" style="height:160px; border-top-left-radius: 4px; border-top-right-radius: 4px" data-setbg="{{config('static.static')}}/img/bg.jpg">
                        <div class="row justify-content-end">
                            <a href="#" class="btn btn-icon" id="#" data-toggle="dropdown"  aria-haspopup="ture" aria-expanded="false">
                                <img src="{{ asset('assets/icons/icon_threedots.svg') }}"  width="4px">
                            </a>
                            <div class="dropdown">
                                <div class="dropdown-menu p-0" style="font-size:13px; border: 0; box-shadow: 0px 2px 4px rgba(0,0,0,0.1); margin-left:-512px; margin-top: -32px" aria-labelledby="courseSettingsDropdown">
                                    <a href="#" class="dropdown-item">Информация о курсе</a>
                                    <a href="#" class="dropdown-item">Содержимое курса</a>
                                    <a href="#" class="dropdown-item">Студенты</a>
                                    <a href="#" class="dropdown-item">Доступы</a>
                                    <a href="#" class="dropdown-item">Статистика</a>
                                    <hr class="m-0">
                                    <form class="form-group col-md-12 px-0 m-0 d-flex-row"
                                        onsubmit="if(confirm('@lang('content.reallydel')?')){return true}else{return false}"
                                        action="{{ route('teacher.course.destroy', [$course->id]) }}" method="post">
                                        <input type="hidden" name="_method" value="Delete">
                                        {{ csrf_field() }}
                                        <button type="submit" style="background-color:rgba(0,0,0,0); color:red" class="dropdown-item">Удалить курс</button>
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
