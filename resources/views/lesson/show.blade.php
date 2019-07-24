@extends('layouts.app')

@section('content')

<section class="hero-section set-bg" data-setbg="{{config('static.static')}}/img/bg.jpg" >
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="hero-text text-white">
                <h2>Lesson: {{ $lesson->title }}</h2>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-7" style="color:white">
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
                    <div class="card-header" style="color:darkslategray">
                        <strong>{{ $lesson->excerpt }}</strong>
                    </div>
                    <p class="card-text">{{ $lesson->content_html }}</p>
                    <div class="container">
                        <div class="row justify-content-left" style="background-color:lightgrey">
                            <div class="col-md-4" style="color:green">
                                <strong>{{ $lesson->likes }}</strong> users liked this lesson
                            </div>
                            <div class="col-md-4" style="color:crimson">
                                <strong>{{ $lesson->dislikes }}</strong> users disliked this lesson
                            </div>

                            <div class="col-md-4" style="color:dodgerblue">
                                @if($lesson->is_published)
                                    <strong>Published</strong>
                                @else
                                    Not published
                                @endif
                            </div>
                        </div>
                    </div>
                    <br>
                    <form  onsubmit="if(confirm('Realy delete?')){return true}else{return false}"
                        action="{{ route('lesson.destroy', [$course->id, $lesson->id]) }}" method="post">
                        <input type="hidden" name="_method" value="delete">
                        {{ csrf_field() }}
                        <a href="{{ route('lesson.edit',[$course->id, $lesson->id]) }}" class="site-btn col-md-4">Edit lesson</a>
                        <button type="submit" class="btn btn-danger col-md-4">Delete Lesson</button>
                    </form>

                </div>
            </div>

    </div>
</section>
@endsection
