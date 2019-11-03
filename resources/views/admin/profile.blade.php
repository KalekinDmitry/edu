@extends('admin.layouts.app')

@section('content')

    <body>

    <section id="container" class="">

        <section id="main-content">

            <section class="wrapper">

                @include('admin.profile_components.breadcrumbs')

                @include('admin.profile_components.owninformation')

                @include('admin.profile_components.addpanel')

            </section>

            @include('admin.dashboard_components.licensetext')

        </section>

    </section>

    </body>

@endsection