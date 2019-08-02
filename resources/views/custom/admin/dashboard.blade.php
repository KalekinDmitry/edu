@extends('custom.admin.layouts.app')

@section('content')

    <body>

    <section id="container" class="">

        <section id="main-content">

            <section class="wrapper">

                @include('custom.admin.includes.breadcrumbs')

                @include('custom.admin.includes.statusbar')

                @include('custom.admin.includes.firstline')

                @include('custom.admin.includes.secondline')

                @include('custom.admin.includes.adminchat')

                @include('custom.admin.includes.calendar')

            </section>

            @include('custom.admin.includes.licensetext')

        </section>

    </section>

    </body>

@endsection