@extends('layouts.app')

@section('content')
    <!-- Create section -->
    <section class="create-section set-bg" data-setbg="{{config('static.static')}}/img/bg.jpg" style="background: no-repeat fixed center;">
        <div class="container">
            <br><br><br><br><br><br><br><br><br><br><br><br>
            <div class="card text-white bg-dark">

                <div class="card-header">
                    @lang('content.creature')
                </div>

                <form class="form-horizontal card-body" action="{{route('course.store')}}" method="post"
                      enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    {{-- Form include --}}
                    @include('course.partials.form')

                    <div class="form-group">
                        <label for="">@lang('content.choosecrscover')</label><br>

                        <input type="file" name="image">
                    </div>

                    <input style="color:#000" class="btn btn-light" type="submit" value="Create">

                </form>
            </div>
        </div>
        <br>
    </section>
    <!-- Create section end -->
@endsection