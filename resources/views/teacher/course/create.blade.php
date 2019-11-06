@extends('teacher.layouts.app')

@section('title')
    <img class="mr-2" style="; matgin-top: -8px; opacity: 0.7" src="{{ asset('assets/icons/icon-triangleleftsm.svg') }}" width="24px">
    @lang('content.create course')
@endsection

@section('content')
    <div class="card course" style="background-color:#fbfbfb; border:0">

        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-courseInfo" role="tab" aria-controls="nav-home" aria-selected="true">Информация о курсе</a>
            </div>
        </nav>
        <div class="tab-content text-dark p-0" id="nav-tabContent">
            <div class="tab-pane fade show active m-0 p-0" id="nav-courseInfo" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="row justify-content-center m-0 p-0" style="background-color:#fbfbfb">
                    <div class="card m-0" style="width:100%; box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1); border:0;">

                        <form class="form m-0 p-0" action="{{route('teacher.course.store')}}" method="post" enctype="multipart/form-data">
                            <div class="card-body" style="min-width:548px; max-width: 548px">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                @include('teacher.course.partials.form')
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
