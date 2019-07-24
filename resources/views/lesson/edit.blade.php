@extends('layouts.app')

@section('content')

<section class="hero-section set-bg" data-setbg="{{config('static.static')}}/img/bg.jpg" >

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-3">
                <div class="hero-text text-white">
                    <h3>Edit lesson</h3>
                </div>
            </div>
        </div>
    </div>


    <form class="contact-form" action="{{ route('lesson.update', [$course->id, $lesson->id]) }}" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="put">
        {{ csrf_field() }}
        <div class="row justify-content-center">

                @include('lesson.includes.lesson_form')

            <div class="col-md-7" >
                <button class = "site-btn col-md-4" type="submit" value="update">Update<i class="fa fa-angle-right"></i></button>
            </div>

        </div>
    </form>


</section>



@endsection
