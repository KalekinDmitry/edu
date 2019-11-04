@extends('app')

@section('layouts')

    @include('teacher.layouts.sidebar')

    <div class="page-content" id="content">
        @yield('content')
    </div>

@endsection