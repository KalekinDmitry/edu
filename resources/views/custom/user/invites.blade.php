@extends('layouts.app')

@section('content')

<section class="invites-section set-bg" data-setbg="{{config('static.static')}}/img/bg.jpg" >

    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="hero-text text-white">
                {{-- <h3>@lang('content.edclass'): {{ $classroom->name }}</h3> --}}
                <h3> @lang('content.invs') </h3>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-7 col-sm-10">
            @foreach($invites as $invite)
            <div class="card">
                <div class="card-body">
                    <div class="card-header" style="color:darkslategray">
                        <strong>{{ $invite->message_title }}</strong>
                    </div>
                    <p class="card-text">{{ $invite->message_text }}</p>
                    <div class="row">
                        <form action="{{ route('classroom.update', [$invite->classroom_id]) }}" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_method" value="put">
                            <input type="hidden" name="newIncludedUsers[]" value="{{ Auth::user()->id }}">
                            {{ csrf_field() }}
                            <button class = "site-btn col-md-12" type="submit" value="update">@lang('content.flw')<i class="fa fa-angle-right"></i></button>
                        </form>
                        <form  onsubmit="if(confirm('Realy delete?')){return true}else{return false}"
                            action="{{ route('classroomInvite.destroy', ['classroom' => $invite->classroom_id, 'user' => $invite->user_id, 'invite' => $invite->id]) }}" method="post">
                            <input type="hidden" name="_method" value="delete">
                            {{ csrf_field() }}
                            <button type="submit" class="site-btn-danger col-md-12">@lang('content.del')</button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <br>
</section>

@endsection
