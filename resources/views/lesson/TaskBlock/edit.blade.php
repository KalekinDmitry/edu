@extends('layouts.app')

@section('content')

<section class="lesson-section set-bg" data-setbg="{{config('static.static')}}/img/bg.jpg" >

    <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="hero-text text-white">
                    <h3>@lang('content.edles'): {{ $lesson->title }}</h3>
                </div>
            </div>
        </div>


    <form class="contact-form" action="{{ route('lesson.update', [$module->id, $lesson->id]) }}" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="put">
        {{ csrf_field() }}
        <div class="row justify-content-center">
                <div class="col-md-7">
                    <input type="text" maxlength="64" name="title" placeholder="@lang('content.ltitle')" value="{{ $lesson->title ?? "" }}" required>
                    <input type="hidden" name="slug" value="{{ $lesson->slug ?? ""}}">
                    <input type="hidden" name="module_id" value="{{ $module->id }}">
                </div>
                <div class="col-md-7">
                    <input type="text"  maxlength="256"  name="excerpt" placeholder="@lang('content.excerpt')" value="{{ $lesson->excerpt ?? "" }}"required>
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
                                <label  class="label" for="publish" type="text" style="color:white" ><strong>@lang('content.pl')?</strong></label>
                            </div>
                        </div>
                    </div>
                </div>

            <div class="col-md-7" >
                <button class = "site-btn col-md-4" type="submit" value="update">@lang('content.update')<i class="fa fa-angle-right"></i></button>
            </div>

        </div>
    </form>
    <br>


</section>



@endsection
