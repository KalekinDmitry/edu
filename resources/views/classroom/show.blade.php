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
                <div class="card-header" style="color:darkslategray">
                    <strong>Classrom: {{ $classroom->name }}</strong>
                </div>
                <br>
                <form  onsubmit="if(confirm('Realy delete?')){return true}else{return false}"
                    action="{{ route('classroom.destroy', [$classroom->id]) }}" method="post">
                    <input type="hidden" name="_method" value="delete">
                    {{ csrf_field() }}
                    <a href="{{ route('classroom.edit',[$classroom->id]) }}" class="site-btn col-md-4">Edit classroom</a>
                    <button type="submit" class="btn btn-danger col-md-4">Delete Classroom</button>
                </form>
            </div>
        </div>
    </div>

</section>


@endsection
