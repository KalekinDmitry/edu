@extends('layouts.app')

@section('content')

    <section class="dashboard-section set-bg" data-setbg="{{config('static.static')}}/img/bg.jpg">
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
            <div class="card col-md-4 col-sm-5">
                <div class="card-body">
                    <div class="card-title" style="color:darkslategray">
                        <strong>Classrooms overview</strong>
                    </div>
                    @foreach($classrooms as $classroom)
                    <br>
                        <div class="card-header col-md-12" style="color:gray">
                            <strong>{{  $classroom->name }}</strong>
                        </div>
                        <form  onsubmit="if(confirm('Realy delete?')){return true}else{return false}"
                            action="{{ route('classroom.destroy', [$classroom->id]) }}" method="post">
                            <input type="hidden" name="_method" value="delete">
                            {{ csrf_field() }}
                            <a href="{{ route('classroom.edit',[$classroom->id]) }}" class="site-btn col-md-6">Edit classroom</a>
                            <button type="submit" class="site-btn-danger col-md-5">Delete </button>

                        </form>
                    @endforeach
                        <br>
                        <a href="{{ route('classroom.create') }}" class="site-btn-info col-md-4">Create new</a>

                </div>
            </div>
            <span>..</span>
            <div class="card col-md-5 col-sm-6">
                <div class="card-body">
                    <div class="card-title" style="color:darkslategray">
                        <strong>Courses overview</strong>
                    </div>
                    @foreach($courses as $course)
                    <br>
                        <div class="card-header col-md-12" style="color:gray">
                            <strong>{{  $course->title }}</strong>
                        </div>
                        <form  onsubmit="if(confirm('Realy delete?')){return true}else{return false}"
                            action="{{ route('course.destroy', [$course->id]) }}" method="post">
                            <input type="hidden" name="_method" value="delete">
                            {{ csrf_field() }}
                            <a href="{{ route('course.edit',[$course->id]) }}" class="site-btn col-md-4">Edit course</a>
                            <a href="{{ route('course.show',[$course->id]) }}" class="site-btn-info col-md-4">Look</a>
                            <button type="submit" class="site-btn-danger col-md-4">Delete course</button>

                        </form>
                    @endforeach
                        <br>
                        <a href="{{ route('course.create') }}" class="site-btn-info col-md-3">Create new</a>

                </div>
            </div>


        </div>
        <br>

    </section>
@endsection
