@extends('layouts.app')

@section('content')

<section class="lesson-section set-bg" data-setbg="{{config('static.static')}}/img/bg.jpg" >
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="hero-text text-white">
                <h2>Test question</h2>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        {{-- <div class="container" style="background-color:darkgrey">
            <h3> {{ $lesson->excerpt }}</h3>
        </div>
        <br>
        <div class="container" style="background-color:white">
            <br>
            <h5> {{ $lesson->content_html }}</h5>
            <br>
        </div> --}}

        <div class="card col-md-10">
            <div class="card-body">
                <div class="card-header" style="color:darkslategray">
                    <strong>Question text:  {{ $testQuestion->text }}</strong>
                </div>
                <br>
                <form  onsubmit="if(confirm('@lang('content.reallydel')?')){return true}else{return false}"
                    action="{{ route('testQuestion.destroy', [$taskBlock->id, $testQuestion->id]) }}" method="post">
                    <input type="hidden" name="_method" value="Delete">
                    {{ csrf_field() }}
                    <a href="{{ route('testQuestion.edit',[$taskBlock->id, $testQuestion->id]) }}" class="site-btn col-md-4">Edit</a>
                    <button type="submit" class="site-btn-danger col-md-4">Delete</button>
                </form>

            </div>
        </div>
    </div>
</section>
@endsection
