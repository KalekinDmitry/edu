@extends('layouts.app')

@section('content')

<section class="hero-section set-bg" data-setbg="{{config('static.static')}}/img/bg.jpg" >
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="hero-text text-white">
                {{-- <h4></h4> --}}
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="card col-md-6">
            <div class="card-body">
                <div class="card-title" style="color:darkslategray">
                    <strong>Classrom: {{ $classroom->name }}</strong>
                </div>
                <div class="card-header" style="color:gray">
                    <strong>Participants</strong>
                </div>
                <ul classs="list-group list-group-flush">
                    @foreach($users as $user)
                            <li class="list-group-item">{{ $user->name}}</li>
                    @endforeach
                </ul>
                <div class="card-header" style="color:gray">
                    <strong>Included courses</strong>
                </div>
                <ul classs="list-group list-group-flush">
                    @foreach($courses as $course)
                            <li class="list-group-item">{{ $course->title }}</li>
                    @endforeach
                </ul>
                <form  onsubmit="if(confirm('Realy delete?')){return true}else{return false}"
                    action="{{ route('classroom.destroy', [$classroom->id]) }}" method="post">
                    <input type="hidden" name="_method" value="delete">
                    {{ csrf_field() }}
                    <a href="{{ route('classroom.edit',[$classroom->id]) }}" class="site-btn col-md-4">Edit classroom</a>
                    <button type="submit" class="btn btn-danger col-md-4">Delete Classroom</button>

                </form>
                <br>
            </div>
        </div>
    </div>

</section>


@endsection
