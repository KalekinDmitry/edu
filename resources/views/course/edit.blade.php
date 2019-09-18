@extends('layouts.app')

@section('content')
    <!-- Edit section -->
    <section class="edit-section set-bg" data-setbg="{{config('static.static')}}/img/bg.jpg" style="background: no-repeat fixed center;">
        <div class="container">
            <br><br><br><br><br><br><br><br><br><br><br><br>
            <div class="card text-white bg-dark">

                <div class="card-header">
                    @lang('content.editing')
                </div>

                <form class="form-horizontal card-body" action="{{route('course.update', $course)}}" method="post"
                      enctype="multipart/form-data">
                    <input type="hidden" name="_method" value="put">
                    {{ csrf_field() }}

                    {{-- Form include --}}
                    @include('course.partials.form')

                    <div class="form-group">
                        <label for="">@lang('content.chcovifch')</label><br>

                        <input type="file" name="image">
                    </div>
                    <input style="color: #000" class="btn btn-light" type="submit" value="To apply">
                    <a style="color: #000" class="btn btn-light" href="{{ route('home') }}">@lang('content.cancel')</a>
                </form>
            </div>
        </div>
        <br>
    </section>
    <!-- Edit section end -->
@endsection