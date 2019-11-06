@extends('app')

@section('layouts')

    @include('teacher.layouts.sidebar')


    <div class="page-content" id="content">
        @include('teacher.layouts.header')

        <div class="p-3">
            @yield('content')
        </div>
    </div>

@endsection