@extends('layouts.app')

@section('content')

<section class="hero-section set-bg" data-setbg="{{config('static.static')}}/img/bg.jpg" >

    <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="hero-text text-white">
                    {{-- <h3>Edit classroom: {{ $classroom->name }}</h3> --}}
                </div>
            </div>
        </div>

    <div class="row justify-content-center">
        <div class="card col-md-6">
            <div class="card-body">
                <div class="card-title" style="color:darkslategray">
                    <strong>Edit classrom: {{ $classroom->name }}</strong>
                </div>
                <form class="contact-form" action="{{ route('classroom.update', [$classroom->id]) }}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_method" value="put">
                    {{ csrf_field() }}
                    <div class="row justify-content-end">

                        <div class="col-md-12">
                            <label class="col-md-2" for="">Classroom name:</label>
                            <input class="col-md-9" style="background-color:lightgray" type="text" maxlength="64" name="name" placeholder="Classroom name" value="{{ $classroom->name ?? "" }}" required>
                        </div>





                        <div class="card-header col-md-12" style="color:gray">
                            <strong>Participants</strong>
                        </div>

                        <div class="col-md-12">
                            <br>
                            <div class="row justify-content-center">
                                <div class="col-md-10">
                                    <strong>User name</strong>
                                </div>
                                {{-- <a href="#" class="btn btn-secondary  col-md-2">exclude</a> --}}
                                <div class="col-md-2">
                                    <strong>Exclude</strong>
                                </div>
                            </div>
                            <br>
                            @foreach($includedUsers as $user)
                                <div class="row justify-content-center">
                                    <div class="col-md-11">
                                        {{ $user->name }}
                                    </div>
                                    {{-- <a href="#" class="btn btn-secondary  col-md-2">exclude</a> --}}
                                    <div class="col-md-1">
                                        <input class="col-md-8" type="checkbox" name="excludedUsers[]" value="{{ $user->id }}">
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <button type="button" class="btn btn-primary col-md-3" data-toggle="modal" data-target=".bd-example-modal-lg-users">Invite users</button>
                        <div class="modal fade bd-example-modal-lg-users" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-md">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Invite users</h4>

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
                                <strong>Included courses</strong>
                            </div>

                        </div>

                        <div class="col-md-12">
                            <br>
                            <div class="row justify-content-center">
                                <div class="col-md-10">
                                    <strong>Course title</strong>
                                </div>
                                {{-- <a href="#" class="btn btn-secondary  col-md-2">exclude</a> --}}
                                <div class="col-md-2">
                                    <strong>Exclude</strong>
                                </div>
                            </div>
                            <br>
                            @foreach($includedCourses as $course)
                                <div class="row justify-content-center">
                                    <div class="col-md-11">
                                        {{ $course->title }}
                                    </div>
                                    {{-- <a href="#" class="btn btn-secondary  col-md-2">exclude</a> --}}
                                    <div class="col-md-1">
                                        <input class="col-md-8" type="checkbox" name="excludedCourses[]" value="{{ $course->id }}">
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <button type="button" class="btn btn-primary col-md-3" data-toggle="modal" data-target=".bd-example-modal-sm-courses">Include courses</button>
                        <div class="modal fade bd-example-modal-sm-courses" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel2" aria-hidden="true">
                            <div class="modal-dialog modal-md">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Include courses</h4>

                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <br>
                                    <div class="row justify-content-center">
                                        <div class="col-md-8">
                                            <strong>Course title</strong>
                                        </div>
                                        {{-- <a href="#" class="btn btn-secondary  col-md-2">exclude</a> --}}
                                        <div class="col-md-3">
                                            <strong>Include</strong>
                                        </div>
                                    </div>
                                    <br>

                                    @foreach($notIncludedCourses as $course)
                                        <div class="row justify-content-center">
                                            <div class="col-md-8">
                                                {{ $course->title }}
                                            </div>
                                            {{-- <a href="#" class="btn btn-secondary  col-md-2">include</a> --}}
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
                            <button class = "site-btn col-md-4" type="submit" value="update">Update<i class="fa fa-angle-right"></i></button>
                        </div>


                    </div>
                </form>
            </div>
        </div>
    </div>


</section>


@endsection
