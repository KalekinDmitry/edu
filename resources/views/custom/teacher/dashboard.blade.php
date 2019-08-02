@extends('layouts.app')

@section('content')

    <section class="hero-section set-bg" data-setbg="{{config('static.static')}}/img/bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <div class="hero-text text-white">
                        {{-- <div class="card-header">@lang('content.tchdash')</div> --}}
                        <h2>@lang('content.tchdash')</h2>
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <h3>@lang('content.logntf')!</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="card col-md-3">
                <div class="card-body">
                    <div class="card-title" style="color:darkslategray">
                        <strong>Classrooms overview</strong>
                    </div>
                    @foreach($classrooms as $classroom)
                        <div class="card-header col-md-12" style="color:gray">
                            <strong>{{  $classroom->name }}</strong>
                        </div>
                        <form  onsubmit="if(confirm('Realy delete?')){return true}else{return false}"
                            action="{{ route('classroom.destroy', [$classroom->id]) }}" method="post">
                            <input type="hidden" name="_method" value="delete">
                            {{ csrf_field() }}
                            <a href="{{ route('classroom.edit',[$classroom->id]) }}" class="site-btn col-md-4">Edit classroom</a>
                            <button type="submit" class="btn btn-danger col-md-4">Delete </button>

                        </form>
                    @endforeach
                        <br>
                        <a href="{{ route('classroom.create') }}" class="btn btn-info col-md-4">Create new</a>

                </div>
            </div>
            <span>..</span>
            <div class="card col-md-5">
                <div class="card-body">
                    <div class="card-title" style="color:darkslategray">
                        <strong>Courses overview</strong>
                    </div>
                    @foreach($courses as $course)
                        <div class="card-header col-md-12" style="color:gray">
                            <strong>{{  $course->title }}</strong>
                        </div>
                        <form  onsubmit="if(confirm('Realy delete?')){return true}else{return false}"
                            action="{{ route('course.destroy', [$course->id]) }}" method="post">
                            <input type="hidden" name="_method" value="delete">
                            {{ csrf_field() }}
                            <a href="{{ route('course.edit',[$course->id]) }}" class="site-btn col-md-4">Edit course</a>
                            <button type="submit" class="btn btn-danger col-md-4">Delete course</button>

                        </form>
                    @endforeach
                        <br>
                        <a href="{{ route('course.create') }}" class="btn btn-info col-md-4">Create new</a>

                </div>
            </div>


        </div>

    </section>
@endsection
