@extends('layouts.app')

@section('content')

<section class="lesson-section set-bg" data-setbg="{{config('static.static')}}/img/bg.jpg" >

    <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="hero-text text-white">
                    <h3>Create question</h3>
                </div>
            </div>
        </div>


    <form class="contact-form" action="{{ route('simpleQuestion.store', $taskBlock->id) }}" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="task_block_id" value="{{ $taskBlock->id }}">
        <input type="hidden" name="image_link" value="#">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <input type="text" maxlength="1024" name="text" placeholder="Place question text here"  required>
                <input type="text" maxlength="1024" name="keywords" placeholder="Place keywords here separated with commas"  required>
            </div>
            <div class="col-md-7" >
                <button class = "site-btn col-md-4" type="submit" value="create">Add<i class="fa fa-angle-right"></i></button>
            </div>
        </div>
    </form>
    <br>
</section>

@endsection
