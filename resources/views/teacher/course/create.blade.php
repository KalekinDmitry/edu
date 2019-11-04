@extends('teacher.layouts.app')

@section('title')
    @lang('content.create course')
@endsection

@section('content')
    <div class="card" style="background-color:#fbfbfb; border:0">

                <!-- course -->
                <form class="form-horizontal text-dark card-body bg-white"
                      action="{{route('teacher.course.store')}}"
                      method="post"
                      enctype="multipart/form-data">
                    @include("teacher.course.partials.form")
                </form>
            </div>
@endsection
