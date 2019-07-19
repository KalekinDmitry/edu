@extends('layouts.app')

@section('content')
<section class="hero-section set-bg" data-setbg="{{config('static.static')}}/img/bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                    <div class="hero-text text-white">
                    {{-- <div class="card-header">Admin dashboard</div> --}}
                    <h2>Teacher dashboard</h2>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <h3>You are logged in!</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
