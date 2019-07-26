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
                                <a href="#" class="btn btn-info col-md-4">Add participants</a>
                                <a href="#" class="btn btn-danger col-md-4">Include courses</a>
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
