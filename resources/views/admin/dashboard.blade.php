@extends('admin.layouts.app')

@section('content')
    <body>
    <section id="container" class="">
        <section id="main-content">
            <section class="wrapper">
                @include('admin.dashboard_components.breadcrumbs')

                @include('admin.dashboard_components.statusbar')

                @include('admin.dashboard_components.firstline')

                @include('admin.dashboard_components.secondline')

                @include('admin.dashboard_components.adminchat')

                @include('admin.dashboard_components.calendar')

            </section>
            @include('admin.dashboard_components.licensetext')
        </section>
    </section>
    </body>
@endsection