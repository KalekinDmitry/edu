@extends('app')

@section('layouts')

    @include('student.layouts.sidebar')

    <div class="page-content" id="content">
        @yield('content')
    </div>

@endsection
