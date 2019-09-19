@extends('layouts.app'))

@section('content')

<section class="classroom-section set-bg" data-setbg="{{config('static.static')}}/img/bg.jpg" >

    <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="hero-text text-white">
                    {{-- <h3>@lang('content.edclass'): {{ $classroom->name }}</h3> --}}
                </div>
            </div>
        </div>

    <div class="row justify-content-center">
        <div class="card col-md-6 col-sm-11">
            <div class="card-body">
                <div class="card-header" style="color:darkslategray">
                    <strong>@lang('content.crclassrm')</strong>
                </div>
                <form class="contact-form" action="{{ route('classroom.store') }}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="teacher_id" value="{{ Auth::user()->id }}">
                    <input type="hidden" name="slug" value="slug">
                    <div class="row justify-content-left">

                        <div class="col-md-12">
                            <label class="col-md-2" for="">@lang('content.classrmnm'):</label>
                            <input class="col-md-9" style="background-color:lightgray" type="text" maxlength="64" name="name" placeholder="@lang('content.classrmnm')" value="{{ $classroom->name ?? "" }}" required>
                        </div>

                        <div class="col-md-10">



                                <button type="button" class="site-btn-info col-md-4" data-toggle="modal" data-target=".bd-example-modal-md-users">@lang('content.invus')</button>
                                <div class="modal fade bd-example-modal-md-users" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel2" aria-hidden="true">
                                    <div class="modal-dialog modal-md">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">@lang('content.invus')</h4>

                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>

                                            </div>

                                            {{-- TOOD make search form --}}

                                            <br>
                                            @foreach($users as $user)
                                                <div class="row justify-content-center">
                                                    <div class="col-md-8">
                                                        {{ $user->name}}
                                                    </div>
                                                    <a href="#" class="btn btn-secondary col-md-2">@lang('content.invite')</a>
                                                </div>
                                            @endforeach
                                            <br>


                                        </div>
                                    </div>
                                </div>





                                <button type="button" class="site-btn-danger col-md-4" data-toggle="modal" data-target=".bd-example-modal-sm-courses">@lang('content.includecour')</button>
                                <div class="modal fade bd-example-modal-sm-courses" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel2" aria-hidden="true">
                                    <div class="modal-dialog modal-md">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">@lang('content.includecour')</h4>

                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>

                                            </div>
                                            <br>
                                            <div class="row justify-content-center">
                                                <div class="col-md-8">
                                                    <strong>@lang('content.ctitle')</strong>
                                                </div>
                                                {{-- <a href="#" class="btn btn-secondary  col-md-2">@lang('content.exclude')</a> --}}
                                                <div class="col-md-3">
                                                    <strong>@lang('content.include')</strong>
                                                </div>
                                            </div>
                                            <br>

                                            @foreach($courses as $course)
                                                <div class="row justify-content-center">
                                                    <div class="col-md-8">
                                                        {{ $course->title }}
                                                    </div>
                                                    {{-- <a href="#" class="btn btn-secondary  col-md-2">@lang('content.include')</a> --}}
                                                    <div class="col-md-3">
                                                        <input class="col-md-3" type="checkbox" name="includedCourses[]" value="{{ $course->id }}">
                                                    </div>
                                                </div>
                                            @endforeach
                                            <br>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <br><br><br>
                        <div class="col-md-10">
                            <button class = "site-btn col-md-4" type="submit" value="store">@lang('content.create')<i class="fa fa-angle-right"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <br>


</section>


@endsection
