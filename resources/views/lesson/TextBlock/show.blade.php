@extends('layouts.app')

@section('content')

<section class="lesson-section set-bg" data-setbg="{{config('static.static')}}/img/bg.jpg" >
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="hero-text text-white">
                <h2>Step: {{ $textBlock->position }} (text)</h2>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-7 col-sm-9" style="color:white">
            {{-- <div class="container" style="background-color:darkgrey">
                <h3> {{ $lesson->excerpt }}</h3>
            </div>
            <br>
            <div class="container" style="background-color:white">
                <br>
                <h5> {{ $lesson->content_html }}</h5>
                <br>
            </div> --}}

            <div class="card">
                <div class="card-body">
                    <div class="row justify-content-start">
                        <div class="container col-md-8">
                            <div class="row justify-content-center" style="background-color:lightgrey">
                                <pre class="card-text">{{ $textBlock->content}}</pre>
                            </div>
                        </div>
                        <form  class="col-md-4" onsubmit="if(confirm('@lang('content.reallydel')?')){return true}else{return false}"
                            action="{{ route('textBlock.destroy', [$lesson->id, $textBlock->id]) }}" method="post">
                            <input type="hidden" name="_method" value="Delete">
                            {{ csrf_field() }}
                            <a href="{{ route('textBlock.edit',[$lesson->id, $textBlock->id]) }}" class="site-btn-hollow col-md-3">Edit</a>
                            <button type="submit" class="site-btn-danger-sm col-md-3">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
            <br>

    </div>
</section>
@endsection
