@extends('layouts.app')

@section('content')

<section class="hero-section set-bg" data-setbg="{{config('static.static')}}/img/bg.jpg" >

    <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="hero-text text-white">
                    <h3>Edit lesson: {{ $lesson->title }}</h3>
                </div>
            </div>
        </div>


    <form class="contact-form" action="{{ route('lesson.update', [$course->id, $lesson->id]) }}" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="put">
        {{ csrf_field() }}
        <div class="row justify-content-center">

                <div class="col-md-7">
                    <input type="text" maxlength="64" name="title" placeholder="Lesson title" value="{{ $lesson->title ?? "" }}" required>
                    <input type="hidden" name="slug" value="{{ $lesson->slug ?? ""}}">
                    <input type="hidden" name="course_id" value="{{ $course->id }}">
                </div>
                <div class="col-md-7">
                    <input type="text"  maxlength="256"  name="excerpt" placeholder="Excerpt" value="{{ $lesson->excerpt ?? "" }}"required>
                </div>
                <div class="col-md-7">
                    <textarea placeholder="Content" name="content_html" required>{{ $lesson->content_html ?? "" }}</textarea>
                </div>

                <div class="col-md-7" >
                    <div class="col-md-4" >
                        <div class="row">
                            <div class="col-md-4">
                                <input name="is_published" type="hidden" value="0">
                                <input  type="checkbox" name="is_published" id="publish" value="1"
                                    @if($lesson->is_published)
                                        checked="checked"
                                    @endif>
                            </div>
                            <div class="col-md-1"  >
                                <label  class="label" for="publish" type="text" style="color:white" ><strong>Publish lesson?</strong></label>
                            </div>
                        </div>
                    </div>
                </div>

            <div class="col-md-7" >
                <button class = "site-btn col-md-4" type="submit" value="update">Update<i class="fa fa-angle-right"></i></button>
            </div>

        </div>
    </form>


</section>



@endsection