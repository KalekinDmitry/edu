@extends('layouts.app')

@section('content')

<section class="hero-section set-bg" data-setbg="{{config('static.static')}}/img/bg.jpg" >

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-3">
                <div class="hero-text text-white">
                    <h3>Create lesson</h3>
                </div>
            </div>
        </div>
    </div>


    <form class="contact-form" action="{{ route('lesson.store', $course->id) }}" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="row justify-content-center">

                @include('lesson.includes.lesson_form')

            <div class="col-md-7" >
                <button class = "site-btn col-md-4" type="submit" value="create">Create<i class="fa fa-angle-right"></i></button>
            </div>

        </div>
    </form>


</section>



@endsection
