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
                    <strong>Eddit classrom: {{ $classroom->name }}</strong>
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
                            @foreach($classroom->users()->get() as $user)
                                <div class="row justify-content-center">
                                    <div class="col-md-10">
                                        {{ $user->name }}
                                    </div>
                                    <a href="#" class="btn btn-dark col-md-2">exclude</a>
                                </div>
                            @endforeach
                        </div>

                        <a href="#" class="btn btn-info col-md-3">Add participants</a>

                        <div class="card-header col-md-12" style="color:gray">
                            <strong>Included courses</strong>
                        </div>

                        <div class="col-md-12">
                            @foreach($classroom->courses()->get() as $course)
                                <div class="row justify-content-center">
                                    <div class="col-md-10">
                                        {{ $course->title }}
                                    </div>
                                    <a href="#" class="btn btn-dark col-md-2">exclude</a>
                                </div>
                            @endforeach
                        </div>

                        <a href="#" class="btn btn-danger col-md-3">Include courses</a>



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
