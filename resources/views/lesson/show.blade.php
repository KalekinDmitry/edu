@extends('layouts.app')

@section('content')

<section class="hero-section set-bg" data-setbg="{{config('static.static')}}/img/bg.jpg" >
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                    <div class="hero-text text-white">
                    {{-- <div class="card-header">Admin dashboard</div> --}}
                    <h2>Show lesson view</h2>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
