@extends('admin.layouts.app')

@section('content')

    <body>

    <section id="container" class="">

        <section id="main-content">

            <section class="wrapper">

                @include('admin.users_list_components.breadcrumbs')

                @include('admin.users_list_components.table')

            </section>

            @include('admin.dashboard_components.licensetext')

        </section>

    </section>

    </body>

@endsection