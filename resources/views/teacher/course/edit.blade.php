@extends('teacher.layouts.app')

@section('title')
    @lang('content.edcour')
@endsection

@section('content')
    <div class="card" style="background-color:#fbfbfb; border:0">

        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-courseInfo"
                   role="tab" aria-controls="nav-home" aria-selected="true">Информация о курсе</a>
                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-courseContent" role="tab"
                   aria-controls="nav-profile" aria-selected="false">Содержание курса</a>
                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-students" role="tab"
                   aria-controls="nav-contact" aria-selected="false">Студенты</a>
                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-access" role="tab"
                   aria-controls="nav-contact" aria-selected="false">Доступ</a>
                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-stat" role="tab"
                   aria-controls="nav-contact" aria-selected="false">Статистика</a>
            </div>
        </nav>
        <div class="tab-content text-dark" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-courseInfo" role="tabpanel" aria-labelledby="nav-home-tab">
                <!-- course -->
                <form class="form-horizontal text-dark card-body bg-white"
                      action="{{route('teacher.course.update', $course)}}"
                      method="post"
                      enctype="multipart/form-data">
                    <input type="hidden" name="_method" value="put">
                    @include("teacher.course.partials.form")
                </form>

            </div>

            <div class="tab-pane fade" id="nav-courseContent" role="tabpanel" aria-labelledby="nav-profile-tab">
                <div class="text-dark card-body bg-white">
                    @include("teacher.course.partials.content")
                </div>
            </div>

            <div class="tab-pane fade" id="nav-students" role="tabpanel" aria-labelledby="nav-contact-tab">
            </div>

            <div class="tab-pane fade" id="nav-access" role="tabpanel" aria-labelledby="nav-contact-tab">
            </div>

            <div class="tab-pane fade" id="nav-stat" role="tabpanel" aria-labelledby="nav-contact-tab">
            </div>
        </div>
    </div>

@endsection
