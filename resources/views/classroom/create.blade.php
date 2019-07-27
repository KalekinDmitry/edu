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
                <div class="card-header" style="color:darkslategray">
                    <strong>Create classroom</strong>
                </div>
                <form class="contact-form" action="{{ route('classroom.store') }}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="teacher_id" value="{{ Auth::user()->id }}">
                    <input type="hidden" name="slug" value="slug">
                    <div class="row justify-content-left">

                        <div class="col-md-12">
                            <label class="col-md-2" for="">Classroom name:</label>
                            <input class="col-md-9" style="background-color:lightgray" type="text" maxlength="64" name="name" placeholder="Classroom name" value="{{ $classroom->name ?? "" }}" required>
                        </div>

                        <div class="col-md-10">



                                <button type="button" class="btn btn-primary col-md-3" data-toggle="modal" data-target=".bd-example-modal-md-users">Invite users</button>
                                <div class="modal fade bd-example-modal-md-users" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel2" aria-hidden="true">
                                    <div class="modal-dialog modal-md">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Invite users</h4>

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
                                                    <a href="#" class="btn btn-secondary col-md-2">invite</a>
                                                </div>
                                            @endforeach
                                            <br>


                                        </div>
                                    </div>
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

                                            @foreach($courses as $course)
                                                <div class="row justify-content-center">
                                                    <div class="col-md-8">
                                                        {{ $course->title }}
                                                    </div>
                                                    {{-- <a href="#" class="btn btn-secondary  col-md-2">include</a> --}}
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
                            <button class = "site-btn col-md-4" type="submit" value="store">Create<i class="fa fa-angle-right"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


</section>


@endsection
