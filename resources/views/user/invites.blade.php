@extends('layouts.app')

@section('content')

<section class="hero-section set-bg" data-setbg="{{config('static.static')}}/img/bg.jpg" >

    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="hero-text text-white">
                {{-- <h3>Edit classroom: {{ $classroom->name }}</h3> --}}
                <h3> Invites </h3>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-6">
            @foreach($invites as $invite)
            <div class="card">
                <div class="card-body">
                    <div class="card-header" style="color:darkslategray">
                        <strong>{{ $invite->message_title }}</strong>
                    </div>
                    <p class="card-text">{{ $invite->message_text }}</p>
                    <form class="contact-form" action="{{ route('classroom.update', [$invite->classroom_id]) }}" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_method" value="put">
                        <input type="hidden" name="newIncludedUsers[]" value="{{ Auth::user()->id }}">
                        {{ csrf_field() }}
                        <button class = "site-btn col-md-4" type="submit" value="update">Follow<i class="fa fa-angle-right"></i></button>
                    </form>
                    <form  onsubmit="if(confirm('Realy delete?')){return true}else{return false}"
                        action="{{ route('classroomInvite.destroy', ['classroom' => $invite->classroom_id, 'user' => $invite->user_id, 'invite' => $invite->id]) }}" method="post">
                        <input type="hidden" name="_method" value="delete">
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger col-md-4">Delete</button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
    </div>




</section>

@endsection
