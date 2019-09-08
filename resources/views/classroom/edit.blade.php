@extends('layouts.app')

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
                <div class="card-title" style="color:darkslategray">
                    <strong>@lang('content.edclass'): {{ $classroom->name }}</strong>
                </div>
                <form class="contact-form" action="{{ route('classroom.update', [$classroom->id]) }}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_method" value="put">
                    {{ csrf_field() }}
                    <div class="row justify-content-end">

                        <div class="col-md-12">
                            <label class="col-md-2" for="">@lang('content.classrmnm'):</label>
                            <input class="col-md-9" style="background-color:lightgray" type="text" maxlength="64" name="name" placeholder="@lang('content.classrmnm')" value="{{ $classroom->name ?? "" }}" required>
                        </div>





                        <div class="card-header col-md-12" style="color:gray">
                            <strong>@lang('content.prtnts')</strong>
                        </div>

                        <div class="col-md-12">
                            <br>
                            <div class="row justify-content-center">
                                <div class="col-md-10">
                                    <strong>@lang('content.usnm')</strong>
                                </div>
                                {{-- <a href="#" class="btn btn-secondary  col-md-2">@lang('content.exclude')</a> --}}
                                <div class="col-md-2">
                                    <strong>@lang('content.exclude')</strong>
                                </div>
                            </div>
                            <br>
                            @foreach($includedUsers as $user)
                                <div class="row justify-content-center">
                                    <div class="col-md-11">
                                        {{ $user->name }}
                                    </div>
                                    {{-- <a href="#" class="btn btn-secondary  col-md-2">@lang('content.exclude')</a> --}}
                                    <div class="col-md-1">
                                        <input class="col-md-8" type="checkbox" name="excludedUsers[]" value="{{ $user->id }}">
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <button type="button" class="site-btn-info col-md-3" data-toggle="modal" data-target=".bd-example-modal-lg-users">@lang('content.invus')</button>
                        <div class="modal fade bd-example-modal-lg-users" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-md">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">@lang('content.invus')</h4>

                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>

                                    </div>
                                    <br>

                                    {{-- TODO make search form --}}

                                    @foreach($notIncludedUsers as $NIuser)
                                        <div class="row justify-content-center">
                                            <div class="col-md-8">
                                                {{ $NIuser->name }}
                                            </div>
                                            <a href="{{ route('classroomInvite.create', ['classrom' => $classroom->id, 'user' => $NIuser->id])}}" class="btn btn-secondary col-md-2" >invite</a>
                                        </div>
                                    @endforeach
                                    <br>
                                </div>
                            </div>
                        </div>





                        <div class="card-header col-md-12" style="color:gray">
                            <div class="col-md-6">
                                <strong>@lang('content.inclcour')</strong>
                            </div>

                        </div>

                        <div class="col-md-12">
                            <br>
                            <div class="row justify-content-center">
                                <div class="col-md-10">
                                    <strong>@lang('content.ctitle')</strong>
                                </div>
                                {{-- <a href="#" class="btn btn-secondary  col-md-2">@lang('content.exclude')</a> --}}
                                <div class="col-md-2">
                                    <strong>@lang('content.exclude')</strong>
                                </div>
                            </div>
                            <br>
                            @foreach($includedCourses as $course)
                                <div class="row justify-content-center">
                                    <div class="col-md-11">
                                        {{ $course->title }}
                                    </div>
                                    {{-- <a href="#" class="btn btn-secondary  col-md-2">@lang('content.exclude')</a> --}}
                                    <div class="col-md-1">
                                        <input class="col-md-8" type="checkbox" name="excludedCourses[]" value="{{ $course->id }}">
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <button type="button" class="site-btn-info col-md-3" data-toggle="modal" data-target=".bd-example-modal-sm-courses">@lang('content.includecour')</button>
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
                                            <strong>Course title</strong>
                                        </div>
                                        {{-- <a href="#" class="btn btn-secondary  col-md-2">@lang('content.exclude')</a> --}}
                                        <div class="col-md-3">
                                            <strong>@lang('content.include')</strong>
                                        </div>
                                    </div>
                                    <br>

                                    @foreach($notIncludedCourses as $course)
                                        <div class="row justify-content-center">
                                            <div class="col-md-8">
                                                {{ $course->title }}
                                            </div>
                                            {{-- <a href="#" class="btn btn-secondary  col-md-2">@lang('content.include')</a> --}}
                                            <div class="col-md-3">
                                                <input class="col-md-3" type="checkbox" name="newIncludedCourses[]" value="{{ $course->id }}">
                                            </div>
                                        </div>
                                    @endforeach
                                    <br>
                                </div>
                            </div>
                        </div>







                        <div class="col-md-12">
                            <button class = "site-btn col-md-4" type="submit" value="update">@lang('content.update')<i class="fa fa-angle-right"></i></button>
                        </div>


                    </div>
                </form>
            </div>
        </div>
    </div>
    <br>


</section>


@endsection
