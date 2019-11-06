@extends('app')

@section('layouts')

    @include('student.layouts.sidebar')

    <div class="page-content" id="content">
        @include('student.layouts.header')

        <div class="p-3">
            @yield('content')
        </div>
    </div>

@endsection
