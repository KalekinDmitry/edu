@extends('layouts.app')

@section('content')

<section class="invite-section set-bg" data-setbg="{{config('static.static')}}/img/bg.jpg" >

    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="hero-text text-white">
                {{-- <h3>Edit classroom: {{ $classroom->name }}</h3> --}}
                <h3> Invite user {{ $user->name }} to the classroom {{ $classroom->name }}</h3>
            </div>
        </div>
    </div>

    <form class="contact-form" action="{{ route('classroomInvite.store', ['classroom' => $classroom->id, 'user'=>$user->id]) }}" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="classroom_id" value="{{ $classroom->id }}">
        <input type="hidden" name="user_id" value = "{{ $user->id }}">
        <input type="hidden" name="title_slug" value="title slug">
        <div class="row justify-content-center">

            <div class="col-md-8">
                <input  style="background-color:lightgray" type="text" maxlength="64" name="message_title" placeholder="Message title" value="" required>
            </div>

            <div class="col-md-8">
                <textarea placeholder="Message text" name="message_text"  value="message text" required></textarea>
            </div>

            <br><br><br>
            <div class="col-md-8">
                <button class = "site-btn col-md-4" type="submit" value="store">Invite<i class="fa fa-angle-right"></i></button>
            </div>
        </div>
    </form>
    <br>


</section>


@endsection
